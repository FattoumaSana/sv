// ===== HEADER MODERNE - FONCTIONNALITÉS =====

// Variables globales
let isMenuOpen = false;
let ticking = false;

// Initialisation au chargement de la page
document.addEventListener('DOMContentLoaded', function() {
    initHeader();
});

// Fonction d'initialisation
function initHeader() {
    // Effet de scroll sur le header
    initScrollEffect();
    
    // Menu mobile
    initMobileMenu();
    
    // Fermeture menu mobile en cliquant à l'extérieur
    initOutsideClick();
    
    // Smooth scroll pour les ancres
    initSmoothScroll();
}

// Effet de scroll optimisé
function initScrollEffect() {
    function updateHeader() {
        const header = document.getElementById('header');
        if (header) {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }
        ticking = false;
    }

    window.addEventListener('scroll', function() {
        if (!ticking) {
            requestAnimationFrame(updateHeader);
            ticking = true;
        }
    });
}

// Menu mobile
function initMobileMenu() {
    const trigger = document.getElementById('mainMenu-trigger');
    const toggleButton = trigger ? trigger.querySelector('.navbar-toggler-modern') : null;
    
    if (toggleButton) {
        toggleButton.addEventListener('click', toggleMobileMenu);
    }
}

// Toggle menu mobile
function toggleMobileMenu() {
    const mainMenu = document.getElementById('mainMenu');
    const trigger = document.getElementById('mainMenu-trigger');
    const toggleButton = trigger ? trigger.querySelector('.navbar-toggler-modern') : null;
    
    if (mainMenu) {
        isMenuOpen = !isMenuOpen;
        
        if (isMenuOpen) {
            mainMenu.classList.add('show');
            if (toggleButton) {
                toggleButton.innerHTML = '<i class="fas fa-times"></i>';
            }
        } else {
            mainMenu.classList.remove('show');
            if (toggleButton) {
                toggleButton.innerHTML = '<i class="fas fa-bars"></i>';
            }
        }
    }
}

// Fermer le menu en cliquant à l'extérieur
function initOutsideClick() {
    document.addEventListener('click', function(event) {
        const mainMenu = document.getElementById('mainMenu');
        const trigger = document.getElementById('mainMenu-trigger');
        const header = document.getElementById('header');
        
        if (mainMenu && trigger && header) {
            // Si le menu est ouvert et qu'on clique en dehors du header
            if (isMenuOpen && !header.contains(event.target)) {
                toggleMobileMenu();
            }
        }
    });
}

// Smooth scroll pour les ancres (optionnel)
function initSmoothScroll() {
    const links = document.querySelectorAll('a[href^="#"]');
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#') {
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    
                    // Fermer le menu mobile si ouvert
                    if (isMenuOpen) {
                        toggleMobileMenu();
                    }
                }
            }
        });
    });
}

// Fonction pour fermer le menu mobile (utilisable depuis l'extérieur)
function closeMobileMenu() {
    if (isMenuOpen) {
        toggleMobileMenu();
    }
}

// Gestion des dropdowns sur mobile
document.addEventListener('DOMContentLoaded', function() {
    const dropdowns = document.querySelectorAll('.dropdown-modern');
    
    dropdowns.forEach(dropdown => {
        const link = dropdown.querySelector('.nav-link-modern');
        const menu = dropdown.querySelector('.dropdown-menu-modern');
        
        if (link && menu) {
            // Sur mobile, toggle le dropdown au clic
            link.addEventListener('click', function(e) {
                if (window.innerWidth <= 992) {
                    e.preventDefault();
                    
                    // Fermer les autres dropdowns
                    dropdowns.forEach(otherDropdown => {
                        if (otherDropdown !== dropdown) {
                            const otherMenu = otherDropdown.querySelector('.dropdown-menu-modern');
                            if (otherMenu) {
                                otherMenu.style.display = 'none';
                            }
                        }
                    });
                    
                    // Toggle le dropdown actuel
                    if (menu.style.display === 'block') {
                        menu.style.display = 'none';
                    } else {
                        menu.style.display = 'block';
                    }
                }
            });
        }
    });
});

// Redimensionnement de la fenêtre
window.addEventListener('resize', function() {
    const mainMenu = document.getElementById('mainMenu');
    
    // Si on passe en desktop, fermer le menu mobile
    if (window.innerWidth > 992 && isMenuOpen) {
        if (mainMenu) {
            mainMenu.classList.remove('show');
            isMenuOpen = false;
            
            const trigger = document.getElementById('mainMenu-trigger');
            const toggleButton = trigger ? trigger.querySelector('.navbar-toggler-modern') : null;
            if (toggleButton) {
                toggleButton.innerHTML = '<i class="fas fa-bars"></i>';
            }
        }
    }
    
    // Reset des dropdowns mobiles
    const dropdownMenus = document.querySelectorAll('.dropdown-menu-modern');
    if (window.innerWidth > 992) {
        dropdownMenus.forEach(menu => {
            menu.style.display = '';
        });
    }
});