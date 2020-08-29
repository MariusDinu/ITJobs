<?php 
session_start();
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>it-jobs</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <!-- Navbar-->
  <?php if(isset($_SESSION['user'])){
echo "<nav class='flex flex-col items-center p-4 bg-white border-b-4 md:flex-row md:justify-around md:items-center text-primary font-primary border-primary'>
    <a href='../lista joburi/index.php' class='font-bold text-grey-800 md:text-2xl'>
      <p>it-jobs</p>
    </a>

    <div class='flex flex-col items-center pt-5 md:flex-row md:mx-5 md:pt-0'>
      <a href='#' id='tests' class='flex items-center py-2 hover:text-secondary md:mx-5'>
        <svg viewBox='0 0 20 20' fill='currentColor' class='w-5 h-5 star'>
          <path d='M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z'></path>
        </svg>
        <span class='ml-2'>Teste</span>
        <svg viewBox='0 0 20 20' fill='currentColor' class='w-6 h-6 chevron-down'>
          <path fill-rule='evenodd' d='M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z' clip-rule='evenodd'></path>
        </svg>
      </a>

      <!-- Test Selection Menu-->
      <div id='testMenu' class='relative inline-block text-left'>

        <div class='absolute right-0 z-50 w-56 mt-5 origin-top-right rounded-md shadow-lg left-5'>
          <div class='bg-white rounded-md shadow-xs'>
            <div class='py-1' role='menu' aria-orientation='vertical'>
              <a href='../Quizz/concentrareFINAL.php' class='block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900' role='menuitem'>Test de concentrare</a>
              <a href='../Quizz/creativitateFINAL.php' class='block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900' role='menuitem'>Test de creativitate</a>
              <a href='../Quizz/inteligentaFINAL.php' class='block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900' role='menuitem'>Test de inteligenta</a>
              <a href='../Quizz/logicaSecventialaFINAL.php' class='block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900' role='menuitem'>Test de logica</a>
              <a href='../Quizz/testMBTI_FINAL.php' class='block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900' role='menuitem'>Test de MBTI</a>
            </div>
          </div>
        </div>
      </div>

      <a href='#' id='CV' onclick='goToCV()' class='flex items-center py-2 hover:text-secondary md:mx-5'>
        <svg viewBox='0 0 20 20' fill='currentColor' class='w-5 h-5 document-text'>
          <path fill-rule='evenodd' d='M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z' clip-rule='evenodd'></path>
        </svg>
        <span class='ml-2'>CV</span>
      </a>

      <a href='./UserPage.php' class='flex items-center py-2 hover:text-secondary md:mx-5'>
        <svg viewBox='0 0 20 20' fill='currentColor' class='w-5 h-5 user-circle'>
          <path fill-rule='evenodd' d='M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z' clip-rule='evenodd'></path>
        </svg>
        <span class='ml-2'>Profilul meu</span>
      </a>

      <a href='#' id='lang' class='flex items-center py-2 hover:text-secondary md:mx-5'>
        <img src='../img/ro-flag.png' alt='' class='h-5'>
        <svg viewBox='0 0 20 20' fill='currentColor' class='w-6 h-6 chevron-down'>
          <path fill-rule='evenodd' d='M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z' clip-rule='evenodd'></path>
        </svg>
      </a>

      <!-- Language Selection Menu-->
      <div id='languageMenu' class='relative inline-block text-left'>

        <div class='absolute right-0 z-50 w-56 mt-5 origin-top-right rounded-md shadow-lg'>
          <div class='bg-white rounded-md shadow-xs'>
            <div class='py-1' role='menu' aria-orientation='vertical'>
              <a href='#' class='block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900' role='menuitem'>Română</a>
              <a href='#' class='block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900' role='menuitem'>English</a>
              <a href='#' class='block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900' role='menuitem'>Magyar</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </nav>";
     }
     else
  {

    echo " <nav class='flex flex-col items-center p-4 bg-white border-b-4 md:flex-row md:justify-around md:items-center text-primary font-primary border-primary'>
        <a href='index.html' class='font-bold text-grey-800 md:text-2xl'>
            <p>it-jobs</p>
        </a>

        <div class='flex flex-col items-center pt-5 md:flex-row md:mx-5 md:pt-0'>
            <a href='#' class='flex items-center py-2 hover:text-secondary md:mx-5'>
                <svg viewBox='0 0 20 20' fill='currentColor' class='w-5 h-5 mx-2 user-group'>
                    <path d='M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z'>
                    </path>
                </svg>
                <span>Pentru angajatori</span>
            </a>

            <a href='#' class='flex items-center py-2 hover:text-secondary md:mx-5'>
                <svg viewBox='0 0 20 20' fill='currentColor' class='w-5 h-5 mx-2 arrow-circle-right'>
                    <path fill-rule='evenodd' d='M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z' clip-rule='evenodd'></path>
                </svg>
                <span>Intră în cont</span>
            </a>

            <a href='#' class='py-2 md:mx-5'>
                <span class='px-3 py-1 border-2 rounded-md border-secondary text-primary hover:bg-secondary'> Cont
                    nou</span>
            </a>

            <a href='#' id='lang' class='flex items-center py-2 hover:text-secondary md:mx-5'>
                <img src='../img/ro-flag.png' alt='' class='h-5'>
                <svg viewBox='0 0 20 20' fill='currentColor' class='w-6 h-6 chevron-down'>
                    <path fill-rule='evenodd' d='M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z' clip-rule='evenodd'></path>
                </svg>
            </a>

            <!-- Language Selection Menu-->
            <div id='languageMenu' class='relative inline-block text-left'>

                <div class='absolute right-0 z-50 w-56 mt-5 origin-top-right rounded-md shadow-lg'>
                    <div class='bg-white rounded-md shadow-xs'>
                        <div class='py-1' role='menu' aria-orientation='vertical'>
                            <a href='#' class='block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900' role='menuitem'>Română</a>
                            <a href='#' class='block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900' role='menuitem'>English</a>
                            <a href='#' class='block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900' role='menuitem'>Magyar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>"
    ;}?>

  <!-- Main Content -->
  <main class="bg-primary min-h-screen overflow-hidden">
    <div class="flex flex-row flex-wrap justify-center items-center mx-20">
      <div class="flex flex-col justify-center items-center mt-20 md:mr-20 px-20 max-w-lg sm:max-w-5xl md:max-w-lg">
        <h1 class="text-white text-5xl mb-20 font-primary font-semibold">Găsește rapid și ușor un Job în IT
        </h1>
        <img src="../img/illustration.svg" class="min-w-full md:min-w-0 md:max-w-xl" alt="illustration" />
      </div>

      <!-- Main Card -->
      <div class="bg-white p-8 rounded-lg shadow-sm mt-20 md:ml-20 max-w-md mx-5 md:max-w-xl max-h-4 mb-20">

        <!--  CTA  -->
        <div class="mb-4">
          <h2 class="text-secondary font-primary text-2xl">Aplica acum</h2>
          <p class="font-primary">Te asteapta zeci de job-uri in domeniul IT din toata tara. Completeaza-ti profilul si aplica acum!</p>
        </div>

        <!-- Search Bars -->
       <form method="POST" action="index2.php">
        <div class="inline mx-auto text-gray-600 mb-10">
          <input
            class="my-4 md:mx-4 md:w-64 appearance-none bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
            type="search" id="job" placeholder="Cuvinte cheie" name="job">
          
          <!-- City Dropdown Selector -->
          
          <div class="inline-block relative w-28">
            <select
              class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" id="oras" name="oras">
              <option>Oras</option>
              <option>Bucuresti</option>
              <option>Cluj</option>
              <option>Iasi</option>
              <option>Timisoara</option>
            </select>
<button onclick="logout()">Log out</button>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
            </div>
            
          </div>
        </div>

        <div class="flex justify-center mx-auto mt-5">
          <button class=" bg-primary hover:bg-ternary text-white font-bold py-2 px-4 rounded-lg" type="submit">
            Cauta acum
          </button>
            <form>
        </div>
        
      </div>

    </div>

  </main>


</body>
<script>
  const languageMenu = document.getElementById("languageMenu")
  languageMenu.style.display = 'none';
  document.getElementById("lang").addEventListener("click", () => {
    languageMenu.style.display = languageMenu.style.display === 'none' ? '' : 'none';
  });

  function cauta(){
    var job=document.getElementById("job").value;
    var oras=document.getElementById("oras").value;
    console.log(job);
    console.log(oras);
    var xmlhttp=new XMLHttpRequest();

    xmlhttp.open("POST","searchJobScript.php",true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    if(oras==="Oras"){
      oras=" ";
    
    }
      xmlhttp.send("job="+job+"&oras="+oras);
    xmlhttp.onload=function(){
      console.log(this.response);
     
    }
  }
  function logout(){
    <?php 
    session_unset();
session_destroy();
    ?>
  }
</script>

</html>