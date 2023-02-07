<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione</title>
</head>
<body style="text-align:center;">
<header class="bg-light p-1" style="text-align:center;">
        <h1 class="display-6" style="text-align:center;">Registrati</h1>
    </header>
    <main class="container">
        <section class="row">

        <form action="register-user.php" method="post">
            <div class="login__div-1">
                <p class="register__name">
                <label for="first_name" class="form-label">Nome: </label>
                    <input type="text" name="first_name">
                </p>
                <p class="register__lastname">
                    <label for="last_name" class="form-label">Cognome: </label>
                    <input type="text" name="last_name">
                </p>
                <p class="register__birthday">
                    <label for="birthday" class="form-label">Data di nascita: </label>
                    <input type="text" name="birthday">
                </p>
                <p class="register__birthplace">
                    <label for="birth_place" class="form-label">Luogo di nascita: </label>
                    <input type="text" name="birth_place">
                </p>
                <p class="register__gender">
                    <label for="gender" class="form-label">Sesso: </label>
                    <select class="form-control" name="gender" id="gender">
                         <option>F</option>
                         <option>M</option>
                         <option>Altro</option>
                    </select>
                </p>
                <br>
                <p class="register__username">
                    <label for="username" class="form-label">Nome utente: </label>
                    <input type="text" name="username">
                </p>
                <p class="register__password">
                    <label for="password" class="form-label">Password: </label>
                    <input type="password" value="segretissimo" name="password">
                </p>
        </div>

            <input type="submit" name="submit" value="Submit">
            <input type="reset" name="reset" value="Reset">
    </form>

    </section> 
</main>
</body>
</html>