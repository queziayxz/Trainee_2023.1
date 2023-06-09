const botoes = document.getElementsByClassName('botao-modal');
const fechar = document.getElementsByClassName('fechar-modal');

const botaoP = [...botoes].filter((el) => {
  return el.dataset.modal != null;
});

const modalAberto = () => {
  const modal = document.getElementsByClassName('modal-p');
  const modalA = [...modal].filter((el) => {
    if(el.style.display == 'block') {
      return el;
    }
  })

  return modalA[0];
}

const toggleModal = (id) => {
  console.log(id)
  if(id == undefined) {
    const aberto = modalAberto();
    console.log(aberto);
    aberto.style.display = 'none';
  } else {
    const modalAberto = document.getElementById(id);
    console.log(modalAberto);
    modalAberto.style.display = 'block';
    
  }
  
}

[...botaoP, ...fechar].forEach((el) => {
  el.addEventListener('click', () => toggleModal(el.dataset.modal));
})

window.addEventListener('click', function (event) {
  const modal = modalAberto();
  if (event.target == modal) {
    modal.style.display = "none";
  }
}); 