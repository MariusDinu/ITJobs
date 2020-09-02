<!DOCTYPE html style="height: 100%">
<html lang="ro">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../public/styles.css">
</head>

<body style="height: 100%; background-image: url(../img/Illustration-Angajator2.jpg)" class="bg-contain lg:bg-cover">
  <div class="flex flex-col items-center justify-center w-full h-full py-16 bg-transparent xl:w-1/2">
    <div id="loginRegisterBox" class="flex flex-col justify-center w-3/4 h-auto max-w-sm p-4 mx-auto overflow-scroll bg-white border border-gray-400 rounded-lg shadow appearance-none sm:p-10 md:w-1/2">

      <div class="inline-flex mx-auto mb-10 text-xs leading-none text-gray-500 bg-gray-200 border-2 border-gray-300 rounded-full sm:text-lg">
        <button onclick="toggleForms()" class="inline-flex items-center w-24 px-4 py-2 transition-colors duration-300 ease-in rounded-l-full sm:w-32 focus:outline-none hover:text-black focus:text-ternary active">
          <span id="btn-login" class="mx-auto font-medium text-ternary">Autentificare</span>
        </button>
        <button onclick="toggleForms()" class="inline-flex items-center w-24 px-4 py-2 transition-colors duration-300 ease-in rounded-r-full sm:w-32 focus:outline-none hover:text-black focus:text-ternary">
          <span id="btn-register" class="mx-auto font-medium">Inregistrare</span>
        </button>
      </div>

      <form id="login" class="flex flex-col">
        <label class="block mb-2 text-sm font-bold text-gray-700">Email</label>
        <input id="EmailEmployerLogin" type="text" class="block w-full px-3 py-2 mb-3 placeholder-gray-600 bg-white border-2 border-gray-300 rounded-lg shadow-md text-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" placeholder="Email" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" required>

        <label class="block mb-2 text-sm font-bold text-gray-700">Parola</label>
        <input id="PasswordEmployerLogin" type="password" class="block w-full px-3 py-2 mb-5 placeholder-gray-600 bg-white border-2 border-gray-300 rounded-lg shadow-md text-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" placeholder="*************" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>

        <span><input class="inline mr-2 leading-tight" type="checkbox">Retine parola</span>
        <p id="errorLogin" class="self-center my-4 font-medium text-red-700"></p>
        <button type="button" class="px-4 py-2 mt-3 font-bold text-white transition-colors duration-300 ease-in rounded bg-ternary hover:bg-primary focus:outline-none focus:shadow-outline" onclick="loginEmployer()">Intra in cont</button>
      </form>

      <form id="register" class="flex flex-col hidden overflow-auto">
        <label class="inline-block mb-2 text-sm font-bold text-gray-700">Nume companie</label>
        <input id="inputNumeFirma" name="inputNumeFirma" type="text" class="block w-full px-3 py-2 mb-3 placeholder-gray-600 bg-white border-2 border-gray-300 rounded-lg shadow-md text-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" required>

        <label class="inline-block mb-2 text-sm font-bold text-gray-700">Email</label>
        <span id="errorEmail" class="self-center hidden my-4 font-medium text-red-700"></span>
        <input id="EmailEmployerRegister" name="EmailEmployerRegister" type="text" onkeyup="checkEmail()" class="block w-full px-3 py-2 mb-3 placeholder-gray-600 bg-white border-2 border-gray-300 rounded-lg shadow-md text-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" placeholder="Email" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" required>

        <label class="inline-block mb-2 text-sm font-bold text-gray-700">Parola</label>
        <span id="errorPassword" value="0" class="self-center hidden my-4 font-medium text-red-700"></span>
        <input id="PasswordEmployerRegister" name="PasswordEmployerRegister" type="password" class="block w-full px-3 py-2 mb-3 placeholder-gray-600 bg-white border-2 border-gray-300 rounded-lg shadow-md text-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" placeholder="*************" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
        <label class="block mb-2 text-sm font-bold text-gray-700">Confirmare parola</label>
        <input id="ConfirmPasswordEmployerRegister" name="ConfirmPasswordEmployerRegister" onkeyup="checkPassword()" type="password" class="block w-full px-3 py-2 mb-3 placeholder-gray-600 bg-white border-2 border-gray-300 rounded-lg shadow-md text-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" placeholder="*************" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>

        <label class="inline-block mb-2 text-sm font-bold text-gray-700">Telefon</label>
        <span id="errorPhone" class="self-center hidden my-4 font-medium text-red-700"></span>
        <input id="PhoneEmployerRegister" name="PhoneEmployerRegister" type="text" class="block w-full px-3 py-2 mb-3 placeholder-gray-600 bg-white border-2 border-gray-300 rounded-lg shadow-md text-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" placeholder="(+40)" maxlength="9" pattern="[0-9]+" required>

        <label class="inline-block mb-2 text-sm font-bold text-gray-700">Website companie</label>
        <input id="inputSiteFirma" name="inputSiteFirma" type="text" class="block w-full px-3 py-2 mb-3 placeholder-gray-600 bg-white border-2 border-gray-300 rounded-lg shadow-md text-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" required>

        <label class="inline-block mb-2 text-sm font-bold text-gray-700">Limba folosita in companie</label>
        <input id="limbajeFirma" name="limbajeFirma" type="text" class="block w-full px-3 py-2 mb-3 placeholder-gray-600 bg-white border-2 border-gray-300 rounded-lg shadow-md text-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" required>

        <label class="inline-block mb-2 text-sm font-bold text-gray-700">C.U.I</label>
        <input id="cuiFirma" name="cuiFirma" maxlength="9" pattern="[0-9]+" type="text" class="block w-full px-3 py-2 mb-3 placeholder-gray-600 bg-white border-2 border-gray-300 rounded-lg shadow-md text-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" required>

        <label class="inline-block mb-2 text-sm font-bold text-gray-700">C.I.F</label>
        <input id="cifFirma" name="cifFirma" maxlength="9" pattern="[0-9]+" type="text" class="block w-full px-3 py-2 mb-3 placeholder-gray-600 bg-white border-2 border-gray-300 rounded-lg shadow-md text-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" required>

        <label for="descriere" class="inline-block mb-2 text-sm font-bold text-gray-700">Descrierea companiei</label>
        <input id="descriere" name="descriere" class="block w-full px-3 py-2 mb-3 placeholder-gray-600 bg-white border-2 border-gray-300 rounded-lg shadow-md text-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none"></textarea>

        <input type="file" name="file" id="file" multiple class="my-3">

        <!--<input type="checkbox" class="check-box"><span>  I agree to the terms and conditions</span>-->
        <p id="errorRegister" class="self-center my-4 font-medium text-red-700"></p>
        <button name="submitFirma" class="px-4 py-2 mt-3 font-bold text-white transition-colors duration-300 ease-in rounded bg-ternary hover:bg-primary focus:outline-none focus:shadow-outline" onclick="registerEmployer()">Creaza cont</button>
      </form>
    </div>

    <div id="checkCodePhone" class="hidden w-3/4 h-auto max-w-sm p-4 mx-auto bg-white border border-gray-400 rounded-lg shadow appearance-none sm:p-10 md:w-1/2">
      <form id="checkCode" class='flex flex-col justify-center'>
        <input id="inputCheckCode" class="block w-full px-3 py-2 mb-5 placeholder-gray-600 bg-white border-2 border-gray-300 rounded-lg shadow-md text-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" placeholder="****" maxlength="4" pattern="[0-9]+" required>
        <button class="px-4 py-2 mb-3 font-bold text-white rounded bg-ternary hover:bg-primary" onclick="checkCode()">Verifica codul</button>
        <button class="px-4 py-2 font-semibold text-black bg-transparent border-2 rounded border-ternary hover:text-white hover:bg-ternary" onclick="resendCode()">Retrimite codul</button> </form>
    </div>
  </div>
</body>

<!-- Login / Register toggle -->
<script>
  const loginForm = document.getElementById("login");
  const registerForm = document.getElementById("register");
  const loginButton = document.getElementById("btn-login");
  const registerButton = document.getElementById("btn-register");

  function toggleForms() {
    loginForm.classList.toggle('hidden');
    registerForm.classList.toggle('hidden');
    loginButton.classList.toggle('text-ternary');
    registerButton.classList.toggle('text-ternary');
  }
</script>

</html>


<!-- OLD - verifica pt backend -------------------------------------------
<!DOCTYPE html>
<html>

<head>
  <title> Login and Register Employer</title>
</head>

<body class="hidden">

  <div class="hidden screen">
    <div id="loginRegisterBox" class="box">
      <div class="button">
        <div id="btn"></div>
        <button type="button" class="toggle-btn" onclick="login()">Login</button>
        <button type="button" class="toggle-btn" onclick="register()">Register</button>
      </div>

      <form id="register" class="input" method="post" action="" enctype="multipart/form-data">
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
        <input class="input-field" type="text" onKeyUp="checkPhone(this)" maxlength="9" pattern="[0-9]+" id="PhoneEmployerRegister" name="PhoneEmployerRegister" required>
        <p id="errorPhone"></p>
        <p> Company Site:</p>
        <input class="input-field" type="text" id="inputSiteFirma" name="inputSiteFirma" required>

        <p> Languages Used in Company:</p>
        <input class="input-field" type="text" id="limbajeFirma" name="limbajeFirma" required>

        <p>C.U.I.:</p>
        <input class="input-field" type="text" id="cuiFirma" maxlength="9" pattern="[0-9]+" name="cuiFirma" required>
        <br>
        <p>C.I.F.:</p>
        <input class="input-field" type="text" id="cifFirma" maxlength="9" pattern="[0-9]+" name="cifFirma" required>
        <p> Company description:</p>
        <input class="input-field" type="text" id="tehnologii" name="tehnologii" required>
        <br>

        <input type="file" name="file" id="file" multiple>
        <p id="errorRegister"></p>
        <button class='submit-btn' type="submit" name='submitFirma' onclick="registerEmployer()">Register</button>
      </form>

      <form id="login" class="input">
        <p id="accountDone"><?php if (isset($_GET['succes']) == 1) echo "Cont creat cu succes!"; ?></p>
        <br></br>
        <input id="EmailEmployerLogin" type="text" class="input-field" placeholder="E-mail" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" required>
        <input id="PasswordEmployerLogin" type="password" class="input-field" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
        <br></br>
        <input type="checkbox" class="check-box"><span> Remember Password</span>
        <br><br></br>
        </br>
        <p id="errorLogin"></p>
        <button class="submit-btn" onclick="loginEmployer()">Login</button>
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
   -->

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

    function checkEmail() {
      var emailScript = document.getElementById("EmailEmployerRegister").value;
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("POST", "../Employer/ScriptsEmployer/SearchEmployer.php", true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send("email=" + emailScript);
      xmlhttp.onload = function() {

        if (this.response == "true") {
          document.getElementById("errorEmail").innerHTML = "";
          document.getElementById("errorEmail").value = 0;
        } else {
          document.getElementById("errorEmail").innerHTML = "Acest email este deja inregistrat!";
          document.getElementById("errorEmail").value = 1;
        }

      }
    }


    function checkPhone(current) {
      console.log(current.value.length);
      if (current.value.length > 8) {
        document.getElementById("errorPhone").innerHTML = "";
        document.getElementById("errorPhone").value = 0;
      } else {
        document.getElementById("errorPhone").innerHTML = "Acest numar nu este valid!";
        document.getElementById("errorPhone").value = 1;
      }
    }


    function uploadFile(email) {
      const myForm = document.getElementById("register");
      const inpFile = document.getElementById("file");
      const endpoint = "../Employer/upload.php";
      const formData = new FormData();

      console.log(inpFile.files);
      formData.append("file", inpFile.files[0]);
      formData.append("user", email);
      fetch(endpoint, {
        method: "post",
        body: formData
      }).catch(console.error);
      event.preventDefault();
    }

    function checkPassword() {
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


    function setEmailPassPhone(emailCopy, passCopy, phoneCopy) {
      email = emailCopy;
      password = passCopy;
      phone = phoneCopy;
    }


    function registerEmployer() {

      var email = document.getElementById("EmailEmployerRegister").value;
      var password = document.getElementById("PasswordEmployerRegister").value;
      var phone = document.getElementById("PhoneEmployerRegister").value;
      var confirmPass = document.getElementById("errorPassword").value;
      var confirmEmail = document.getElementById("errorEmail").value;
      var confirmPhone = document.getElementById("errorPhone").value;

      if (confirmPass == 0 && confirmEmail == 0 && confirmPhone == 0) {
        setEmailPassPhone(email, password, phone);
        document.getElementById("errorRegister").innerHTML = "";
        document.getElementById("loginRegisterBox").style.display = "none";
        document.getElementById("checkCodePhone").style.display = "block";
        document.getElementById('errorCode').innerHTML = "";

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "./ScriptsEmployer/EmployerRegister.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("email=" + email + "&password=" + password + "&phone=" + phone);
        xmlhttp.onload = function() {
          window.location.href = "./LoginRegisterEmployer.php?succes=2";
        }
        uploadFile(email);
      } else {
        document.getElementById("errorRegister").innerHTML = "Rezolva problemele din formular!";
      }
      event.preventDefault();
    }

    function loginEmployer() {
    
      var emailLogin = document.getElementById("EmailEmployerLogin").value;
      var passwordLogin = document.getElementById("PasswordEmployerLogin").value;

      var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("POST", "./ScriptsEmployer/EmployerLogin.php", true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send("email=" + emailLogin + "&password=" + passwordLogin);
      xmlhttp.onload = function() {
        if (this.response == "true") {

          window.location.href = "./EmployerPage.php";
          document.getElementById("errorLogin").innerHTML = "";
        } else if (this.response == "false") {
          document.getElementById("errorLogin").innerHTML = "Parola sau email incorect!";
        } else {
          document.getElementById("errorLogin").innerHTML = "Adminul trebuie sa verifice documentele! Durata aproximativa intre 5-10 minute.";
        }
      }
      event.preventDefault();
    }
  </script>
</body>


</html>

