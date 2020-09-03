<?php
session_start();
?>
<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job-urile mele</title>
    <link rel="stylesheet" href="../../public/styles.css">
  </head>
</head>

<body>
  <?php if (isset($_SESSION['userE'])) {
    echo "<nav class='flex flex-col items-center p-4 bg-white border-b-4 md:flex-row md:justify-around md:items-center text-primary font-primary border-primary'>
    <a href='../ListaJoburiEmployer/index.php' class='font-bold text-grey-800 md:text-2xl'>
      <p>it-jobs</p>
    </a>

    <div class='flex flex-col items-center pt-5 md:flex-row md:mx-5 md:pt-0'>
      

      <a href='#' id='CV' onclick='AddJob()' class='flex items-center py-2 hover:text-secondary md:mx-5'>
      <svg viewBox='0 0 20 20' fill='currentColor' class='w-5 h-5 document-text'>
        <path fill-rule='evenodd' d='M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z' clip-rule='evenodd'></path>
      </svg>
      <span class='ml-2'>Adaugare Job</span>
    </a>

    <a href='../EmployerPage.php' class='flex items-center py-2 hover:text-secondary md:mx-5'>
      <svg viewBox='0 0 20 20' fill='currentColor' class='w-5 h-5 user-circle'>
        <path fill-rule='evenodd' d='M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z' clip-rule='evenodd'></path>
      </svg>
      <span class='ml-2'>Profilul meu</span>
    </a>

      <a href='' id='logout' onclick='logout()' class='flex items-center py-2 hover:text-secondary md:mx-5 '>
        <svg viewBox='0 0 20 20' fill='currentColor' class='w-5 h-5 logout'>
         <path fill-rule='evenodd' d='M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z' clip-rule='evenodd'></path>
        </svg>
        <span class='ml-2'>Deconecteaza-te</span>
      </a>

      <a href='#' id='lang' class='flex items-center py-2 hover:text-secondary md:mx-5'>
        <img src='../../img/ro-flag.png' alt='' class='h-5'>
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
  } else {
    // Navbar - not logged in
    echo " <nav class='flex flex-col items-center p-4 bg-white border-b-4 md:flex-row md:justify-around md:items-center text-primary font-primary border-primary'>
        <a href='./index.php' class='font-bold text-grey-800 md:text-2xl'>
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

            <a href='../User/LoginRegister.php' class='flex items-center py-2 hover:text-secondary md:mx-5'>
                <svg viewBox='0 0 20 20' fill='currentColor' class='w-5 h-5 mx-2 arrow-circle-right'>
                    <path fill-rule='evenodd' d='M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z' clip-rule='evenodd'></path>
                </svg>
                <span>Intră în cont</span>
            </a>

            <a href='../User/LoginRegister.php' class='py-2 md:mx-5'>
                <span class='px-3 py-1 border-2 rounded-md border-secondary text-primary hover:bg-secondary'> Cont
                    nou</span>
            </a>

            <a href='#' id='lang' class='flex items-center py-2 hover:text-secondary md:mx-5'>
                <img src='../../img/ro-flag.png' alt='' class='h-5'>
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
  ?>

  <?php
  $job = $_GET['myJob'];
  include "../../DB.php";
  $DB = new DB();
  $sqlSearchCommandJob = "SELECT * FROM `job/cv` WHERE `ID_Job`='$job'";
  $prepare = $DB::obtine_conexiune()->prepare($sqlSearchCommandJob);
  $prepare->execute();
  $arrayJob = $prepare->fetchAll();
  $applicantCount = 0;
  if ($arrayJob != null) {
    foreach ($arrayJob as $item) {
      $applicantCount+=1;
    }
  }
  ?>

  <div class='w-10/12 h-auto max-w-4xl mx-auto' id='parinte'>
    <p id='applicant-counter' class='mt-5 text-4xl lg:text-5xl'><?php echo $applicantCount ?> Candidati</p>
    <div id='afisare' class="flex flex-col h-auto max-w-4xl mx-auto my-5 bg-white border border-gray-400 rounded-lg shadow appearance-none">
      <?php
      if ($arrayJob != null) {
        foreach ($arrayJob as $item) {
          $idCV = $item['ID_CV'];
          $sqlSearchCommandCV = "SELECT * FROM `cv` WHERE `ID`='$idCV'";
          $prepare = $DB::obtine_conexiune()->prepare($sqlSearchCommandCV);
          $prepare->execute();
          $arrayCV = $prepare->fetchAll();
          if ($arrayCV != null)
            foreach ($arrayCV as $cv) {
              echo "
            <a href='../ScriptsEmployer/CV.php?cv=" . $cv['ID'] . "' id='cv" . $cv['ID'] . "' class='flex flex-col justify-start p-5 border-b-2 border-gray-400 hover:bg-gray-100'>
              <p class='text-lg text-primary'>" . $cv['Nume'] . ' ' . $cv['Prenume'] . "</p>
              <div class='flex text-sm'>
                <p class='mr-5'>" . $cv['Email'] . "</p>
                <p>" . $cv['Telefon'] . "</p>
              </div>
            </a>
            ";
            }
        }
      } else {
        echo "
    <div class='flex flex-col items-center justify-center h-48 max-w-md p-5 mx-auto my-10 bg-white border border-gray-400 rounded-lg shadow appearance-none md:max-w-xl' id='anunt' style='display:none;'>
      <svg viewBox='0 0 20 20' fill='#F9A826' class='w-16 h-16 exclamation'>
          <path fill-rule='evenodd' d='M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z' clip-rule='evenodd'></path>
      </svg>
      <p class='text-2xl'>0 Candidati</p>
      <p>Nu a aplicat nimeni la job-ul acesta</p>
    </div>
    ";
      }
      ?>
    </div>
  </div>

  <script type="text/javascript">
    function logout() {
      var xmlhttp = new XMLHttpRequest();

      xmlhttp.open("POST", "../ScriptsEmployer/Logout.php", true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send();
      xmlhttp.onload = function() {

        window.location.href = "../LoginRegisterEmployer.php";
      }
      console.log('logout successful');
    }

    function AddJob() {
      window.location.href = "../AddJobForm.php";
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