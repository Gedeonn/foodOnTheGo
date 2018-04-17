<<<<<<< HEAD
var firstname = document.getElementById('firstname');
var lastname = document.getElementById('lastname');
var custemail = document.getElementById('email');
var custpass = document.getElementById('password');
var tel = document.getElementById('tel');
var image = document.getElementById('fileToUpload');

function validate()
{
  if (firstname.value == "")
  {
    alert("Please enter your firstname");
  }
  if (lastname.value == "")
  {
    alert("Please enter your lastname");
  }
  else if (custemail.value == "")
  {
    alert("Please enter your email");
  }
  else if (custpass.value == "")
  {
    alert("Please enter a password");
  }
  else if (tel.value == "")
  {
    alert("Please enter your telephone number");
  }
  else
  {
    window.location.href = "productFunctions.php";
  }
}

var email = document.getElementById('email');
var password = document.getElementById('password');
function validatelogin()
{
  else if (email.value == "")
  {
    alert("Please enter your email");
  }
  else if (password.value == "")
  {
    alert("Please enter a password");
  }
}
=======
var firstname = document.getElementById('firstname');
var lastname = document.getElementById('lastname');
var custemail = document.getElementById('email');
var custpass = document.getElementById('password');
var tel = document.getElementById('tel');
var image = document.getElementById('fileToUpload');

function validate()
{
  if (firstname.value == "")
  {
    alert("Please enter your firstname");
  }
  if (lastname.value == "")
  {
    alert("Please enter your lastname");
  }
  else if (custemail.value == "")
  {
    alert("Please enter your email");
  }
  else if (custpass.value == "")
  {
    alert("Please enter a password");
  }
  else if (tel.value == "")
  {
    alert("Please enter your telephone number");
  }
  else
  {
    window.location.href = "productFunctions.php";
  }
}

var email = document.getElementById('email');
var password = document.getElementById('password');
function validatelogin()
{
  else if (email.value == "")
  {
    alert("Please enter your email");
  }
  else if (password.value == "")
  {
    alert("Please enter a password");
  }
}
>>>>>>> 45c941a021726bf05ba6542c3aedec9e7f1a4f86
