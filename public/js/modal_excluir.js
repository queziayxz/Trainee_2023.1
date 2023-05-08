// Get the modal

var modal2 = document.getElementById("modal-excluir");

// Get the button that opens the modal

var btn = document.getElementById("mybtnDel");


var span = document.getElementsByClassName("closes")[0];


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