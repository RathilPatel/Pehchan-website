function required()
{
var empt1 = document.forms["login-form"]["username"].value;
var empt2 = document.forms["login-form"]["password"].value;
if (empt1 == "" || empt2 == "")
{
alert("Username/Password cannot be empty ");
return false;
}
else
{

return true;
}
}
