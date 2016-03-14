<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/base.css">
</head>

<body>
<div id="header">
  <div class="container">
    <div class="row">
     <div class="four columns">
        <a href="./index.php" id="logo"><img src="./images/kappa.png" alt="SwimV Logo"></a>
      </div>
      <div class="eight columns">
        <ul class="u-pull-right" id="headerbuttons">
          <li><a class="button button-primary" id="button0" href="./swimkids.php">Swim Kids</a></li>
          <li><a class="button button-primary" id="button1" href="./preschool.php">Preschool</a></li>
          <li><a class="button button-primary" id="button2" href="./drills.php">Drills</a></li>
          <li><a class="button button-primary" id="button3" href="./safety.php">Water Safety</a></li>
          <li><a class="button button-primary" id="button4" href="./form.php">Questions</a></li>
          <li><a class="button button-primary droplink" id="loginbutton" href="./login.html">Login</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="offset-by-five columns">
      <div id="dropdown" class="dropContent seven columns">

        <div id="leftCol">
          <form method="post" action="http://webdevfoundations.net/scripts/formdemo.asp" onsubmit="return loginValidate()">
            <h4>Login</h4>
            <label for="username_login">Username</label>
            <input class="u-full-width" id="username_login" type="text" name="username_login">
            <label for="password_login">Password</label>
            <input class="u-full-width" id="password_login" type="password" name="password_login">
            <input class="button-primary u-pull-right" value="Submit" type="submit">
          </form>
        </div>
        
        <div id="rightCol" class="u-pull-right">
          <form method="post" action="http://webdevfoundations.net/scripts/formdemo.asp" onsubmit="return signUpValidate()">
            <h4>Register</h4>
            <label for="username_register">Username</label>
            <input class="u-full-width" id="username_register" type="text" name="username_register">
            <label for="email">Email Address</label>
            <input class="u-full-width" id="email" type="email" name="email_register">
            <label for="password_register">Password</label>
            <input class="u-full-width" id="password_register" type="password" name="password_register">
            <label for="password_confirm">Confirm Password</label>
            <input class="u-full-width" id="password_confirm" type="password" name="password_confirm_register">
            <input class="button-primary u-pull-right" value="Register" type="submit">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="content">

  <script src="./js/jquery-2.2.0.js"></script>
  <script src="./js/navbar.js"></script>
</body>
</html>