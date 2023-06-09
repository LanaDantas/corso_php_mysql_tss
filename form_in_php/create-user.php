<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "./class/validator/Validable.php";
require "./class/validator/ValidateRequired.php";


 print_r($_SERVER['REQUEST_METHOD']);
if($_SERVER['REQUEST_METHOD'] ==='POST'){
  echo "dati inviati";

  $validator_name = new ValidateRequired();
  $validatedName = $validator_name->isValid($_POST['first_name']);
  $isValidNameClass = $validator_name->isValid($_POST['first_name']) ? '' : 'is-invalid';

  $validator_surname = new ValidateRequired();
  $validatedSurname = $validator_surname->isValid($_POST['last_name']);
  $isValidLastNameClass = $validator_surname->isValid($_POST['last_name']) ? '' : 'is-invalid';

  $validator_date = new ValidateRequired();
  $validatedDate = $validator_date->isValid($_POST['birthday']);
  $isValidDateClass = $validator_date->isValid($_POST['birthday']) ? '' : 'is-invalid';

  $validator_birth_place = new ValidateRequired();
  $validatedBirthPlace = $validator_birth_place->isValid($_POST['birth_place']);
  $isValidBirthPlaceClass = $validator_birth_place->isValid($_POST['birth_place']) ? '' : 'is-invalid';

  $validator_gender = new ValidateRequired();
  $gender = !isset($_POST['gender']) ? '' : $_POST['gender'];
  $validatedGender = $validator_gender->isValid($gender);
  //$isValidGenderClass = $validator_gender->isValid($_POST['gender']) ? '' : 'is-invalid';

  $validator_username = new ValidateRequired();
  $validatedUsername = $validator_username->isValid($_POST['username']);
  $isValidUsernameClass = $validator_username->isValid($_POST['username']) ? '' : 'is-invalid';

  $validator_password = new ValidateRequired();
  $validatedPassword = $validator_password->isValid($_POST['password']);
  $isValidPasswordClass = $validator_password->isValid($_POST['password']) ? '' : 'is-invalid';

  
/* Questo script viene eseguito quando visualizzo per la prima volta il form di registrazione */
} if($_SERVER['REQUEST_METHOD'] === 'GET') {
  $isValidNameClass = '';
  $isValidLastNameClass = '';
  $isValidBirthplaceClass = '';
  $validatedGender = '';
  $isValidUsernameClass = '';
  $isValidPasswordClass = '';

}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <header class="bg-light p-1">
        <h1 class="display-6">Applicazione demo</h1>
    </header>
    <main class="container">

       <section class="row">
        <div class="col-sm-4">

                    </div>
        <div class="col-sm-4">
            <form class="mt-1 mt-md-5" action="create-user.php" method="post">
                <div class="mb-3">
                     <label for="first_name" class="form-label">Nome</label>
                     <input type="first_name" class="form-control <?php echo $isValidNameClass ?> " name="first_name"  id="first_name">

                    <?php
                      if(isset($validatedName) && !$validatedName){
                       ?> 
                       <div class="invalid-feedback">Il nome è obbligatorio</div>
                    <?php } ?>

                </div> 

                <div class="mb-3">
                     <label for="last_name" class="form-label">Cognome</label>
                     <input type="last_name" class="form-control <?php echo $ $isValidLastNameClass ?> " name="last_name"  id="last_name">
                     
                    <?php
                        if (isset($validatedSurname) && !$validatedSurname) { ?>

                        <div class="invalid-feedback">Il cognome è obbligatorio</div>
                    <?php } ?>

                </div> 

                <div class="mb-3">
                     <label for="birthday" class="form-label">Data di nascita</label>
                     <input type=date class="form-control <?php echo $ $isValidDateClass ?>" name="birthday" id="birthday" min=09-08-2014>

                     <?php
                        if (isset($validatedDate) && !$validatedDate) { ?>

                       <div class="invalid-feedback">Data di nascita è obbligatorio</div>
                    <?php } ?>

                </div> 

                <div class="mb-3">
                     <label for="birth_place" class="form-label">Luogo di nascita</label>
                     <input type="birth_place" class="form-control" name="birth_place"  id="birth_place">
                       <div class="invalid-feedback">Luogo di nascita è obbligatorio</div>
                    

                </div> 

                <div class="mb-3">
                  <span>Genere</span>
                  <div class="form-check">
                    <input class="form-check-input <?php echo !$validatedGender ? 'is-invalid':'' ?>" type="radio" name="gender" id="gender_M">
                    <label class="form-check-label" for="gender_M">
                      Maschile
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input <?php echo !$validatedGender ? 'is-invalid':'' ?>" type="radio" name="gender" id="gender_F">
                    <label class="form-check-label" for="gender_F">
                      Femminile
                    </label>

                    <?php if (!$validatedGender) : ?>
                    <div class="invalid-feedback">Il genere è obbligatorio</div>

            </div>

                    <?php endif ?>
               
                </div>

                <div class="mb-3">
                     <label for="username" class="form-label">Nome utente</label>
                     <input type="username" class="form-control" name="username"  id="username">
                     <div class="invalid-feedback">errore</div>
                </div> 

                <div class="mb-3">
                     <label for="password" class="form-label">Password</label>
                     <input type="password" id="password" name="password" class="form-control">
                     <div class="invalid-feedback">errore</div>
                </div>
                <button class="btn btn-primary btn-sm"  type="submit"> Registrati </button>
             </form>
        
        
        </div>

        <div class="col-sm-4">
               </div>
       </section> 

    </main>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>
</html>
