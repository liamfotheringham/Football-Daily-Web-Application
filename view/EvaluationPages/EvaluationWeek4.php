<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <title>Number one for football news | Football Daily</title>
        <link rel="stylesheet" href="../style.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
        </script>
        <meta charset="utf-8" content="width=device-width, initial-scale=1" name="viewport">
    </head>

    <body>
        <div class="container">
            <?php include 'header-evaluation.php'; ?>
            <h2>Week 4:</h2>
            <h3><b>Task: </b>This week I would like to see some discussion about the security aspects added to your registration and logging system. Pick 4 features that you think add to the security of your system and discuss these 100 words each.</h3>
            <div class="well">
                <h3>Prepared Statements:</h3>
                <p>When registering a user to the website, the MySQL statement used to insert the new user to the system uses mysqli prepared statements. Using prepared statements with placeholders as the parameters gives the benefit of protecting he database form MySQL injection attacks. The parameter values can also contain unescaped MySQL statements and delimiter characters. By pre-compiling the MySQL statements leads to faster execution overall and the ability to reuse SQL statements in batches.</p>
            </div>

            <div class="well">
                <h3>Hashing Passwords:</h3>
                <p>When inserting the passwords using the prepared statements into the users table, the passwords are first of all hashed to make sure they cannot be easily used by a hacker. The passwords are hashed using the password_hash() function built into PHP. This creates a strong new password token hash using a strong one-way hashing algorithm. The passwords are currently hashed using the PASSWORD_DEFAULT algorithm. This algorithm is consistently changing as new stronger algorithms are added to PHP. If the passwords were to be stored in plain text, there would be many ramifications if the database were to be compromised and also many legal troubles too. By hashing, this would slow the process it would take any potential hackers to access users accounts.</p>
            </div>

            <div class="well">
                <h3>Login Checks:</h3>
                <p>When logging into the site a check is used to make sure that the details given by the user are valid for logging in. The entered details from the user are compared against those stored from within the database using a MySQL SELECT statement. This statement selects the password hash stored within the database, where the entered username is in the same row. Once/If found the PHP function password_verify() is used to compare the hash from the database and the entered password from the login modal. If the two are the same, then the user is logged into the site. If not, then the user is sent back to the index page having not been logged in.</p>
            </div>

            <div class="well">
                <h3>Session > Cookie</h3>
                <p>When a user logs into the site, a session is created to tell the website that a user has decided to login and now has access to their data from the database. It creates a session stored that is stored in a database and not on the client side much like a cookie. By storing at the current username in a session rather than a cookie it will give a measure of security that would not be given by a cookie. By using the Session stored in the database it can also allow the potential to monitor a user’s activity, block logins from different IP addresses, etc. A user can also be easily logged out after a certain amount of time by removing their session entry in the database.</p>
            </div>
        </div>
        <div class="container">
            <?php include '../footer.php'; ?>
        </div>
        <script src="/controller/script.js"></script>

    </body>
</html>