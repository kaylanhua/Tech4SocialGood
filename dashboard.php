<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />

    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Page-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.5.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
</head>
<body>
    
    <section class="u-clearfix u-palette-1-base u-section-6" id="carousel_5bfa">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-42 u-layout-cell-1">
                <div class="u-container-layout u-valign-top u-container-layout-1">
                  <h1 class="u-text u-text-1">hey, <?php echo $_SESSION['username']; ?>! you are now logged into the user dashboard page.</h1>
                  <p class="u-text u-text-2">Toggle through the map below to see where vaccine rollout has been most successful. </p>
                  <p>You may also choose to <a href="logout.php">logout</a>.</p>
                </div>
              </div>
              <div class="u-align-right u-container-style u-layout-cell u-right-cell u-size-18 u-layout-cell-2">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
         <img src="images/whobanner.jpg" alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="562" data-image-height="750">
    
    
    <section class="u-align-left u-clearfix u-palette-1-light-2 u-typography-Normal--Introduction u-section-4" src="" id="carousel_4c8c">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-text-1">different types of vaccines</h1>
            <h5 class="u-text u-text-2">according to the WHO</h5>
            <div class="u-expanded-width u-list u-repeater u-list-1">
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle">
                <div class="u-container-layout u-similar-container u-container-layout-1">
                <h3 class="u-text u-text-3">Moderna Vaccine</h3>
                <p class="u-text u-text-grey-50 u-text-4">Moderna, NIAID vaccine is a COVID-19 vaccine authorized by FDA and recommended by the CDC for use in the US for a limited population.Manufacturer/developer: Moderna, NIAID</p>
                </div>
            </div>
            <div class="u-align-left u-container-style u-custom-background u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-2">
                <div class="u-container-layout u-similar-container u-container-layout-2">
                <h3 class="u-text u-text-5">Pfizer-BioNTech Vaccine</h3>
                <p class="u-text u-text-grey-50 u-text-6">BioNTech, Fosun Pharma, Pfizer vaccine is a COVID-19 vaccine authorized by FDA and recommended by the CDC for use in the US for a limited population. Manufacturer/developer: BioNTech, Fosun Pharma, Pfizer</p>
                </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover">
                <div class="u-container-layout u-similar-container u-container-layout-3">
                <h3 class="u-text u-text-7">AstraZeneca Vaccine</h3>
                <p class="u-text u-text-grey-50 u-text-8">Vaccines in Phase 3 Clinical Trials: As of December 28, 2020, large-scale (Phase 3) clinical trials are in progress or being planned for three COVID-19 vaccines in the United States. This vaccine is one of them.</p>
                </div>
            </div>
            <div class="u-align-left u-container-style u-custom-background u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-4">
                <div class="u-container-layout u-similar-container u-container-layout-4">
                <h3 class="u-text u-text-9">Janssen Vaccine</h3>
                <p class="u-text u-text-grey-50 u-text-10">Vaccines in Phase 3 Clinical Trials: As of December 28, 2020, large-scale (Phase 3) clinical trials are in progress or being planned for three COVID-19 vaccines in the United States. This vaccine is one of them.</p>
                </div>
            </div>
            </div>
        </div>
        </section>
        
        <section class="u-align-left u-clearfix u-section-7" id="carousel_8ffb">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1">view the map</h2>
        <p class="u-text u-text-2">hover over the region of your choice to view the associated vaccination rollout plan. darker regions indicate regions of higher covid-19 infection rates. visit the official world health organization website for more information. </p>
        <br>
        <br>
        <img src="images/map.png" alt="" class="center">
      </div>
    </section>
    

    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-ce96"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Created by Kayla Huang for Tech 4 Social Good. </p>
      </div></footer>
    
</body>
</html>