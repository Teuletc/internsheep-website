const newButton = document.getElementById('new-button');
const modifButton = document.querySelectorAll('.modif-button');
const popupContainer = document.querySelector('.popup-container');
const closeBtn = document.querySelector('.close-btn');

// Récupération des champs du formulaire
// const titreInput = document.getElementById('titre-input');
// const entrepriseInput = document.getElementById('entreprise-input');
// const tagsInput = document.getElementById('tags-input');
// const villeInput = document.getElementById('ville-input');
// const codepostalInput = document.getElementById('codepostal-input');
// const descriptionInput = document.getElementById('description-input');


newButton.addEventListener('click', () => {
  popupContainer.style.display = 'flex';
});

modifButton.forEach(button => {
  button.addEventListener('click', () => {
    popupContainer.style.display = 'flex';

    // Modification des placeholders des champs du formulaire
    // titreInput.placeholder = "{{Nouveau placeholder pour le titre}}";
    // entrepriseInput.placeholder = "{{$offre -> name_companies}}";
    // tagsInput.placeholder = "Nouveau placeholder pour les tags";
    // villeInput.placeholder = "Nouveau placeholder pour la ville";
    // codepostalInput.placeholder = "Nouveau placeholder pour le code postal";
    // descriptionInput.placeholder = "Nouveau placeholder pour la description";
  });
});


closeBtn.addEventListener('click', () => {
  popupContainer.style.display = 'none';
});

window.addEventListener('click', (e) => {
  if (e.target === popupContainer) {
    popupContainer.style.display = 'none';
  }
});