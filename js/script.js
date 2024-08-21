const modal = document.querySelector('.modal');
const openModalButton = document.querySelector('#openModal');

function onOpen() {
    modal.classList.add('active');
}

function onClose() {
    modal.classList.remove('active');
}

// Adiciona evento de clique para abrir o modal
openModalButton.addEventListener('click', onOpen);