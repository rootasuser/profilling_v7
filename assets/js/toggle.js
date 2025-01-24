// handle icon toggle 
const toggleIcon = (wrapper, toggleButton) => {
    const icon = toggleButton.querySelector('i');
    if (wrapper.classList.contains('toggled')) {
        icon.classList.replace('bi-chevron-left', 'bi-chevron-right'); // Change to right arrow
    } else {
        icon.classList.replace('bi-chevron-right', 'bi-chevron-left'); // Change to left arrow
    }
};

// handle sidebar toggle 
const toggleSidebar = (wrapper, toggleButton) => {
    toggleButton.addEventListener('click', () => {
        wrapper.classList.toggle('toggled');
        toggleIcon(wrapper, toggleButton); // Toggle the icon based on sidebar state
    });
};

// Select DOM elements
const wrapper = document.getElementById('wrapper');
const sidebarToggle = document.getElementById('sidebarToggle');
const sidebarToggleTop = document.getElementById('sidebarToggleTop');

// Initialize the toggle functionality for both sidebar and top sidebar
toggleSidebar(wrapper, sidebarToggle);
toggleSidebar(wrapper, sidebarToggleTop);
