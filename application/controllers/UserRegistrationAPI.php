<?php
defined('BASEPATH') or exit('No direct script access allowed');
class UserRegistrationAPI extends CI_Controller
{
    public $loggedInUser;
    public $data;
    public $site_title = SITE_TITLE;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('common_model');
        $this->load->library('session');
        // $this->load->library('email');
        //$this->load->library('database');
        $this->load->helper('url');
        $this->load->helper('common');
        $this->load->library('form_validation');
        $this->form_validation->set_message('is_natural', 'Only numeric values are allowed in %s.');
        $this->form_validation->set_message('required', 'Please enter %s.');
        $this->form_validation->set_message('valid_email', 'Please enter a valid %s.');
        $method = $this->router->fetch_method();
        $class = $this->router->fetch_class();
        $this->loggedInUser = $this->session->userdata('admin');

        $this->data['page_method'] = $method;
        $this->data['class'] = $class;
        $this->data['is_404'] = FALSE;
        $this->data['site_title'] = $this->site_title;
        $this->data['session_data'] = $this->loggedInUser;
    }
    public function index()
    { // Empty
    }
    protected function cleanPostValue($value)
    {
        return trim($value);
    }

    public function addNewUser()
    {
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('mobile_number', 'Phone Number', 'trim|required');
        $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'trim|required');

        if ($this->form_validation->run()) {
            $info = posted_fields($_POST);
           
            if ($info['password'] === $info['confirmpassword']) {

              
                $where = 'email = "' . $info['email'] . '"';
                $this->data['users_data'] = $this->common_model->getTableData('employees', '*', $where);

                if (count($this->data['users_data']) == 0) {

                    $where = 'mobile_number = "' . $info['mobile_number'] . '"';
                    $this->data['users_data'] = $this->common_model->getTableData('employees', '*', $where);

                    if (count($this->data['users_data']) == 0) {

                        $total_users = $this->db->query("SELECT id as total_users from employees order by id DESC limit 1")->result_array();

                        if (isset($total_users) && !empty($total_users)) {
                            $total_users_variable = $total_users[0]['total_users'];
                            if ($total_users_variable == 0) {
                                $total_users_variable = "1";
                            } else {
                                $total_users_variable++;
                            }
                        } else {
                            $total_users_variable = "1";
                        }
                        if (count($this->data['users_data']) == 0) {
                            unset($info['confirmpassword']);
                            $info['password_string'] = $info['password'];
                            if ($total_users_variable < 10) {
                                $info['reference_code'] = "EMP/00" . $total_users_variable;
                            }
                            if ($total_users_variable >= 10 && $total_users_variable < 99) {
                                $info['reference_code'] = "EMP/0" . $total_users_variable;
                            }
                            if ($total_users_variable > 99 && $total_users_variable < 999) {
                                $info['reference_code'] = "EMP/" . $total_users_variable;
                            }
                            $OTP_VAR = $this->randomOtp();
                            $emailResponse = "Email Sent";
                            if ($emailResponse == "Email Sent") {
                                $info['password'] = password_hash(trim($this->input->post('password')), PASSWORD_BCRYPT);
                                $info['OTP'] = $OTP_VAR;
                                $info['status'] = "1";
                                $info['added_on'] = date('Y-m-d H:i:s');
                                $this->common_model->insert_data($info, 'employees');
                                $this->session->set_userdata('registration', $info);

                                $data['message'] = 'Registration successful please verify your email account.';
                                $data['success'] = TRUE;
                                $this->output->set_output(json_encode($data));
                            } else {
                                $data['message'] = 'Some problem occured please try again later.';
                                $data['success'] = FALSE;
                                $this->output->set_output(json_encode($data));
                            }
                        } else {
                            $data['message'] = 'FALSE';
                            $data['success'] = FALSE;
                            $this->output->set_output(json_encode($data));
                        }
                    } else {
                        $data['message'] = 'This phone number already exists please try again.';
                        $data['success'] = FALSE;
                        $this->output->set_output(json_encode($data));
                    }
                } else {
                    $data['message'] = 'This email already exists please try again.';
                    $data['success'] = FALSE;
                    $this->output->set_output(json_encode($data));
                }
            } else {
                $data['message'] = 'The password you entered does not match please try again.';
                $data['success'] = FALSE;
                $this->output->set_output(json_encode($data));
            }
        } else {
            if (!empty($_POST)) {
                $i = 0;
                foreach ($_POST as $key => $value) {
                    $data['errors'][$i]['error'] = strip_tags(form_error($key));
                    $data['errors'][$i]['field'] = $key;
                    $i++;
                }
            }
        }
    }
    public function addNewUser_byadmin()
    {
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('mobile_number', 'Phone Number', 'trim|required');
        $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');


        if ($this->form_validation->run()) {

            $info = posted_fields($_POST);
           


            $where = 'email = "' . $info['email'] . '"';
            $this->data['users_data'] = $this->common_model->getTableData('employees', '*', $where);

            if (count($this->data['users_data']) == 0) {

                $where = 'mobile_number = "' . $info['mobile_number'] . '"';
                $this->data['users_data'] = $this->common_model->getTableData('employees', '*', $where);

                if (count($this->data['users_data']) == 0) {

                    $total_users = $this->db->query("SELECT id as total_users from employees order by id DESC limit 1")->result_array();

                    if (isset($total_users) && !empty($total_users)) {
                        $total_users_variable = $total_users[0]['total_users'];
                        if ($total_users_variable == 0) {
                            $total_users_variable = "1";
                        } else {
                            $total_users_variable++;
                        }
                    } else {
                        $total_users_variable = "1";
                    }
                    if (count($this->data['users_data']) == 0) {
                        unset($info['confirmpassword']);
                        $info['password_string'] = $info['password'];
                        if ($total_users_variable < 10) {
                            $info['reference_code'] = "EMP/00" . $total_users_variable;
                        }
                        if ($total_users_variable >= 10 && $total_users_variable < 99) {
                            $info['reference_code'] = "EMP/0" . $total_users_variable;
                        }
                        if ($total_users_variable > 99 && $total_users_variable < 999) {
                            $info['reference_code'] = "EMP/" . $total_users_variable;
                        }
                        $OTP_VAR = $this->randomOtp();
                        $emailResponse = "Email Sent";
                        if ($emailResponse == "Email Sent") {
                            $info['password'] = password_hash(trim($this->input->post('password')), PASSWORD_BCRYPT);
                            $info['OTP'] = $OTP_VAR;
                            $info['status'] = "2";
                            $info['added_on'] = date('Y-m-d H:i:s');
                            $this->common_model->insert_data($info, 'employees');
                            $this->session->set_userdata('registration', $info);


                             // Saving Logs
                            $logs['reference_code']='Admin';
                            $logs['action']='Added New user';
                            $logs['status']='Success';
                            $this->common_model->insert_data($logs, 'logs');

                            $data['message'] = 'Registration successful.';
                            $data['success'] = TRUE;
                            $this->output->set_output(json_encode($data));
                        } else {
                            $data['message'] = 'Some problem occured please try again later.';
                            $data['success'] = FALSE;
                            $this->output->set_output(json_encode($data));
                        }
                    } else {
                        $data['message'] = 'FALSE';
                        $data['success'] = FALSE;
                        $this->output->set_output(json_encode($data));
                    }
                } else {
                    $data['message'] = 'This phone number already exists please try again.';
                    $data['success'] = FALSE;
                    $this->output->set_output(json_encode($data));
                }
            } else {
                $data['message'] = 'This email already exists please try again.';
                $data['success'] = FALSE;
                $this->output->set_output(json_encode($data));
            }

        } else {
            if (!empty($_POST)) {
                $i = 0;
                foreach ($_POST as $key => $value) {
                    $data['errors'][$i]['error'] = strip_tags(form_error($key));
                    $data['errors'][$i]['field'] = $key;
                    $i++;
                }
            }
        }
    }
    public function addNewdepaerment_byadmin()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('description', ' Description', 'trim|required');



        if ($this->form_validation->run()) {
            $info = posted_fields($_POST);
           


            $where = 'name = "' . $info['name'] . '"';
            $this->data['users_data'] = $this->common_model->getTableData('departments', '*', $where);

            if (count($this->data['users_data']) == 0) {


                $this->common_model->insert_data($info, 'departments');

                // Saving Logs
                $logs['reference_code']='Admin';
                $logs['action']='Added New Department';
                $logs['status']='Success';
                $this->common_model->insert_data($logs, 'logs');

                $data['message'] = 'Registration successful.';
                $data['success'] = TRUE;
                $this->output->set_output(json_encode($data));

            } else {
                $data['message'] = 'This department already exists please try again.';
                $data['success'] = FALSE;
                $this->output->set_output(json_encode($data));
            }

        } else {
            if (!empty($_POST)) {
                $i = 0;
                foreach ($_POST as $key => $value) {
                    $data['errors'][$i]['error'] = strip_tags(form_error($key));
                    $data['errors'][$i]['field'] = $key;
                    $i++;
                }
            }
        }
    }
    public function loginUser()
    {

        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run()) {
            $email = $this->cleanPostValue($this->input->post('email'));
            $password = $this->cleanPostValue($this->input->post('password'));
            $where = 'email = "' . $email . '"';
            $user_info = $this->common_model->getTableData('employees', '*', $where);
            if (count($user_info) == 1) {
                $row = $user_info[0];
                //   echo '<pre>'; print_r($row); die();
                if ($row->status != "100") {
                    if ($row->status != "1") {
                        if (password_verify($password, $row->password)) {
                            if ($row->profile_status == "0") {
                                // echo "CustomError" ; die();
                                $user_name = $row->firstname . " " . $row->lastname;
                                $newdata = array(
                                    'user_id' => $row->id,
                                    'reference_code' => $row->reference_code,
                                    'name' => $user_name,
                                    'email' => $row->email,
                                    'status' => $row->status,
                                    'verification_token' => uniqid() . $row->reference_code,

                                    'mobile' => $row->mobile_number,
                                    'loggedin' => TRUE
                                );
                                $this->session->set_userdata('admin', $newdata);

                                // Saving Logs
                                $logs['reference_code']=$row->reference_code;
                                $logs['action']='Logged In';
                                $logs['status']='Success';
                                $this->common_model->insert_data($logs, 'logs');

                                $data['message'] = 'Logged in Successfully.';
                                $data['success'] = TRUE;
                                $this->output->set_output(json_encode($data));
                            } else {
                                $data['message'] = 'Your account has been temporarily blocked.';
                                $data['success'] = FALSE;
                                $this->output->set_output(json_encode($data));
                            }
                        } else {
                            $data['message'] = 'The Email/Password you provided is invalid.';
                            $data['success'] = FALSE;
                            $this->output->set_output(json_encode($data));
                        }
                    } else {
                        $data['message'] = 'Your OTP verification is pending. Please verify your OTP first.';
                        $data['success'] = FALSE;
                        $this->output->set_output(json_encode($data));
                    }
                } else {
                    $data['message'] = 'Your account has either been deleted or restricted. Please contact shehendi for more information.';
                    $data['success'] = FALSE;
                    $this->output->set_output(json_encode($data));
                }
            } else {
                $data['message'] = 'The Email/Password you provided is invalid.';
                $data['success'] = FALSE;
                $this->output->set_output(json_encode($data));
            }
        } else {
            if (!empty($_POST)) {
                $i = 0;
                foreach ($_POST as $key => $value) {
                    $data['errors'][$i]['error'] = strip_tags(form_error($key));
                    $data['errors'][$i]['field'] = $key;
                    $i++;
                }
            }
            $data['success'] = FALSE;
            $this->output->set_output(json_encode($data));
        }
    }
    public function admin_loginUser()
    {

        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run()) {
            $email = $this->cleanPostValue($this->input->post('email'));
            $password = $this->cleanPostValue($this->input->post('password'));
            $where = 'email = "' . $email . '"';
            $user_info = $this->common_model->getTableData('admin', '*', $where);
            //   echo '<pre>'; print_r($row); die();
            if (count($user_info) == 1) {
                $row = $user_info[0];
                if ($row->status != "100") {

                    if (password_verify($password, $row->password)) {

                        // // echo "CustomError" ; die();

                        // $newdata = array(
                        //     'user_id' => $row->id,
                        //     'email' => $row->email,
                        //     'status' => $row->status,
                        //     'loggedin' => TRUE
                        // );
                        // $this->session->set_userdata('admin_data', $newdata);

                         // Saving Logs
                         $logs['reference_code']="Admin";
                         $logs['action']='Logged In';
                         $logs['status']='Success';
                         $this->common_model->insert_data($logs, 'logs');


                        $data['message'] = 'Logged in Successfully.';
                        $data['success'] = TRUE;
                        $this->output->set_output(json_encode($data));

                    } else {
                        $data['message'] = 'The Email/Password you provided is invalid.';
                        $data['success'] = FALSE;
                        $this->output->set_output(json_encode($data));
                    }

                } else {
                    $data['message'] = 'Your account has either been deleted or restricted. Please contact shehendi for more information.';
                    $data['success'] = FALSE;
                    $this->output->set_output(json_encode($data));
                }
            } else {
                $data['message'] = 'The Email/Password you provided is invalid.';
                $data['success'] = FALSE;
                $this->output->set_output(json_encode($data));
            }
        } else {
            if (!empty($_POST)) {
                $i = 0;
                foreach ($_POST as $key => $value) {
                    $data['errors'][$i]['error'] = strip_tags(form_error($key));
                    $data['errors'][$i]['field'] = $key;
                    $i++;
                }
            }
            $data['success'] = FALSE;
            $this->output->set_output(json_encode($data));
        }
    }
    public function otpVerification()
    {
        $this->data['email'] = $this->session->userdata['registration']['email'];
        $this->data['page_title'] = "OTP Verification | Spot Less Hair";
        $this->load->view('WebsiteViewFiles/RegistrationPages/otpVerification', $this->data);
    }
    public function verifyUserSignupOtp()
    {
        $this->form_validation->set_rules('otp', 'OTP', 'trim|required');
        if ($this->form_validation->run()) {
            $info = posted_fields($_POST);
            //            echo '<pre>'; print_r($_POST); die();
            if (!empty($info['email'])) {
                $where = 'email = "' . $info['email'] . '" AND otp = "' . $info['otp'] . '"';
                $user_info = $this->common_model->getTableData('employees', '*', $where);
                if (count($user_info) == 1) {
                    $update['status'] = "2";
                    $where = 'email = "' . $info['email'] . '"';
                    $this->common_model->update_data($update, 'employees', $where);

                    
                    $data['message'] = 'OTP verified successfully.';
                    $data['success'] = TRUE;
                    $this->output->set_output(json_encode($data));
                } else {
                    $data['message'] = 'The provided otp is invalid.';
                    $data['success'] = FALSE;
                    $this->output->set_output(json_encode($data));
                }
            } else {
                $data['message'] = 'Some Problem occurred please try again later.';
                $data['success'] = FALSE;
                $this->output->set_output(json_encode($data));
            }
        } else {
            if (!empty($_POST)) {
                $i = 0;
                foreach ($_POST as $key => $value) {
                    $data['errors'][$i]['error'] = strip_tags(form_error($key));
                    $data['errors'][$i]['field'] = $key;
                    $i++;
                }
            }
            $data['success'] = FALSE;
            $this->output->set_output(json_encode($data));
        }
    }

    public function forgetVerifyUser()
    {

        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        if ($this->form_validation->run()) {
            $info = posted_fields($_POST);
            $where = 'email = "' . $_POST['email'] . '" ';
            $user_info = $this->common_model->getTableData('employees', '*', $where);

            if (isset($user_info) && !empty($user_info) && count($user_info) > 0) {
                $user_info = $user_info[0];
                if ($user_info->status != 1) {
                    if ($user_info->profile_status == 0) {
                        $OTP_VAR = $this->randomOtp();

                        $update['OTP'] = $OTP_VAR;
                        $where = 'reference_code = "' . $user_info->reference_code . '"';
                        $this->common_model->update_data($update, 'employees', $where);
                        $newdata = array(
                            'email' => $user_info->email,
                            'loggedin' => TRUE
                        );
                        $this->session->set_userdata('admin', $newdata);
                        $data['message'] = 'OTP Sent Successfully.';
                        $data['success'] = TRUE;
                        $this->output->set_output(json_encode($data));

                    } else {
                        $data['message'] = 'Your Account is temporarily blocked please contact administrator.';
                        $data['success'] = FALSE;
                        $this->output->set_output(json_encode($data));
                    }
                } else {
                    $data['message'] = 'Your OTP Verification is pending. Please verify your OTP First.';
                    $data['success'] = FALSE;
                    $this->output->set_output(json_encode($data));
                }
            } else {
                $data['message'] = 'No account found with provided email.';
                $data['success'] = FALSE;
                $this->output->set_output(json_encode($data));
            }
        } else {
            if (!empty($_POST)) {
                $i = 0;
                foreach ($_POST as $key => $value) {
                    $data['errors'][$i]['error'] = strip_tags(form_error($key));
                    $data['errors'][$i]['field'] = $key;
                    $i++;
                }
            }
            $data['success'] = FALSE;
            $this->output->set_output(json_encode($data));
        }
    }
    public function setNewAccountPassword()
    {
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'trim|required');
        if ($this->form_validation->run()) {
            $info = posted_fields($_POST);
            //   echo '<pre>' ; print_r($info);die();
            $where = 'email = "' . $this->loggedInUser['email'] . '" ';
            $user_info = $this->common_model->getTableData('employees', '*', $where);
            if (isset($user_info) && !empty($user_info) && count($user_info) > 0) {
                $user_info = $user_info[0];

                if ($user_info->status != 1) {
                    if ($user_info->profile_status == 0) {
                        if ($info['password'] === $info['confirmpassword']) {
                            $psdString = $info['password'];
                            $info['password'] = password_hash(trim($this->input->post('password')), PASSWORD_BCRYPT);
                            unset($info['confirmpassword']);
                            $info['password_string'] = $psdString;

                            $where = 'email = "' . $this->loggedInUser['email'] . '" ';
                            $this->common_model->update_data($info, 'employees', $where);
                            $data['message'] = 'Password Updated Successfully.';
                            $data['success'] = TRUE;
                            $this->output->set_output(json_encode($data));
                            $this->session->unset_userdata('admin');
                        } else {
                            $data['message'] = 'The provided password does not match please try again.';
                            $data['success'] = FALSE;
                            $this->output->set_output(json_encode($data));
                        }
                    } else {
                        $data['message'] = 'Your Account is temporarily blocked please contact administrator.';
                        $data['success'] = FALSE;
                        $this->output->set_output(json_encode($data));
                    }
                } else {
                    $data['message'] = 'Your OTP Verification is pending. Please verify your OTP First.';
                    $data['success'] = FALSE;
                    $this->output->set_output(json_encode($data));
                }
            } else {
                $data['message'] = 'Some Problem Occurred, Please Try Again.';
                $data['success'] = FALSE;
                $this->output->set_output(json_encode($data));
            }
        } else {
            if (!empty($_POST)) {
                $i = 0;
                foreach ($_POST as $key => $value) {
                    $data['errors'][$i]['error'] = strip_tags(form_error($key));
                    $data['errors'][$i]['field'] = $key;
                    $i++;
                }
            }
            $data['success'] = FALSE;
            $this->output->set_output(json_encode($data));
        }
    }
    public function forgetVerifyOtp()
    {
        $this->form_validation->set_rules('otp', 'OTP', 'trim|required');
        if ($this->form_validation->run()) {
            $info = posted_fields($_POST);
            $where = 'email = "' . $this->loggedInUser['email'] . '" ';
            $user_info = $this->common_model->getTableData('employees', '*', $where);
            if (isset($user_info) && !empty($user_info) && count($user_info) > 0) {
                $user_info = $user_info[0];
                if ($user_info->status != 1) {
                    if ($user_info->profile_status == 0) {
                        if ($info['otp'] === $user_info->OTP) {
                            $data['message'] = 'OTP Verified Successfully.';
                            $data['success'] = TRUE;
                            $this->output->set_output(json_encode($data));
                        } else {
                            $data['message'] = 'The provided otp is invalid please try again.';
                            $data['success'] = FALSE;
                            $this->output->set_output(json_encode($data));
                        }
                    } else {
                        $data['message'] = 'Your Account is temporarily blocked please contact administrator.';
                        $data['success'] = FALSE;
                        $this->output->set_output(json_encode($data));
                    }
                } else {
                    $data['message'] = 'Your OTP Verification is pending. Please verify your OTP First.';
                    $data['success'] = FALSE;
                    $this->output->set_output(json_encode($data));
                }
            } else {
                $data['message'] = 'Some Problem Occured, Please Try Again.';
                $data['success'] = FALSE;
                $this->output->set_output(json_encode($data));
            }
        } else {
            if (!empty($_POST)) {
                $i = 0;
                foreach ($_POST as $key => $value) {
                    $data['errors'][$i]['error'] = strip_tags(form_error($key));
                    $data['errors'][$i]['field'] = $key;
                    $i++;
                }
            }
            $data['success'] = FALSE;
            $this->output->set_output(json_encode($data));
        }
    }
  
    function updateUser()
    {
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('mobile_number', 'Phone Number', 'trim|required');
        $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
        $this->form_validation->set_rules('department_id', 'department_id', 'trim|required');
        if ($this->form_validation->run()) {
            $info = posted_fields($_POST);

            $where = 'reference_code = "' . $this->loggedInUser['reference_code'] . '"';
            $this->common_model->update_data($info, "employees", $where);

            // Saving Logs
            $logs['reference_code']=$this->loggedInUser['reference_code'];
            $logs['action']='Updated Information';
            $logs['status']='Success';
            $this->common_model->insert_data($logs, 'logs');


            $data['message'] = 'Information Updated Successfully.';
            $data['success'] = TRUE;
            $this->output->set_output(json_encode($data));
        } else {
            if (!empty($_POST)) {
                $i = 0;
                foreach ($_POST as $key => $value) {
                    $data['errors'][$i]['error'] = strip_tags(form_error($key));
                    $data['errors'][$i]['field'] = $key;
                    $i++;
                }
            }


            $data['success'] = FALSE;
            $this->output->set_output(json_encode($data));
        }
    }
    function updateUser_byadmin()
    {
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('mobile_number', 'Phone Number', 'trim|required');
        $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
        $this->form_validation->set_rules('department_id', 'department_id', 'trim|required');
        if ($this->form_validation->run()) {
            $info = posted_fields($_POST);
            // print_r($_POST);die();
            $where = 'reference_code = "' . $info['reference_code'] . '"';
            $this->common_model->update_data($info, "employees", $where);

             // Saving Logs
             $logs['reference_code'] = "Admin";
             $logs['action'] = 'Updated Information of ' . $info['reference_code'];
             $logs['status'] = 'Success';
             $this->common_model->insert_data($logs, 'logs');
             
 

            $data['message'] = 'Information Updated Successfully.';
            $data['success'] = TRUE;
            $this->output->set_output(json_encode($data));
        } else {
            if (!empty($_POST)) {
                $i = 0;
                foreach ($_POST as $key => $value) {
                    $data['errors'][$i]['error'] = strip_tags(form_error($key));
                    $data['errors'][$i]['field'] = $key;
                    $i++;
                }
            }


            $data['success'] = FALSE;
            $this->output->set_output(json_encode($data));
        }
    }
    function updatedepartment_byadmin()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');

        if ($this->form_validation->run()) {
            $info = posted_fields($_POST);
            // print_r($_POST);die();
            $where = 'id = "' . $info['id'] . '"';
            $this->common_model->update_data($info, "departments", $where);

             // Saving Logs
             $logs['reference_code'] = "Admin";
             $logs['action'] = 'Updated Information of department with id' . $info['id'];
             $logs['status'] = 'Success';
             $this->common_model->insert_data($logs, 'logs');
             

            $data['message'] = 'Information Updated Successfully.';
            $data['success'] = TRUE;
            $this->output->set_output(json_encode($data));
        } else {
            if (!empty($_POST)) {
                $i = 0;
                foreach ($_POST as $key => $value) {
                    $data['errors'][$i]['error'] = strip_tags(form_error($key));
                    $data['errors'][$i]['field'] = $key;
                    $i++;
                }
            }


            $data['success'] = FALSE;
            $this->output->set_output(json_encode($data));
        }
    }
    function apply_leave()
    {
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('reason', 'Reason', 'trim|required');
        $this->form_validation->set_rules('leaveFrom', 'Leave From', 'trim|required');
        $this->form_validation->set_rules('leaveTill', 'Leave Till', 'trim|required');


        $this->form_validation->set_rules('leaveTill', 'Leave Till', 'callback_leave_dates_check');

        if ($this->form_validation->run()) {

            $info = posted_fields($_POST);
            
            $where = 'reference_code = "' . $info['reference_code'] . '" AND STATUS = 0';
            $result=$this->common_model->getTableData('leave_requests', '*', $where);
            // print_r(count($result));die();
            if (count($result) > 0) {
                $data['message'] = 'Request already Initiated';
                $data['success'] = false;
                $this->output->set_output(json_encode($data));
            }else{

            // print_r($info);die();
            $info['status']=0;
            $info['added_on']=date("Y-m-d");
            
            if($this->common_model->insert_data($info, 'leave_requests')){

                 // Saving Logs
                $logs['reference_code'] = $info['reference_code'];
                // $logs['action'] = 'Updated Information of department with id' . $info['id'];
                $logs['action'] = 'Applied Leave';
                $logs['status'] = 'Success';
                $this->common_model->insert_data($logs, 'logs');

                $data['message'] = 'Request Initiated Successfully.';
                $data['success'] = TRUE;
                $this->output->set_output(json_encode($data));
            }else{
                $data['message'] = 'Some error occured.';
                $data['success'] = False;
                $this->output->set_output(json_encode($data));
            }
        }
          
        } else {
            if (!empty($_POST)) {
                $i = 0;
                foreach ($_POST as $key => $value) {
                    $data['errors'][$i]['error'] = strip_tags(form_error($key));
                    $data['errors'][$i]['field'] = $key;
                    $i++;
                }
            }

            $data['success'] = FALSE;
            $this->output->set_output(json_encode($data));
        }
    }

    function leave_dates_check($leaveTill)
{
    $leaveFrom = $this->input->post('leaveFrom');
    if ($leaveTill < $leaveFrom) {
        $this->form_validation->set_message('leave_dates_check', 'Leave Till date must be greater than or equal to Leave From date.');
        return FALSE;
    } else {
        return TRUE;
    }
}
    function cancel_leave_request()
    {
        $id=decode($_POST['id']);
        // echo($id);die();

            
            $where = 'id = "' . $id . '" AND STATUS = 0';
            $result=$this->common_model->getTableData('leave_requests', '*', $where);
            // print_r(count($result));die();
            if (count($result) > 0) {
               
                $info['status']=3;
                $info['updated_on']=date("Y-m-d");
                $info['updated_by']= $this->loggedInUser['reference_code'];
                
                if(  $this->common_model->update_data($info, 'leave_requests', $where)){

                // Saving Logs
                $logs['reference_code'] = $this->loggedInUser['reference_code'];
                // $logs['action'] = 'Updated Information of department with id' . $info['id'];
                $logs['action'] = 'Leave Cancelled';
                $logs['status'] = 'Success';
                $this->common_model->insert_data($logs, 'logs');

                    $data['message'] = 'Request cancelled Successfully.';
                    $data['success'] = TRUE;
                    $this->output->set_output(json_encode($data));
                }else{
                    $data['message'] = 'Some error occured.';
                    $data['success'] = False;
                    $this->output->set_output(json_encode($data));
                }

            }else{

                $data['message'] = 'No Request Found';
                $data['success'] = false;
                $this->output->set_output(json_encode($data));
            
           
        }
          
       
    }
    function approve_leave_request_admin()
    {
        $id=decode($_POST['id']);
        // echo($id);die();

            
            $where = 'id = "' . $id . '" AND STATUS = 0';
            $result=$this->common_model->getTableData('leave_requests', '*', $where);
            // print_r(count($result));die();
            if (count($result) > 0) {
               
                $info['status']=1;
                $info['updated_on']=date("Y-m-d");
                $info['updated_by']= 'Admin';
                
                if(  $this->common_model->update_data($info, 'leave_requests', $where)){

                     // Saving Logs
                    $logs['reference_code'] = 'Admin';
                    $logs['action'] = 'Approved Leave with id' . $id;
                    // $logs['action'] = 'Leave Cancelled';
                    $logs['status'] = 'Success';
                    $this->common_model->insert_data($logs, 'logs');

                    $data['message'] = 'Leave Approved Successfully.';
                    $data['success'] = TRUE;
                    $this->output->set_output(json_encode($data));
                }else{
                    $data['message'] = 'Some error occured.';
                    $data['success'] = False;
                    $this->output->set_output(json_encode($data));
                }

            }else{

                $data['message'] = 'No Request Found';
                $data['success'] = false;
                $this->output->set_output(json_encode($data));
            
           
        }
          
       
    }
    function reject_leave_request_admin()
    {
        $id=decode($_POST['id']);
        // echo($id);die();

            
            $where = 'id = "' . $id . '" AND STATUS = 0';
            $result=$this->common_model->getTableData('leave_requests', '*', $where);
            // print_r(count($result));die();
            if (count($result) > 0) {
               
                $info['status']=2;
                $info['updated_on']=date("Y-m-d");
                $info['updated_by']= 'Admin';
                
                if(  $this->common_model->update_data($info, 'leave_requests', $where)){

                      // Saving Logs
                      $logs['reference_code'] = 'Admin';
                      $logs['action'] = 'Rejected Leave with id' . $id;
                      // $logs['action'] = 'Leave Cancelled';
                      $logs['status'] = 'Success';
                      $this->common_model->insert_data($logs, 'logs');

                    $data['message'] = 'Leave Rejected Successfully.';
                    $data['success'] = TRUE;
                    $this->output->set_output(json_encode($data));
                }else{
                    $data['message'] = 'Some error occured.';
                    $data['success'] = False;
                    $this->output->set_output(json_encode($data));
                }

            }else{

                $data['message'] = 'No Request Found';
                $data['success'] = false;
                $this->output->set_output(json_encode($data));
            
           
        }
          
       
    }



    private function randomOtp()
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $otp = array();               //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 6; $i++) {
            $n = rand(0, $alphaLength);
            $otp[] = $alphabet[$n];
        }
        return strtoupper(implode($otp)); //turn the array into a string
    }


}  // Controller End
