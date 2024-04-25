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
                    Department Settings
                  </h1>
                
                  <div id="form-message-warning" class="mb-4"></div>
                  
                  <form method="" action="" enctype="multipart/form-data" id="updateForm" class="contactForm">
                    <div class="row">
                      
                     
                        <div class="col-md-6">
                        <div class="form-group right-dir">
                            <label class="label noto-font" for="name">
                            Name 
                        </label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="" value="<?php echo $departments_details->name; ?>">
                            <span style="display:none;padding: 0px; margin-bottom: 10px; text-shadow: none;" class="name_info"></span>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group right-dir">
                            <label class="label noto-font" for="name">
                            Description       
                        </label>
                        <input type="text" class="form-control" name="description" id="description" placeholder="" value="<?php echo $departments_details->description; ?>">
                            <span style="display:none;padding: 0px; margin-bottom: 10px; text-shadow: none;" class="description_info"></span>
                        </div>
                        </div>
                       
                        <input type="hidden" class="form-control" name="id" id="id" placeholder="" value="<?php echo $departments_details->id; ?>">
                    </div>
                      <div class="flex justify-center col-12 mt-2">
                        <div class="col-md-2 brand-btn py-2 form-group" style="cursor: pointer;">
                          <div onClick="submitForm_to('<?php echo USER_REGISTRATION_API . 'updatedepartment_byadmin' ?>','<?php echo USER_REGISTRATION_BASIC . 'department_list' ?>','updateForm')">
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