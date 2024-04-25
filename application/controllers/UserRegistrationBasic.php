<?php
// require 'vendor/autoload.php';

defined('BASEPATH') or exit('No direct script access allowed');
class UserRegistrationBasic extends CI_Controller
{
    public $loggedInUser;
    public $data;
    public $site_title = SITE_TITLE;
    public function __construct()
    {
        parent::__construct();

        $this->load->model('common_model');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('common');
        $method = $this->router->fetch_method();
        $class = $this->router->fetch_class();
        $this->loggedInUser = $this->session->userdata('admin');
        $this->data['page_method'] = $method;
        $this->data['class'] = $class;
        $this->data['is_404'] = FALSE;
        $this->data['site_title'] = $this->site_title;
        $this->data['session_data'] = $this->loggedInUser;

        // MultiLanguage
        if (isset($_SESSION['language']) && $_SESSION['language'] == "2") {
            $this->data['direction_Bit'] = "2";
        } else {
            $this->data['direction_Bit'] = "1";
        }
        // End


        if (isset($this->loggedInUser['name'])) {
            $this->data['username'] = $this->loggedInUser['name'];
            // echo '<pre>'; print_r($this->data['username']); die();
        }
        if (isset($this->loggedInUser['reference_code']) && !empty($this->loggedInUser['reference_code'])) {
            $where_profile = 'reference_code = "' . $this->loggedInUser['reference_code'] . '"';
            // echo($where_profile);die();
            $this->data['user_profile'] = $this->common_model->getTableData('employees', '*', $where_profile);
            //   
            if (isset($this->data['user_profile']) && !empty($this->data['user_profile'])) {
                $this->data['user_profile'] = $this->data['user_profile'][0];
                // pre_print($this->data['user_profile']); die();
            }
        }
        // echo '<pre>'; print_r($this->loggedInUser); die();

    }

    public function language($val)
    {
        if (isset($val) && !empty($val) && $val == "1") {
            $this->session->set_userdata('language', '1');
        } elseif (isset($val) && !empty($val) && $val == "2") {
            $this->session->set_userdata('language', '2');
        }
        redirect(USER_REGISTRATION_BASIC . 'index');
    }
    public function index()
    {
        $this->data['page_title'] = "Login";
        $this->load->view('WebsiteViewFiles/RegistrationPages/login', $this->data);
    }
    public function admin()
    {
        $this->data['page_title'] = "Login";
        $this->load->view('WebsiteViewFiles/RegistrationPages/admin_login', $this->data);
    }

    public function signup()
    {
        $this->data['departments'] = $this->common_model->getTableData('departments', '*');
        $this->data['page_title'] = "Signup";
        $this->load->view('WebsiteViewFiles/RegistrationPages/signup', $this->data);
    }
    public function login()
    {
        $this->data['page_title'] = "Login";
        $this->load->view('WebsiteViewFiles/RegistrationPages/login', $this->data);
    }
    public function userDasboard()
    {

        $where = 'reference_code = "' . $this->loggedInUser['reference_code'] . '"';
        $this->data['userData'] = $this->common_model->getTableData('employees', '*', $where);
        if (isset($this->data['userData']) && !empty($this->data['userData'])) {
            $this->data['userData'] = $this->data['userData'][0];
        }

        $where = 'id = "' . $this->data['userData']->department_id  . '"';
        $this->data['department'] = $this->common_model->getTableData('departments', '*', $where);
        if (isset($this->data['department']) && !empty($this->data['department'])) {
            $this->data['department'] = $this->data['department'][0];
        }

        $where = 'reference_code = "' . $this->loggedInUser['reference_code'] . '" AND STATUS = 0';
        $this->data['pending_requests'] = $this->common_model->getTableData('leave_requests', '*', $where);
        $this->data['pending_requests_count'] = count($this->data['pending_requests']);

        $where = 'reference_code = "' . $this->loggedInUser['reference_code'] . '" AND STATUS = 1';
        $this->data['approved_requests'] = $this->common_model->getTableData('leave_requests', '*', $where);
        $this->data['approved_requests_count'] = count($this->data['approved_requests']);
        
        $where = 'reference_code = "' . $this->loggedInUser['reference_code'] . '" AND STATUS = 2';
        $this->data['rejected_requests'] = $this->common_model->getTableData('leave_requests', '*', $where);
        $this->data['rejected_requests_count'] = count($this->data['rejected_requests']);
        

        $this->data['page_title'] = "User Dashboard";
        $this->load->view('UserDashboardViewFiles/dashboardHome', $this->data);
    }
    public function Admin_dasboard()
    {
        $profile_status = 0;
        $where = 'profile_status = "' . $profile_status . '"';
        $this->data['active_profile_count'] = count($this->common_model->getTableData('employees', '*', $where));

        $where = 'profile_status != "' . $profile_status . '"';
        $this->data['inactive_profile_count'] = count($this->common_model->getTableData('employees', '*', $where));

        $this->data['userData'] = $this->common_model->getTableData('employees', '*');
        $this->data['count_users'] = count($this->data['userData']);

        $this->data['department_data'] = $this->common_model->getTableData('departments', '*');
        $this->data['count_department'] = count($this->data['department_data']);


        $this->data['page_title'] = "Admin Dashboard";
        $this->load->view('UserDashboardViewFiles/admindashboard', $this->data);
    }

    public function forgotPasswordEmail()
    {
        $this->data['page_title'] = "Forgot Password";
        $this->load->view('WebsiteViewFiles/RegistrationPages/forgotPassword', $this->data);
    }
    public function forgotPasswordOtpVerification()
    {
        $this->data['page_title'] = "Forgot Password";
        $this->load->view('WebsiteViewFiles/RegistrationPages/forgotVerifyOtp', $this->data);
    }
    public function forgotNewPassword()
    {
        $this->data['page_title'] = "Set New Password";
        $this->load->view('WebsiteViewFiles/RegistrationPages/forgotNewPassword', $this->data);
    }



    public function profileSettings()
    {
        $where = "reference_code = '" . $this->loggedInUser['reference_code'] . "'";
        $this->data['profile_details'] = $this->common_model->getTableData('employees', '*', $where);
        //        pre_print($this->data['profile_details']);
        if (isset($this->data['profile_details']) && !empty($this->data['profile_details'])) {
            $this->data['profile_details'] = $this->data['profile_details'][0];
        }

        $this->data['departments'] = $this->common_model->getTableData('departments', '*');
        // pre($this->data);die();
        $this->data['page_title'] = "Profile Settings";
        $this->load->view('UserDashboardViewFiles/profileSettings', $this->data);
    }
    public function apply_leave()
    {
        
        $where = "reference_code = '" . $this->loggedInUser['reference_code'] . "'";
        $this->data['profile_details'] = $this->common_model->getTableData('employees', '*', $where);
        if (isset($this->data['profile_details']) && !empty($this->data['profile_details'])) {
            $this->data['profile_details'] = $this->data['profile_details'][0];
        }

        // $this->data['departments'] = $this->common_model->getTableData('departments', '*');
        // pre($this->data);die();
        $this->data['page_title'] = "Profile Settings";
        $this->load->view('UserDashboardViewFiles/apply_leave', $this->data);
    }
    public function leave_requests()
    {
        
        $where = "reference_code = '" . $this->loggedInUser['reference_code'] . "'";
        $this->data['leave_requests'] = $this->common_model->getTableData('leave_requests', '*', $where);

        $this->data['page_title'] = "Profile Settings";
        $this->load->view('UserDashboardViewFiles/leave_requests', $this->data);
    }
    public function logs()
    {
        
        // $where = "reference_code = '" . $this->loggedInUser['reference_code'] . "'";
        $this->data['logs'] = $this->common_model->getTableData('logs', '*');

        $this->data['page_title'] = "Logs";
        $this->load->view('UserDashboardViewFiles/logs', $this->data);
    }
    public function admin_leaverequests()
    {
        $status=0;
        $where = "status = '" . $status . "'";
        $this->data['leave_requests'] = $this->common_model->getTableData('leave_requests', '*',$where);

        $this->data['page_title'] = "Profile Settings";
        $this->load->view('UserDashboardViewFiles/admin_leaverequests', $this->data);
    }
    public function employees_list()
    {

        $this->data['userData'] = $this->common_model->getTableData('employees', '*');
        $this->data['count_users'] = count($this->data['userData']);
        // print_r($this->data['userData']);die();
        $this->data['page_title'] = "Employee_List";
        $this->load->view('UserDashboardViewFiles/employee_list', $this->data);
    }
    public function department_list()
    {

        $this->data['departmentData'] = $this->common_model->getTableData('departments', '*');
        $this->data['count_users'] = count($this->data['departmentData']);
        // print_r($this->data['departmentData']);die();
        $this->data['page_title'] = "Department_List";
        $this->load->view('UserDashboardViewFiles/department_list', $this->data);
    }
    public function editportalusers($id = 0)
    {
        $id = decode($id);
        
        $where = 'id = "' . $id . '"';
       
        $this->data['profile_details'] = $this->common_model->getTableData('employees', '*', $where);
        //        pre_print($this->data['profile_details']);
        if (isset($this->data['profile_details']) && !empty($this->data['profile_details'])) {
            $this->data['profile_details'] = $this->data['profile_details'][0];
        }

        $this->data['departments'] = $this->common_model->getTableData('departments', '*');
        // pre($this->data);die();
        $this->data['page_title'] = "Profile Settings";
        $this->load->view('UserDashboardViewFiles/admin_side_user_profileSettings', $this->data);
    }
    public function editdepartments($id = 0)
    {
        $id = decode($id);
        
        $where = 'id = "' . $id . '"';
       
        $this->data['departments_details'] = $this->common_model->getTableData('departments', '*', $where);
        //        pre_print($this->data['departments_details']);
        if (isset($this->data['departments_details']) && !empty($this->data['departments_details'])) {
            $this->data['departments_details'] = $this->data['departments_details'][0];
        }

      
        $this->data['page_title'] = "Department Settings";
        $this->load->view('UserDashboardViewFiles/admin_side_user_departments_setting', $this->data);
    }

    public function add_portal_users()
    {
        $this->data['departments'] = $this->common_model->getTableData('departments', '*');
        $this->data['page_title'] = "Add New User";
        $this->load->view('UserDashboardViewFiles/add_new_user', $this->data);
    }
    public function add_departments()
    {
      
        $this->data['page_title'] = "Add New Department";
        $this->load->view('UserDashboardViewFiles/add_new_department');
    }

    public function logout()
    {
        $this->data['page_title'] = "Login";
        $this->session->unset_userdata('admin');
        $this->session->unset_userdata('access_token');
        redirect(USER_REGISTRATION_BASIC . 'login');
    }
    public function admin_logout()
    {

        $this->session->unset_userdata('admin');
        $this->session->unset_userdata('access_token');
        redirect(USER_REGISTRATION_BASIC . 'admin');
    }






    

}  // controller end
