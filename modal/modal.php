

<form id="adaugareElement">
<input id="nume"></input>
<button id="buttonAddElement" onclick="adaugareElement()">Adaugare Element</button>
</form>







<script>



 function adaugareElement(){
var nume=document.getElementById("nume");
    var btn = document.createElement("BUTTON");
  btn.innerHTML = nume.value;
  document.body.appendChild(btn);

event.preventDefault();
 }
 </script>