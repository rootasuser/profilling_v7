// Elements
export const HTMLElements = {
    togglePassword: document.getElementById('togglePassword'),
    password: document.getElementById('password'),
    showIcon: document.getElementById('showIcon'),
    hideIcon: document.getElementById('hideIcon'),
    darkModeToggle: document.getElementById('darkModeToggle'),
    lightIcon: document.getElementById('lightIcon'),
    darkIcon: document.getElementById('darkIcon'),
};

// Toggle password visibility
export const togglePasswordVisibility = () => {
    const isPasswordHidden = HTMLElements.password.type === 'password';
    HTMLElements.password.type = isPasswordHidden ? 'text' : 'password';
    HTMLElements.showIcon.classList.toggle('d-none', !isPasswordHidden);
    HTMLElements.hideIcon.classList.toggle('d-none', isPasswordHidden);
};

// Toggle dark mode
export const toggleDarkMode = () => {
    document.body.classList.toggle('dark');
    HTMLElements.lightIcon.classList.toggle('d-none');
    HTMLElements.darkIcon.classList.toggle('d-none');
};


