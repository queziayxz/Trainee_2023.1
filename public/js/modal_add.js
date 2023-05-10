
var modal3 = document.getElementById("modal-add");



var btn = document.getElementById("mybtnAdd");


var span = document.getElementsByClassName("btn")[0];


btn.onclick = function() {
  modal3.style.display = "block";
}


span.onclick = function() {
  modal3.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
}