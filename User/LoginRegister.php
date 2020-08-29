<!DOCTYPE html style="height: 100%">
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/styles.css">
</head>

<body style="height: 100%">
    <div class="flex flex-col items-center justify-center w-full h-full py-16 bg-ternary xl:w-1/2">
        <div id="loginRegisterBox" class="flex flex-col justify-center w-3/4 h-auto max-w-sm p-4 mx-auto bg-white border border-gray-400 rounded-lg shadow appearance-none sm:p-10 md:w-1/2">

            <div class="inline-flex mx-auto mb-10 text-xs leading-none text-gray-500 bg-gray-200 border-2 border-gray-300 rounded-full sm:text-lg">
                <button onclick="toggleForms()" class="inline-flex items-center w-24 px-4 py-2 transition-colors duration-300 ease-in rounded-l-full sm:w-32 focus:outline-none hover:text-black focus:text-secondary active">
                    <span id="btn-login" class="mx-auto font-medium text-secondary">Autentificare</span>
                </button>
                <button onclick="toggleForms()" class="inline-flex items-center w-24 px-4 py-2 transition-colors duration-300 ease-in rounded-r-full sm:w-32 focus:outline-none hover:text-black focus:text-secondary">
                    <span id="btn-register" class="mx-auto font-medium">Inregistrare</span>
                </button>
            </div>

            <form id="login" class="flex flex-col">
                <label class="block mb-2 text-sm font-bold text-gray-700">Email</label>
                <input id="EmailUserLogin" type="text" class="block w-full px-3 py-2 mb-3 placeholder-gray-600 bg-white border-2 border-gray-300 rounded-lg shadow-md text-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" placeholder="Email" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" required>

                <label class="block mb-2 text-sm font-bold text-gray-700">Parola</label>
                <input id="PasswordUserLogin" type="password" class="block w-full px-3 py-2 mb-5 placeholder-gray-600 bg-white border-2 border-gray-300 rounded-lg shadow-md text-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" placeholder="*************" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>

                <span><input class="inline mr-2 leading-tight" type="checkbox">Retine parola</span>
                <p id="errorLogin" class="self-center my-4 font-medium text-red-700"></p>
                <button class="px-4 py-2 mt-3 font-bold text-white transition-colors duration-300 ease-in rounded bg-secondary hover:bg-primary focus:outline-none focus:shadow-outline" onclick="loginUser()">Intra in cont</button>
            </form>

            <form id="register" class="flex flex-col hidden">
                <label class="inline-block mb-2 text-sm font-bold text-gray-700">Email</label>
                <span id="errorEmail" class="self-center hidden my-4 font-medium text-red-700"></span>
                <input id="EmailUserRegister" type="text" onkeyup="checkEmail()" class="block w-full px-3 py-2 mb-3 placeholder-gray-600 bg-white border-2 border-gray-300 rounded-lg shadow-md text-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" placeholder="Email" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" required>
                
                <label class="inline-block mb-2 text-sm font-bold text-gray-700">Parola</label>
                <span id="errorPassword" value="0" class="self-center hidden my-4 font-medium text-red-700"></span>
                <input id="PasswordUserRegister" type="password" class="block w-full px-3 py-2 mb-3 placeholder-gray-600 bg-white border-2 border-gray-300 rounded-lg shadow-md text-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" placeholder="*************" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                <label class="block mb-2 text-sm font-bold text-gray-700">Confirmare parola</label>
                <input id="ConfirmPasswordUserRegister" onkeyup="checkPassword()" type="password" class="block w-full px-3 py-2 mb-3 placeholder-gray-600 bg-white border-2 border-gray-300 rounded-lg shadow-md text-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" placeholder="*************" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                
                <label class="inline-block mb-2 text-sm font-bold text-gray-700">Telefon</label>
                <span id="errorPhone" class="self-center hidden my-4 font-medium text-red-700"></span>
                <input id="PhoneUserRegister" type="text" class="block w-full px-3 py-2 mb-3 placeholder-gray-600 bg-white border-2 border-gray-300 rounded-lg shadow-md text-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" placeholder="(+40)" maxlength="9" pattern="[0-9]+" required>
                
                <!--<input type="checkbox" class="check-box"><span>  I agree to the terms and conditions</span>-->
                <p id="errorRegister" class="self-center my-4 font-medium text-red-700"></p>
                <button class="px-4 py-2 mt-3 font-bold text-white transition-colors duration-300 ease-in rounded bg-secondary hover:bg-primary focus:outline-none focus:shadow-outline" onclick="registerUser()">Creaza cont</button>
            </form>
        </div>
        
        <div id="checkCodePhone" class="hidden w-3/4 h-auto max-w-sm p-4 mx-auto bg-white border border-gray-400 rounded-lg shadow appearance-none sm:p-10 md:w-1/2">
            <form id="checkCode" class='flex flex-col justify-center'>
            <input id="inputCheckCode" class="block w-full px-3 py-2 mb-5 placeholder-gray-600 bg-white border-2 border-gray-300 rounded-lg shadow-md text-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" placeholder="****" maxlength="4" pattern="[0-9]+" required>
            <button class="px-4 py-2 mb-3 font-bold text-white rounded bg-secondary hover:bg-primary" onclick="checkCode()">Verifica codul</button>
            <button class="px-4 py-2 font-semibold text-black bg-transparent border-2 rounded border-secondary hover:text-white hover:bg-secondary" onclick="resendCode()">Retrimite codul</button> </form>
        </div>
    </div>
</body>

<script>
    const loginForm = document.getElementById("login");
    const registerForm = document.getElementById("register");
    const loginButton = document.getElementById("btn-login");
    const registerButton = document.getElementById("btn-register");

    function toggleForms() {
        loginForm.classList.toggle('hidden');
        registerForm.classList.toggle('hidden');
        loginButton.classList.toggle('text-secondary');
        registerButton.classList.toggle('text-secondary');
    }
</script>
<script>
    var code = 0;
    var email;
    var password;
    var phone;

    function checkEmail() {
        var emailScript = document.getElementById("EmailUserRegister").value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "./ScriptsUser/SearchUser.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("email=" + emailScript);
        xmlhttp.onload = function() {
            console.log(this.response);
            if (this.response == "true") {
                document.getElementById("errorEmail").innerHTML = "";
                document.getElementById("errorEmail").value = 0;
            } else {
                document.getElementById("errorEmail").classList.toggle('hidden');
                document.getElementById("errorEmail").innerHTML = "Acest email este deja inregistrat!";
                document.getElementById("errorEmail").value = 1;
            }

        }
    }

    function checkPassword() {
        var pass = document.getElementById("PasswordUserRegister").value;
        var confirmPass = document.getElementById("ConfirmPasswordUserRegister").value;
        if (pass == confirmPass) {
            document.getElementById("errorPassword").innerHTML = "";
            document.getElementById("errorPassword").value = 0;
        } else {
            document.getElementById("errorPassword").classList.toggle('hidden');
            document.getElementById("errorPassword").innerHTML = "Parolele nu se potrivesc!";
            document.getElementById("errorPassword").value = 1;
        }

    }

    function resendCode() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "./ScriptsUser/SendSmsUserRegister.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("phone=" + phone);
        xmlhttp.onload = function() {
            var codeCopy = this.response;
            setCode(codeCopy);
        }
        event.preventDefault();
    }


    function registerUser() {
        var email = document.getElementById("EmailUserRegister").value;
        var password = document.getElementById("PasswordUserRegister").value;
        var phone = document.getElementById("PhoneUserRegister").value;
        //var prefix = document.getElementById("PrefixUserRegister").value;
        var confirmPass = document.getElementById("errorPassword").value;
        var confirmEmail = document.getElementById("errorEmail").value;
        if (confirmPass == 0 && confirmEmail == 0) {
            document.getElementById("errorRegister").innerHTML = "";
            document.getElementById("loginRegisterBox").style.display = "none";
            document.getElementById("checkCodePhone").style.display = "block";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST", "./ScriptsUser/SendSmsUserRegister.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("phone=" + phone);
            xmlhttp.onload = function() {
                var codeCopy = this.response;
                setCode(codeCopy);
                setEmailPassPhone(email, password, phone);
            }

        } else {
            document.getElementById("errorRegister").classList.toggle('hidden');
            document.getElementById("errorRegister").innerHTML = "Rezolva problemele din formular!";
        }

        event.preventDefault();
    }

    function loginUser() {
        var emailLogin = document.getElementById("EmailUserLogin").value;
        var passwordLogin = document.getElementById("PasswordUserLogin").value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "./ScriptsUser/UserLogin.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("email=" + emailLogin + "&password=" + passwordLogin);
        xmlhttp.onload = function() {
            console.log(this.response);
            if (this.response == "true") {

                window.location.href = "UserPage.php";
                document.getElementById("errorLogin").innerHTML = "";
            } else {
                document.getElementById("errorLogin").innerHTML = "Parola sau email incorect!";
            }
        }
        event.preventDefault();

    }

    function setCode(codeForCheck) {
        code = codeForCheck;
        console.log(code);
    }

    function setEmailPassPhone(emailCopy, passCopy, phoneCopy) {
        email = emailCopy;
        password = passCopy;
        phone = phoneCopy;
    }

    function checkCode() {
        var codeFromInput = document.getElementById("inputCheckCode").value;
        if (codeFromInput == code) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST", "./ScriptsUser/UserRegister.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("email=" + email + "&password=" + password + "&phone=" + phone);
            xmlhttp.onload = function() {
                window.location.href = "LoginRegister.html";
            }
        }
        event.preventDefault();
    }
</script>

</html>