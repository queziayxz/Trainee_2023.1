var modal3 = document.getElementById("modal-edit");

var btn = document.getElementById("botao-editar");

var span = document.getElementsByClassName("botao2")[0];

 
btn.onclick = function() {
  modal3.style.display = "block";
}


span.onclick = function() {
  modal3.style.display = "none";
}


window.addEventListener('click', function (event) {
    console.log(modal3);
    console.log(event.target);
    if (event.target == modal3) {
      modal3.style.display = "none";
    }
  });   