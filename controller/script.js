//Works
function showArticle(){

    $.ajax({
        type: "POST",
        url: "../controller/FIlteredArticles.php",
        data: {
            Date: document.getElementById("SelectedDate").value
        },
        success: function (response) {
            document.getElementById("Articles").innerHTML=response
        }
    });
}

//Works
function checkUsername(){

    $.ajax({
        type: "POST",
        url: "../controller/CheckUsernames.php",
        data: {
            Username: document.getElementById("EnteredUsername").value
        },
        success: function (response) {


            if(response =='1'){
                document.getElementById("AlreadyExistsUsername").innerHTML="Issue with entered username"
            }
            else if(response =='0'){
                document.getElementById("AlreadyExistsUsername").innerHTML=""
            }
            else {
                document.getElementById("AlreadyExistsUsername").innerHTML="This shouldn't happen"
            }
        }
    });
}

//Works
function checkEmail(){

    $.ajax({
        type: "POST",
        url: "../controller/CheckEmails.php",
        data: {
            Email: document.getElementById("EnteredEmail").value
        },
        success: function (response) {

            if(response =='1'){
                document.getElementById("AlreadyExistsEmail").innerHTML="Issue with entered email";
            }
            else if(response =='0'){
                document.getElementById("AlreadyExistsEmail").innerHTML="";
            }
            else {
                document.getElementById("AlreadyExistsEmail").innerHTML="This shouldn't happen";
            }
        }
    });
}

function enableSubmit(){

    var headline = document.getElementById('headline').value
    var description = document.getElementById('description').value
    var thumbnail = document.getElementById('thumbnail').value
    var textarea = document.getElementById('textarea')
    var button = document.getElementById('submitarticle')

    if((headline.length < 4) || (headline.length > 50) || (description.length < 15) || (description.length > 200) || (thumbnail.length < 10) ||(thumbnail.length > 250) ){
        button.disabled = true
    }
    else{
        button.disabled = false
    }
}

function passwordMatch(){
    //Checks if passwords are the same
    if(document.getElementById("enteredPassword").value != document.getElementById("ConfirmPassword").value){
        document.getElementById("EqualPassword").innerHTML="Passwords Do Not Match"
    }
    else{
        document.getElementById("EqualPassword").innerHTML=""
    }
}

function validMobileNumber(){
    var pnumber = document.getElementById("enteredMobile").value;

    var validnum = /^\d+$/.test(pnumber)
    if(validnum == false){
        document.getElementById("CorrectMobileNumber").innerHTML="Contains Invalid Character(s)"

    }
    else{
        document.getElementById("CorrectMobileNumber").innerHTML=""
    }
}
function passwordStrength(){
    //Checks password strength
    var password = document.getElementById("enteredPasswordRegister").value
    if (password.length < 6) {
        document.getElementById("PasswordStrength").innerHTML="Password too short - must be atleast 8 characters long"

    } else if (password.length > 50) {
        document.getElementById("PasswordStrength").innerHTML="Password too long"

    } else if (password.search(/\d/) == -1) {
        document.getElementById("PasswordStrength").innerHTML="Password must contain atleast one number"

    } else if (password.search(/[!\@\#\£\$\%\^\&\*\(\)\_\+\.\,\;\:]/) == -1) {
        document.getElementById("PasswordStrength").innerHTML="Password must contain atleast one special character"

    }
    else{
        document.getElementById("PasswordStrength").innerHTML=""
    }
}

function checkDetails(){
    if (document.getElementById("PasswordStrength").innerHTML=="" && document.getElementById("CorrectMobileNumber").innerHTML=="" && document.getElementById("EqualPassword").innerHTML=="" && document.getElementById("AlreadyExistsEmail").innerHTML=="" && document.getElementById("AlreadyExistsUsername").innerHTML==""){
        return true;
    }
    else{
        return false;
    }
}

function showPasswordRegister() {
    var x = document.getElementById("enteredPasswordRegister")
    if (x.type === "password") {
        x.type = "text"
    } else {
        x.type = "password"
    }
}

function showPasswordLogin() {
    var x = document.getElementById("enteredPasswordLogin")
    if (x.type === "password") {
        x.type = "text"
    } else {
        x.type = "password"
    }
}

