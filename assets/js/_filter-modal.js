const filterButton = document.getElementById('filter_button');
const closeFilterButton = document.getElementById('close-filter');
const submitFilterButton = document.getElementById('submit-filter');
const filterModal = document.getElementById('filter-modal');
const overlay = document.createElement('div');

// Add classes for dimming styles
overlay.classList.add('modal-overlay');
document.body.appendChild(overlay); // Add darkening to DOM

// Opening/closing the modal window
filterButton.addEventListener('click', () => {
  toggleModal();
});
// Closing the modal window when clicking on darkening
overlay.addEventListener('click', close_modal);

// closing the modal window by pressing the esc key
document.addEventListener('keydown', (event) => {
  if (event.key === 'Escape') {
    close_modal();
  }
});

closeFilterButton.addEventListener('click', close_modal);
submitFilterButton.addEventListener('click', close_modal);

function toggleModal() {
  filterModal.classList.toggle('open');
  overlay.style.display = overlay.style.display === 'block' ? 'none' : 'block';
}

// Function for closing the modal window
function close_modal() {
  if (filterModal.classList.contains('open')) {
    filterModal.classList.remove('open');
    overlay.style.display = 'none';
  }
}
