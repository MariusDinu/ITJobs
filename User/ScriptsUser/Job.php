<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>it-jobs</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
</head>
<body>
<?php if (isset($_SESSION['user'])) {
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
              <a href='../../Quizz/concentrareFINAL.php' class='block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900' role='menuitem'>Test de concentrare</a>
              <a href='../../Quizz/creativitateFINAL.php' class='block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900' role='menuitem'>Test de creativitate</a>
              <a href='../../Quizz/inteligentaFINAL.php' class='block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900' role='menuitem'>Test de inteligență</a>
              <a href='../../Quizz/logicaSecventialaFINAL.php' class='block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900' role='menuitem'>Test de logică</a>
              <a href='../../Quizz/testMBTI_FINAL.php' class='block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900' role='menuitem'>Test de MBTI</a>
            </div>
          </div>
        </div>
      </div>

      <a href='../CVform.php' id='CV'  class='flex items-center py-2 hover:text-secondary md:mx-5'>
        <svg viewBox='0 0 20 20' fill='currentColor' class='w-5 h-5 document-text'>
          <path fill-rule='evenodd' d='M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z' clip-rule='evenodd'></path>
        </svg>
        <span class='ml-2'>CV</span>
      </a>

      <a href='../UserPage.php' class='flex items-center py-2 hover:text-secondary md:mx-5'>
        <svg viewBox='0 0 20 20' fill='currentColor' class='w-5 h-5 user-circle'>
          <path fill-rule='evenodd' d='M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z' clip-rule='evenodd'></path>
        </svg>
        <span class='ml-2'>Profilul meu</span>
      </a>

      <a href='../lista joburi/index.php' id='logout' onclick='logout()' class='flex items-center py-2 hover:text-secondary md:mx-5 '>
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
  } ?>






<?php
$job=$_GET['jobId'];
include "../../DB.php";
$DB=new DB();

$sqlSearchCommandJob="SELECT * FROM `job` WHERE `ID`='$job'";
$prepare=$DB::obtine_conexiune()->prepare($sqlSearchCommandJob);
$prepare->execute();

$arrayJob=$prepare->fetchAll();
if($arrayJob!=null)
{foreach($arrayJob as $item)
echo "<div>".$item['ID']."</div>
<button class='px-4 py-2 font-bold text-white rounded-full bg-ternary hover:bg-primary' onclick='aplica(`".$_SESSION['user']."`,`".$item['ID']."`)'>Aplica acum</button>
";}

?>


<script type="text/javascript">
   
   function aplica(user, idJob) {
        console.log(user);
        console.log(idJob);
        var xmlhttp = new XMLHttpRequest();

    xmlhttp.open("POST", "../ScriptsUser/Aplica.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("userName="+user+"&idJob="+idJob);
    xmlhttp.onload = function() {

      console.log(this.response);
    }
   
    }
    function logout() {
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.open("POST", "../ScriptsEmployer/Logout.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
    xmlhttp.onload = function() {

      window.location.href="../LoginRegister.php";
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

/*<!-- Test Dropdown Menu -->*/
   const testMenu = document.getElementById("testMenu")
  testMenu.style.display = 'none';
  document.getElementById("tests").addEventListener("click", () => {
    testMenu.style.display = testMenu.style.display === 'none' ? '' : 'none';
  });
</script>



</html>
