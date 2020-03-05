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
                <a href="#fuite/dégorgement" title="Fuite/Dégorgment" class="nav-link"> <i class="fas fa-bath"></i> <span class=""ml-1></span> Fuites/Dégorgement</a>
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
                        <h1>Plomberie</h1>
                    </div>
                        <p>
                        <h3>NOS INTERVENTIONS :</h3><br>
                            Création de réseau d'eau (froide et chaude)<br>
                            Création de réseau d'évacuation (PVC et fonte)<br>
                            Réseau chauffage<br> 
                            Canalisation d'eau et de gaz<br><br>

                        <h3>NOS SOLUTIONS :</h3><br>
                            Robinetterie : mitigeurs, mélangeurs, robinets à bec, robinets thermostatiques<br>
                            Tuyauterie : sanitaire, industrielle, en PVC, en cuivre, en acier<br>
                            Chauffe eau : gaz, électrique, de type vertical, de type horizontal<br>
                            Chauffe eau Thermo-dynamique<br>
                        </p>
                    </div>
                    <ul class="services-item">
                        <li class="services-items">
                            <div class="box1">
                                <!-- <h2 class="card-title">My awesome article</h2> -->
                                <img src="images/sitebg1.jpg" title="Image 1" alt="Image"/>
                            </div>
                        </li>
                    <!-- <div id="plomberie-bloc"></div> -->   
                </div>
    </section>

    <!-- Deuxième section, partie salle de bain -->
    <section class="salledebain" id="salledebain">
        <div class="container">
            <div id="salledebain-bloc">
                <ul class="services-item">
                    <!-- <li class="services-item"> -->
                        <div class="box2">
                            <!-- <h2 class="card-title">My awesome article</h2> -->
                            <img src="images/sitebg1.jpg" title="Image 2" alt="Image"/>
                        </div>
                    </li>
                </div>
            <div class="salledebain-details">
                <div class="salledebain-heading">
                    <h1>Salle de Bains</h1>
                </div>
                    <p>
                    <h3>Douches :</h3><br>
                        Hydromassage, cabines douches standard, cabines monoblocs, combinés bains douches, bacs de douches standard, bacs de douches à l'italienne<br><br>
                    <h3>Bains :</h3><br>
                        Baignoires : Classiques, sabots, d'angle, asymétriques, Îlots, baignoires-douches<br><br>
                    <h3>Aménagement :</h3><br>
                        Salles de bains pour personnes à mobilité réduite
                        Carrelage antidérapant
                    </p>
                </div>   
            </div>
        </section>

    <!-- Troisième section, partie bain -->
    <section class="bain" id="fuite/dégorgement">
        <div class="container">
            <div class="bain-details">
                <div class="bain-heading">
                    <h1>Bain</h1>
                </div>
                    <p>
                    <h3>Baignoires :</h3><br>
                        Classiques, sabots, d'angle, asymétriques, Îlots, baignoires-douches
                    </p>
                </div>  
                <ul class="services-item">
                    <li class="services-items">
                        <div class="box3">
                            <!-- <h2 class="card-title">My awesome article</h2> -->
                            <img src="images/sitebg1.jpg" title="Image 3" alt="Image"/>
                        </div>
                    </li>
                <!-- <div id="bain-bloc"></div> -->      
            </div>
    </section>

    <!-- Quatrième section, partie réalisations -->
    <section class="carousel" id="realisations">
        <div class="carousel-heading">
            <h1>Nos réalisations</h1>
        </div>
        <div class="carousel-wrapper">
            <span id="item-1"></span>
            <span id="item-2"></span>
            <span id="item-3"></span>
        <div class="carousel-item item-1">
            <h2>Item 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus accumsan pretium dolor vel convallis. Aliquam erat volutpat. Maecenas lacus nunc, imperdiet sed mi et, finibus suscipit mi.</p>
            <a class="arrow arrow-prev" href="#item-3"></a>
            <a class="arrow arrow-next" href="#item-2"></a>
        </div>
        <div class="carousel-item item-2">
            <h2>Item 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus accumsan pretium dolor vel convallis. Aliquam erat volutpat.</p>
            <a class="arrow arrow-prev" href="#item-1"></a>
            <a class="arrow arrow-next" href="#item-3"></a>
        </div>
        <div class="carousel-item item-3">
            <h2>Item 3</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus accumsan pretium dolor vel convallis. Aliquam erat volutpat.</p>
            <a class="arrow arrow-prev" href="#item-2"></a>
            <a class="arrow arrow-next" href="#item-1"></a>
        </div>
    </div>
    </section>

    <!-- Cinquième section, partie contact -->  
    <section class="contact" enctype="multipart/form-data" id="contact">
    <?php include('traitement_formulaire.php')?>
        <div class="container">
            <div class="section-heading">
                <h1>Contactez-nous !</h1>
                <h6>Dîtes nous ce que l'on peut faire pour vous - Devis gratuit en ligne</h6>
            </div>
            <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>" id="contact">
                <label for="name" required>Nom:</label>
                <input type="text" id="name" name="name" value="<?= $name ?>" placeholder="Entrez votre nom..." required>
                <span class="error"><?= $name_error ?></span> <br>
                <label for="email" required>Email:</label>
                <input type="email" id="email" name="email" value="<?= $email ?>"" placeholder="Entrez votre email..." required>
                <span class="error"><?= $email_error ?></span> <br> 
                <label for="phone">Numéro de téléphone:</label>
                <input type="tel" id="phone" name="phone" value="<?= $phone ?>" required>
                <span class="error"><?= $phone_error ?></span> <br>
                <label for="service" required>Devis:</label>
                <select name="service" id="service">
                    <option value="0">Plomberie</option>
                    <option value="1">Douche</option>
                    <option value="2">Bain</option>
                    <!-- <option value=""></option> -->
                </select>
                <label for="message" required>Plus de détails:</label>
                <textarea name="message" value="<?= $message ?>" id="message" cols="10" rows="10"></textarea>
                <input type="submit" value="Envoyer" name="envoyer">
            </form>
            <div class="success"><?= $success ?></div>
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

        <!--<div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2637.574661271122!2d2.2520238152256766!3d48.61798442555837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5d754da54575f%3A0xa73585968c8e28e6!2s85%20Chemin%20de%20Tabor%2C%2091310%20Linas!5e0!3m2!1sfr!2sfr!4v1578679211614!5m2!1sfr!2sfr" width="250" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>-->

        <p>&copy; 2020 2F Plomberie. Tous droits réservés.</p> 
    </footer>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="main.js"></script>
</body>
</html>