<html>

<head>
    <title> Login and Register </title>
    <link rel="stylesheet" href="LoRe-style.css">
</head>

<body>
    <div class="screen">
        <div id="loginRegisterBox" class="box">
            <div class="button">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <form id="login" class="input">
                <br></br>
                <input id="EmailUserLogin" type="text" class="input-field" placeholder="E-mail" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" required>
                <input id="PasswordUserLogin" type="password" class="input-field" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                <br></br>
                <input type="checkbox" class="check-box"><span> Remember Password</span>
                <br><br></br>
                </br>
                <p id="errorLogin"></p>
                <button class="submit-btn" onclick="loginUser()">Login</button>
            </form>
            <form id="register" class="input">
                <br></br>
                <input id="EmailUserRegister" type="text" onkeyup="checkEmail()" class="input-field" placeholder="E-mail" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" required>
                <p id="errorEmail"></p>
                <input id="PasswordUserRegister" type="password" class="input-field" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                <input id="ConfirmPasswordUserRegister" onkeyup="checkPassword()" type="password" class="input-field" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                <p id="errorPassword" value="0"></p>
                <input id="PhoneUserRegister" type="text" class="input-field" placeholder="PhoneNumber" maxlength="9" pattern="[0-9]+" required>
                <p id="errorPhone"></p>
                <br>
                </br>
                <!--<input type="checkbox" class="check-box"><span>  I agree to the terms and conditions</span>-->
                <br></br><br></br>
                <p id="errorRegister"></p>
                <button class="submit-btn" onclick="registerUser()">Register</button>
            </form>
        </div>
        <div id="checkCodePhone" class="box" style="display:none">
            <form id="checkCode" class='input'>
                <input id="inputCheckCode" class="input-field" maxlength="4" pattern="[0-9]+" required>
                <button class="submit-btn" onclick="checkCode()">Check Code</button>
                <button class="submit-btn" onclick="resendCode()">Send code again</button> </form>
        </div>
    </div>

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
    <script></script>
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
                document.getElementById("errorPassword").innerHTML = "Parolele nu se potrivesc";
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
</body>

</html>