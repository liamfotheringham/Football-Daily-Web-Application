<!--Header for each page-->
<?php
session_start();

//ini_set('display_errors','On');
//error_reporting(E_ALL);

include("../model/api-coursework.php");
?>
<!--Banner of homepage-->
<div class = "jumbotron topper">
    <h1 align="center">Football Daily</h1>
</div>

<!--Hamburger Menu-->
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">Home</a>
    <a href="electricimp.php">ElectricIMP</a>
    <a href="weather.php">Weather (External API)</a>
    
    <!--If theyre a reporter display upload article-->
    <?php if(isset($_SESSION['Reporter'])): ?>
    <a href="UploadArticles.php">Upload Article</a>
    <?php endif; ?>
    
    <!--If logged in display logout and username-->
    <?php if(isset($_SESSION['Username'])): ?>
    <?php
    if(isset($_GET['logout'])){
        logout();
    }
    ?>
    <a href="header.php?logout=true"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
    <a href="#"><i class="glyphicon glyphicon-user"></i> <?php echo $_SESSION['Username']?></a>

    <!--If not logged in display register and login-->
    <?php else: ?>
    <a data-toggle="modal" data-target="#RegisterModal"><i class="glyphicon glyphicon-th-list"></i> Register</a>
    <a data-toggle="modal" data-target="#LoginModal"><i class="glyphicon glyphicon-log-in"></i> Login</a>
    <?php endif; ?>
    
</div>
<span id="nav-icon" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<!--Navbar-->
<div id="myMainNav">
    <nav class="navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="electricimp.php">ElectricIMP</a></li>
                <li><a href="weather.php">Weather (External API)</a></li>

                <!--If theyre a reporter display upload article-->
                <?php if(isset($_SESSION['Reporter'])): ?>
                <li><a href="UploadArticles.php">Upload Article</a></li>
                <?php endif; ?>

                <!--If logged in display logout and username-->
                <?php if(isset($_SESSION['Username'])): ?>
                <?php
                if(isset($_GET['logout'])){
                    logout();
                }
                ?>
                <li class="pull-right"><a href="header.php?logout=true"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                <li class="pull-right"><a href="#"><i class="glyphicon glyphicon-user"></i> <?php echo $_SESSION['Username']?></a></li>

                <!--If not logged in display register and login-->
                <?php else: ?>
                <li class="pull-right"><a data-toggle="modal" data-target="#RegisterModal"><i class="glyphicon glyphicon-th-list"></i> Register</a></li>
                <li class="pull-right"><a data-toggle="modal" data-target="#LoginModal"><i class="glyphicon glyphicon-log-in"></i> Login</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</div>
<!--Register Modal-->
<div id="RegisterModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Register</h4>
            </div>
            <!--Inputs-->
            <div class="modal-body">
                <form action="../controller/register.php" method="post" onsubmit="return checkDetails(this);">
                    <input name="Username" id="EnteredUsername" placeholder="Enter Username" required="" type="text" onchange="checkUsername(this.value)">
                    <span id="AlreadyExistsUsername"></span>
                    <br>
                    <input name="Email" id="EnteredEmail" placeholder="Enter Email" required="" type="email" onchange="checkEmail(this.value)">
                    <span id="AlreadyExistsEmail"></span>
                    <br>
                    <input name="Firstname" placeholder="Enter Firstname" required="" type="text">
                    <br>
                    <input name="Lastname" placeholder="Enter Lastname" required="" type="text">
                    <br>
                    <input name="PNumber" id ="enteredMobile" placeholder="Enter Mobile Number" required="" type="text" onchange="validMobileNumber(this.value)">
                    <span id="CorrectMobileNumber"></span>
                    <br>
                    <input name="Password" id ="enteredPasswordRegister" placeholder="Enter Password" required="" type="password" onchange="passwordStrength(this.value)">
                    <span id="PasswordStrength"></span>
                    <br>
                    <input type="checkbox" onclick="showPasswordRegister()">Show Password
                    <br>
                    <input name="ConfirmPassword" id="ConfirmPassword" placeholder="Confirm Password" required="" type="password" onchange="passwordMatch(this.value)">
                    <span id="EqualPassword"></span>
                    <br>
                    <div class="g-recaptcha" data-sitekey="6LeSAHQUAAAAAGhD0BTaTZUiLJvYgWT9Xk7g2hcY"></div>
                    <br>
                    <button id='submit' name='submit' type='submit' value='Submit' onclick="">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<!--Login Modal-->
<div id="LoginModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login</h4>
            </div>
            <!--Inputs-->
            <div class="modal-body">
                <form action="../controller/login.php" method="post">
                    <input name="Username" placeholder="Enter Username" required="" type="text">
                    <br>
                    <input name="Password" id ="enteredPasswordLogin" placeholder="Enter Password" required="" type="password">
                    <br>
                    <input type="checkbox" onclick="showPasswordLogin()">Show Password
                    <br>
                    <button id='submit' name='submit' type='submit' value='Submit'>Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<script src='https://www.google.com/recaptcha/api.js'></script>