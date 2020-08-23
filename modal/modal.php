

<form id="adaugareElement">
<input id="nume"></input>
<button id="buttonAddElement" onclick="adaugareElement()">Adaugare Element</button>
</form>







<script>



 function adaugareElement(){
   var form=document.getElementById("adaugareElement");
  var nume=document.getElementById("nume");
  var btn = document.createElement("INPUT");
  btn.innerHTML = nume.value;
  form.appendChild(btn);

event.preventDefault();
 }
 function completareCv(){}
 </script>