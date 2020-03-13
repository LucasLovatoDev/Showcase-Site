<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>2F Plomberie</title>
    <meta name="description" content="Site de plomberie, coordonées etc">
    <!-- <link rel="icon" type="images/..." href="logo.jpg"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
</head>

<body>

    <header>
        <div class="header-img"></div>

        <div class="header-text">
            <h1>2F Plomberie</h1>
            <!--<img src="images/logo2F.jpg">-->
            <h6>A chaque chantier sa solution</h6>
            <div class="numero-tel" href="tel:+33659334397" role="button">
                <span>06 59 33 43 97</span>
            </div>
            <!-- Deux blocs sur header -->
            <div class="depannage-block">
                <h2>Dépannage</h2><br>
                <h4>53 €/h</h4>
                <p class="text-pop">
                Plomberie<br>
                Alimentation eau froide / eau chaude<br>
                Evacuation PVC<br>
                Sanitaire<br>
                Etc...
                </p>
            </div>
            <div class="entretien-block">
                <h2>Entretien</h2>
                <p class="text-pop">A prévoir tous les 2 ans pour les canalisations de drainage et d'eaux usées, et tous les 5 ans pour les colonnes de chutes. </p>
            </div>
            <!-- Deux blocs sur header -->
        </div>

        <nav class="navigation">
            <li>
                <a href="index.php" title="Accueil" class="nav-link"> <i class="fas fa-home"></i> <span class=""ml-1></span> Accueil</a>
            </li>
            <li>
                <a href="#plomberie" title="Plomberie" class="nav-link"> <i class="fas fa-wrench"></i> <span class=""ml-1></span> Plomberie</a>
            </li>
            <li>
                <a href="#salledebain" title="Salle de Bain" class="nav-link"> <i class="fas fa-shower"></i> <span class=""ml-1></span> Salle de Bains</a>
            </li>
            <li>
                <a href="#fuite/dégorgement" title="Fuite/Dégorgment" class="nav-link"> <i class="fas fa-water"></i> <span class=""ml-1></span> Fuites/Dégorgement</a>
            </li>
            <li>
                <a href="#realisations" title="Réalisations" class="nav-link"> <i class="fas fa-archive"></i> <span class=""ml-1></span> Réalisations</a>
            </li>
            <li>
                <a href="#contact" title="Contact" class="nav-link"> <i class="fas fa-phone-volume"></i> <span class=""ml-1></span> Contact</a>
            </li>
        </nav>
    </header>

    <!-- Première section, partie plomberie -->
    <section class="plomberie" id="plomberie">
            <div class="container">
                <div class="plomberie-details">
                    <div class="plomberie-heading">
                        <h1>Plomberie - Création & Réfection </h1>
                    </div>
                        <p>
                        <h3>NOS INTERVENTIONS :</h3><br>
                            Création de réseau d'eau (froide et chaude)<br>
                            Création de réseau d'évacuation (PVC et fonte)<br>
                            Réseau chauffage<br> 
                            Canalisation d'eau et de gaz<br><br>

                        <h3>NOS SOLUTIONS :</h3><br>
                            <strong>Robinetterie :</strong> mitigeurs, mélangeurs, robinets à bec, robinets thermostatiques<br>
                            <strong>Tuyauterie :</strong> sanitaire, industrielle, en PVC, en cuivre, en acier<br>
                            <strong>Chauffe eau :</strong> gaz, électrique, de type vertical, de type horizontal<br>
                            Chauffe eau Thermo-dynamique<br>
                        </p>
                    </div>
    </section>

    <footer class="copyright">
        <!-- <div class="up" id="up">
            <i class="fas fa-chevron-up"></i>
        </div> -->
        <div class="social-media">
            <ul class="nav-list">
                <li>
                    <a href="mailto:2fplomberie@gmail.com" title="Gmail" class="icon-link">
                    <i class="fas fa-envelope-square"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="icon-link">
                    <i class="fab fa-google-plus-square"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="icon-link">
                    <i class="fab fa-facebook-square"></i>
                    </a>
                </li>
            </ul>
        </div> 

        <div class="footer-contact">
            <h3>Contact</h3>
            <ul>
                <li>85 Chemin Talbor</li><br>
                <li>91 310 LINAS</li><br>
                <li>Tél.06 59 33 43 97</li><br>
            </ul>
        </div>

        <div class="trademark">
            <img src="images/logo_transparent.png" alt="logo" />
        </div>
        
        <!--<div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2637.574661271122!2d2.2520238152256766!3d48.61798442555837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5d754da54575f%3A0xa73585968c8e28e6!2s85%20Chemin%20de%20Tabor%2C%2091310%20Linas!5e0!3m2!1sfr!2sfr!4v1578679211614!5m2!1sfr!2sfr" width="250" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>-->

        <p>&copy; 2020 2F Plomberie. Tous droits réservés.</p> 
    </footer>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="main.js"></script>
</body>
</html>