
var modal4 = document.getElementById("modal-edita");



var btn = document.getElementById("mybtnEdita");


var span = document.getElementsByClassName("btnVoltarC")[0];


btn.onclick = function() {
  modal4.style.display = "block";
}


span.onclick = function() {
  modal4.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal4) {
    modal4.style.display = "none";
  }
}