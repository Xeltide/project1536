<?php include("shared/common.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sitemap</title>
    <?php head();?>
  <link rel="stylesheet" href="css/sitemapstyle.css">
</head>

<body>

<?php navbar();?>
  <!--Container div, used with skeleton to contain and format rows.-->
    <div class="container" id="mainBody">
      <!--Row div, used with skeleton to create rows with responsive columns-->
      <div class="row">
        <!--four column div, making a responsive sizing container for the Account section-->
        <div class="four columns">
          <!--capsule div, to style the Account section-->
          <div class="capsule">
            <!--topheading div, used to style and format the headers for the top sections-->
            <div class="topheading">Main</div>
            <ul class="toplist">
             <li><a href="login.html">Login</a></li>
             <li><a href="index.html">Home</a></li>
           </ul>
         </div>
       </div>
       <!--four column div, making a responsive sizing container for the Tips/Drills section-->
       <div class="four columns">
        <!--capsule div, to style the Tips/Drills section-->
        <div class="capsule">
          <!--topheading div, used to style and format the headers for the top sections-->
          <div class="topheading">Safety / Drills</div>
          <ul class="toplist">
           <li><a href="safety.html">Safety</a></li>
           <li><a href="drills.html">Drills</a></li>
         </ul>
       </div>
     </div>
     <!--four column div, making a responsive sizing container for the Info section-->
     <div class="four columns">
      <!--capsule div, to style the Info section-->
      <div class="capsule">
        <!--topheading div, used to style and format the headers for the top sections-->
        <div class="topheading">Info</div>
        <ul class="toplist">
         <li><a href="form.html">Questions?</a></li>
         <li><a href="about.html">About Us</a></li>
       </ul>
     </div>
   </div>

  </div>
  <!--Row div, used with skeleton to create rows with responsive columns-->
  <div class="row">
    <!--twelve column div, contains the the Pre-School section-->
    <div class="twelve columns">
      <!--listCapsule div, enables styling and format of Pre-School section-->
      <div class="topNumList">
        <!--topheading div, used to style and format the headers for the top sections-->
        <div class="topheading"><a href="preschool.html">Pre-School</a></div>
        <!--table div, enables styling and formatting for the numlist-->
        <div class="table">
          <ul class="numlist">
            <li><a href="content/contentPS1.html">1</a></li>
            <li><a href="content/contentPS2.html">2</a></li>
            <li><a href="content/contentPS3.html">3</a></li>
            <li><a href="content/contentPS4.html">4</a></li>
            <li><a href="content/contentPS5.html">5</a></li>
            <li><a href="content/contentPS6.html">6</a></li>
            <li><a href="content/contentPS7.html">7</a></li>
            <li><a href="content/contentPS8.html">8</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--Row div, used with skeleton to create rows with responsive columns-->
  <div class="row">
   <div class="twelve columns">
    <div class="bottomList">
      <!--topheading div, used to style and format the headers for the top sections-->
      <div class="topheading"><a href="swimkids.html">Swim Kids</a></div>
      <!--table div, enables styling and formatting for the numlist-->
      <div class="table">
        <ul class="numlist">
          <li><a href="content/contentSK1.html">1</a></li>
          <li><a href="content/contentSK2.html">2</a></li>
          <li><a href="content/contentSK3.html">3</a></li>
          <li><a href="content/contentSK4.html">4</a></li>
          <li><a href="content/contentSK5.html">5</a></li>
          <li><a href="content/contentSK6.html">6</a></li>
          <li><a href="content/contentSK7.html">7</a></li>
          <li><a href="content/contentSK8.html">8</a></li>
          <li><a href="content/contentSK9.html">9</a></li>
          <li><a href="content/contentSK10.html">10</a></li>
        </ul>
      </div>
    </div>
  </div>

  </div>
  </div>

<?php footer();?>
  
</body>
</html>