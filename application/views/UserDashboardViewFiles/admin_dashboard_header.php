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
  <!-- Caro -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.1/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <!-- End -->
  <!-- Noto Nastiliq -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- End -->
  <!-- For calendar -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap-grid.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <!-- End -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo SPOTLESSHAIRASSETS . 'custom/style.css'; ?>" />
  <link rel="stylesheet" href="<?php echo SPOTLESSHAIRASSETS . 'custom/csstwo.css'; ?>" />
  <link rel="stylesheet" href="<?php echo SPOTLESSHAIRASSETS . 'custom/calendar.css'; ?>" />
  <title><?php echo isset($page_title) ? $page_title : ''; ?> </title>

  <!-- For Arabic Language -->
  <style>
    <?php if (isset($direction_Bit) && !empty($direction_Bit) && $direction_Bit == "2") { ?>body {
      direction: rtl;
    }

    body {
      font-family: 'Times New Roman', serif !important;
      overflow-x: hidden;
    }

    .right-dir {
      text-align: right;
    }

    .noto {
      font-family: 'Times New Roman', serif !important;
    }

    .noto-font {
      font-size: 16px !important;
    }

    .line-normal {
      line-height: normal !important;
    }
    .line110 {
      line-height: 110px !important;
    }

    .sidebar>div {
      display: flex;
      flex-direction: column;
      align-items: start;
      justify-content: start;
      gap: 50px;
      color: black;
      padding-left: 20px;
      padding-right: 20px;
      padding-top: 30px;
      /* margin-right: 20px; */
    }

    .dash-side {
      display: flex;
      gap: 12px;
      align-items: center;
      color: white;
      /* padding-left: 10px; */
      font-size: 18px;
    }

    .sidebar {
      width: 270px;
      height: 100%;
    }

    .spot-logo {
      width: 200px;
    }
    .pr5{
      padding-right: 0px!important;
      padding-left: 20px!important;
    }
    .pl10{
      padding-left: 10px!important;
    }
    .bell-ringing{
      margin-top: 8px;
    }
    .crosssidebar{
  color:white;font-size:40px;position: absolute; left:20px; top: 45px;
}

@media (max-width: 1200px) {
  .sidebarMainParent {
    display: flex;
    justify-content: space-between;
    align-items: start;
    /* flex-direction: column; */
    gap: 40px;
    width: 100%;
    padding-bottom: 50px;
  }
  .sidebar {
    width: 100% !important;
    height: 100% !important;
    padding-bottom: 50px !important;
    display: flex;
    justify-content: start !important;
    align-items: start !important;
    transform: translateX(1200px);
    -webkit-transition: all 0.5s ease 0s;
    -moz-transition: all 0.5s ease 0s;
    -o-transition: all 0.5s ease 0s;
    transition: all 0.5s ease 0s;
    position: fixed;
    z-index: 20000;
  }
}
.translateFull {
  transform: translateX(0px) !important;
  -webkit-transition: all 0.5s ease 0s;
  -moz-transition: all 0.5s ease 0s;
  -o-transition: all 0.5s ease 0s;
  transition: all 0.5s ease 0s;
}
.burger{
  cursor: pointer; position: absolute;top: 45px; left: 20px; z-index: 20000;
}
.spot-dash-logo{
cursor: pointer; position: absolute;top: 45px; right: 20px; z-index: 20000;
}
    /* start */

    <?php } ?>#more {
      transition: opacity 3s;
    }
      /* body {
    font-family: "Roboto", sans-serif !important;
  }
  .roboto{
    font-family: "Roboto", sans-serif !important;
  } */
  </style>
  <!-- End -->
</head>

<body>
  <div class="sidebarMainParent">
    <?php include('adminSidebar.php'); ?>
    <!-- Buttons-Aria -->
    <di class="col-xl-10 col-12 responsiveMargin" style="padding: 0px;">
      <!-- Buttons-Aria -->
      
      <div class="flex justify-content-end items-center px-5 py-4" style="margin: 0px; background-color: #f3f3f3;">
      
        <div class="flex items-center gap5 wrap">
       
         
          <a href="<?php echo USER_REGISTRATION_BASIC . 'admin_logout'; ?>">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout " width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
              <path d="M7 12h14l-3 -3m0 6l3 -3" />
            </svg>
          </a>


        </div>
      </div>
      <!-- End -->
      <!-- Content Aria -->