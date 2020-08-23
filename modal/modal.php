

<form id="adaugareElement">
<input id="nume"></input>
<button id="buttonAddElement" onclick="adaugareElement()">Adaugare Element</button>
</form>

<button type="button" onclick="TopC()" >topC</button>


<div id="TopC" class="modal fade" style="display:none">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="closeTopC">&times;</span>
    <fieldset class='butoane'>
    <div class='grid-container'>
     <div class='grid-item'><a class='buttonExport' id='buttonCsvTopC' href=''> CSV </a> </div>
      <div class='grid-item'> <a class='buttonExport' id='buttonPdfTopC' href=''> PDF </a> </div>
</div>


<script>
function TopC(){
var modal = document.getElementById('TopC');
 var btn = document.getElementById('myBtn');
 
 var span = document.getElementsByClassName('closeTopC')[0];
var csv=document.getElementById('buttonCsvTopC');
var pdf=document.getElementById('buttonPdfTopC');
 modal.style.display = 'block';
 
 span.onclick = function() {
   modal.style.display = 'none';
 }
csv.onclick=function(){
  modal.style.display = 'none';

}
pdf.onclick=function(){
  modal.style.display = 'none';
}
window.onclick = function(event) {
   if (event.target == modal) {
     modal.style.display = 'none';
   }
 }}


 function adaugareElement(){
var nume=document.getElementById("nume");
    var btn = document.createElement("BUTTON");
  btn.innerHTML = nume.value;
  document.body.appendChild(btn);

event.preventDefault();
 }
 </script>