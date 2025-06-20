// Fichier : header-script.js

document.addEventListener('DOMContentLoaded', function() {

    // --- Gestion du menu mobile principal ---
    const menuTrigger = document.getElementById('mainMenu-trigger');
    const mainMenu = document.getElementById('mainMenu');

    if (menuTrigger && mainMenu) {
        menuTrigger.addEventListener('click', function() {
            // Bascule l'animation du bouton hamburger
            this.classList.toggle('active');
            // Bascule l'affichage du menu
            mainMenu.classList.toggle('menu-animate');
        });
    }

    // --- Gestion de l'ouverture des sous-menus au clic sur mobile ---
    const dropdownLinks = document.querySelectorAll('#mainMenu .dropdown > a');

    dropdownLinks.forEach(link => {
        // On vérifie que le lien a bien un sous-menu juste après lui
        const submenu = link.nextElementSibling;
        if (submenu && submenu.classList.contains('dropdown-menu')) {
            link.addEventListener('click', function(event) {
                // On n'agit que sur les écrans de type mobile/tablette
                if (window.innerWidth <= 1024) {
                    // Empêche le lien de naviguer vers la page
                    event.preventDefault();
                    // Ouvre ou ferme le sous-menu en basculant une classe sur le LI parent
                    link.parentElement.classList.toggle('dropdown-open');
                }
            });
        }
    });

    // --- Gestion du header qui devient "scrolled" ---
    const header = document.getElementById('header');
    if(header) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) { // Le header change après 50px de scroll
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }

});