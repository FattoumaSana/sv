<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Serveur vocal audiotel, serveur vocal interactif (SVI) - Service Audiotel</title>
	<meta name="Description" content="Recevoir une documentation de Serveur vocal interactif, ou un hebergement audiotel , Media Technologies vous aide &agrave; choisir un serveur vocal interactif SVI adapt&eacute; et l' hebergement audiotel adequat">
	<meta name="Keywords" content="serveur vocal, serveur vocal audiotel, serveur vocal interactif, serveur audiotel, hebergement audiotel, IVR, hebergement serveur vocal, service vocal, svi, interactive voice response, serveurs vocaux, centre serveur, audiotel">
	<meta name="Author" content="www.serveur-vocal-audiotel.com">
	<META content="ALL" name="robots">
	<META content="document" name="resource-type">
	<META content="15 days" name="revisit-after">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="images/favicon.png">   
    <!-- Stylesheets & Fonts -->
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<meta name="robots" content="index, follow">       
	<link rel="icon" type="image/png" href="images/favicon.png"> 
 <?php include ("analytics.php");?>   </head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Header -->
        <?php include("header.php");?>
        <!-- end: Header -->
        <!-- Page title -->
        <section id="page-title" data-bg-parallax="images/contactez-nous-mediatechnologies.png">
            <div class="container">
                <div class="page-title">
                    <h1>Recevoir une brochure - Serveur Vocal Audiotel</h1>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="/">Accueil</a> </li>
                        <li class="active"><a href="/brochure.php">Recevoir une brochure</a> </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- end: Page title -->
        <!-- CONTENT -->

<section>
            <div class="container">
                <div class="row">
				    <div class="col-lg-6">
                        <h3 class="text-uppercase">Recevoir une brochure</h3>
                        <p>Pour recevoir une information plus complète, veuillez remplir le formulaire ci-dessous et précisez votre demande :</p>
						<img src="/images/businessman-audiotel.jpg" alt="numero audiotel">
						
                    </div>
					                    <div class="col-lg-6">
                         <div class="m-t-30">
                            <form class="widget-contact-form" novalidate action="include/contact-brochure.php" role="form" method="post">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Nom & Prénom*</label>
                                        <input type="text" aria-required="true" name="widget-contact-form-name" required class="form-control required name" placeholder="Votre nom">
                                    </div>
									 <div class="form-group col-md-6">
									    <label for="email">Email*</label>
                                        <input type="email" aria-required="true" name="widget-contact-form-email" required class="form-control required email" placeholder="Votre Email">
                                   </div>
                                </div>
								<div class="row">
								<div class="form-group col-md-6">
                                        <label for="tel">téléphone*</label>
                                        <input type="text" aria-required="true" name="widget-contact-form-tel" required class="form-control required name" placeholder="Votre N° de téléphone">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name">Société</label>
                                        <input type="text"  name="widget-contact-form-societe" required class="form-control required date" placeholder="Nom de votre société ">
                                    </div>
								</div>	
								<div class="form-group col-md-12">
								<label for="name">Fonction</label>
                                <input type="text"  name="widget-contact-form-fonction" required class="form-control required date" placeholder="Votre fonction ">
								</div>
								<div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Adresse postale</label>
                                        <input type="text"  name="widget-contact-form-adresse" required class="form-control required name" placeholder="Votre adresse">
                                    </div>
									 <div class="form-group col-md-6">
									    <label for="number">Code postal</label>
                                        <input type="text" name="widget-contact-form-cp" required class="form-control required name" placeholder="Votre code postal">
                                   </div>
                                </div>
								<div class="row">
								<div class="form-group col-md-6">
                                        <label for="name">Ville</label>
                                        <input type="text" aria-required="true" name="widget-contact-form-ville" required class="form-control required name" placeholder="Votre ville">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name">Pays</label>
                                        <input type="text"  name="widget-contact-form-pays" required class="form-control required date" placeholder="votre pays ">
                                    </div>
								</div>	
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="subject">Votre demande</label>
                                         <td align="left" valign="top"> <select name="sujet">
            
            <option value=1 selected <? if($sujet==1) echo "selected";?> >H&eacute;bergement de Service vocal</option>
            
            <option value=2 <? if($sujet==2) echo "selected";?>>Serveurs vocaux Communicator</option>
            
            <option value=3 <? if($sujet==3) echo "selected";?>>Solutions Vocales T&eacute;l&eacute;op&eacute;rateurs</option>
            
            <option value=4 <? if($sujet==4) echo "selected";?>>Conseil &amp; Audit</option>
            
            <option value=5 <? if($sujet==5) echo "selected";?>>Qualification &amp; Certification Solutions</option>
            
            <option value=6 <? if($sujet==6) echo "selected";?>>Brochure M&eacute;dia Technologies</option>
            
            </select></td>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea type="text" name="widget-contact-form-message" required rows="2" class="form-control required" placeholder="une question ? Laissez-nous votre message"></textarea>
                                </div>
							<div class="form-group">
                                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                    <div class="g-recaptcha" data-sitekey="6LdGS8YZAAAAAKJdFfNwFllt4_n-qsGyMbv7jFjx"></div>
                                </div>
                                <button class="btn" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Envoyez</button>
                            </form>
                        </div>
                    </div>
 </section> <!-- end: Content -->
                <!-- Footer -->
 <footer id="footer">
         <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">&copy; 2005-2020 | <a href="https://www.media-technologies.eu/info_legales.html" target="_blank">Informations légales</a>  -  <a href="https://www.serveur-vocal-audiotel.fr/plan-du-site.php">Plan du site</a> </div>
					<center><span itemscope itemtype="https://data-vocabulary.org/organization">
<span itemprop="name" >Media technologies</span>
<span itemprop="address" itemscope itemtype="https://data-vocabulary.org/Address">
<span itemprop="street-address">- 9, rue Georges ENESCO</span>
<span itemprop="postal-code">94000</span> <span itemprop="locality">CRETEIL</span>
<span itemprop="country">- FRANCE</span>
- Tel.: <span itemprop="tel">+33 (0) 1 75 43 18 70</span></span></span></center>
			   </div>
            </div></footer>
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
    <!--Google Maps files-->
    <script type="text/javascript" src="plugins/gmap3/gmap3.min.js"></script>
    <script type="text/javascript" src="plugins/gmap3/map-styles.js"></script>
</body>

</html>