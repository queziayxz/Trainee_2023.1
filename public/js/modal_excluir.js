var modal2 = document.getElementById("modalExcluirUser");

var btn = document.getElementById("botaoRemover");

var span = document.getElementsByClassName("botaoo")[0];

 
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