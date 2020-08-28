<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>

     <link rel="stylesheet" href="assets/css/style.css" />
    <script src="assets/js/error.js"></script>

</head>

<body>

    <main>
<!-- DEBUT FORMULAIRE CONTACT -->

        <form id="my_form" role="form" method="post" action="">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="name"></label>
                            <input id="name" name="name" type="text" class="form-control" placeholder="Nom Prénom" required="required">
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="gender">genre
                            <input type="radio" name="gender" value="female" required="required"><label for="gender" class="sexe">F</label>
                            <input type="radio" name="gender"  value="male" required="required"><label for="gender" class="sexe">M</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="mail"></label>
                        <input id="mail" name="mail" type="mail" class="form-control" placeholder="E-mail" required="required">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="land"></label>
                        <input id="land" type="texte" name="land" class="form-control" placeholder="Pays" required="required">
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-12 form-group">
                        <label for="subject">sujet :
                            <select name="subject" required="required">
                                <option value="choix1">Demande de renseignement</option>
                                <option value="choix2">Un soucis technique</option>
                                <option value="choix3">Autres questions</option>
                            </select>
                    </div>
                    <div class="col-md-12 form-group">
                            <label for="messag"></label>
                            <textarea id="messag" name="messag" class="form-control" placeholder="Message (400 caractères maximum)" rows="4" required="required"></textarea>
                    </div>
                </div>

                    <div class="col-md-12 form-group">
                        <br> <input type="submit" id="btnContactUs" class="btn btn-success btn-send" value="Envoyer le message">
                    </div>
                </div>
                <span id="response"></span>
            </form>
	<!-- Affichage messages d'erreurs / succès d'envoi du formulaire -->		
            <div class="messages"></div>	
            <div id="upload-progress"><div class="progress-bar"></div></div> <!-- Progress bar added -->

            </main>	




       <!-- SCRIPTS BOOTSTRAP
       <script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.3.1.js"></script> -->
</body>
</html>

<?php

var_dump($_POST);


if(isset($_POST['mail']) && isset( $_POST['submit'] )) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "test.auroreBecode@gmail.com";
    $email_subject = "demande d'utilisateur";
 
    function died($error) {
        // your error code can go here
        echo 
"Nous sommes désolés, mais des erreurs ont été détectées dans le" .
" formulaire que vous avez envoyé. ";
        echo "Ces erreurs apparaissent ci-dessous.<br /><br />";
        echo $error."<br /><br />";
        echo "Merci de corriger ces erreurs.<br /><br />";
        die();
    }
 
 
//     // si la validation des données attendues existe
//      if(!isset($_POST['name']) ||
//         !isset($_POST['gender']) ||
//         !isset($_POST['mail']) ||
//         !isset($_POST['land']) ||
//         !isset($_POST['subject']) ||
//         !isset($_POST['messag'])) {
//         died(
// 'Nous sommes désolés, mais le formulaire que vous avez soumis semble poser' .
// ' problème.');
//     }

if (isset($_POST['name']) && isset($_POST['gender']) && isset($_POST['gender']) && isset($_POST['mail']) && isset($_POST['land']) && isset($_POST['subject']) && isset($_POST['messag'])){
    $name = $_POST['name']; 
    $gender = $_POST['gender']; 
    $mail = $_POST['mail']; 
    $land = $_POST['land']; 
    $subject = $_POST['subject']; 
    $messag = $_POST['messag']; 

} else{

    $name ='';
    $gender='';
    $mail='';
    $land='';
    $subject='';
    $message='';
}
  
 
$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

 
    if(!preg_match($email_exp,$mail)) {
      $error_message .= 
'L\'adresse e-mail que vous avez entrée ne semble pas être valide.<br />';
    }
   
      // Prend les caractères alphanumériques + le point et le tiret 
      $string_exp = "/^[A-Za-z0-9 .'-]+$/";
   
    if(!preg_match($string_exp,$name)) {
      $error_message .= 
     'Donnez-nous votre identité secrète ;)<br />';
    }
   
    if(!preg_match($string_exp,$land)){
        $error_message .=
        'Citoyen du monde certe, mais vous habitez dans quel pays ? <br />';
    }

    if(!preg_match($string_exp,$subject)){
        $error_message .=
        'Il faut choisir dans les trois choix, hop hop on recommence ! <br />';
    }
   
    if(strlen($messag) < 2) {
      $error_message .= 
'Si vous nous écrivez pas un message, nous ne pourrons pas comprendre la raison de votre prise de contacte. Vous pouvez écrire ce que vous voulez, sauf votre liste de course.<br />';
    }
   
    if(strlen($error_message) > 0) {
      died($error_message);
    }
 
    $email_message = "Détail.\n\n";
    $email_message .= "Nom Prénom: ".$name."\n";
    $email_message .= "Email: ".$mail."\n";
    $email_message .= "Pays: ".$lang."\n";
    $email_message .= "Objet: ".$subject."\n";
    $email_message .="Message: ".$messag."\n";
 
    // create email headers
    $headers = 'From: '.$email_to."\r\n".
    'Reply-To: '.$mail."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    if(mail($mail, $email_subject, $email_message, $headers)){
        echo "mail envoyer avec succès.";
    } else {
        echo "mail pas envoyer";
    }


//   $dest = "test.aurorebecode@gmail.com";
//   $sujet = "Email de test";
//   $corp = "Salut ceci est un email de test envoyer par un script PHP";
//   $headers = "From: limage.aurore@gmail.com";
//   if (mail($dest, $sujet, $corp, $headers)) {
//     echo "Email envoyé avec succès à $dest ...";
//   } else {
//     echo "Échec de l'envoi de l'email...";

//   }
    
?>

<?php 
}

