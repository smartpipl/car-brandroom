document.querySelectorAll('.select-wrapper').forEach(wrapper => {
  const trigger = wrapper.querySelector('.select-trigger');
  const options = wrapper.querySelector('.select-options');
  const hiddenInput = wrapper.querySelector('input[type="hidden"]');
  const defaultOption = wrapper.querySelector('.option[data-value="all"]');

  // Installation of the initial values
  if (defaultOption) {
    trigger.textContent = defaultOption.textContent;
    hiddenInput.value = defaultOption.dataset.value;
  }

  // Opening/closing the list when clicking on trigger
  trigger.addEventListener('click', () => {
    wrapper.classList.toggle('open');
    options.style.display = options.style.display === 'block' ? 'none' : 'block';
  });

  // Selection of options from the list
  wrapper.querySelectorAll('.option').forEach(option => {
    option.addEventListener('click', () => {
      trigger.textContent = option.textContent;
      hiddenInput.value = option.dataset.value;
      closeOptions(wrapper);
    });
  });
});

// Closing all dropping lists when clicking outside of them
document.addEventListener('click', event => {
  document.querySelectorAll('.select-wrapper').forEach(wrapper => {
    if (!wrapper.contains(event.target)) {
      closeOptions(wrapper);
    }
  });
});

// Function for closing the drop -down list
function closeOptions(wrapper) {
  const options = wrapper.querySelector('.select-options');
  options.style.display = 'none';
  wrapper.classList.remove('open');
}

// Reset of filter values
document.querySelectorAll('[data-reset]').forEach(resetButton => {
  resetButton.addEventListener('click', () => {
    resetFilters(resetButton.closest('.filter-reset'));
  });
});

// Function for dumping filters in the specified container
function resetFilters(filterContainer) {
  filterContainer.querySelectorAll('.select-wrapper').forEach(wrapper => {
    const trigger = wrapper.querySelector('.select-trigger');
    const hiddenInput = wrapper.querySelector('input[type="hidden"]');
    const defaultOption = wrapper.querySelector('.option[data-value="all"]');

    if (defaultOption) {
      trigger.textContent = defaultOption.textContent;
      hiddenInput.value = defaultOption.dataset.value;
    }
    closeOptions(wrapper);
  });
}

