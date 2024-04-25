<?php include('admin_dashboard_header.php'); ?>
<style>
  .contactForm .label {
    font-size: 16px;
  }
</style>
<div class="pr-0 px-xl-0 px-4 pr-xl-5 w-full mt-5">
  <!-- --------------Spot Forms Section --------------------------------start Here//- -->
  <section class="" id="signup-form">
    <div aria-label="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="wrapper">
            <div class="row no-gutters">
             
              <div class="col-md-12" id="signupScroll">
                <div class="contact-wrap w-100 p-md-5 p-4 shadow p-3 mb-5 bg-body rounded">
                  <h1 class="mb-4 font-weight-bolder grad-text right-dir noto line110">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle grad-svg" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <circle cx="12" cy="12" r="9" />
                      <circle cx="12" cy="10" r="3" />
                      <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                    </svg>
                    Profile Settings
                  </h1>
                
                  <div id="form-message-warning" class="mb-4"></div>
                  <div id="form-message-success" class="mb-4">
                    Your message was sent, thank you!
                  </div>
                  <form method="" action="" enctype="multipart/form-data" id="updateForm" class="contactForm">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group right-dir">
                          <label class="label noto-font" for="name"><i class="fa fa-user"></i> 
                         First Name
                          </label>
                          <input type="text" class="form-control ltr" name="firstname" id="firstname" placeholder="" value="<?php echo isset($profile_details->firstname) ? $profile_details->firstname : ''; ?>">
                          <span style="display:none;padding: 0px; margin-bottom: 10px; text-shadow: none;" class="firstname_info"></span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group right-dir">
                          <label class="label noto-font" for="email"><i class="fa fa-user"></i>
                        Last Name
                        </label>
                          <input type="email" class="form-control ltr" name="lastname" id="lastname" placeholder="" value="<?php echo isset($profile_details->lastname) ? $profile_details->lastname : ''; ?>">
                          <span style="display:none;padding: 0px; margin-bottom: 10px; text-shadow: none;" class="lastname_info"></span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group right-dir">
                          <label class="label noto-font" for="mobile_number"><i class="fa fa-phone" style="transform: rotate(450deg);"></i>
                          Mobile Number
                          </label>
                          <input type="text" class="form-control ltr" name="mobile_number" id="mobile_number" placeholder="" value="<?php echo isset($profile_details->mobile_number) ? $profile_details->mobile_number : ''; ?>">
                          <span style="display:none;padding: 0px; margin-bottom: 10px; text-shadow: none;" class="mobile_number_info"></span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group right-dir">
                          <label class="label noto-font" for="email"><i class="fa fa-envelope"></i>
                          Email
                          </label>
                          <input type="email" class="form-control ltr" name="email" id="email" placeholder="" value="<?php echo isset($profile_details->email) ? $profile_details->email : ''; ?>">
                          <span style="display:none;padding: 0px; margin-bottom: 10px; text-shadow: none;" class="email_info"></span>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group right-dir">
                          <label class="label noto-font" for="gender"><i class="fa fa-user"></i> 
                         Gender
                          </label>
                          <select name="gender" id="gender" class="form-control ltr">
                            <option value="">
                           Gender
                            </option>
                            <option value="0" <?php echo isset($profile_details->gender) && $profile_details->gender == '0' ? 'selected' : ''; ?>>Male </option>
                            <option value="1" <?php echo isset($profile_details->gender) && $profile_details->gender == '1' ? 'selected' : ''; ?>>Female </option>
                          </select>
                          <span style="display:none;padding: 0px; margin-bottom: 10px; text-shadow: none;" class="gender_info"></span>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group right-dir">
                          <label class="label noto-font" for="department_id">
                            Department
                          </label>
                          <select name="department_id" id="department_id" class="form-control">
                            <option value="">Select Department</option>
                            <?php foreach($departments as $department) { ?>
                              <option value="<?php echo $department->id; ?>" <?php echo isset($profile_details->department_id) && $profile_details->department_id == $department->id ? 'selected' : ''; ?>>
                                <?php echo $department->description; ?>
                              </option>
                            <?php } ?>
                          </select>
                          <span style="display:none;padding: 0px; margin-bottom: 10px; text-shadow: none;" class="department_info"></span>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group right-dir">
                          <label class="label noto-font" for="profile_status	">
                            Status
                          </label>
                          <select name="profile_status" id="profile_status" class="form-control">
                            <option value="">Select Status</option>
                            <option value="0" <?php echo isset($profile_details->profile_status) && $profile_details->profile_status == "0" ? 'selected' : ''; ?>>Active</option>
                            <option value="1" <?php echo isset($profile_details->profile_status) && $profile_details->profile_status != "0" ? 'selected' : ''; ?>>In active</option>
                          
                          </select>
                          <span style="display:none;padding: 0px; margin-bottom: 10px; text-shadow: none;" class="status_info"></span>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group right-dir">
                          <label class="label noto-font" for="salary">
                          Salary
                          </label>
                          <input type="number" class="form-control ltr" name="salary" id="salary" placeholder="" value="<?php echo isset($profile_details->salary) ? $profile_details->salary : ''; ?>">
                          <span style="display:none;padding: 0px; margin-bottom: 10px; text-shadow: none;" class="salary_info"></span>
                        </div>
                      </div>

                     

                    

                      <input type="hidden" class="form-control ltr" name="reference_code" id="reference_code" placeholder="" value="<?php echo isset($profile_details->reference_code) ? $profile_details->reference_code : ''; ?>">
                
                      <div class="flex justify-center col-12 mt-2">
                        <div class="col-md-2 brand-btn py-2 form-group" style="cursor: pointer;">
                          <div onClick="submitForm_to('<?php echo USER_REGISTRATION_API . 'updateUser_byadmin' ?>','<?php echo USER_REGISTRATION_BASIC . 'employees_list' ?>','updateForm')">
                            <span type="button" id="submit">
                            Update
                             </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit-circle update-svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z" />
                              <path d="M16 5l3 3" />
                              <path d="M9 7.07a7.002 7.002 0 0 0 1 13.93a7.002 7.002 0 0 0 6.929 -5.999" />
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12 text-center py-4">
                        <center>
                          <div style="padding: 0px; line-height: 20px; text-shadow: none;" id="msgs-updateForm"></div>
                        </center>
                      </div>
                   
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- --------------Services Section --------------------------------start Here//- -->
</div>
</div>
</div>
<!-- End -->
</div>
</div>
</div>
<?php include('footer.php'); ?>
<script>
  $(".button-collapse").sideNav();
</script>
<!-- End -->
<script>
  function scrollToForm() {
    document.getElementById("signupScroll").scrollIntoView({
      behavior: "smooth"
    });
  }
  $(document).ready(function() {
    $('html, body').animate({
      scrollTop: $('#signup-form').offset().top
    }, 'slow');
  });
</script>
</body>

</html>