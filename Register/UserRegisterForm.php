<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
</head>
<body>


<h1>Register</h1>
<form  method="post" >
<p>Email:</p>
<input id="inputEmailUser" name="inputEmailUser" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" required></input>
<p id="validateEmailBD" ></p>
<div id="rulesEmail" style="display:none" >Litere,cifre,@,com</div>
<p>Password:</p>
<input id="inputPasswordUser" name="inputPasswordUser" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required></input>

<p>PhoneNumber:</p>
<select id="PrefixNumber">
<option value="+40">+40</option>
</select>
<input id="inputPhoneUser" name="inputPhoneUser" maxlength="9" pattern="[0-9]+" required></input>

<p>Country:</p>
<select id="countryUser">
<option value="romania">Rom&#226nia</option>
</select>

<input type="submit" id="inputSubmitRegister" onclick="checkInDB()" name="inputSubmitRegister" value="inputSubmitRegister">
</form>
<?php 
if(isset($_POST['inputSubmitRegister']))
{
    
   $_SESSION['inputEmailUserSession']=$_POST['inputEmailUser'];
   $_SESSION['inputPasswordUserSession']=$_POST['inputPasswordUser'];
   $_SESSION['inputPhoneUserSession']=$_POST['inputPhoneUser'];
   $_SESSION['code']=rand(1000,9999);
   header("Location:UserRegisterScript.php");
  print $_SESSION['inputPasswordUserSession'];
  
}

?>
</body>
<script>

function checkInDB(){
    if(document.getElementById('inputEmailUser').checkValidity()){
    var email=document.getElementById("inputEmailUser").value;

    var xmlhttp = new XMLHttpRequest();
    

    xmlhttp.open("POST", "SearchUser.php", true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("email="+email);
xmlhttp.onload=function(){
    if(this.response=="true"){
      document.getElementById("validateEmailBD").innerHTML="Emailul este viabil!";
    }
    else { document.getElementById("validateEmailBD").innerHTML="Emailul este deja inregistrat!";}


}
}
else {
    document.getElementById('rulesEmail').style.display = "block";
    document.getElementById('validateEmailBD').innerHTML="";
}

}

</script>

</html>