// ===== HEADER MODERNE - VERSION CLEAN =====

// Menu Mobile - Version Optimisée
document.addEventListener('DOMContentLoaded', function() {
    
    console.log('🔄 Initialisation du menu mobile...');
    
    const menuToggle = document.querySelector('#mainMenu-trigger button') || 
                      document.querySelector('#mainMenu-trigger .navbar-toggler-modern');
    const mainMenu = document.querySelector('#mainMenu');
    
    console.log('Toggle trouvé:', !!menuToggle);
    console.log('Menu trouvé:', !!mainMenu);
    
    if (menuToggle && mainMenu) {
        
        // Toggle du menu au clic
        menuToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            console.log('🔄 Clic sur toggle');
            
            // Toggle de la classe et du style
            const isCurrentlyOpen = mainMenu.classList.contains('show');
            
            if (isCurrentlyOpen) {
                mainMenu.classList.remove('show');
                mainMenu.style.display = 'none';
                console.log('📱 Menu fermé');
            } else {
                mainMenu.classList.add('show');
                mainMenu.style.display = 'block';
                console.log('📱 Menu ouvert');
            }
            
            // Changer l'icône
            const icon = menuToggle.querySelector('i');
            if (icon) {
                if (mainMenu.classList.contains('show')) {
                    icon.className = 'fas fa-times';
                } else {
                    icon.className = 'fas fa-bars';
                }
            }
        });
        
        // Fermer en cliquant ailleurs
        document.addEventListener('click', function(e) {
            if (!mainMenu.contains(e.target) && !menuToggle.contains(e.target)) {
                if (mainMenu.classList.contains('show')) {
                    mainMenu.classList.remove('show');
                    mainMenu.style.display = 'none';
                    console.log('📱 Menu fermé (clic extérieur)');
                    
                    const icon = menuToggle.querySelector('i');
                    if (icon) icon.className = 'fas fa-bars';
                }
            }
        });
        
        // Fermer sur redimensionnement
        window.addEventListener('resize', function() {
            if (window.innerWidth > 992) {
                mainMenu.classList.remove('show');
                mainMenu.style.display = 'none';
                
                const icon = menuToggle.querySelector('i');
                if (icon) icon.className = 'fas fa-bars';
            }
        });
        
        // S'assurer que le menu est fermé au départ
        mainMenu.classList.remove('show');
        mainMenu.style.display = 'none';
        
        console.log('✅ Menu mobile configuré');
        
    } else {
        console.error('❌ Éléments du menu non trouvés');
    }
    
    // Effet scroll sur header
    const header = document.querySelector('#header');
    if (header) {
        let ticking = false;
        
        function updateHeader() {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
            ticking = false;
        }
        
        window.addEventListener('scroll', function() {
            if (!ticking) {
                requestAnimationFrame(updateHeader);
                ticking = true;
            }
        });
        
        console.log('✅ Effet scroll configuré');
    }
    
});

// Fonction de debug globale
window.debugMenu = function() {
    const toggle = document.querySelector('#mainMenu-trigger button');
    const menu = document.querySelector('#mainMenu');
    
    console.log('=== DEBUG MENU ===');
    console.log('Toggle element:', toggle);
    console.log('Menu element:', menu);
    console.log('Menu classes:', menu?.className);
    console.log('Menu style.display:', menu?.style.display);
    console.log('Menu has show class:', menu?.classList.contains('show'));
    console.log('Window width:', window.innerWidth);
    console.log('==================');
};