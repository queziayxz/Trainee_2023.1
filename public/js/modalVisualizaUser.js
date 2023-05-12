var modal = document.getElementById("modal-visualizar");
var btn = document.getElementById("open-modal");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.addEventListener('click', function (event) {
  console.log(modal);
  console.log(event.target);
  if (event.target == modal) {
    modal.style.display = "none";
  }
});