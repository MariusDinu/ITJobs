<!DOCTYPE html>
<html>
<head>
    <title> Login and Register Employer</title>
    <link rel="stylesheet" href="LoReEmployer-style.css">
</head>
<body>

<div class="screen">
<div id="loginRegisterBox" class="box">
<div class="button">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
</div>

<form  id="register" class="input" method="post" action="" enctype="multipart/form-data">
<p> Company Name:</p>
<input class="input-field" type="text" id="inputNumeFirma" name="inputNumeFirma" required>
<br>
<p> Email:</p>
<input class="input-field" onkeyup="checkEmail()" type="text" id="EmailEmployerRegister" name="EmailEmployerRegister" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" required>
<p id="errorEmail"></p>
<p> Password:</p>
<input class="input-field" type="text" id="PasswordEmployerRegister" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="PasswordEmployerRegister" required>
<p> Confirm Password:</p>
<input class="input-field" onkeyup="checkPassword()" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" type="text" id="ConfirmPasswordEmployerRegister" name="ConfirmPasswordEmployerRegister" required>
<p id='errorPassword'></p>
<p> PhoneNumber:</p>
<input class="input-field" type="text" maxlenght="9" pattern="[0-9]+" id="PhoneEmployerRegister" name="PhoneEmployerRegister" required>

<p> Company Site:</p>
<input class="input-field" type="text" id="inputSiteFirma" name="inputSiteFirma" required>

<p> Languages Used in Company:</p>
<input class="input-field" type="text" id="limbajeFirma" name="limbajeFirma" required>

<p>C.U.I.:</p>
<input class="input-field" type="text" id="cuiFirma" maxlenght="9" pattern="[0-9]+" name="cuiFirma" required>
<br>
<p>C.I.F.:</p>
<input class="input-field" type="text" id="cifFirma" maxlenght="9" pattern="[0-9]+" name="cifFirma" required>
<p> Company description:</p>
<input class="input-field" type="text" id="tehnologii" name="tehnologii" required>
<br>

<input type="file" name="file" id="file" multiple>
<p id="errorRegister"></p>
<button class='submit-btn' type="submit" name='submitFirma' onclick="registerEmployer()">Register</button>
</form>

<form id="login" class="input">
  <p id="accountDone"><?php if(isset($_GET['succes'])==1) echo "Cont creat cu succes!";?></p>
                <br></br>
                <input id="EmailEmployerLogin" type="text" class="input-field" placeholder="E-mail" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" required>
                <input id="PasswordEmployerLogin" type="password" class="input-field" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                <br></br>
                <input type="checkbox" class="check-box"><span> Remember Password</span>
                <br><br></br>
                </br>
                <p id="errorLogin"></p>
                <button  class="submit-btn" onclick="loginEmployer()">Login</button>
</form>

</div>
<div id="checkCodePhone" class="box" style="display:none">
            <form id="checkCode" class='input'>
                <input id="inputCheckCode" class="input-field" maxlength="4" pattern="[0-9]+" required>
                <p id="errorCode"></p>
                <button class="submit-btn" onclick="checkCode()">Check Code</button>
                <button class="submit-btn" onclick="resendCode()">Send code again</button> 
              </form>
</div>
</div>

<?php
/*
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}*/

?>
<script>
  
  </script>
<script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn")

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
            z.style.background = "linear-gradient(to left, #ff9900, #fff)";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
            z.style.background = "linear-gradient(to right, #ff9900, #fff)";
        }
    </script>
<script>
var code = 0;
        var email;
        var password;
        var phone;

function checkEmail(){
            var emailScript = document.getElementById("EmailEmployerRegister").value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST", "SearchEmployer.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("email=" + emailScript);
            xmlhttp.onload = function() {
                console.log(this.response);
                if (this.response == "true") {
                    document.getElementById("errorEmail").innerHTML = "";
                    document.getElementById("errorEmail").value = 0;
                } else {
                    document.getElementById("errorEmail").innerHTML = "Acest email este deja inregistrat!";
                    document.getElementById("errorEmail").value = 1;
                }

            }



}
function uploadFile(email){
          const myForm=document.getElementById("register");
          const inpFile=document.getElementById("file");

        
          
 const endpoint="../Employer/upload.php";
          const formData=new FormData();

          console.log(inpFile.files);
          formData.append("file",inpFile.files[0]);
          formData.append("user",email);
          fetch(endpoint,{method:"post",body:formData}).catch(console.error);
  event.preventDefault();

  }
       
function checkPassword(){
  var pass = document.getElementById("PasswordEmployerRegister").value;
            var confirmPass = document.getElementById("ConfirmPasswordEmployerRegister").value;
            if (pass == confirmPass) {
                document.getElementById("errorPassword").innerHTML = "";
                document.getElementById("errorPassword").value = 0;
            } else {
                document.getElementById("errorPassword").innerHTML = "Parolele nu se potrivesc";
                document.getElementById("errorPassword").value = 1;
            }
}
function resendSms(){
  var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST", "SendSmsUserRegister.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("phone=" + phone);
            xmlhttp.onload = function() {
                var codeCopy = this.response;
                setCode(codeCopy);
            }
            event.preventDefault();
}
function setEmailPassPhone(emailCopy, passCopy, phoneCopy) {
            email = emailCopy;
            password = passCopy;
            phone = phoneCopy;
        }
function setCode(codeForCheck) {
            code = codeForCheck;
        }
function checkCode() {
            var codeFromInput = document.getElementById("inputCheckCode").value;
            if (codeFromInput == code) {
              document.getElementById('errorCode').innerHTML="";
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open("POST", "EmployerRegister.php", true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send("email=" + email + "&password=" + password + "&phone=" + phone);
                xmlhttp.onload = function() {
                    window.location.href = "LoginRegisterEmployer.php?succes=1"; 
                }
                
            }
            else {
document.getElementById('errorCode').innerHTML="Cod incorect!";

            }

            event.preventDefault();
        }
        function registerEmployer() 
          {
            
            var email = document.getElementById("EmailEmployerRegister").value;
            var password = document.getElementById("PasswordEmployerRegister").value;
            var phone = document.getElementById("PhoneEmployerRegister").value;
            //var prefix = document.getElementById("PrefixUserRegister").value;
            var confirmPass = document.getElementById("errorPassword").value;
            var confirmEmail = document.getElementById("errorEmail").value;
            if (confirmPass == 0 && confirmEmail == 0) {
                document.getElementById("errorRegister").innerHTML = "";
                document.getElementById("loginRegisterBox").style.display = "none";
                document.getElementById("checkCodePhone").style.display = "block";
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open("POST", "../User/SendSmsUserRegister.php", true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send("phone=" + phone);
                xmlhttp.onload = function() {
                    var codeCopy = this.response;
                    setCode(codeCopy);
                    setEmailPassPhone(email, password, phone);uploadFile(email);
                }

            } else {
                document.getElementById("errorRegister").innerHTML = "Rezolva problemele din formular!";
            }

            event.preventDefault();
        }
        function loginEmployer() {
            document.getElementById("accountDone").innerHTML="";
            var emailLogin = document.getElementById("EmailEmployerLogin").value;
            var passwordLogin = document.getElementById("PasswordEmployerLogin").value;
            console.log(emailLogin);
            console.log(passwordLogin);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST", "EmployerLogin.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("email=" + emailLogin + "&password=" + passwordLogin);
            xmlhttp.onload = function() {
                console.log(this.response);
                if (this.response == "true") {

                    window.location.href = "EmployerPage.php";
                    document.getElementById("errorLogin").innerHTML = "";
                } else {
                    document.getElementById("errorLogin").innerHTML = "Parola sau email incorect!";
                }
            }
            event.preventDefault();

        }

</script>
</body>


</html>