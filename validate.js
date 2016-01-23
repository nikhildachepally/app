var username = document.getElementById("username");
var email = document.getElementById("email");
var password = document.getElementById("password");

function checkusername()

{

if (username.value.length <= 5)
{

document.getElementById("k1").innerHTML="length should be greater than 5";

} 
else
{

document.getElementById("k1").innerHTML="Perfect";

}

}


function checkemail(){


if (email.value.indexOf("@")==-1 || email.value.indexOf(".")==-1)
{

document.getElementById("k2").innerHTML="missing of @ or . ";

}
else{

document.getElementById("k2").innerHTML="ok done";

}

}



function checkpassword()
{

if (password.value.length <=5)

{

document.getElementById("k3").innerHTML="password is too short";

}
else{

document.getElementById("k3").innerHTML="good";

}


}




