<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="<?php echo SPOTLESSHAIRASSETS . 'custom/bootstrap.min.css'; ?>" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="<?php echo SPOTLESSHAIRASSETS . 'css/all.css'; ?>" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet" />
  <!-- End -->
  <!-- Font AWESOME -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- End -->
  <!-- Animation -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- End -->
  <!-- Testimonial -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>


  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- End -->
    <!-- Noto Nastiliq -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- End -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo SPOTLESSHAIRASSETS . 'custom/style.css'; ?>" />
  <link rel="stylesheet" href="<?php echo SPOTLESSHAIRASSETS . 'custom/csstwo.css'; ?>" />
  <title><?php echo isset($page_title) ? $page_title : ''; ?></title>

<!-- For Arabic Language -->
  <style>
  <?php if (isset($direction_Bit) && !empty($direction_Bit) && $direction_Bit == "2") { ?>body {
    direction: rtl;
  }
  body{
    font-family: 'Times New Roman', serif!important;
  }
  .right-dir{
    text-align: right;
  }
  .noto{
    font-family: 'Times New Roman', serif!important;
  }
  .noto-font{
    font-size: 25px!important;
  }
/* start */

  <?php } ?>

  #more {
    transition: opacity 3s;
  }
</style>
<!-- End -->
</head>

<body>

  <div class="responsive">
    <nav class="container flex justify-between gap4 items-center py10 flex-wrap">
      <div aria-label="logo" class="flex gap4 items-center">
        <div class="mainLogo">
          <a href="<?php echo USER_REGISTRATION_BASIC; ?>login">
         
            <div class="spot-logo">
              <div data-testid="svgRoot-comp-l9edrt6j">
              <h1>EMS</h1> 
              </div>
            </div>
          </a>
        </div>
       
      </div>
      <div aria-label="li-main" class="flex items-center gap32">
        <div aria-label="nav-list" class="w-ul mt-3">
          <ul class="flex justify-between gap32 w-full">
           
            <a href="<?php echo USER_REGISTRATION_BASIC . 'admin'; ?>">
              <li>
             Login as admin
              </li>
            </a>
            <a href="<?php echo USER_REGISTRATION_BASIC; ?>">
              <li>
             Our services
              </li>
            </a>
            <li>
            Our programs
          </li>
            
            <a href="<?php echo USER_REGISTRATION_BASIC; ?>">
              <li>
             Connect us
             </li>
            </a>
          </ul>
        </div>
            <div aria-label="button" class="book-free-call">
              <a href="<?php echo USER_REGISTRATION_BASIC . 'signup'; ?>"> <button style="width: 200px;" class="flex items-center gap2">Get Registered>  <i class="mb-1 fa fa-user-plus"></i></button></a>
        </div>
      </div>
    </nav>
  </div>
  <div class="small-nav">
    <!-- Navbar -->
    <div class="relative w-full p-2">
      <div class="flex justify-between-between items-center w-full">
        <div class="w-full">
          <div class="mainLogo">
            <a href="<?php echo USER_REGISTRATION_BASIC; ?>login">
              <!-- <img src="<?php echo SPOTLESSHAIRASSETS; ?>WebsiteImages/Logo/blacklogo.png" alt="img"> -->
              <div class="spot-logo">
                <div data-testid="svgRoot-comp-l9edrt6j">
                  EMS
                  <!-- <svg preserveAspectRatio="xMidYMid meet" data-bbox="0 0 587.87 166.31" viewBox="0 0 587.87 166.31" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true"> -->
                    <defs>
                      <!-- <style>
                        #comp-l9edrt6j svg [data-color="1"] {
                          fill: #0ABBB5;
                        }
                      </style> -->
                    </defs>
                    <g>
                      <path d="M117.63 124.11a52.73 52.73 0 0 1 25.91-98.66h.75v3.92h-.71a48.81 48.81 0 0 0-24 91.33Z" fill="#3dc3df" data-color="1"></path>
                      <path d="M143.54 130.9c-1 0-2 0-3-.08l.22-3.92c.92 0 1.86.08 2.8.08a48.81 48.81 0 0 0 25.27-90.57l2-3.35a52.73 52.73 0 0 1-27.3 97.84Z" fill="#a6a8aa" data-color="2"></path>
                      <path d="M143.46 0a72.55 72.55 0 0 1 6.48 38c-.15 1.63-.36 3.25-.6 4.87s-.56 3.23-.91 4.83-.73 3.18-1.21 4.81-1.05 3.18-1.67 4.71c-1.22 3.08-2.71 6-4.13 8.85l-4.24 8.62c-2.9 5.73-5.88 11.37-8.56 17.09-1.33 2.86-2.6 5.74-3.71 8.67s-2.07 5.9-2.89 8.92c-3.15 12.08-2.74 25 .16 37.51a67.27 67.27 0 0 1-3.73-38.33 94 94 0 0 1 6.11-18.6c2.59-6 5.56-11.68 8.43-17.38l4.33-8.57c1.47-2.85 2.89-5.66 4.14-8.5.62-1.42 1.19-2.84 1.68-4.29s.9-2.94 1.29-4.46c.76-3 1.4-6.1 1.88-9.2A86.12 86.12 0 0 0 143.46 0Z" fill="#3dc3df" data-color="1"></path>
                      <path d="M157.36 13.5c2.22 11.12 3.22 22.69 1.33 34.12a50.13 50.13 0 0 1-2.05 8.46 65.87 65.87 0 0 1-3.39 8c-2.6 5.16-5.65 10-8.35 14.9s-5.36 9.91-7.62 15a95.88 95.88 0 0 0-5.55 15.8 85.18 85.18 0 0 0-2.31 16.63 108 108 0 0 0 .74 16.93 83.71 83.71 0 0 1-2.28-16.94 76.67 76.67 0 0 1 1.46-17.15 88.89 88.89 0 0 1 5.21-16.45 161.7 161.7 0 0 1 7.61-15.39c2.81-5 5.86-9.78 8.45-14.72a62 62 0 0 0 3.44-7.57c.48-1.3.89-2.61 1.26-3.94l.53-2 .46-2a91.24 91.24 0 0 0 1.7-16.71 169.28 169.28 0 0 0-.64-16.97Z" fill="#3dc3df" data-color="1"></path>
                      <path d="M163.91 10a61.42 61.42 0 0 1 6 37.34c-1 6.41-3.18 12.53-5.44 18.44-2.35 6.08-5.7 11.6-8.91 17-1.62 2.71-3.24 5.4-4.68 8.16s-2.77 5.59-4 8.47a86.3 86.3 0 0 0-5.24 17.9 83.54 83.54 0 0 0 2.18 37.28 74.24 74.24 0 0 1-4.6-37.66 82.94 82.94 0 0 1 4.9-18.63 112.39 112.39 0 0 1 8.71-17.12c3.28-5.43 6.53-10.79 8.84-16.51 1.19-2.93 2.36-5.84 3.36-8.8a72.24 72.24 0 0 0 2.44-9A67.08 67.08 0 0 0 163.91 10Z" fill="#a6a8aa" data-color="2"></path>
                      <path d="M36.21 62.9a16.37 16.37 0 0 0-6.14-4.35 21.76 21.76 0 0 0-8.74-1.67q-7.21 0-10.51 2.81a9.5 9.5 0 0 0-3.3 7.63 8.64 8.64 0 0 0 .88 4.16 7.88 7.88 0 0 0 2.72 2.8 18.84 18.84 0 0 0 4.72 2.06q2.88.87 6.79 1.74a68.66 68.66 0 0 1 7.86 2.14 22.49 22.49 0 0 1 5.95 3 12.16 12.16 0 0 1 3.76 4.31 13.75 13.75 0 0 1 1.3 6.33 14.6 14.6 0 0 1-1.45 6.72 13.4 13.4 0 0 1-4.05 4.71 17.86 17.86 0 0 1-6.21 2.8 32.17 32.17 0 0 1-7.91.91A31.91 31.91 0 0 1 0 100.86l2.68-4.51a21 21 0 0 0 3.5 3 25.37 25.37 0 0 0 4.52 2.5 28.57 28.57 0 0 0 5.3 1.66 29.68 29.68 0 0 0 6 .59q6.51 0 10.16-2.41a8.19 8.19 0 0 0 3.65-7.32 8.62 8.62 0 0 0-1-4.39 9.16 9.16 0 0 0-3.11-3.08 21.87 21.87 0 0 0-5.14-2.26q-3.06-.94-7.13-1.89c-2.87-.69-5.37-1.4-7.52-2.14a19.88 19.88 0 0 1-5.45-2.77 10.67 10.67 0 0 1-3.33-4A13.17 13.17 0 0 1 2 68.11a16.33 16.33 0 0 1 1.42-6.92 13.67 13.67 0 0 1 4-5.06 18.94 18.94 0 0 1 6.14-3.08A27 27 0 0 1 21.4 52a26.11 26.11 0 0 1 9.71 1.7 26 26 0 0 1 7.71 4.79Z" fill="#3dc3df" data-color="1"></path>
                      <path d="M48.64 108.53V52.38h22.55a13.74 13.74 0 0 1 6.48 1.54 17.31 17.31 0 0 1 5.11 4 19.31 19.31 0 0 1 3.37 5.66A17.53 17.53 0 0 1 87.38 70a19.61 19.61 0 0 1-1.15 6.69A18.27 18.27 0 0 1 83 82.35a16.31 16.31 0 0 1-5 4 13.67 13.67 0 0 1-6.41 1.5H54v20.72ZM54 82.9h17.42a8.94 8.94 0 0 0 4.34-1.06A10.58 10.58 0 0 0 79.09 79a13.62 13.62 0 0 0 2.15-4.11A15.56 15.56 0 0 0 82 70a14 14 0 0 0-.88-4.94A13.55 13.55 0 0 0 78.75 61a11 11 0 0 0-3.53-2.73 9.64 9.64 0 0 0-4.26-1H54Z" fill="#3dc3df" data-color="1"></path>
                      <path d="M238.86 57.28h-19v51.25h-5.26V57.28h-19v-4.9h43.28Z" fill="#a6a8aa" data-color="2"></path>
                      <path d="M246.9 108.53V52.38h5.26v51.25H283v4.9Z" fill="#a6a8aa" data-color="2"></path>
                      <path d="M326.61 103.63v4.9h-35.83V52.38h35.16v4.9H296v20.25h26.08v4.66H296v21.44Z" fill="#a6a8aa" data-color="2"></path>
                      <path d="M366.66 62.9a16.1 16.1 0 0 0-6-4.35 21 21 0 0 0-8.57-1.67c-4.7 0-8.14.94-10.29 2.81a9.6 9.6 0 0 0-3.23 7.63 8.89 8.89 0 0 0 .86 4.16 7.8 7.8 0 0 0 2.67 2.8 18.17 18.17 0 0 0 4.62 2.06q2.82.87 6.65 1.74a66.62 66.62 0 0 1 7.7 2.14 22 22 0 0 1 5.83 3 12.13 12.13 0 0 1 3.68 4.31 14 14 0 0 1 1.27 6.33 14.86 14.86 0 0 1-1.42 6.72 13.28 13.28 0 0 1-4 4.75 17.28 17.28 0 0 1-6.08 2.8 32.5 32.5 0 0 1-29.15-7.23l2.63-4.51a20.28 20.28 0 0 0 3.42 3 24.51 24.51 0 0 0 4.43 2.5 27.68 27.68 0 0 0 5.22 1.66 28.4 28.4 0 0 0 5.86.59q6.39 0 10-2.41a8.25 8.25 0 0 0 3.56-7.32 8.72 8.72 0 0 0-1-4.39 9.1 9.1 0 0 0-3-3.08 21.36 21.36 0 0 0-5-2.26q-3-.94-7-1.89c-2.81-.69-5.26-1.4-7.37-2.14a19.22 19.22 0 0 1-5.33-2.77 10.59 10.59 0 0 1-3.27-4 13.48 13.48 0 0 1-1.09-5.74 16.48 16.48 0 0 1 1.39-6.92 13.56 13.56 0 0 1 3.95-5.06 18.27 18.27 0 0 1 6-3.08 25.88 25.88 0 0 1 7.56-1.08 25 25 0 0 1 9.5 1.7 25.49 25.49 0 0 1 7.56 4.79Z" fill="#a6a8aa" data-color="2"></path>
                      <path d="M412.34 62.9a16.1 16.1 0 0 0-6-4.35 20.92 20.92 0 0 0-8.56-1.67q-7.06 0-10.3 2.81a9.6 9.6 0 0 0-3.23 7.63 8.76 8.76 0 0 0 .87 4.16 7.68 7.68 0 0 0 2.66 2.8 18.17 18.17 0 0 0 4.62 2.06q2.82.87 6.65 1.74a66.62 66.62 0 0 1 7.7 2.14 22 22 0 0 1 5.83 3 12.13 12.13 0 0 1 3.68 4.31 14 14 0 0 1 1.28 6.33 14.86 14.86 0 0 1-1.43 6.72 13.25 13.25 0 0 1-4 4.75 17.42 17.42 0 0 1-6.09 2.8 32.5 32.5 0 0 1-29.15-7.23l2.63-4.51a20.28 20.28 0 0 0 3.42 3 24.51 24.51 0 0 0 4.43 2.5 27.68 27.68 0 0 0 5.22 1.66 28.4 28.4 0 0 0 5.86.59q6.39 0 10-2.41a8.24 8.24 0 0 0 3.57-7.36 8.72 8.72 0 0 0-1-4.37 9 9 0 0 0-3-3.08 21.18 21.18 0 0 0-5-2.26q-3-.94-7-1.89c-2.81-.69-5.26-1.4-7.37-2.14a19.22 19.22 0 0 1-5.33-2.77 10.69 10.69 0 0 1-3.27-4 13.48 13.48 0 0 1-1.09-5.74 16.48 16.48 0 0 1 1.39-6.92 13.56 13.56 0 0 1 3.95-5.06 18.27 18.27 0 0 1 6-3.08 25.88 25.88 0 0 1 7.56-1.06 25.08 25.08 0 0 1 9.51 1.7 25.57 25.57 0 0 1 7.55 4.79Z" fill="#a6a8aa" data-color="2"></path>
                      <path d="M470.22 52.38v56.15h-5V82.27h-30.35v26.26h-5.05V52.38h5.05v25h30.37v-25Z" fill="#3dc3df" data-color="1"></path>
                      <path d="M499 52.38h4.26l21.28 56.15h-5.34L512.56 91h-23L483 108.53h-5.41Zm12.41 34.24-10.32-27.76-10.46 27.76Z" fill="#3dc3df" data-color="1"></path>
                      <path d="M532 108.53V52.38h5v56.15Z" fill="#3dc3df" data-color="1"></path>
                      <path d="M549.93 108.53V52.38h21.64a12.34 12.34 0 0 1 6.1 1.54 16.44 16.44 0 0 1 4.8 4A19.62 19.62 0 0 1 586.72 70a20.87 20.87 0 0 1-.83 5.9 18.86 18.86 0 0 1-2.31 5.1 14.35 14.35 0 0 1-3.58 3.76 12 12 0 0 1-4.69 2.1l12.56 21.67h-5.7l-12-20.72H555v20.72ZM555 82.9h16.74a8 8 0 0 0 4.07-1.06 9.93 9.93 0 0 0 3.12-2.84 14.32 14.32 0 0 0 2-4.11 16 16 0 0 0 .72-4.83 14.51 14.51 0 0 0-.83-4.86 13.75 13.75 0 0 0-2.23-4.07 10.85 10.85 0 0 0-3.32-2.77 8.31 8.31 0 0 0-4-1H555Z" fill="#3dc3df" data-color="1"></path>
                      <path d="M359 158.37h-8.23c-.91 4.92-4.16 7.51-9.71 7.84V163c4.45 0 6.69-2.44 6.69-8.09v-18.26h3.35V155h7.9Z" fill="#3dc3df" data-color="1"></path>
                      <path d="M374.42 158.37h-16.5v-3.3H361c2.06 0 3.4-.67 4.07-2a10.62 10.62 0 0 0 .71-4.63v-11.79h3.35V150a11.74 11.74 0 0 1-.91 5.07h6.22Zm-11.52 7.32h-3.4v-4.07h3.4Zm6.26 0h-3.4v-4.07h3.4Z" fill="#3dc3df" data-color="1"></path>
                      <path d="M404.51 158.37h-30.9v-3.3h8.18a10 10 0 0 1-2.16-6.6c0-5.31 3.4-9.33 8.66-9.33s8.47 3.68 8.47 9.28a9.78 9.78 0 0 1-2.25 6.6h7a17 17 0 0 0 .43-3.88 16 16 0 0 0-11.24-15.69V132c3.73.67 8.56 3.92 11.1 7.7a21.06 21.06 0 0 1 3.39 12.1 31.12 31.12 0 0 1-.68 6.57Zm-11.2-10.14c0-4.12-1.77-6.32-4.87-6.32-3.45 0-5.31 2.49-5.31 6.75 0 3.73 1.86 6.36 5.11 6.36s5.07-2.25 5.07-6.79Z" fill="#3dc3df" data-color="1"></path>
                      <path d="M476.87 158.37h-33.62a3.67 3.67 0 0 0-.19-1.15c-2.11 5.74-6.89 9.09-12.2 9.09-7.61 0-13.54-6.8-13.54-16.46v-13.2h3.35v12.53c0 8.37 3.92 13.87 10.19 13.87 5.79 0 9.42-4.54 10-12v-14.4h3.45v13.2a21.54 21.54 0 0 1-.58 5.17h6c3.07 0 4.07-1.48 4.07-6.55v-11.82h3.35V150a11.89 11.89 0 0 1-.91 5.07H462c3.59 0 4.78-1.53 4.78-6.55v-11.87h3.35V150a11.84 11.84 0 0 1-1 5.07h7.7Z" fill="#a6a8aa" data-color="2"></path>
                      <path d="M492.51 158.37H476v-3.3h3.06c2.06 0 3.4-.67 4.07-2a10.77 10.77 0 0 0 .71-4.63v-21h3.35V150a11.89 11.89 0 0 1-.91 5.07h6.22Z" fill="#a6a8aa" data-color="2"></path>
                      <path d="M503.18 136.65V150c0 5.59-2.35 8.42-7 8.42h-4.21v-3.3H495c2.06 0 3.4-.67 4.07-2a10.26 10.26 0 0 0 .72-4.59v-11.88Zm-6.27-3.44h-3.4v-4.07h3.4Zm6.27 0h-3.4v-4.07h3.4Z" fill="#a6a8aa" data-color="2"></path>
                      <path d="M532.64 158.37H526c-1 4.92-4.21 7.51-9.71 7.84V163h.43c3.06 0 5-1.58 5.83-4.64h-5.21a8.22 8.22 0 0 1-6.6-3.06 11.68 11.68 0 0 1-2.58-7.75 11.51 11.51 0 0 1 2.72-7.8 8.87 8.87 0 0 1 6.89-3.16c5.31 0 8.61 3.26 8.61 9.57v8.9h6.22ZM523 155v-10.07a5.07 5.07 0 0 0-5.36-5.22 5.22 5.22 0 0 0-4.45 2.54 8.74 8.74 0 0 0-1.53 5 9.59 9.59 0 0 0 1.34 5.12 5 5 0 0 0 4.45 2.73Z" fill="#a6a8aa" data-color="2"></path>
                      <path d="M548.18 158.37h-16.5v-3.3h3.06c2.06 0 3.4-.67 4.07-2a10.62 10.62 0 0 0 .71-4.63v-11.79h3.35V150a11.74 11.74 0 0 1-.87 5h6.22Zm-5.31 7.27h-3.39v-4.07h3.39Z" fill="#a6a8aa" data-color="2"></path>
                      <path d="M585.83 136.65V150c0 5.59-2.35 8.42-7.08 8.42h-31.67V155h4.45c3.06 0 4.73-2.06 5.07-6.12v-12.23h3.4V150a13.12 13.12 0 0 1-.81 4.88v.12h6.26c3.06 0 4.07-1.48 4.07-6.55v-11.8h3.35V150a11.89 11.89 0 0 1-.91 5.07h5.74c3.58 0 4.78-1.48 4.78-6.55v-11.87Z" fill="#a6a8aa" data-color="2"></path>
                    </g>
                  </svg>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div aria-label="burger-menu">
          <button id="menu" aria-label="open menu" onclick="sidebarHandler(true)" class="burger">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <line x1="4" y1="6" x2="20" y2="6" />
              <line x1="4" y1="12" x2="20" y2="12" />
              <line x1="4" y1="18" x2="20" y2="18" />
            </svg>
          </button>
        </div>
      </div>
    </div>
    <!--Mobile responsive sidebar-->
    <div class="mob-nav" id="mobile-nav">
      <!-- <div class="mob-nav2" onclick="sidebarHandler(false)"></div> -->
      <div class="mob-nav3">
        <div class="mob-nav4">
          <div class="mob-nav5">
            <div>
              <div class="mob-nav6">
              <div class="mainLogo">
            <a href="<?php echo USER_REGISTRATION_BASIC; ?>login">
              <!-- <img src="<?php echo SPOTLESSHAIRASSETS; ?>WebsiteImages/Logo/blacklogo.png" alt="img"> -->
              <div class="spot-logo">
                <div data-testid="svgRoot-comp-l9edrt6j">
                  <svg preserveAspectRatio="xMidYMid meet" data-bbox="0 0 587.87 166.31" viewBox="0 0 587.87 166.31" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true">
                    <defs>
                      <!-- <style>
                        #comp-l9edrt6j svg [data-color="1"] {
                          fill: #0ABBB5;
                        }
                      </style> -->
                    </defs>
                    <g>
                      <path d="M117.63 124.11a52.73 52.73 0 0 1 25.91-98.66h.75v3.92h-.71a48.81 48.81 0 0 0-24 91.33Z" fill="#3dc3df" data-color="1"></path>
                      <path d="M143.54 130.9c-1 0-2 0-3-.08l.22-3.92c.92 0 1.86.08 2.8.08a48.81 48.81 0 0 0 25.27-90.57l2-3.35a52.73 52.73 0 0 1-27.3 97.84Z" fill="#a6a8aa" data-color="2"></path>
                      <path d="M143.46 0a72.55 72.55 0 0 1 6.48 38c-.15 1.63-.36 3.25-.6 4.87s-.56 3.23-.91 4.83-.73 3.18-1.21 4.81-1.05 3.18-1.67 4.71c-1.22 3.08-2.71 6-4.13 8.85l-4.24 8.62c-2.9 5.73-5.88 11.37-8.56 17.09-1.33 2.86-2.6 5.74-3.71 8.67s-2.07 5.9-2.89 8.92c-3.15 12.08-2.74 25 .16 37.51a67.27 67.27 0 0 1-3.73-38.33 94 94 0 0 1 6.11-18.6c2.59-6 5.56-11.68 8.43-17.38l4.33-8.57c1.47-2.85 2.89-5.66 4.14-8.5.62-1.42 1.19-2.84 1.68-4.29s.9-2.94 1.29-4.46c.76-3 1.4-6.1 1.88-9.2A86.12 86.12 0 0 0 143.46 0Z" fill="#3dc3df" data-color="1"></path>
                      <path d="M157.36 13.5c2.22 11.12 3.22 22.69 1.33 34.12a50.13 50.13 0 0 1-2.05 8.46 65.87 65.87 0 0 1-3.39 8c-2.6 5.16-5.65 10-8.35 14.9s-5.36 9.91-7.62 15a95.88 95.88 0 0 0-5.55 15.8 85.18 85.18 0 0 0-2.31 16.63 108 108 0 0 0 .74 16.93 83.71 83.71 0 0 1-2.28-16.94 76.67 76.67 0 0 1 1.46-17.15 88.89 88.89 0 0 1 5.21-16.45 161.7 161.7 0 0 1 7.61-15.39c2.81-5 5.86-9.78 8.45-14.72a62 62 0 0 0 3.44-7.57c.48-1.3.89-2.61 1.26-3.94l.53-2 .46-2a91.24 91.24 0 0 0 1.7-16.71 169.28 169.28 0 0 0-.64-16.97Z" fill="#3dc3df" data-color="1"></path>
                      <path d="M163.91 10a61.42 61.42 0 0 1 6 37.34c-1 6.41-3.18 12.53-5.44 18.44-2.35 6.08-5.7 11.6-8.91 17-1.62 2.71-3.24 5.4-4.68 8.16s-2.77 5.59-4 8.47a86.3 86.3 0 0 0-5.24 17.9 83.54 83.54 0 0 0 2.18 37.28 74.24 74.24 0 0 1-4.6-37.66 82.94 82.94 0 0 1 4.9-18.63 112.39 112.39 0 0 1 8.71-17.12c3.28-5.43 6.53-10.79 8.84-16.51 1.19-2.93 2.36-5.84 3.36-8.8a72.24 72.24 0 0 0 2.44-9A67.08 67.08 0 0 0 163.91 10Z" fill="#a6a8aa" data-color="2"></path>
                      <path d="M36.21 62.9a16.37 16.37 0 0 0-6.14-4.35 21.76 21.76 0 0 0-8.74-1.67q-7.21 0-10.51 2.81a9.5 9.5 0 0 0-3.3 7.63 8.64 8.64 0 0 0 .88 4.16 7.88 7.88 0 0 0 2.72 2.8 18.84 18.84 0 0 0 4.72 2.06q2.88.87 6.79 1.74a68.66 68.66 0 0 1 7.86 2.14 22.49 22.49 0 0 1 5.95 3 12.16 12.16 0 0 1 3.76 4.31 13.75 13.75 0 0 1 1.3 6.33 14.6 14.6 0 0 1-1.45 6.72 13.4 13.4 0 0 1-4.05 4.71 17.86 17.86 0 0 1-6.21 2.8 32.17 32.17 0 0 1-7.91.91A31.91 31.91 0 0 1 0 100.86l2.68-4.51a21 21 0 0 0 3.5 3 25.37 25.37 0 0 0 4.52 2.5 28.57 28.57 0 0 0 5.3 1.66 29.68 29.68 0 0 0 6 .59q6.51 0 10.16-2.41a8.19 8.19 0 0 0 3.65-7.32 8.62 8.62 0 0 0-1-4.39 9.16 9.16 0 0 0-3.11-3.08 21.87 21.87 0 0 0-5.14-2.26q-3.06-.94-7.13-1.89c-2.87-.69-5.37-1.4-7.52-2.14a19.88 19.88 0 0 1-5.45-2.77 10.67 10.67 0 0 1-3.33-4A13.17 13.17 0 0 1 2 68.11a16.33 16.33 0 0 1 1.42-6.92 13.67 13.67 0 0 1 4-5.06 18.94 18.94 0 0 1 6.14-3.08A27 27 0 0 1 21.4 52a26.11 26.11 0 0 1 9.71 1.7 26 26 0 0 1 7.71 4.79Z" fill="#3dc3df" data-color="1"></path>
                      <path d="M48.64 108.53V52.38h22.55a13.74 13.74 0 0 1 6.48 1.54 17.31 17.31 0 0 1 5.11 4 19.31 19.31 0 0 1 3.37 5.66A17.53 17.53 0 0 1 87.38 70a19.61 19.61 0 0 1-1.15 6.69A18.27 18.27 0 0 1 83 82.35a16.31 16.31 0 0 1-5 4 13.67 13.67 0 0 1-6.41 1.5H54v20.72ZM54 82.9h17.42a8.94 8.94 0 0 0 4.34-1.06A10.58 10.58 0 0 0 79.09 79a13.62 13.62 0 0 0 2.15-4.11A15.56 15.56 0 0 0 82 70a14 14 0 0 0-.88-4.94A13.55 13.55 0 0 0 78.75 61a11 11 0 0 0-3.53-2.73 9.64 9.64 0 0 0-4.26-1H54Z" fill="#3dc3df" data-color="1"></path>
                      <path d="M238.86 57.28h-19v51.25h-5.26V57.28h-19v-4.9h43.28Z" fill="#a6a8aa" data-color="2"></path>
                      <path d="M246.9 108.53V52.38h5.26v51.25H283v4.9Z" fill="#a6a8aa" data-color="2"></path>
                      <path d="M326.61 103.63v4.9h-35.83V52.38h35.16v4.9H296v20.25h26.08v4.66H296v21.44Z" fill="#a6a8aa" data-color="2"></path>
                      <path d="M366.66 62.9a16.1 16.1 0 0 0-6-4.35 21 21 0 0 0-8.57-1.67c-4.7 0-8.14.94-10.29 2.81a9.6 9.6 0 0 0-3.23 7.63 8.89 8.89 0 0 0 .86 4.16 7.8 7.8 0 0 0 2.67 2.8 18.17 18.17 0 0 0 4.62 2.06q2.82.87 6.65 1.74a66.62 66.62 0 0 1 7.7 2.14 22 22 0 0 1 5.83 3 12.13 12.13 0 0 1 3.68 4.31 14 14 0 0 1 1.27 6.33 14.86 14.86 0 0 1-1.42 6.72 13.28 13.28 0 0 1-4 4.75 17.28 17.28 0 0 1-6.08 2.8 32.5 32.5 0 0 1-29.15-7.23l2.63-4.51a20.28 20.28 0 0 0 3.42 3 24.51 24.51 0 0 0 4.43 2.5 27.68 27.68 0 0 0 5.22 1.66 28.4 28.4 0 0 0 5.86.59q6.39 0 10-2.41a8.25 8.25 0 0 0 3.56-7.32 8.72 8.72 0 0 0-1-4.39 9.1 9.1 0 0 0-3-3.08 21.36 21.36 0 0 0-5-2.26q-3-.94-7-1.89c-2.81-.69-5.26-1.4-7.37-2.14a19.22 19.22 0 0 1-5.33-2.77 10.59 10.59 0 0 1-3.27-4 13.48 13.48 0 0 1-1.09-5.74 16.48 16.48 0 0 1 1.39-6.92 13.56 13.56 0 0 1 3.95-5.06 18.27 18.27 0 0 1 6-3.08 25.88 25.88 0 0 1 7.56-1.08 25 25 0 0 1 9.5 1.7 25.49 25.49 0 0 1 7.56 4.79Z" fill="#a6a8aa" data-color="2"></path>
                      <path d="M412.34 62.9a16.1 16.1 0 0 0-6-4.35 20.92 20.92 0 0 0-8.56-1.67q-7.06 0-10.3 2.81a9.6 9.6 0 0 0-3.23 7.63 8.76 8.76 0 0 0 .87 4.16 7.68 7.68 0 0 0 2.66 2.8 18.17 18.17 0 0 0 4.62 2.06q2.82.87 6.65 1.74a66.62 66.62 0 0 1 7.7 2.14 22 22 0 0 1 5.83 3 12.13 12.13 0 0 1 3.68 4.31 14 14 0 0 1 1.28 6.33 14.86 14.86 0 0 1-1.43 6.72 13.25 13.25 0 0 1-4 4.75 17.42 17.42 0 0 1-6.09 2.8 32.5 32.5 0 0 1-29.15-7.23l2.63-4.51a20.28 20.28 0 0 0 3.42 3 24.51 24.51 0 0 0 4.43 2.5 27.68 27.68 0 0 0 5.22 1.66 28.4 28.4 0 0 0 5.86.59q6.39 0 10-2.41a8.24 8.24 0 0 0 3.57-7.36 8.72 8.72 0 0 0-1-4.37 9 9 0 0 0-3-3.08 21.18 21.18 0 0 0-5-2.26q-3-.94-7-1.89c-2.81-.69-5.26-1.4-7.37-2.14a19.22 19.22 0 0 1-5.33-2.77 10.69 10.69 0 0 1-3.27-4 13.48 13.48 0 0 1-1.09-5.74 16.48 16.48 0 0 1 1.39-6.92 13.56 13.56 0 0 1 3.95-5.06 18.27 18.27 0 0 1 6-3.08 25.88 25.88 0 0 1 7.56-1.06 25.08 25.08 0 0 1 9.51 1.7 25.57 25.57 0 0 1 7.55 4.79Z" fill="#a6a8aa" data-color="2"></path>
                      <path d="M470.22 52.38v56.15h-5V82.27h-30.35v26.26h-5.05V52.38h5.05v25h30.37v-25Z" fill="#3dc3df" data-color="1"></path>
                      <path d="M499 52.38h4.26l21.28 56.15h-5.34L512.56 91h-23L483 108.53h-5.41Zm12.41 34.24-10.32-27.76-10.46 27.76Z" fill="#3dc3df" data-color="1"></path>
                      <path d="M532 108.53V52.38h5v56.15Z" fill="#3dc3df" data-color="1"></path>
                      <path d="M549.93 108.53V52.38h21.64a12.34 12.34 0 0 1 6.1 1.54 16.44 16.44 0 0 1 4.8 4A19.62 19.62 0 0 1 586.72 70a20.87 20.87 0 0 1-.83 5.9 18.86 18.86 0 0 1-2.31 5.1 14.35 14.35 0 0 1-3.58 3.76 12 12 0 0 1-4.69 2.1l12.56 21.67h-5.7l-12-20.72H555v20.72ZM555 82.9h16.74a8 8 0 0 0 4.07-1.06 9.93 9.93 0 0 0 3.12-2.84 14.32 14.32 0 0 0 2-4.11 16 16 0 0 0 .72-4.83 14.51 14.51 0 0 0-.83-4.86 13.75 13.75 0 0 0-2.23-4.07 10.85 10.85 0 0 0-3.32-2.77 8.31 8.31 0 0 0-4-1H555Z" fill="#3dc3df" data-color="1"></path>
                      <path d="M359 158.37h-8.23c-.91 4.92-4.16 7.51-9.71 7.84V163c4.45 0 6.69-2.44 6.69-8.09v-18.26h3.35V155h7.9Z" fill="#3dc3df" data-color="1"></path>
                      <path d="M374.42 158.37h-16.5v-3.3H361c2.06 0 3.4-.67 4.07-2a10.62 10.62 0 0 0 .71-4.63v-11.79h3.35V150a11.74 11.74 0 0 1-.91 5.07h6.22Zm-11.52 7.32h-3.4v-4.07h3.4Zm6.26 0h-3.4v-4.07h3.4Z" fill="#3dc3df" data-color="1"></path>
                      <path d="M404.51 158.37h-30.9v-3.3h8.18a10 10 0 0 1-2.16-6.6c0-5.31 3.4-9.33 8.66-9.33s8.47 3.68 8.47 9.28a9.78 9.78 0 0 1-2.25 6.6h7a17 17 0 0 0 .43-3.88 16 16 0 0 0-11.24-15.69V132c3.73.67 8.56 3.92 11.1 7.7a21.06 21.06 0 0 1 3.39 12.1 31.12 31.12 0 0 1-.68 6.57Zm-11.2-10.14c0-4.12-1.77-6.32-4.87-6.32-3.45 0-5.31 2.49-5.31 6.75 0 3.73 1.86 6.36 5.11 6.36s5.07-2.25 5.07-6.79Z" fill="#3dc3df" data-color="1"></path>
                      <path d="M476.87 158.37h-33.62a3.67 3.67 0 0 0-.19-1.15c-2.11 5.74-6.89 9.09-12.2 9.09-7.61 0-13.54-6.8-13.54-16.46v-13.2h3.35v12.53c0 8.37 3.92 13.87 10.19 13.87 5.79 0 9.42-4.54 10-12v-14.4h3.45v13.2a21.54 21.54 0 0 1-.58 5.17h6c3.07 0 4.07-1.48 4.07-6.55v-11.82h3.35V150a11.89 11.89 0 0 1-.91 5.07H462c3.59 0 4.78-1.53 4.78-6.55v-11.87h3.35V150a11.84 11.84 0 0 1-1 5.07h7.7Z" fill="#a6a8aa" data-color="2"></path>
                      <path d="M492.51 158.37H476v-3.3h3.06c2.06 0 3.4-.67 4.07-2a10.77 10.77 0 0 0 .71-4.63v-21h3.35V150a11.89 11.89 0 0 1-.91 5.07h6.22Z" fill="#a6a8aa" data-color="2"></path>
                      <path d="M503.18 136.65V150c0 5.59-2.35 8.42-7 8.42h-4.21v-3.3H495c2.06 0 3.4-.67 4.07-2a10.26 10.26 0 0 0 .72-4.59v-11.88Zm-6.27-3.44h-3.4v-4.07h3.4Zm6.27 0h-3.4v-4.07h3.4Z" fill="#a6a8aa" data-color="2"></path>
                      <path d="M532.64 158.37H526c-1 4.92-4.21 7.51-9.71 7.84V163h.43c3.06 0 5-1.58 5.83-4.64h-5.21a8.22 8.22 0 0 1-6.6-3.06 11.68 11.68 0 0 1-2.58-7.75 11.51 11.51 0 0 1 2.72-7.8 8.87 8.87 0 0 1 6.89-3.16c5.31 0 8.61 3.26 8.61 9.57v8.9h6.22ZM523 155v-10.07a5.07 5.07 0 0 0-5.36-5.22 5.22 5.22 0 0 0-4.45 2.54 8.74 8.74 0 0 0-1.53 5 9.59 9.59 0 0 0 1.34 5.12 5 5 0 0 0 4.45 2.73Z" fill="#a6a8aa" data-color="2"></path>
                      <path d="M548.18 158.37h-16.5v-3.3h3.06c2.06 0 3.4-.67 4.07-2a10.62 10.62 0 0 0 .71-4.63v-11.79h3.35V150a11.74 11.74 0 0 1-.87 5h6.22Zm-5.31 7.27h-3.39v-4.07h3.39Z" fill="#a6a8aa" data-color="2"></path>
                      <path d="M585.83 136.65V150c0 5.59-2.35 8.42-7.08 8.42h-31.67V155h4.45c3.06 0 4.73-2.06 5.07-6.12v-12.23h3.4V150a13.12 13.12 0 0 1-.81 4.88v.12h6.26c3.06 0 4.07-1.48 4.07-6.55v-11.8h3.35V150a11.89 11.89 0 0 1-.91 5.07h5.74c3.58 0 4.78-1.48 4.78-6.55v-11.87Z" fill="#a6a8aa" data-color="2"></path>
                    </g>
                  </svg>
                </div>
              </div>
            </a>
          </div>
                <div class="flex w-full items-end justify-end">
                  <div class="flex items-center justify-end w-full">
                    <a id="cross" aria-label="close menu" class="focus:outline-none focus:ring-2 rounded-md text-gray-800" onclick="sidebarHandler(false)">
                      <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/hero_5_Svg3.svg" alt="cross" />
                    </a>
                  </div>
                </div>
              </div>
              <div aria-label="li-main" class="flex items-center gap4 flex-col">
                <div aria-label="nav-list" class="w-ul">
                  <ul class="flex gap5 w-full flex-col">
                    <!-- <li>Home</li> -->
                    <a href="<?php echo USER_REGISTRATION_BASIC; ?>packages">
                      <li>Our services</li>
                    </a>
                    <li>Our programs</li>
                    <li>Franchise</li>
                    <a href="<?php echo USER_REGISTRATION_BASIC; ?>about">
                      <li>Connect us</li>
                    </a>
                  </ul>
                </div>
                <div aria-label="button" class="book-free-call w-full">
                  <button>Get Registered</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end -->
    <!--  -->
  </div>
  <script>
      function toggle(){
        window.location.href ="<?php echo USER_REGISTRATION_BASIC;?>indexurdu"
      }
    </script>