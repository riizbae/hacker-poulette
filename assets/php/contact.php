<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Contact</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <body>
        <header id="header">
            <img  class="logo" src="assets/img/hackers-poulette-logo.png" alt="Website's logo">
            <h1 class="col-10 mx-auto">Contact Form</h1>
        </header>
        <div class="col-12 mb-3">
         <div id="error" class="labelOff">
          <h2 class="text-center">Error :</h2>
          <p class='text-center font-weight-bold'>We can't send the form to the server cause is incomplete.</p>
          <p class='text-center font-weight-bold'>Make sure you have complete all information of the form before sending.</p>
        </div>
        </div>
     <section class="col-10 mx-auto mb-3 sectionForm">
       
        <form id="form" method="post" class="needs-validation" novalidate>
            <div class="form-group row col-12 mt-3">
                <label for="lastnameInput" class="col-3">LastName :</label>
                <input type="text" class="form-control col-3 text-center " required name="lastname"id="lastnameInput" placeholder="Write here your lastname">
                <div class="invalid-feedback">Valeur manquante ou incorrect</div>
                <label for="firstnameInput" class="col-3 text-center">Firstname :</label>
                <input type="text" required class="form-control col-3 text-center" name="firstname" id="firstnameInput" placeholder="Write here your firstname">
                <div class="invalid-feedback">Valeur manquante ou incorrect</div>
              </div>
            <div class="form-group">
              <label for="emailInput">Email address :</label>
              <input type="email" required name="mail" class="form-control" id="emailInput" placeholder="name@example.com">
              <div class="invalid-feedback">Valeur manquante ou incorrect</div>
            </div>
            <div class="form-group">
              <label for="genderSelect">Gender :</label>
              <select class="form-control" name="gender" id="genderSelect" required>
                <option value="Choose">Choose a gender.</option>
                <option value="Man">Man</option>
                <option value="Woman">Woman</option>
              
              </select>
              <div class="invalid-feedback">Valeur manquante ou incorrect</div>
            </div>
            <div class="form-group">
              <label for="CountrySelect">Country</label>
              <select multiple class="form-control" id="CountrySelect" name="country" required>
                <option value="Belgium">Belgium</option>
                <option value="England">England</option>
                <option value="France">France</option>
                <option value="Germany">Germany</option>
                <option value="Spain">Spain</option>
              </select>
              <div class="invalid-feedback">Valeur manquante ou incorrect</div>
            </div>
            <fieldset id="subjectCheck" required>
            <legend>Choose the subject of your message :</legend>
            <div class="formCheck">
              <div class="custom-control custom-radio custom-control-inline ml-5 mt-4">
                  <input onclick="onclickRadio()" class="custom-control-input" type="radio" id="subject1" name="subject" value="problem">
                  <label class="custom-control-label" for="subject1">Problem with my ordered.</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline ml-3">
                  <input onclick="onclickRadio()" class="custom-control-input" type="radio" id="subject2" name="subject" value="question">
                  <label class="custom-control-label" for="subject2">Question about product.</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline ml-3">
                  <input class="custom-control-input" type="radio" id="subject3" name="subject" value="other" checked>
                  <label class="custom-control-label" for="subject3">Other</label>
              </div>   
            </div>
            </fieldset>  
            <div class="invalid-feedback">Valeur manquante ou incorrect</div>
          <label id="labelDefineOther" for="inputOtherText" class="labelOff">Define your subject here :</label>
          <input class="labelOff" name="subjectOther" type="text" id="inputOtherText">
            <!-- Text area -->
            <div class="form-group" required>
              <label for="message">Type your message here : </label>
              <textarea name="message" class="form-control" id="message" rows="3" required></textarea>
            </div>
            <div class="invalid-feedback">Valeur manquante ou incorrect</div>
            <button id="send" onclick="validateForm()" class="btn btn-info mb-3 buttonSend">Send</button>
          </form>
    </section>
<script src="assets/script.js">
</script>
    </body>
</html>