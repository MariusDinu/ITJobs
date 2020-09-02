<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Completare CV</title>
  <link rel="stylesheet" href="../public/styles.css">
</head>

<body onload="test()">

  <!-- Navbar-->
  <nav class="flex flex-col items-center p-4 bg-white border-b-4 md:flex-row md:justify-around md:items-center text-primary font-primary border-primary">
    <a href="../lista joburi/index.php" class="font-bold text-grey-800 md:text-2xl">
      <p>it-jobs</p>
    </a>

    <div class="flex flex-col items-center pt-5 md:flex-row md:mx-5 md:pt-0">
      <a href="#" id="tests" class="flex items-center py-2 hover:text-secondary md:mx-5">
        <svg viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 star">
          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
        </svg>
        <span class="ml-2">Teste</span>
        <svg viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 chevron-down">
          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </a>

      <!-- Test Selection Menu-->
      <div id="testMenu" class="relative inline-block text-left">

        <div class="absolute right-0 z-50 w-56 mt-5 origin-top-right rounded-md shadow-lg left-5">
          <div class="bg-white rounded-md shadow-xs">
            <div class="py-1" role="menu" aria-orientation="vertical">
              <a href="../Quizz/concentrareFINAL.php" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900" role="menuitem">Test de concentrare</a>
              <a href="../Quizz/creativitateFINAL.php" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900" role="menuitem">Test de creativitate</a>
              <a href="../Quizz/inteligentaFINAL.php" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900" role="menuitem">Test de inteligenta</a>
              <a href="../Quizz/logicaSecventialaFINAL.php" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900" role="menuitem">Test de logica</a>
              <a href="../Quizz/testMBTI_FINAL.php" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900" role="menuitem">Test de MBTI</a>
            </div>
          </div>
        </div>
      </div>

      <a href="#" id="CV" onclick="goToCV()" class="flex items-center py-2 hover:text-secondary md:mx-5">
        <svg viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 document-text">
          <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
        </svg>
        <span class="ml-2">CV</span>
      </a>

      <a href="./UserPage.php" class="flex items-center py-2 hover:text-secondary md:mx-5">
        <svg viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 user-circle">
          <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
        </svg>
        <span class="ml-2">Profilul meu</span>
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
      <div class="h-auto max-w-4xl mx-auto mt-5 mb-10 border border-gray-400 rounded-lg shadow appearance-none bg-ternary">
        <h1 class="m-5 text-4xl text-white">Completare CV</h1>
        <div class="h-auto max-w-4xl p-5 mx-auto mt-5 bg-white border border-gray-400 rounded-bl-lg rounded-br-lg shadow appearance-none md:p-10">
          <form id="form" class="flex flex-col">

            <div class="mb-8">
              <h3 class="mb-3 font-medium text-md md:text-2xl text-primary">Informații cu caracter personal</h3>

              <div class="mb-3">
                <label class="block mb-3 text-sm md:text-md">Nume:</label>
                <input type="text" name="nume" class="block h-8 px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="nume">
              </div>

              <div class="mb-3">
                <label class="block mb-3 text-sm md:text-md">Prenume:</label>
                <input type="text" name="prenume" class="block h-8 px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="prenume">
              </div>

              <div class="mb-3">
                <label class="block mb-3 text-sm md:text-md"> Despre mine:</label>
                <textarea name="descriere" cols="23" rows="5" class="bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="descriere"></textarea>
              </div>

              <div class="mb-3">
                <label class="block mb-3 text-sm md:text-md">Data nașterii:</label>
                <input type="date" name="data" class="px-2 py-1 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="nastere">
              </div>

              <div class="mb-3">
                <label class="block mb-3 text-sm md:text-md">Gen:</label>
                <select name="gen" class="px-4 py-1 text-sm bg-gray-200 rounded" id="gen">
                  <option>Selectează din listă</option>
                  <option>Masculin</option>
                  <option>Feminin</option>
                </select>
              </div>
            </div>

            <div class="mb-8">
              <h3 class="mb-3 font-medium text-md md:text-2xl text-primary">Contact</h3>

              <div class="mb-3">
                <label class="block mb-3 text-sm md:text-md">Email:</label>
                <input type="text" name="email" class="h-8 px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="email">
              </div>

              <div class="mb-3">
                <label class="block mb-3 text-sm md:text-md">Număr telefon:</label>
                <input type="text" name="phone" class="h-8 px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="phone">
              </div>

            </div>

            <div class="mb-8">
              <h3 class="mb-3 font-medium text-md md:text-2xl text-primary">Experiență profesională</h3>

              <div id="limbaje" class="mb-8">
                <label class="block mb-3 text-sm md:text-md"> Limbaje cunoscute:</label>
                <input type="text" id="limbajeNume" name="limbaje" class="h-8 px-4 py-3 leading-tight text-gray-700 truncate bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500">

                <select name="expLimbaj" id="expLimbaj" class="px-4 py-1 pr-5 mx-3 mb-4 text-sm bg-gray-200 rounded">
                  <option value="" disabled selected>Experienta</option>
                  <option>Începător</option>
                  <option>Mediu</option>
                  <option>Avansat</option>
                </select>
                <button type="button" onclick="adaugaLimbaj()" class="inline-flex items-center px-4 text-xs font-bold text-gray-800 bg-green-400 rounded hover:bg-green-600">+</button>
              </div>

              <div id="jobs" class="mb-8">
                <label class="block mb-3 text-sm md:text-md"> Joburi anterioare:</label>
                <input type="text" id="joburiNume" name="joburi" class="h-8 px-4 py-3 leading-tight text-gray-700 truncate bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500">

                <select name="expJob" id="expJob" class="px-4 py-1 pr-5 mx-3 mb-4 text-sm bg-gray-200 rounded">
                  <option value="" disabled selected>Experienta</option>
                  <option>0-2 ani</option>
                  <option>2-5 ani</option>
                  <option>5-10 ani</option>
                  <option>10-15 ani</option>
                  <option>15+ ani</option>
                </select>
                <button type="button" onclick="adaugaJobCV()" class="inline-flex items-center px-4 text-xs font-bold text-gray-800 bg-green-400 rounded hover:bg-green-600">+</button>
              </div>

              <div id="tehnologii">
                <label class="block mb-3 text-sm md:text-md"> Tehnologii cunoscute:</label>
                <input type="text" id="techNume" name="tehnologii" class="h-8 px-4 py-3 leading-tight text-gray-700 truncate bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500">

                <select name="expTech" id="expTech" class="px-4 py-1 pr-5 mx-3 mb-4 text-sm bg-gray-200 rounded">
                  <option value="" disabled selected>Experienta</option>
                  <option>0-2 ani</option>
                  <option>2-5 ani</option>
                  <option>5-10 ani</option>
                  <option>10-15 ani</option>
                  <option>15+ ani</option>
                </select>
                <button type="button" onclick="adaugaTehnologii()" class="inline-flex items-center px-4 text-xs font-bold text-gray-800 bg-green-400 rounded hover:bg-green-600">+</button>
              </div>

            </div>
            <button type="button" onclick="submitForm()" name="submitCvForm" value="Completează CV" class="self-center inline-block w-48 px-4 py-2 mt-8 font-bold text-white transition-colors duration-300 ease-in rounded bg-secondary hover:bg-primary focus:outline-none focus:shadow-outline">Completeaza CV</button>

          </form>
        </div>
      </div>
    </div>
  </main>


  <script>
    /*
    functia aceasta pune un placeholder random pentru fiecare textarea atunci cand dam refresh
*/

    function test() {
      var items = Array("Exemplu: PHP ", "Exemplu: C++", "Exemplu: Java");
      var item = items[Math.floor(Math.random() * items.length)];
      document.getElementById("limbajeNume").placeholder = item;

      var jobs = Array("Exemplu: Full stack developer", "Exemplu: Student", "Exemplu: Absolvent");
      var item2 = jobs[Math.floor(Math.random() * jobs.length)];
      document.getElementById("joburiNume").placeholder = item2;

      var tech = Array("Exemplu: Django", "Exemplu: ReactJS", "Exemplu: UXPin");
      var item3 = tech[Math.floor(Math.random() * tech.length)];
      document.getElementById("techNume").placeholder = item3;
    }

    var limbajGlobal = 0;

    function adaugaLimbaj() {
      limbajGlobal = limbajGlobal + 1;
      var form = document.getElementById("limbaje");
      var nume = document.getElementById("limbajeNume").value;
      var selected = document.getElementById("expLimbaj");
      var selectedNumber = selected.options[selected.selectedIndex].value;
      console.log(selectedNumber);

      var divLimbaj = document.createElement("DIV");
      divLimbaj.setAttribute("id", "limbaj" + limbajGlobal);
      divLimbaj.className = "flex sm:justify-between my-3 sm:w-64";
      var pLimbaj = document.createElement("P");
      pLimbaj.setAttribute("id", "dateLimbaj" + limbajGlobal);
      pLimbaj.className = "px-2"

      var completData = nume + " : " + selectedNumber;
      pLimbaj.setAttribute("value", completData);
      pLimbaj.innerHTML = completData;
      var buttonDelete = document.createElement("BUTTON");
      buttonDelete.className = "inline-flex items-center px-4 text-xs font-bold text-gray-800 bg-red-400 rounded hover:bg-red-600";

      buttonDelete.innerHTML = "-";

      buttonDelete.setAttribute("onclick", "deleteLimbaj(this)");
      form.appendChild(divLimbaj);
      divLimbaj.appendChild(pLimbaj);
      divLimbaj.appendChild(buttonDelete);

      event.preventDefault();
    }


    function deleteLimbaj(current) {
      var a = current.parentNode;
      console.log(a.id);
      a.remove();

      event.preventDefault();
    }

    var jobGlobal = 0;

    function adaugaJobCV() {
      jobGlobal = jobGlobal + 1;
      var formJob = document.getElementById("jobs");
      var numeJob = document.getElementById("joburiNume").value;
      var selectedJob = document.getElementById("expJob");
      var selectedNumberJob = selectedJob.options[selectedJob.selectedIndex].value;
      console.log(selectedNumberJob);

      var divJobs = document.createElement("DIV");
      divJobs.setAttribute("id", "job" + jobGlobal);
      divJobs.className = "flex sm:justify-between my-3 sm:w-64";
      var pJobs = document.createElement("P");
      pJobs.setAttribute("id", "dateJob" + jobGlobal);
      pJobs.className = "px-2"

      var completDataJob = numeJob + " : " + selectedNumberJob;
      pJobs.setAttribute("value", completDataJob);
      pJobs.innerHTML = completDataJob;
      var buttonDeleteJob = document.createElement("BUTTON");
      buttonDeleteJob.innerHTML = "-";
      buttonDeleteJob.className = "inline-flex items-center px-4 text-xs font-bold text-gray-800 bg-red-400 rounded hover:bg-red-600";

      buttonDeleteJob.setAttribute("onclick", "deleteJob(this)");
      formJob.appendChild(divJobs);
      divJobs.appendChild(pJobs);
      divJobs.appendChild(buttonDeleteJob);

      event.preventDefault();
    }


    function deleteJob(current) {
      var aj = current.parentNode;
      console.log(aj.id);
      aj.remove();

      event.preventDefault();
    }

    var limbaj = "";
    var limbaje = "";
    var job="";
    var joburi="";
    var tehnologii="";
    var tehnologie="";
    var techGlobal = 0;

    function adaugaTehnologii() {
      techGlobal = techGlobal + 1;
      var formTech = document.getElementById("tehnologii");
      var numeTech = document.getElementById("techNume").value;
      var selectedTech = document.getElementById("expTech");
      var selectedNumberTech = selectedTech.options[selectedTech.selectedIndex].value;
      console.log(selectedNumberTech);

      var divTechs = document.createElement("DIV");
      divTechs.setAttribute("id", "tech" + techGlobal);
      divTechs.className = "flex sm:justify-between my-3 sm:w-64";
      var pTechs = document.createElement("P");
      pTechs.setAttribute("id", "dateTech" + techGlobal);
      pTechs.className = "px-2"

      var completDataTech = numeTech + " : " + selectedNumberTech;
      pTechs.setAttribute("value", completDataTech);
      pTechs.innerHTML = completDataTech;
      var buttonDeleteTech = document.createElement("BUTTON");
      buttonDeleteTech.innerHTML = "-";
      buttonDeleteTech.className = "inline-flex items-center px-4 text-xs font-bold text-gray-800 bg-red-400 rounded hover:bg-red-600";

      buttonDeleteTech.setAttribute("onclick", "deleteTech(this)");
      formTech.appendChild(divTechs);
      divTechs.appendChild(pTechs);
      divTechs.appendChild(buttonDeleteTech);

      event.preventDefault();
    }

    function deleteTech(current) {
      var aj = current.parentNode;
      console.log(aj.id);
      aj.remove();

      event.preventDefault();
    }

    function submitForm() {
      /*<--doar pentru limbaje -->*/

      var limbajCopy="";
      var jobCopy="";
      var techCopy="";
      var i = 1;
      while (i <= limbajGlobal) {
        var limbajId = "dateLimbaj" + i;
        console.log(limbajId);
        if (document.getElementById(limbajId) != null) {
          if (limbaje == "") {
            var limbaj = document.getElementById(limbajId).innerHTML;
            limbaje = limbaj;
            console.log(limbaj);
          } else {
            var limbaj = limbaje + "," + document.getElementById(limbajId).innerHTML;
            limbaje = limbaj;
            console.log(limbaj);
          }
        }
        i = i + 1;
      }
      limbajCopy=limbaje;
      limbaje = "";

      /* pentru joburi*/
      var k = 1;
      while (k <= jobGlobal) {
        var jobId = "dateJob" + k;
        console.log(jobId);
        if (document.getElementById(jobId) != null) {
          if (joburi == "") {
            var job = document.getElementById(jobId).innerHTML;
            joburi = job;
            console.log(job);
          } else {
            var job = joburi+ "," + document.getElementById(jobId).innerHTML;
            joburi = job;
            console.log(job);
          }
        }
        k = k + 1;
      }
jobCopy=joburi;
      joburi= "";

      /* pentru tehnologii*/

       var l = 1;
      while (l <= techGlobal) {
        var techId = "dateTech" + l;
        console.log(techId);
        if (document.getElementById(techId) != null) {
          if (tehnologii == "") {
            var tehnologie = document.getElementById(techId).innerHTML;
            tehnologii = tehnologie;
            console.log(tehnologie);
          } else {
            var tehnologie = tehnologii+ "," + document.getElementById(techId).innerHTML;
            tehnologii =tehnologie;
            console.log(tehnologie);
          }
        }
        l = l + 1;
      }
      techCopy=tehnologii;
      tehnologii= "";


    var nume=document.getElementById("nume").value;
    var prenume=document.getElementById("prenume").value;
    var email=document.getElementById("email").value;
    var phone=document.getElementById("phone").value;
    var descriere=document.getElementById("descriere").value;
    var nastere=document.getElementById("nastere").value;
    var gen=document.getElementById("gen");
    var selectedGen = gen.options[gen.selectedIndex].value;
/* trimitere catre baza de date*/
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST", "./ScriptsUser/CVScript.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("joburi="+jobCopy+"&limbaje="+limbajCopy+"&tehnologii="+techCopy+"&nume="+nume+"&prenume="+prenume+"&descriere="+descriere+"&nastere="+nastere+"&gen="+selectedGen+"&email="+email+"&phone="+phone);
            xmlhttp.onload = function() {
     console.log( this.response );
             if(this.response == "true" )
              {window.location.href="UserPage.php";}
            else {console.log(this.response);}
            }
event.preventDefault();
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

  <!-- Test Dropdown Menu -->
  <script>
    const testMenu = document.getElementById("testMenu")
    testMenu.style.display = 'none';
    document.getElementById("tests").addEventListener("click", () => {
      testMenu.style.display = testMenu.style.display === 'none' ? '' : 'none';
    });
  </script>
</body>
<?php


?>

</html>