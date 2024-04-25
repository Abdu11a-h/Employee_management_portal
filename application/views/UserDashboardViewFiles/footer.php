<footer class="footer-spot">
    <div class="container mx-auto py-5 flex justify-center gap5 flex-xl-nowrap flex-wrap">
        <div aria-label="logo-aria" class="flex flex-col justify-content-between w-full">
            <div class="spot-logo">
          <h1>EMS</h1>
        
            </div>
            <div aria-label="text">
                <p class="text-white right-dir">
             © 2023 by EMS    
               </p>
            </div>
        </div>
        <div class="flex flex-col justify-content-between w-full">
           
            <div aria-label="two" class="mt-4 right-dir">
                <p class="font-weight-bold" style="opacity: 0.8; font-size: 24px; color: white;">
               Communication
                </p>
                <p class="text-white">
                Mobile : 0550652051 <br>
                Whatsapp : 920033861 <br> 
                Email : info@EMS.com
            </p>
            </div>

        </div>
        <div aria-label="Quick Links" class="flex gap4 w-full">
            <ul class="flex flex-col gap4 w-full spotFooter-ul right-dir">
                <li class="text-white">
                Home  
                </li>
                <li class="text-white">
                Our services
               </li>
                <li class="text-white">
                Our programs
                </li>
            
                <li class="text-white">
              Connect us
               </li>
            </ul> 
            <div class="flex flex-col gap5 w-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <rect x="4" y="4" width="16" height="16" rx="4" />
                <circle cx="12" cy="12" r="3" />
                <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                </svg>
            <svg class="my-3" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="white" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-snapchat" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="white" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M16.882 7.842a4.882 4.882 0 0 0 -9.764 0c0 4.273 -.213 6.409 -4.118 8.118c2 .882 2 .882 3 3c3 0 4 2 6 2s3 -2 6 -2c1 -2.118 1 -2.118 3 -3c-3.906 -1.709 -4.118 -3.845 -4.118 -8.118zm-13.882 8.119c4 -2.118 4 -4.118 1 -7.118m17 7.118c-4 -2.118 -4 -4.118 -1 -7.118" />
            </svg>
         
            </div>
        </div>
    </div>
</footer>

<script src="<?php echo SPOTLESSHAIRASSETS . 'custom/jquery.min.js'; ?>"></script>


<script>
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 40) {
            $(".navbar").addClass("sticky");
            $(".navbar").addClass("animate__animated animate__fadeInDown");
            $(".navbar").addClass("transit");
        } else {
            $(".navbar").removeClass("sticky");
            $(".navbar").addClass("transit");
            $(".navbar").removeClass("animate__animated animate__fadeInDown");
        }
    });
</script>
<script>
    // Nav
    let sideBar = document.getElementById("mobile-nav");
    let menu = document.getElementById("menu");
    let cross = document.getElementById("cross");
    const sidebarHandler = (check) => {
        if (check) {
            sideBar.classList.add("mob-nav-true")
            // sideBar.style.transform = "translateX(0px)";
            // sideBar.classList.add("hidden")
            menu.classList.add("hidden");
            cross.classList.remove("hidden");
        } else {
            // sideBar.style.transform = "translateX(-100%)";
            // sideBar.classList.remove("hidden")
            sideBar.classList.remove("mob-nav-true")
            menu.classList.remove("hidden");
            cross.classList.add("hidden");
        }
    };
</script>
<!--end -j query for stick nav bar -->
<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="<?php echo SPOTLESSHAIRASSETS . 'custom/bootstrap.bundle.min.js'; ?>" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="<?php echo SPOTLESSHAIRASSETS; ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo SPOTLESSHAIRASSETS; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo SPOTLESSHAIRASSETS; ?>assets/js/owl-carousel.js"></script>
<script src="<?php echo SPOTLESSHAIRASSETS; ?>assets/js/animation.js"></script>
<script src="<?php echo SPOTLESSHAIRASSETS; ?>assets/js/imagesloaded.js"></script>
<script src="<?php echo SPOTLESSHAIRASSETS; ?>assets/js/templatemo-custom.js"></script>
<script src="<?php echo VENDOR . 'jquery/dist/jquery.min.js'; ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo VENDOR . 'bootstrap/dist/js/bootstrap.bundle.min.js'; ?>"></script>
<!-- FastClick -->
<script src="<?php echo VENDOR . 'fastclick/lib/fastclick.js'; ?>"></script>
<!-- NProgress -->
<script src="<?php echo VENDOR . 'nprogress/nprogress.js'; ?>"></script>
<!-- Chart.js -->
<script src="<?php echo VENDOR . 'Chart.js/dist/Chart.min.js'; ?>"></script>
<!-- gauge.js -->
<script src="<?php echo VENDOR . 'gauge.js/dist/gauge.min.js'; ?>"></script>
<!-- bootstrap-progressbar -->
<script src="<?php echo VENDOR . 'bootstrap-progressbar/bootstrap-progressbar.min.js'; ?>"></script>
<!-- iCheck -->
<script src="<?php echo VENDOR . 'iCheck/icheck.min.js'; ?>"></script>
<!-- Skycons -->
<script src="<?php echo VENDOR . 'skycons/skycons.js'; ?>"></script>
<!-- Flot -->
<script src="<?php echo VENDOR . 'Flot/jquery.flot.js'; ?>"></script>
<script src="<?php echo VENDOR . 'Flot/jquery.flot.pie.js'; ?>"></script>
<script src="<?php echo VENDOR . 'Flot/jquery.flot.time.js'; ?>"></script>
<script src="<?php echo VENDOR . 'Flot/jquery.flot.stack.js'; ?>"></script>
<script src="<?php echo VENDOR . 'Flot/jquery.flot.resize.js'; ?>"></script>
<!-- Flot plugins -->
<script src="<?php echo VENDOR . 'flot.orderbars/js/jquery.flot.orderBars.js'; ?>"></script>
<script src="<?php echo VENDOR . 'flot-spline/js/jquery.flot.spline.min.js'; ?>"></script>
<script src="<?php echo VENDOR . 'flot.curvedlines/curvedLines.js'; ?>"></script>
<!-- DateJS -->
<script src="<?php echo VENDOR . 'DateJS/build/date.js'; ?>"></script>
<!-- JQVMap -->
<script src="<?php echo VENDOR . 'jqvmap/dist/jquery.vmap.js'; ?>"></script>
<script src="<?php echo VENDOR . 'jqvmap/dist/maps/jquery.vmap.world.js'; ?>"></script>
<script src="<?php echo VENDOR . 'jqvmap/examples/js/jquery.vmap.sampledata.js'; ?>"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?php echo VENDOR . 'moment/min/moment.min.js'; ?>"></script>
<script src="<?php echo VENDOR . 'bootstrap-daterangepicker/daterangepicker.js'; ?>"></script>

<script src="<?php echo ADMIN_ASSETS; ?>js/jquery.form.js"></script>

<script src="<?php echo ADMIN_ASSETS; ?>js/bootstrap-datepicker.js"></script>
<script src="<?php echo ADMIN_ASSETS; ?>js/jquery.richtext.js"></script>
<script src="<?php echo ADMIN_ASSETS; ?>js/user.js<?php echo SCRIPT_VERSION; ?>"></script>

<script src="<?php echo ADMIN_ASSETS; ?>js/functions.js<?php echo SCRIPT_VERSION; ?>"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>

</html>