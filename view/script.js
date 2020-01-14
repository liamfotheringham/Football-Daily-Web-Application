//Works
function showArticle()
{

    $.ajax({
        type: "POST",
        url: "FIlteredArticles.php",
        data: {
            Date: document.getElementById("SelectedDate").value
        },
        success: function (response) {
            document.getElementById("Articles").innerHTML=response; 
        }
    });
}
//Doesnt Work
function checkUsername(){
    $.ajax({
        type: "POST",
        url: "CheckUsernames.php",
        data:{
            Username: document.getElementById("EnteredUsername").value
        },
        success: function(response){
            document.getElementById("AlreadyExists").innerHTML=response; 
        }
    });
}

//Works
function checkPasswords(theForm){
    //var confirmBox = document.getElementsById("ConfirmPassword");
    if(theForm.Password.value != theForm.ConfirmPassword.value){
        document.getElementById("EqualPassword").innerHTML="Passwords Do Not Match<br>"
        //confirmBox.style.backgroundColor = "red";
        return false;
    }
    else{
        return true;
    }
}

//Doesnt Work
function passwordStength(theForm){
    var counter =0;
    var password = document.getElementById("enteredPassword");
    len=passsword.length;
    for(var i = 0;i<len;i++){
        if(/[A-Z]/.test(password(i))){
            counter++;
        }
        
    }
    if(counter<1){
        //document.getElementById("PasswordStrength").innerHTML="Password Not Strong Enough";
        document.getElementById("PasswordStrength").innerHTML="Password Not Strong Enough<br>"
        return false;
    }
    else{
        return true;
    }
    
}