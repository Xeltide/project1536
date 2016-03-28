<div id="header">
    <div class="container">
        <div class="row">
            <div class="four columns">
                <a href="<?php relativePath();?>index.php" id="logo"><img src="<?php relativePath();?>images/kappa.png" alt="SwimV Logo"></a>
            </div>
            <div class="eight columns">
                <ul class="u-pull-right" id="headerbuttons">
                    <li><a class="button button-primary" id="button0" href="<?php relativePath();?>preschool.php">Preschool</a></li>
                    <li><a class="button button-primary" id="button1" href="<?php relativePath();?>swimkids.php">Swim Kids</a></li>
                    <li><a class="button button-primary" id="button2" href="<?php relativePath();?>drills.php">Drills</a></li>
                    <li><a class="button button-primary" id="button3" href="<?php relativePath();?>form.php">Questions</a></li>
                    <?php
                    if (isLoggedIn()){
                        echo '<li><a class="button button-primary droplink" id="loginbutton" href="' . getRelativePath() . '">' . getUsername() . '</a></li>';
                    } else {
                        echo '<li><a class="button button-primary droplink" id="loginbutton" href="' . getRelativePath() . '">Login</a></li>';
                    }
                    ?>

                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="offset-by-five columns">
            <div id="dropdown" class="dropContent seven columns">
                <?php if (isLoggedIn()) { ?>

                    <div id="leftCol">
                        <form method="post" action="<?php relativePath();?>deregister.php">
                            <h4>Delete Account</h4>
                            <label for="password_login">Enter password to confirm</label>
                            <input class="u-full-width" id="password_login" type="password" name="password_deregister">
                            <input class="button-primary u-pull-right" value="Delete" id="deleteAccButton" type="submit">
                        </form>
                    </div>

                    <div id="rightCol" class="u-pull-right">
                        <h4><?php firstname();?> <?php lastname();?></h4>
                        <p>You are user # <?php userid();?></p>
                        <a class="button button-primary u-pull-right" href="<?php relativePath();?>logout.php">Logout</a>
                    </div>

                <?php } else { ?>

                    <div id="leftCol">
                        <form method="post" action="<?php relativePath();?>login.php" onsubmit="return loginValidate()">
                            <h4>Login</h4>
                            <label for="username_login">Username</label>
                            <input class="u-full-width" id="username_login" type="text" name="username_login">
                            <label for="password_login">Password</label>
                            <input class="u-full-width" id="password_login" type="password" name="password_login">
                            <input class="button-primary u-pull-right" value="Submit" type="submit">
                        </form>
                    </div>

                    <div id="rightCol" class="u-pull-right">
                        <form method="post" action="<?php relativePath();?>register.php" onsubmit="return signUpValidate()">
                            <h4>Register</h4>
                            <label for="username_register">Username</label>
                            <input class="u-full-width" id="username_register" type="text" name="username_register">
                            <label for="fname">First Name</label>
                            <input class="u-full-width" id="fname" type="text" name="fname">
                            <label for="lname">Last Name</label>
                            <input class="u-full-width" id="lname" type="text" name="lname">
                            <label for="password_register">Password</label>
                            <input class="u-full-width" id="password_register" type="password" name="password_register">
                            <label for="password_confirm">Confirm Password</label>
                            <input class="u-full-width" id="password_confirm" type="password" name="password_confirm_register">
                            <input class="button-primary u-pull-right" value="Register" type="submit">
                        </form>
                    </div>
                    
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="twelve columns" id="loginMsg">
        <?php
        if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
            echo '<ul class="err">';
            foreach($_SESSION['ERRMSG_ARR'] as $msg) {
                echo '<li>',$msg,'</li>';
            }
            echo '</ul>';
            unset($_SESSION['ERRMSG_ARR']);
        }
        ?>
    </div>
</div>
