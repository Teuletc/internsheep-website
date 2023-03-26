const newButton = document.getElementById('new-button');
const popupContainer = document.querySelector('.popup-container');
const closeBtn = document.querySelector('.close-btn');

newButton.addEventListener('click', () => {
  popupContainer.style.display = 'flex';
});

closeBtn.addEventListener('click', () => {
  popupContainer.style.display = 'none';
});

window.addEventListener('click', (e) => {
  if (e.target === popupContainer) {
    popupContainer.style.display = 'none';
  }
});