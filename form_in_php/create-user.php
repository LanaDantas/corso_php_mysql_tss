<?php
require "../config.php";
require "./class/Registry/it/Regione.php";
require "./class/Registry/it/Provincia.php";

//error_reporting(E_ALL); li vede tutti
//error_reporting(0); li spegne tutti
require "./class/validator/Validable.php";
require "./class/validator/ValidateRequired.php";
require "./class/validator/ValidateDate.php";
require "./class/validator/ValidateMail.php";

// print_r($_POST);

$first_name = new ValidateRequired('', 'Il nome è obblicatorio');
$last_name = new ValidateRequired('', 'Il cognome è obbligatorio');
$birthday = new ValidateDate('', 'Campo obbligatorio');
$birthplace = new ValidateRequired('', 'Campo obbligatorio');
$gender = new ValidateRequired('', 'Campo obbligatorio');
$username = new ValidateMail('', 'Campo obbligatorio');



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $first_name->isValid($_POST['first_name']);
  $last_name->isValid($_POST['last_name']);
  $birthday->isValid($_POST['birthday']);
  $birthplace->isValid($_POST['birth_place']);
  $gender->isValid($_POST['gender']);
  $username->isValid($_POST['username']);
}

/** questo script viene eseguito quanod visualizzo per la prima volta il form */
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
}



?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Esercitazione Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <header class="bg-light p-1">
    <h1 class="display-6">Applicazione demo</h1>
  </header>
  <main class="container">

    <section class="row">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-6">
        <form class="mt-1 mt-md-5" action="create-user.php" method="post">
          <div class="mb-3">
            <label for="first_name" class="form-label">nome</label>
            <input type="text" value="<?= $first_name->getValue() ?>" class="form-control <?php echo !$first_name->getValid() ? 'is-invalid' : '' ?>" name="first_name" id="first_name">
            <!-- mettere is-invalid -->
            <?php


            //GET isset($validatedName) prova a usare una variabile e se non esiste(false) non da warning
            //POST isset($validatedName) in questo caso da true, nel nostro caso
            if (!$first_name->getValid()) : ?>
              <div class="invalid-feedback">
                <?php echo $first_name->getMessage() ?>
              </div>
            <?php
            endif ?>

          </div>
          <div class="mb-3">
            <label for="last_name" class="form-label">cognome</label>
            <input type="text" value="<?= $last_name->getValue() ?>" class="form-control <?php echo !$last_name->getValid() ? 'is-invalid' : '' ?>" name="last_name" id="last_name">
            <?php
            if (!$last_name->getValid()) : ?>
              <div class="invalid-feedback">
                <?php echo $last_name->getMessage() ?>
              </div>
            <?php
            endif ?>
          </div>
          <div class="mb-3">
            <label for="birthday" class="form-label">data di nascita</label>
            <input type="date" value="<?= $birthday->getValue() ?>" class="form-control <?php echo !$birthday->getValid() ? 'is-invalid' : '' ?>" name="birthday" id="birthday">
            <?php
            if (!$birthday->getValid()) : ?>
              <div class="invalid-feedback">
                <?php echo $birthday->getMessage() ?>
              </div>
            <?php
            endif ?>
          </div>

          <div class="mb-3">
            <div class="row">
            <div class="col">
              <label for="birth_city" class="form-label">Città di nascita</label>
              <input type="text" class="form-control" name="birth_city" id="birth_city">

            </div>

            <div class="col">

              <label for="birth_region" class="form-label">Regione di nascita</label>
              <select id="birth_region" class="birth_region form-select" name="birth_region">
                  <option value=""></option>
                    <?php foreach(Regione::all() as $regione) : ?>
                      <option value="<?= $regione->id ?>"><?= $regione->nome ?></option>
                    <?php endforeach; ?>
              </select>
            </div>

            <div class="col">
              <label for="birth_province" class="form-label">Provincia di nascita</label>
              <select id="birth_province" class="birth_province form-select" name="birth_province">
                <option value=""></option>
                    <?php foreach(Provincia::all() as $provincia) : ?>
                       <option value="<?= $provincia->sigla ?>"><?= $provincia->nome ?></option>
                    <?php endforeach; ?>
              </select>
              </div>
            </div>
          </div>


          <div class="mb-3">
            <span>Genere</span>
            <div class="form-check">

              <label class="form-check-label" for="gender_M">Maschile</label>
              <input class="form-check-input <?php echo !$gender->getValid() ? 'is-invalid' : '' ?>" type="radio" value="<?= $gender->getValue() ?>" name="gender" id="gender_M">
            </div>
            <div class="form-check">
              <label class="form-check-label" for="gender_F">Femminile</label>
              <input class="form-check-input <?php echo !$gender->getValid() ? 'is-invalid' : '' ?>" type="radio" value="<?= $gender->getValue() ?>" name="gender" id="gender_F">
              <?php
              if (!$gender->getValid()) : ?>
                <div class="invalid-feedback">
                  <?php echo $gender->getMessage() ?>
                </div>
            </div>
          <?php
              endif ?>

          </div>
          <div class="mb-3">
            <label for="username" class="form-label">nome utente</label>
            <input type="email" value="<?= $username->getValue() ?>" class="form-control <?php echo !$username->getValid() ? 'is-invalid' : '' ?>" name="username" id="username">

            <?php
            if (!$username->getValid()) { ?>
              <div class="invalid-feedback">
                <?php echo $username->getMessage() ?>
              </div>
            <?php
            }
            ?>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">password</label>
            <input type="text" id="password" name="password" class="form-control <?php echo $isValidPassword ?>">
            <?php
            if (isset($validatedPassword) && !$validatedPassword) { ?>
              <div class="invalid-feedback">
                la password è obbligatoria
              </div>
            <?php
            }
            ?>
          </div>

          <button class="btn btn-primary btn-sm" type="submit">Registrati</button>
        </form>
      </div>



      <div class="col-sm-3">

      </div>
    </section>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>