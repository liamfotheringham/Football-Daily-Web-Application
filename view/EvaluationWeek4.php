<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <title>Number one for football news | Football Daily</title>
        <link rel="stylesheet" href="style.css">
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

            <div class="well">
                <h3>Prepared Statements:</h3>
                <p>When registering a user to the website, the SQL statement used to insert the new user to the system uses
				<i>mysqli</i> prepared statements. Using prepared statements with placeholders as the parameters gives the 
				benefit of protecting he database form SQL injection attacks. The parameter values can also contain unescaped 
				SQL statements and delimiter characters. By pre-compiling the an SQL statements leads to faster execution overall
				nd also the ability to reuse SQL statements in <i>batches</i>.</p>
            </div>

            <div class="well">
                <h3>Hashing Passwords:</h3>
                <p>When inserting the passwords using the <i>prepared statements</i> into the users table, the passwords are first of all hashed
				 to make sure they cannot be easily stolen by a hacker. The passwords are hashed using the <i>password_hash()</i> function built into
				 PHP. This creates a strong new password token hash using a strong one-way hashing algorithm. The passwords are currently hashed using the
				 <i>PASSWORD_DEFAULT</i> algorithm. This algorithm is consistently changing as new stronger algorithms are added to PHP. If the passwords
				 were to be stored in plain text, there would be many ramifications if the database were to be compromised and also many
				 legal troubles too.</p>
            </div>

            <div class="well">
                <h3>Login Checks:</h3>
                <p>When logging into the site a checks are used to make sure that the details given by the user are valid for logging in. The entered details from the user are compared against those stored from within the database using a mysqli SELECT statement. This statement selects the password hash stored within the database, where the entered username is in the same row. Once/If found the PHP function <i>password_verify()</i> is used to compare the hsh from the database and the entered password fron the login modal. If the two are the same then the user is logged into the site. If not then the user is sent back to the index page having not been logged in.</p>
            </div>

            <div class="well">
                <h3>Session Lifetime</h3>
                <p>When a user logs into the site, a session is created to tell the website that a user has decided to login and now has access to their data from the database. It creates a session stored/tied to the specific browser that the user is accessing the site from. When the session is created it is given a 24 hour lifespan. This is useful as this gives the session a specific lifespan and will not stay for longer than is necessary. After the 24 hour period the session is destroyed and the user will need to re-enter their valid login details to gain access to their data and functionalities on the website again. The logout feature on the site is another method of destroying the session, using the <i>session_destroy()</i> function in PHP</p>
            </div>
        </div>
        <div class="container">
            <?php include 'footer.php'; ?>
        </div>
        <script src="script.js"></script>

    </body>
</html>