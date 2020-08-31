<?php
header( 'content-type: text/html; charset=utf-8' );
$object = "We have receive a request from you";
if (isset($_POST['mail']) AND isset($_POST['name']) AND isset($_POST['gender'])
AND isset($_POST['land'])AND $_POST['subject']){
// declaration variable
$corp;
$mail = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
$name = utf8_decode(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
$reason = $_POST['subject'];
$gender = $_POST['gender'];
$land = $_POST['land'];
$object = "We have receive a request from you";

// modif variable avec condition
    if($gender==="Man"){
        $gender = "Sir";
      }
    else {
        $gender="Madam";
      }
    if($reason =="other"){
      $reason = filter_var($_POST['subjectOther'], FILTER_SANITIZE_STRING);
    }
    if ($_POST['message']==""){
      $corp = "Hello $gender, $name this email is send to you because we have receive an request from you about $reason
      ";
    }
    else if (isset($_POST['message'])){
      $txt =  utf8_decode(filter_var($_POST['message'], FILTER_SANITIZE_STRING));
      $corp = "Hello $gender, $name this email is send to you because we have receive an request from you about $reason
      Below, you can find the message you send :
      '$txt'";
    }
      // envoie mail
      if ( filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      $headers = "From: admin";
      if (mail($mail, $object, $corp, $headers)) {
    
      } else {
        echo "Échec de l'envoi de l'email...";
      }
    };
    
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Confirmation</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header id="header">
            <img  class="logo" src="img/hackers-poulette-logo.png" alt="Website's logo">
        </header>
     <section class="col-10 mx-auto mb-3 sectionForm text-center">
       <h1 class=" confirmation mt-3">Confirmation :</h1>
       <p class="font-weight-bold">Your message has been successfully send. </p>
       <p class="font-weight-bold">You have receive an email at <?php echo $mail ?> with all details of your message.</p>
       <p class="font-weight-bold">To return on the page contact click on the button below</p>
       <a href="../../index.php"><button type="button" class="btn btn-info mb-3 buttonSend">Contact</button></a>
    </section>
<script src="assets/js/script.js">
</script>
    </body>
</html>