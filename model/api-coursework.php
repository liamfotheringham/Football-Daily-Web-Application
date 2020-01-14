<?php
session_start();
// Connect to database
include("../model/connection.php");
$db = new dbObj();
$conn =  $db->getConnstring();

//function to saintize entred values from user
function sanitize($enteredValue){
    $enteredValue = trim($enteredValue);
    $enteredValue = stripslashes($enteredValue);
    $enteredValue = htmlspecialchars($enteredValue);

    return $enteredValue;
}

//function to get 3 most recent articles
function latestarticles(){
    global $conn;

    $result_articles = mysqli_query($conn, "SELECT * FROM Article ORDER BY ArticleID DESC LIMIT 3");

    $rows = array();
    while($x = mysqli_fetch_assoc($result_articles)){
        $rows[] = $x;
    }
    return json_encode($rows);
}

//function to get all the articles
function getAllArticles(){
    global $conn;

    $result_articles = mysqli_query($conn, "SELECT * FROM Article ORDER BY ArticleID DESC LIMIT 6 OFFSET 3");

    $rows = array();
    while($x = mysqli_fetch_array($result_articles)){
        $rows[] = $x;
    }
    return json_encode($rows);
}

//function to filter artices by date
function getArticleByDate($date){
    global $conn;

    $date = sanitize($date);

    $stmt = mysqli_stmt_init($conn);
    $sql = "SELECT * FROM Article WHERE PublishDate= ?";
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, 's', $date);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $rows = array();
    while($x = mysqli_fetch_array($result)){
        $rows[] = $x;
    }
    return json_encode($rows);
}

//function for viewing a post
function viewPost($ArticleID){
    global $conn;

    $ArticleID = sanitize($ArticleID);

    $stmt = mysqli_stmt_init($conn);
    $sql = "SELECT * FROM Article WHERE ArticleID= ? LIMIT 1";
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $ArticleID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $row=mysqli_fetch_array($result);
    return json_encode($row);
}

//function for logging in a user
function loginUser($username, $password){

    global $conn;

    $username = sanitize($username);

    $stmt = mysqli_stmt_init($conn);
    $sql = "SELECT Password, isReporter FROM WebDevUsers WHERE Username = ? LIMIT 1" ;
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, 's', $username);
    mysqli_stmt_execute($stmt);
    $hash = mysqli_stmt_get_result($stmt);
    $check=mysqli_fetch_assoc($hash);
    if(password_verify($password, $check['Password'])){
        $_SESSION['Username'] = $username;
        if($check['isReporter']==1){
            $_SESSION['Reporter'] = "Reporter";
        }
        header('Location: ../view/index.php');

    }

    else{
        header('Location: ../view/index.php'); 
    }


}

//function for logging out a user
function logout(){

    // remove all session variables
    session_unset(); 

    // destroy the session 
    session_destroy(); 

    header('Location: ../view/index.php');

}

//function to check if username already exists whilst registering
function checkUsername($username){

    global $conn;

    $username = sanitize($username);

    $stmt = mysqli_stmt_init($conn);
    $sql = "SELECT Firstname FROM WebDevUsers WHERE Username = ? LIMIT 1" ;
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, 's', $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $row=mysqli_fetch_array($result);
    return json_encode($row);

}

//function to check if email already exists whilst registering
function checkEmail($email){

    global $conn;

    $email = sanitize($email);

    $stmt = mysqli_stmt_init($conn);
    $sql = "SELECT Firstname FROM WebDevUsers WHERE Email = ? LIMIT 1" ;
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $row=mysqli_fetch_array($result);
    return json_encode($row);

}

//function to register a user
function registerUser($username, $email, $firstname, $lastname, $pnumber, $password){

    global $conn;

    $username = sanitize($username);
    $email = sanitize($email);
    $firstname = sanitize($firstname);
    $lastname = sanitize($lastname);
    $pnumber = sanitize($pnumber);


    $reporter=0;

    //prepared statement
    $stmt = mysqli_prepare($conn, "INSERT INTO WebDevUsers (Username, Email, Firstname, Lastname, PNumber, Password, isReporter) VALUES (?,?,?,?,?,?,?)");

    //dealing with the parameters
    mysqli_stmt_bind_param($stmt, "ssssssi", $username, $email, $firstname, $lastname, $pnumber, $password, $reporter);

    mysqli_stmt_execute($stmt);

    //close statement and connection
    mysqli_stmt_close($stmt);

    //loginUser($username, $password);

    header('Location: ../view/index.php');
}

//function for inserting an article
function insertArticle($headline, $description, $author, $thumbnail, $text){

    global $conn;

    $headline = sanitize($headline);
    $description = sanitize($description);
    $author = sanitize($author);
    $thumbnail = sanitize($thumbnail);
    $text = $text;

    $date = date("Y.m.d");

    //prepared statement
    $stmt = mysqli_prepare($conn, "INSERT INTO Article (Headline, ThumbnailDesc, Username, PublishDate, Thumbnail, Text) VALUES (?,?,?,?,?,?)");

    //dealing with the parameters
    mysqli_stmt_bind_param($stmt, "ssssss", $headline, $description, $author, $date, $thumbnail, $text);

    mysqli_stmt_execute($stmt);

    //close statement and connection
    mysqli_stmt_close($stmt);

    header('Location: ../view/index.php');
}

//function to get article comments
function getArticleComments($ArticleID){
    global $conn;

    $ArticleID = sanitize($ArticleID);

    $stmt = mysqli_stmt_init($conn);
    $sql = "SELECT * FROM Comments WHERE ArticleID= ? ORDER BY CommentID DESC";
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $ArticleID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $rows = array();
    while($x = mysqli_fetch_array($result)){
        $rows[] = $x;
    }
    return json_encode($rows);
}

//function to leave a comment
function insertComment($ArticleID, $Username, $Text){

    global $conn;

    $ArticleID = sanitize($ArticleID);
    $Username = sanitize($Username);
    $Text = sanitize($Text);

    $date = date("Y.m.d");

    //prepared statement
    $stmt = mysqli_prepare($conn, "INSERT INTO Comments (Username, ArticleID, Text, UploadDate) VALUES (?,?,?,?)");

    //dealing with the parameters
    mysqli_stmt_bind_param($stmt, "siss", $Username, $ArticleID, $Text, $date);

    mysqli_stmt_execute($stmt);

    //close statement and connection
    mysqli_stmt_close($stmt);

    header('Location: ../view/ViewPost.php?id='. $ArticleID);
}

//Function to insert data from electric imp
function insertData($data){

    global $conn;

    $date = date("Y.m.d h.i.s");

    //prepared statement
    $stmt = mysqli_prepare($conn, "INSERT INTO IMPData (dttm, data) VALUES (?, ?)");

    //dealing with the parameters
    mysqli_stmt_bind_param($stmt, "ss", $date, $data);

    mysqli_stmt_execute($stmt);

    //close statement and connection
    mysqli_stmt_close($stmt);
}

//function to get latest electric imp data
function latestData(){
    global $conn;

    $result_data = mysqli_query($conn, "SELECT * FROM IMPData ORDER BY id DESC LIMIT 10");

    $rows = array();
    while($x = mysqli_fetch_assoc($result_data)){
        $rows[] = $x;
    }
    return json_encode($rows);
}

?>