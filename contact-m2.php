<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contactez Média Technologies ! Serveur vocal interactif</title>
    <meta name="Description" content="Contactez Média Technologies ! pour avoir un Serveur vocal interactif, ou un hébergement audiotel. Media Technologies vous aide à choisir un serveur vocal interactif SVI adapté et l'hébergement audiotel adéquat">
    <meta name="Keywords" content="serveur vocal, serveur vocal audiotel, serveur vocal interactif, serveur audiotel, hebergement audiotel, IVR, hebergement serveur vocal, service vocal, svi, interactive voice response, serveurs vocaux, centre serveur, audiotel">
    <meta name="Author" content="www.serveur-vocal-audiotel.com">
    <META content="ALL" name="robots">
    <META content="document" name="resource-type">
    <META content="15 days" name="revisit-after">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Open Graph pour réseaux sociaux -->
    <meta property="og:title" content="Contact Média Technologies | Serveur vocal interactif">
    <meta property="og:description" content="Contactez Média Technologies pour vos besoins en serveur vocal interactif et hébergement audiotel. Expertise depuis 2005.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.serveur-vocal-audiotel.fr/contact.php">
    <meta property="og:image" content="https://www.serveur-vocal-audiotel.fr/images/contactez-nous-mediatechnologies.png">
    
    <link rel="canonical" href="https://www.serveur-vocal-audiotel.fr/contact.php">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta name="robots" content="index, follow">

    <!-- Données structurées pour la page contact -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ContactPage",
        "name": "Contact Média Technologies",
        "description": "Contactez Média Technologies pour vos besoins en serveur vocal interactif et hébergement audiotel",
        "url": "https://www.serveur-vocal-audiotel.fr/contact.php",
        "mainEntity": {
            "@type": "Organization",
            "name": "Média Technologies",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "9, rue Georges ENESCO",
                "addressLocality": "Créteil",
                "postalCode": "94000",
                "addressCountry": "FR"
            },
            "telephone": "+33175431870",
            "email": "info@media-technologies.eu",
            "contactPoint": [
                {
                    "@type": "ContactPoint",
                    "telephone": "+33175431870",
                    "contactType": "customer service",
                    "email": "info@media-technologies.eu",
                    "availableLanguage": "French"
                },
                {
                    "@type": "ContactPoint",
                    "telephone": "+33826958715",
                    "contactType": "technical support",
                    "email": "support@media-technologies.eu",
                    "availableLanguage": "French"
                }
            ]
        }
    }
    </script>

    <!-- Breadcrumb Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Accueil",
                "item": "https://www.serveur-vocal-audiotel.fr/"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "Contact",
                "item": "https://www.serveur-vocal-audiotel.fr/contact.php"
            }
        ]
    }
    </script>

    <!-- CSS existants -->
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/header-style.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <?php include ("analytics.php");?>
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">
        
        <!-- Header -->
        <?php include("header.php");?>
        <!-- end: Header -->
        
        <!-- Page title -->
        <section id="page-title" data-bg-parallax="images/contactez-nous-mediatechnologies.png">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="/">Accueil</a></li>
                        <li class="active"><a href="/contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="page-title">
                    <h1>Contactez-nous, Nous vous rappelons !</h1>
                </div>
            </div>
        </section>
        <!-- end: Page title -->

        <!-- Content Principal -->
        <section id="page-content">
            <div class="contact-main-section">
                <div class="container">
                    
                    <!-- 1. HERO - PROBLÈME/SOLUTION -->
                    <div class="contact-hero">
                        <h2>Votre projet vocal mérite une expertise dédiée</h2>
                        <p class="subtitle">
                            Depuis 2005, nous accompagnons les entreprises dans leurs solutions de serveurs vocaux interactifs. 
                            Parlons de votre projet et trouvons ensemble la solution parfaite.
                        </p>
                        
                        <div class="hero-benefits">
                            <div class="hero-benefit">
                                <i class="fas fa-clock"></i>
                                <span>Rappel sous 2h en urgence</span>
                            </div>
                            <div class="hero-benefit">
                                <i class="fas fa-calculator"></i>
                                <span>Devis gratuit en 24h</span>
                            </div>
                            <div class="hero-benefit">
                                <i class="fas fa-award"></i>
                                <span>20 ans d'expertise</span>
                            </div>
                        </div>
                    </div>

                    <!-- 2. FORMULAIRE PRINCIPAL -->
                    <div class="main-contact-form">
                        <div class="form-header">
                            <h3>Décrivez-nous votre projet</h3>
                            <p>Plus nous en savons, mieux nous pouvons vous conseiller</p>
                        </div>

                        <form class="widget-contact-form contact-form" novalidate action="include/contact-form.php" role="form" method="post">
                            <!-- integration captcha -->
                            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                            <input type="hidden" name="action" value="validate_captcha">

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="name">Nom <span class="required-marker">*</span></label>
                                    <input type="text" aria-required="true" name="widget-contact-form-name" required class="form-control required name" placeholder="Votre nom">
                                </div>
                                <div class="form-group">
                                    <label for="company">Société <span class="required-marker">*</span></label>
                                    <input type="text" aria-required="true" name="widget-contact-form-subject" required class="form-control required" placeholder="Votre société">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="phone">Téléphone <span class="required-marker">*</span></label>
                                    <input type="tel" aria-required="true" name="widget-contact-form-phone" required class="form-control required name" placeholder="Pour vous rappeler">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email <span class="required-marker">*</span></label>
                                    <input type="email" aria-required="true" name="widget-contact-form-email" required class="form-control required email" placeholder="Pour l'envoi du devis">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="project">Décrivez votre projet <span class="required-marker">*</span></label>
                                <textarea name="widget-contact-form-message" required rows="4" class="form-control required" placeholder="Ex: Besoin d'un serveur vocal pour gérer les appels clients, environ 200 appels/jour..."></textarea>
                            </div>

                            <div class="form-footer">
                                <button class="btn-submit-primary" type="submit" id="form-submit">
                                    <i class="fa fa-paper-plane"></i>
                                    <span>Envoyer ma demande</span>
                                </button>
                                
                                <div class="privacy-note">
                                    <i class="fas fa-shield-alt"></i>
                                    Données sécurisées - Réponse garantie sous 24h
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Content -->

        <!-- 4. PREUVES SOCIALES -->
        <section class="social-proof">
            <div class="container">
                <h3>Ils nous font confiance</h3>
                <div class="testimonials">
                    <div class="testimonial">
                        <p>"Solution parfaite pour notre service client. Installation rapide et support réactif."</p>
                        <div class="testimonial-author">- Directeur IT, Groupe industriel</div>
                    </div>
                    <div class="testimonial">
                        <p>"20 ans de partenariat, jamais déçus. Expertise technique et conseil personnalisé."</p>
                        <div class="testimonial-author">- DSI, PME 150 salariés</div>
                    </div>
                    <div class="testimonial">
                        <p>"Mise en place en 48h pour notre urgence. Service exceptionnel."</p>
                        <div class="testimonial-author">- Responsable technique</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. MÉTHODES DE CONTACT -->
        <section class="contact-info-section">
            <div class="container">
                <div class="contact-info-title">
                    <h3>Plusieurs façons de nous joindre</h3>
                    <p>Choisissez le canal qui vous convient le mieux</p>
                </div>

                <div class="contact-methods">
                    <div class="contact-method urgent">
                        <div class="method-icon urgent">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h4>Appel direct</h4>
                        <p><strong>Commercial :</strong><br>
                        <a href="tel:+33175431870">01 75 43 18 70</a></p>
                        <p>Lun-Ven : 9h-18h</p>
                    </div>

                    <div class="contact-method support">
                        <div class="method-icon support">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4>Support technique</h4>
                        <p><strong>Hotline :</strong> <img src="/images/cartouche_0826958715_D018.webp" alt="numéro 0826" width="180" height="24"><br>
                        Depuis l'étranger : +33 826 95 87 15<br>
                        <a href="mailto:support@media-technologies.eu">support@media-technologies.eu</a></p>
                        <p>24h/24 - 7j/7</p>
                    </div>

                    <div class="contact-method">
                        <div class="method-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h4>Email</h4>
                        <p><strong>Commercial :</strong><br>
                        <a href="mailto:info@media-technologies.eu">info@media-technologies.eu</a></p>
                        <p>Réponse sous 2h en général</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php include("footer.php");?>
        <!-- end: Footer -->
        
    </div>
    <!-- end: Body Inner -->

    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <!--Template functions-->
    <script src="js/functions.js"></script>

    <!-- integration captcha -->
    <?php $sitekey = "6Lc6kIkhAAAAAHkfl9GVRQ5Q7wawAO0X1MfOwBu2"; ?>
    <script src="https://www.google.com/recaptcha/api.js?render=<?=$sitekey?>"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute("<?=$sitekey?>", {action:'validate_captcha'})
                      .then(function(token) {
                document.getElementById('g-recaptcha-response').value = token;
            });
        });
    </script>

</body>
</html>