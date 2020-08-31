<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>

     <!-- css style-->
    <link rel="stylesheet" href="assets\css\styles.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

</head>

<body>
    <header>
        <nav>
            <ul class="nav flex-column text-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#" alt="acceuil"><img src="assets/img/hackers-poulette-logo.png" alt="logo"/></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="shop">shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="contact">contact</a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="container-fluid">   
        <article>
        <figure class="figure">
            <img src="assets/img/article.jpg" class="figure-img img-fluid rounded" alt="article.jpg">
                <figcaption class="figure-caption">A caption for the above image.</figcaption>
        </figure>
        </article>
<!-- DEBUT FORMULAIRE CONTACT -->
        <section>
            <form id="my_form" role="form" method="post" action="assets/php/contact.php">
                <div class="row">
                    <div class="form-group  col-md-6 col-lg-6">
                        <label for="name">Nom Prénom</label>
                            <input id="name" name="name" type="text" class="form-control" placeholder="Nom Prénom" required="required">
                    </div>
                    <div class="form-group col-md-6 col-md-offset-1 col-lg-6 col-lg-offset-2">
                        <label for="gender">genre</label><br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="female" required="required">
                            <label class="form-check-label" for="gender">F</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="female" required="required">
                            <label class="form-check-label" for="gender">M</label>
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <div class="form-group col-md-6 col-lg-6 col-md-offset-1 col-lg-offset-1">
                        <label for="mail">E-mail</label>
                            <input id="mail" name="mail" type="mail" class="form-control" placeholder="E-mail" required="required">
                    </div>
                    <div class="form-group col-md-6 col-lg-6 col-md-offset-1 col-lg-offset-1">
                        <label for="land">Pays :</label>
                            <input id="land" type="texte" name="land" class="form-control" placeholder="Pays" required="required">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-12">
                        <label for="subject">Raison :</label>
                        <select class="browser-default custom-select custom-select-lg mb-3" name="subject">
                            <option value="" disabled selected>Choose your option</option>
                            <option value="Demande de renseignement">Demande de renseignement</option>
                            <option value="Un soucis technique">Un soucis technique</option>
                            <option value="Autres questions">Autres questions</option>
                        </select>
                    </div>

                    <div class="form-group col-lg-12">
                            <label for="message">Message</label>
                            <textarea id="messag" name="message" class="form-control" placeholder="Message (400 caractères maximum)" rows="4" required="required"></textarea>
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col text-center">
                        <input type="submit" id="submit" class="btn btn-success btn-send" value="envoyer">
                    </div>
                </div>
                <!-- Fin du formulaire -->
                <span id="response"></span>
            </form>

            <!-- Affichage messages d'erreurs / succès d'envoi du formulaire -->		
            <div class="messages"></div>	
            <div id="upload-progress"><div class="progress-bar"></div></div> 
            <!-- Progress bar added -->

        </section>

    </main>	




       <!-- SCRIPTS BOOTSTRAP -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.3.1.js"></script>

    <!-- script verification -->
    <script src="assets/js/error.js"></script>
    <script src="assets/js/infobulle.js"></script>


</body>
</html>






