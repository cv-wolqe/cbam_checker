
let mobileOpen = document.getElementById('mobile-open');
let mobileClose = document.getElementById('mobile-close');
const navLinks = document.getElementById('mobile-menu');
mobileOpen.addEventListener('click', function() {
    
    if (navLinks.classList.contains('hidden')) {
        navLinks.classList.remove('hidden');
    } else {
        navLinks.classList.add('hidden');
    }
});
mobileClose.addEventListener('click', function() {
    if (navLinks.classList.contains('hidden')) {
        navLinks.classList.remove('hidden');
    } else {
        navLinks.classList.add('hidden');
    }
});