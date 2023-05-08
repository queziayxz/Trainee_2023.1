

var modal2 = document.getElementById("modal-excluir");



var btn = document.getElementById("mybtnDel");


var span = document.getElementsByClassName("btnVoltarC")[0];


btn.onclick = function() {
  modal2.style.display = "block";
}


span.onclick = function() {
  modal2.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}