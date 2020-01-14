<?php
session_start();

ini_set('display_errors','On');
error_reporting(E_ALL);

include("../model/api-coursework.php");
?>
<!doctype html>
<html lang="en">

    <body>   
        <?php if(isset($_SESSION['UserID'])): ?> 
        <div>
            <h2>Hello <?php echo $_SESSION['UserID']; ?></h2>
            <h2>Logout</h2>
            <?php
            if(isset($_POST['logout'])){
                $txt = logout();
            }
            ?>
            <form action="" method="post">
                <Button name="logout" type="submit">Logout</Button>
            </form>
        </div>
        <?php else: ?>
        <div>
            <form action="register.php" method="post">
                <h2>Register</h2>
                <input name="UserID" placeholder="Enter UserID" required="" type="text">
                <input name="Password" placeholder="Enter Password" required="" type="password">
                <button id='submit' name='submit' type='submit' value='Submit'>Submit</button>
            </form>
        </div>
        <div>
            <form action="login.php" method="post">
                <h2>Login</h2>
                <input name="UserID" placeholder="Enter UserID" required="" type="text">
                <input name="Password" placeholder="Enter Password" required="" type="password">
                <button id='submit' name='submit' type='submit' value='Submit'>Submit</button>
            </form>
        </div>
        <?php endif; ?>

        <script src="script.js"></script>

    </body>
</html>