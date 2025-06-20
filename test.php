<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="Author" content="www.serveur-vocal-audiotel.com" />
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO OPTIMISÉ -->
    <title>Serveur Vocal Interactif & Hébergement Audiotel - Média Technologies</title>
    <meta name="Description"
        content="Spécialiste serveur vocal interactif depuis 1995. Hébergement audiotel, plateforme SVI, numéros surtaxés 08. Solutions professionnelles sur-mesure. Devis gratuit." />
    <meta name="Keywords"
        content="serveur vocal interactif, hébergement audiotel, combien coûte serveur vocal, prix serveur vocal, SVI, numéros surtaxés 08, plateforme audiotel" />

    <!-- Stylesheets & Fonts -->
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- CSS Custom avec votre identité visuelle -->
    <style>
    :root {
        --primary-blue: #3B6EFF;
        --secondary-blue: #5085FF;
        --light-blue: #E8F1FF;
        --dark-blue: #2C5CE6;
        --accent-blue: #1B4FD9;
        --text-dark: #2c3e50;
        --text-light: #6c757d;
        --success-green: #28a745;
    }

    .hero-title-custom {
        font-size: 2.2rem !important;
        font-weight: 600 !important;
        line-height: 1.3 !important;
        margin-bottom: 0.8rem !important;
    }

    @media (max-width: 768px) {
        .hero-title-custom {
            font-size: 1.6rem !important;
            line-height: 1.2 !important;
        }
    }

    /* Icônes professionnelles avec votre palette */
    .professional-icon {
        width: 24px;
        height: 24px;
        display: inline-block;
        vertical-align: middle;
        margin-right: 8px;
    }

    .feature-icon-pro {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 15px;
        background: var(--primary-blue);
        color: white;
        font-size: 24px;
        box-shadow: 0 4px 15px rgba(59, 110, 255, 0.2);
    }

    .service-icon {
        width: 64px;
        height: 64px;
        margin: 0 auto 20px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--primary-blue);
        color: white;
        font-size: 28px;
        box-shadow: 0 8px 25px rgba(59, 110, 255, 0.2);
    }

    .service-icon.secondary {
        background: var(--secondary-blue);
    }

    .service-icon.accent {
        background: var(--accent-blue);
    }

    .stats-icon {
        width: 40px;
        height: 40px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, 0.2);
        color: white;
        font-size: 20px;
        margin-right: 12px;
        flex-shrink: 0;
    }

    .badge-professional {
        background: var(--primary-blue);
        color: white;
        border: none;
        font-weight: 500;
        padding: 8px 20px;
        border-radius: 25px;
        box-shadow: 0 4px 15px rgba(59, 110, 255, 0.2);
    }

    .modern-card {
        border: none;
        border-radius: 16px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-top: 3px solid var(--primary-blue);
    }

    .modern-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(59, 110, 255, 0.15);
    }

    .price-badge {
        background: var(--success-green);
        color: white;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 600;
    }

    .cta-gradient {
        background: var(--primary-blue);
        border: none;
        color: white;
        padding: 12px 30px;
        border-radius: 8px;
        font-weight: 500;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(59, 110, 255, 0.2);
    }

    .cta-gradient:hover {
        color: white;
        background: var(--dark-blue);
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(59, 110, 255, 0.3);
    }

    .cta-outline {
        background: transparent;
        border: 2px solid var(--primary-blue);
        color: var(--primary-blue);
        padding: 10px 28px;
        border-radius: 8px;
        font-weight: 500;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
    }

    .cta-outline:hover {
        background: var(--primary-blue);
        color: white;
        text-decoration: none;
    }

    .timeline-item {
        position: relative;
        padding-left: 60px;
        margin-bottom: 30px;
    }

    .timeline-icon {
        position: absolute;
        left: 0;
        top: 0;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: var(--primary-blue);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 18px;
        box-shadow: 0 4px 15px rgba(59, 110, 255, 0.2);
    }

    .hero-bg {
        background: linear-gradient(135deg, var(--primary-blue) 0%, var(--accent-blue) 100%);
    }

    .section-bg-light {
        background: linear-gradient(135deg, var(--light-blue) 0%, #ffffff 100%);
    }

    .text-primary-custom {
        color: var(--primary-blue) !important;
    }

    .border-primary-custom {
        border-color: var(--primary-blue) !important;
    }

    .bg-primary-custom {
        background-color: var(--primary-blue) !important;
    }

    /* Effets d'animation subtils */
    .floating-icon {
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    .highlight-box {
        background: var(--light-blue);
        border-left: 4px solid var(--primary-blue);
        padding: 1.5rem;
        border-radius: 8px;
        margin: 1rem 0;
    }
    </style>

    <meta name="robots" content="index, follow">

    <!-- SCHEMAS JSON-LD inchangés -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
                "@type": "Question",
                "name": "Qu'est-ce qu'un serveur vocal interactif ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Un serveur vocal interactif (SVI) est un système automatisé qui gère les appels téléphoniques via des menus vocaux. Il permet aux appelants de naviguer par touches ou commandes vocales vers le bon service. Média Technologies, spécialiste depuis 1995, propose des solutions SVI hébergées avec 99,9% de disponibilité."
                }
            },
            {
                "@type": "Question",
                "name": "Combien coûte un serveur vocal ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Le coût d'un serveur vocal varie de 200€/mois pour une solution basique à 2000€/mois pour les plateformes haute capacité. Chez Média Technologies, nos tarifs incluent l'hébergement, la maintenance et le support 24h/24."
                }
            }
        ]
    }
    </script>

</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">

        <!-- HERO SECTION avec votre identité visuelle -->
        <div class="call-to-action hero-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <div class="service-icon floating-icon" style="background: rgba(255,255,255,0.15);">
                            <i class="fas fa-headset"></i>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h1 class="text-light hero-title-custom">Serveur Vocal Interactif : Solutions Professionnelles d'Hébergement Audiotel</h1>
                        <p class="text-light mb-3">
                            <strong>Opérateur de communications électroniques (L. 33-1)</strong> | Agent d'établissement de Paiement
                        </p>
                        
                        <!-- Stats redesignées avec votre palette -->
                        <div class="d-flex flex-wrap align-items-center text-light">
                            <div class="d-flex align-items-center mr-4 mb-2">
                                <div class="stats-icon">
                                    <i class="fas fa-award"></i>
                                </div>
                                <span><strong>30 ans d'expertise SVI</strong></span>
                            </div>
                            <div class="d-flex align-items-center mr-4 mb-2">
                                <div class="stats-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <span><strong>99,9% disponibilité</strong></span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div class="stats-icon">
                                    <i class="fas fa-phone-volume"></i>
                                </div>
                                <span><strong>1000+ appels simultanés</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <a href="/contact.php" class="btn btn-light mb-2 d-block text-center" style="color: var(--primary-blue); font-weight: 500;">
                            <i class="fas fa-file-alt mr-2"></i>Devis Gratuit
                        </a>
                        <a href="tel:+33175431870" class="btn btn-outline-light d-block">
                            <i class="fas fa-phone mr-2"></i>01 75 43 18 70
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ SECTION avec votre palette -->
        <section class="p-t-80 p-b-60 section-bg-light">
            <div class="container">

                <!-- Header Section -->
                <div class="text-center mb-5">
                    <span class="badge-professional mb-3">Guide Expert</span>
                    <h2 class="mb-4 text-primary-custom" style="font-weight: 600;">Questions Fréquentes Serveur Vocal</h2>
                    <p class="lead text-muted mb-5" style="max-width: 800px; margin: 0 auto;">
                        Trouvez rapidement les réponses à vos questions sur nos solutions SVI
                    </p>
                </div>

                <!-- Question principale -->
                <div class="text-center mb-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="highlight-box">
                                <div class="service-icon mx-auto mb-3">
                                    <i class="fas fa-question-circle"></i>
                                </div>
                                <h3 class="mb-3 text-primary-custom" style="font-weight: 600;">Qu'est-ce qu'un serveur vocal interactif ?</h3>
                                <p class="lead mb-0" style="color: var(--text-dark); line-height: 1.8;">
                                    Un serveur vocal interactif (SVI) est un système automatisé qui gère les appels téléphoniques via des menus vocaux. Il permet aux appelants de naviguer par touches ou commandes vocales vers le bon service. <strong class="text-primary-custom">Média Technologies, spécialiste depuis 1995</strong>, propose des solutions SVI hébergées avec <strong style="color: var(--success-green);">99,9% de disponibilité</strong>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Cards avec votre identité -->
                <div class="row">
                    <!-- Prix -->
                    <div class="col-lg-6 mb-4">
                        <div class="modern-card bg-white p-4 h-100">
                            <div class="d-flex align-items-start">
                                <div class="feature-icon-pro mr-3">
                                    <i class="fas fa-euro-sign"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h4 class="mb-3 text-primary-custom">Quel est le prix d'un serveur vocal ?</h4>
                                    <p class="mb-3" style="color: var(--text-dark);">
                                        Nos tarifs s'adaptent à votre activité : 
                                        <span class="price-badge mx-1">200€/mois</span> 
                                        pour débuter à 
                                        <span class="price-badge mx-1">2000€/mois</span> 
                                        pour les solutions enterprise.
                                    </p>
                                    <ul class="list-unstyled mb-3" style="font-size: 0.9rem;">
                                        <li class="mb-2">
                                            <i class="fas fa-check text-success mr-2"></i>Hébergement sécurisé inclus
                                        </li>
                                        <li class="mb-2">
                                            <i class="fas fa-check text-success mr-2"></i>Support technique 24h/24
                                        </li>
                                        <li class="mb-2">
                                            <i class="fas fa-check text-success mr-2"></i>Maintenance préventive
                                        </li>
                                    </ul>
                                    <a href="/prix-serveur-vocal" class="cta-gradient">
                                        <i class="fas fa-calculator mr-2"></i>Voir les tarifs
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Installation -->
                    <div class="col-lg-6 mb-4">
                        <div class="modern-card bg-white p-4 h-100">
                            <div class="d-flex align-items-start">
                                <div class="feature-icon-pro mr-3" style="background: var(--secondary-blue);">
                                    <i class="fas fa-rocket"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h4 class="mb-3 text-primary-custom">Délai d'installation ?</h4>
                                    <div class="timeline-item">
                                        <div class="timeline-icon">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                        <div>
                                            <strong>24h</strong> pour une solution standard<br>
                                            <small class="text-muted">Configuration rapide</small>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="timeline-icon" style="background: var(--secondary-blue);">
                                            <i class="fas fa-cogs"></i>
                                        </div>
                                        <div>
                                            <strong>48h</strong> pour du sur-mesure<br>
                                            <small class="text-muted">Personnalisation avancée</small>
                                        </div>
                                    </div>
                                    <a href="/contact" class="cta-outline">
                                        <i class="fas fa-play mr-2"></i>Démarrer
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Support -->
                    <div class="col-lg-6 mb-4">
                        <div class="modern-card bg-white p-4 h-100">
                            <div class="d-flex align-items-start">
                                <div class="feature-icon-pro mr-3" style="background: var(--accent-blue);">
                                    <i class="fas fa-life-ring"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h4 class="mb-3 text-primary-custom">Support technique</h4>
                                    <div class="row text-center">
                                        <div class="col-4">
                                            <div class="feature-icon-pro mx-auto" style="width: 40px; height: 40px; font-size: 16px;">
                                                <i class="fas fa-clock"></i>
                                            </div>
                                            <small><strong>24h/24</strong><br>Disponible</small>
                                        </div>
                                        <div class="col-4">
                                            <div class="feature-icon-pro mx-auto" style="width: 40px; height: 40px; font-size: 16px; background: var(--secondary-blue);">
                                                <i class="fas fa-user-tie"></i>
                                            </div>
                                            <small><strong>Experts</strong><br>Dédiés</small>
                                        </div>
                                        <div class="col-4">
                                            <div class="feature-icon-pro mx-auto" style="width: 40px; height: 40px; font-size: 16px; background: var(--accent-blue);">
                                                <i class="fas fa-stopwatch"></i>
                                            </div>
                                            <small><strong>2h max</strong><br>Résolution</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Avantages -->
                    <div class="col-lg-6 mb-4">
                        <div class="modern-card bg-white p-4 h-100">
                            <div class="d-flex align-items-start">
                                <div class="feature-icon-pro mr-3">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h4 class="mb-3 text-primary-custom">Pourquoi nous choisir ?</h4>
                                    <ul class="list-unstyled" style="font-size: 0.9rem;">
                                        <li class="mb-2">
                                            <i class="fas fa-medal" style="color: #FFC107;" aria-hidden="true"></i> <strong>30 ans d'expertise</strong> dans le vocal
                                        </li>
                                        <li class="mb-2">
                                            <i class="fas fa-certificate text-success mr-2"></i><strong>Opérateur agréé</strong> (L. 33-1)
                                        </li>
                                        <li class="mb-2">
                                            <i class="fas fa-eye text-primary-custom mr-2"></i><strong>Prix transparents</strong>
                                        </li>
                                        <li class="mb-2">
                                            <i class="fas fa-map-marker-alt text-primary-custom mr-2"></i><strong>Infrastructure française</strong>
                                        </li>
                                    </ul>
                                    <a href="/societe" class="cta-outline">
                                        <i class="fas fa-building mr-2"></i>Notre histoire
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA Final avec votre palette -->
                <div class="text-center mt-5">
                    <div class="modern-card hero-bg text-white" style="padding: 3rem 1.5rem; border-top: none;">
                        <div class="service-icon mx-auto mb-3" style="background: rgba(255,255,255,0.2);">
                            <i class="fas fa-comments"></i>
                        </div>
                        <h4 class="text-white mb-3">Une question spécifique ?</h4>
                        <p class="text-light mb-4">Nos experts sont à votre disposition pour un conseil personnalisé</p>
                        
                        <div class="d-flex justify-content-center flex-wrap">
                            <a href="/contact" class="btn btn-light mr-3 mb-2" style="color: var(--primary-blue); font-weight: 500;">
                                <i class="fas fa-envelope mr-2"></i>Nous contacter
                            </a>
                            <a href="tel:+33175431870" class="btn btn-outline-light mb-2">
                                <i class="fas fa-phone mr-2"></i>01 75 43 18 70
                            </a>
                        </div>
                        
                        <div class="mt-4">
                            <p class="text-light mb-0" style="font-size: 0.85rem; opacity: 0.8;">
                                <i class="fas fa-check-circle mr-1"></i> Réponse sous 24h •
                                <i class="fas fa-user-check mr-1"></i> Conseil personnalisé •
                                <i class="fas fa-file-invoice mr-1"></i> Devis gratuit
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Services Section avec votre identité -->
        <section class="p-t-80 p-b-60">
            <div class="container">
                <div class="text-center mb-5">
                    <span class="badge-professional mb-3">Nos Solutions</span>
                    <h2 class="text-primary-custom">Services Serveur Vocal Professionnel</h2>
                    <p class="lead">Hébergement audiotel haute disponibilité, serveurs vocaux interactifs sur-mesure</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="modern-card text-center p-4 h-100">
                            <div class="service-icon mx-auto">
                                <i class="fas fa-server"></i>
                            </div>
                            <h3 class="h4 mb-3 text-primary-custom">Hébergement Audiotel</h3>
                            <p class="text-muted mb-4">Solutions d'hébergement audiotel haute disponibilité. Plateforme professionnelle pour monétiser vos services téléphoniques.</p>
                            <a href="/hebergement-audiotel" class="cta-gradient">
                                <i class="fas fa-arrow-right mr-2"></i>Découvrir
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="modern-card text-center p-4 h-100">
                            <div class="service-icon secondary mx-auto">
                                <i class="fas fa-microphone-alt"></i>
                            </div>
                            <h3 class="h4 mb-3 text-primary-custom">Serveur Vocal Interactif</h3>
                            <p class="text-muted mb-4">Automatisez votre accueil téléphonique avec nos solutions SVI cloud. Reconnaissance vocale et routage intelligent.</p>
                            <a href="/serveur-vocal-interactif" class="cta-gradient">
                                <i class="fas fa-arrow-right mr-2"></i>En savoir plus
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="modern-card text-center p-4 h-100">
                            <div class="service-icon accent mx-auto">
                                <i class="fas fa-hashtag"></i>
                            </div>
                            <h3 class="h4 mb-3 text-primary-custom">Numéros Surtaxés</h3>
                            <p class="text-muted mb-4">Numéros spéciaux avec tarification transparente. Configuration immédiate, reversements optimisés.</p>
                            <a href="/numeros-surtaxes" class="cta-gradient">
                                <i class="fas fa-calculator mr-2"></i>Voir tarifs
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>