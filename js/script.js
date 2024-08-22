const modal = document.querySelector('.modal');
const openModalButton = document.querySelector('#openModal');

function onOpen() {
    modal.classList.add('active');
}

function onClose() {
    modal.classList.remove('active');
}
openModalButton.addEventListener('click', onOpen);