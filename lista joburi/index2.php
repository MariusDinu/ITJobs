<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>it-jobs</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body onload="abc()">
	<div id="job" value="<?php if(isset($_POST['job'])) echo $_POST['job'];?>"></div>
<div id="oras" value="<?php if(isset($_POST['oras']))echo $_POST['oras']; ?>"></div>
	<!-- Navbar-->
     <!-- Navbar-->
    <nav class="flex flex-col items-center p-4 bg-white border-b-4 md:flex-row md:justify-around md:items-center text-primary font-primary border-primary">
        <a href="index.html" class="font-bold text-grey-800 md:text-2xl">
            <p>it-jobs</p>
        </a>

        <div class="flex flex-col items-center pt-5 md:flex-row md:mx-5 md:pt-0">
            <a href="#" class="flex items-center py-2 hover:text-secondary md:mx-5">
                <svg viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mx-2 user-group">
                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                    </path>
                </svg>
                <span>Pentru angajatori</span>
            </a>

            <a href="#" class="flex items-center py-2 hover:text-secondary md:mx-5">
                <svg viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mx-2 arrow-circle-right">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span>Intră în cont</span>
            </a>

            <a href="#" class="py-2 md:mx-5">
                <span class="px-3 py-1 border-2 rounded-md border-secondary text-primary hover:bg-secondary"> Cont
                    nou</span>
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
        <form method="post" action="index2.php">
            <div class="flex items-center justify-center mx-10 my-10 text-gray-600">
                <!-- Search Bar -->

                <div class="relative inline-block w-3/4 max-w-3xl mr-4">
                    <!-- Search Icon -->
                    <div class="absolute top-0 left-0 flex w-10 h-full border border-transparent">
                        <div class="z-10 flex items-center justify-center w-full h-full text-lg text-gray-600 bg-gray-100 rounded-tl-lg rounded-bl-lg">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 search">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="absolute top-0 right-0 flex w-24 h-full border border-transparent">
                        <div class="z-10 flex items-center justify-center w-full h-full text-lg text-white border border-l-0 border-gray-400 rounded-tr-lg rounded-br-lg shadow appearance-none bg-primary hover:bg-secondary hover:border-gray-500 focus:shadow-outline focus:border-primary focus:outline-none">
                            <button class="w-full h-full">Cauta</button>
                        </div>
                    </div>

                    <input  type="text" placeholder="Cuvinte cheie" value="" id="job" name="job" class="relative w-full h-12 py-2 pl-12 pr-2 text-sm bg-white border border-gray-400 rounded-lg shadow appearance-none hover:border-gray-500 focus:shadow-outline focus:border-primary focus:outline-none">
                </div>
                <!-- City Dropdown Selector -->

                <div class="relative inline-block w-28">
                    <div class="absolute top-0 right-0 flex w-10 h-full border border-transparent">
                        <div class="z-10 flex items-center justify-center w-full h-full text-lg text-gray-600 bg-transparent rounded-tr-lg rounded-br-lg">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 location-marker">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <select id="oras" name="oras" class="block w-full h-12 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded-lg shadow appearance-none hover:border-gray-500 focus:outline-none focus:border-primary focus:shadow-outline">
                        <option>Oras</option>
                        <option>Bucuresti</option>
                        <option>Cluj</option>
                        <option>Iasi</option>
                        <option>Timisoara</option>
                    </select>
                </div>

            </div>
        </form>
        <div class="flex flex-col items-center justify-center h-48 max-w-md p-5 mx-auto my-10 bg-white border border-gray-400 rounded-lg shadow appearance-none md:max-w-xl" id="anunt" style="display:none;">
            <svg viewBox="0 0 20 20" fill="#F9A826" class="w-16 h-16 exclamation"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
            <p class="text-2xl">0 Anunturi</p>
            <p>Nu am gasit nici un anunt conform criteriilor tale de cautare</p>
        </div>
<div class='w-10/12 h-auto max-w-4xl mx-auto' id="parinte">
            <span id='job-counter' class='text-4xl lg:text-5xl'> </span>
<div id="afisare"></div>
</body>
</html>
<script type="text/javascript">
	function abc(){
var job=document.getElementById("job").getAttribute('value');
    var oras=document.getElementById("oras").getAttribute('value');
var xmlhttp=new XMLHttpRequest();

    xmlhttp.open("POST","searchJobScript.php",true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    if(oras==="Oras"){
      oras="";
    
    }
      xmlhttp.send("job="+job+"&oras="+oras);
    xmlhttp.onload=function(){
      document.getElementById("afisare").innerHTML=this.response;
      var x = document.getElementById("parinte").querySelectorAll("#jobNumber");
  if(x.length >1)
   document.getElementById("job-counter").innerHTML=x.length+" "+"Jobs";
else if(x.length==1)
     document.getElementById("job-counter").innerHTML=x.length+" "+"Job";
else
	
	document.getElementById("anunt").style.removeProperty( 'display' );
    }
  }

  function aplica(current){
  	console.log(current.id);

  }
  const languageMenu = document.getElementById("languageMenu")
    languageMenu.style.display = 'none';
    document.getElementById("lang").addEventListener("click", () => {
        languageMenu.style.display = languageMenu.style.display === 'none' ? '' : 'none';
    });
</script>