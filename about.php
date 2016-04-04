<?php include("shared/common.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>About</title>
  <?php head();?>
  <link rel="stylesheet" href="css/about.css">
</head>
<body>

  <!-- Navigation Bar
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <?php navbar();?>
  
  <!-- Page Content
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="container">
      <div class="row">
        <div class="five columns" id="aboutSite">
          <h3>About</h3>
          <p>SwimVan is meant for sharing swimming information for everyone. Swimming is a vital life skills and everyone should have access and opportunity to learn more about it. Visit your local pool for seasonal brochures to check for lessons times or leave us a question and we'll be happy to help you.</p>
          <h5 class="overrideHColor">Get In Touch</h5>
          <a href="#"><img src="images/facebook.gif" alt=""></a>
          <a href="#"><img src="images/twitter.gif" alt=""></a>
        </div>
        <div class="seven columns" id="aboutImage">
          <img src="images/swim_lessons_collage.jpg" alt="">
        </div>
      </div>

      <div class="row">
        <div class="twelve columns">
          <h3 id="teamHeading">The Team</h3>
        </div>
      </div>

      <div class="row">
        <div class="twelve columns" id="aboutMembers">
          <table>
            <tr>
              <td>
                <img src="images/profile_pic_placeholder.jpg" alt="">
                <h5 class="overrideHColor">Joshua Abe</h5>
                <h6>The Talent</h6>
                <p>Talent young developer who wants to make unique and fresh indie games.</p>
              </td>
              <td>
                <img src="images/profile_pic_placeholder.jpg" alt="">
                <h5 class="overrideHColor">Stephen Cheng</h5>
                <h6>The ShotCaller</h6>
                <p>Laid back but smart developer. Currently working on tool for optimizing player decisions for video games.</p>
              </td>
              <td>
                <img src="images/profile_pic_placeholder.jpg" alt="">
                <h5 class="overrideHColor">Allen Li</h5>
                <h6>The Average</h6>
                <p>Developer whos balanced in all aspected. Interested in front end and back end for web development.</p>
              </td>
            </tr>
            <tr>
              <td>
                <img src="images/profile_pic_placeholder.jpg" alt="">
                <h5 class="overrideHColor">Donald Watson</h5>
                <h6>The Rocker</h6>
                <p>Heavy metal and rock loving guy. Extremely hard working and has a ton of Grit.</p>
              </td>
              <td>
                <img src="images/profile_pic_placeholder.jpg" alt="">
                <h5 class="overrideHColor">Wei Zhou</h5>
                <h6>Mystery Man</h6>
                <p>Mysterious developer who whos as a lone wolf. Able to bring past experiences from many fields.</p>
              </td>
              <td>
                <img src="images/profile_pic_placeholder.jpg" alt="">
                <h5 class="overrideHColor">SwimVan</h5>
                <p>Our website is meant to share information and to educate general public on swimming..</p>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>

  <?php footer();?>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>