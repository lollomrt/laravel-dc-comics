import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const deleteButton = document.querySelectorAll('.confirm-delete-button');

deleteButton.forEach((button) => {
    button.addEventListener('click', function (event) {
        event.preventDefault();
        // Recupero il titolo del fumetto dall' attributo data-title
        const comicTitle = button.getAttribute('data-title');
        // Recupero la modale tramite l'id
        const modal = document.querySelector('#delete-comic-modal');
        // Creo una nuova modale partendo dall'originale creata in modal_delete.blade.php
        const bootstrapModal = new bootstrap.Modal(modal)
        // Mostro la modale
        bootstrapModal.show();
        // Mostro il titolo del fumetto nell'elemento con id modal-item-title
        const modalTitle = document.querySelector('#modal-item-title');
        modalTitle.innerText = comicTitle;
        // Recupero il pulsante di conferma eliminazione
        const deleteButton = document.getElementById('confirm-delete')
        deleteButton.addEventListener('click', () => {
            button.parentElement.submit()
        });
    });
});
