<?php
session_start();
?>
<!DOCTYPE html>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Adaugare Job</title>
   <link rel="stylesheet" href="../public/styles.css">
</head>

<body>
   <!-- Navbar-->
   <nav class="flex flex-col items-center p-4 bg-white border-b-4 md:flex-row md:justify-around md:items-center text-primary font-primary border-primary">
      <a href="../Employer/ListaJoburiEmployer/index.php" class="font-bold text-grey-800 md:text-2xl">
         <p>it-jobs</p>
      </a>

      <div class="flex flex-col items-center pt-5 md:flex-row md:mx-5 md:pt-0">

         <a href="./EmployerPage.php" class="flex items-center py-2 hover:text-secondary md:mx-5">
            <svg viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 user-circle">
               <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
            </svg>
            <span class="ml-2">Profilul Angajatorului</span>
         </a>

         <a href="" onclick="logout()" id="logout" class="flex items-center py-2 hover:text-secondary md:mx-5 ">
            <svg viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 logout">
               <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path>
            </svg>
            <span class="ml-2">Deconecteaza-te</span>
         </a>

         <a href="#" id="lang" class="flex items-center py-2 hover:text-secondary md:mx-5">
            <img src="../img/ro-flag.png" alt="" class="h-5">
            <svg viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 chevron-down">
               <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
         </a>

         <!-- Language Selection Menu-->
         <div id="languageMenu" class="relative inline-block text-left">

            <div class="absolute right-0 z-50 w-56 mt-5 origin-top-right rounded-md shadow-lg">
               <div class="bg-white rounded-md shadow-xs">
                  <div class="py-1" role="menu" aria-orientation="vertical">
                     <a href="#" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900" role="menuitem">Română</a>
                     <a href="#" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900" role="menuitem">English</a>
                     <a href="#" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900" role="menuitem">Magyar</a>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </nav>

   <main class="min-h-screen overflow-hidden bg-gray-200">
      <div class="w-10/12 h-auto max-w-4xl mx-auto">
         <div class="h-auto max-w-4xl mx-auto mt-5 mb-10 border border-gray-400 rounded-lg shadow appearance-none bg-secondary">
            <h1 class="m-5 text-4xl text-white">Adaugare Job</h1>
            <div class="h-auto max-w-4xl p-5 mx-auto mt-5 bg-white border border-gray-400 rounded-bl-lg rounded-br-lg shadow appearance-none md:p-10">
               <form id="form" class="flex flex-col">
                  <div class="flex flex-wrap justify-center mb-10">
                     <div class="flex flex-col items-center mr-5">
                        <div class="flex items-center self-end mb-5">
                           <label for="titlu" class="text-sm sm:text-md">Titlu job</label>
                           <input type="text" name="titlu" id="titlu" class="w-48 h-8 px-4 py-3 ml-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none sm:w-64 border-primary focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                        <div class="flex items-center self-end mb-5">
                           <label for="tip" class="text-sm sm:text-md">Tip de job</label>
                           <input type="text" name="tip" id="tip" class="w-48 h-8 px-4 py-3 ml-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none sm:w-64 border-primary focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                        <div class="flex items-center self-end mb-5">
                           <label for="oras" class="text-sm sm:text-md">Oras</label>
                           <input type="text" name="oras" id="oras" class="w-48 h-8 px-4 py-3 ml-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none sm:w-64 border-primary focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                     </div>
                     <div class="flex flex-col items-center sm:ml-5">
                        <div class="flex items-center self-end mb-5">
                           <label for="studii" class="text-sm sm:text-md">Nivel de studii</label>
                           <input type="text" name="studii" id="studii" class="w-48 h-8 px-4 py-3 ml-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none sm:w-64 border-primary focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                        <div class="flex items-center self-end mb-5">
                           <label for="cariera" class="text-sm sm:text-md">Nivel cariera</label>
                           <input type="text" name="cariera" id="cariera" class="w-48 h-8 px-4 py-3 ml-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none sm:w-64 border-primary focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                        <div class="flex items-center self-end mb-5">
                           <label for="salariu" class="text-sm sm:text-md">Salariu</label>
                           <input type="text" name="salariu" id="salariu" class="w-48 h-8 px-4 py-3 ml-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none sm:w-64 border-primary focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                     </div>
                  </div>
                  <div class="flex flex-col justify-evenly lg:flex-row">
                     <div class="flex flex-col items-center justify-center mb-5">
                        <label for="companie" class="block mb-3">Descrierea companiei</label>
                        <textarea id="companie" name="companie" class="w-full h-40 px-4 py-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none lg:w-64 border-primary focus:outline-none focus:bg-white focus:border-gray-500"></textarea>
                     </div>
                     <div class="flex flex-col items-center justify-center mb-5">
                        <label for="job" class="block mb-3">Descrierea job-ului</label>
                        <textarea id="job" name="job" class="w-full h-40 px-4 py-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none lg:w-64 border-primary focus:outline-none focus:bg-white focus:border-gray-500"></textarea>
                     </div>
                     <div class="flex flex-col items-center justify-center mb-5">
                        <label for="candidat" class="block mb-3">Candidatul ideal</label>
                        <textarea id="candidat" name="candidat" class="w-full h-40 px-4 py-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none lg:w-64 border-primary focus:outline-none focus:bg-white focus:border-gray-500"></textarea>
                     </div>
                  </div>
                  <button type="button" onclick="addJob()" class="self-center inline-block w-48 px-4 py-2 mt-8 font-bold text-white transition-colors duration-300 ease-in rounded bg-ternary hover:bg-primary focus:outline-none focus:shadow-outline">Adauga job</button>
               </form>
            </div>
         </div>
      </div>
   </main>


     

</body>
<script>
function addJob(){
var titlu=document.getElementById('titlu').value;
var tip=document.getElementById('tip').value;
var oras=document.getElementById('oras').value;
var nivelStudii=document.getElementById('studii').value;
var nivelCariera=document.getElementById('cariera').value;
var salariu=document.getElementById('salariu').value;
var descriereCompanie=document.getElementById('companie').value;
var descriereaJobului=document.getElementById('job').value;
var candidatulIdeal=document.getElementById('candidat').value;

var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "./ScriptsEmployer/addJobScript.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("titlu="+titlu+"&tip="+tip+"&oras="+oras+"&studii="+nivelStudii+"&cariera="+nivelCariera+"&salariu="+salariu+"&companie="+descriereCompanie+"&job="+descriereaJobului+"&candidat="+candidatulIdeal);
    xmlhttp.onload = function() {
      console.log(this.response);
      if(this.response=="true")
      {window.location.href="./EmployerPage.php"}
      else {}
    }
    event.preventDefault();


}
function logout() {
        var xmlhttp = new XMLHttpRequest();

    xmlhttp.open("POST", "../Employer/ScriptsEmployer/Logout.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
    xmlhttp.onload = function() {

      window.location.href="../Employer/LoginRegisterEmployer.php"
    }
    console.log('logout successful');
    }
</script>
<!-- Language Dropdown Menu -->
<script>
   const languageMenu = document.getElementById("languageMenu")
   languageMenu.style.display = 'none';
   document.getElementById("lang").addEventListener("click", () => {
      languageMenu.style.display = languageMenu.style.display === 'none' ? '' : 'none';
   });
</script>

</html>