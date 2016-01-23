var email = document.getElementById("email");
var security = document.getElementById("security");

function checkemail(){


if (email.value.indexOf("@")==-1 || email.value.indexOf(".")==-1)
{

document.getElementById("p1").innerHTML="enter  email id ";

}
else{

document.getElementById("p1").innerHTML="ok done";

}

}



function checkpassword()
{

if (security.value.length <= 5)

{

document.getElementById("p2").innerHTML= "enter valid password";

}
else{

document.getElementById("p2").innerHTML= "good";

}


}

