<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title> UserPage</title>
    <style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>




<body onload="afisareAplicari('<?php echo $_SESSION['user'];?>')">
<button id="UserProfile">User Profile</button>
<button id="CV" onclick="goToCV()">CV</button>
<div class="dropdown">
<button class="dropbtn" id="dropDownTeste">Teste</button>
<div class="dropdown-content">
    <a href="../Quizz/concentrareFINAL.php">Test de concentrare</a>
    <a href="../Quizz/creativitateFINAL.php">Test de creativitate</a>
    <a href="../Quizz/inteligentaFINAL.php">Test de inteligenta</a>
    <a href="../Quizz/logicaSecventialaFINAL.php">Test de logica</a>
    <a href="../Quizz/testMBTI_FINAL.php">Test de MBTI</a>
</div>
</div>


<button id="limba">Limba</button>
<div id="profil">

</div>

<h1>Aplicarile mele</h1>
<div id="afisareAplicari">
</div>

</body>
<script>

function goToCV(){
            window.location.href="CVform.php";
}

function afisareAplicari(input){
            showData(input);

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST", "../ScriptsUser/Aplicari.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("userName=" +input);
            xmlhttp.onload = function() {
             
               document.getElementById('afisareAplicari').innerHTML=this.response;
            }
event.preventDefault();
}
function showData(input){

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST", "../ScriptsUser/Data.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("userName=" +input);
            xmlhttp.onload = function() {
            console.log(this.response);
               document.getElementById('profil').innerHTML=this.response;
            }
event.preventDefault();
}
</script>
</html>