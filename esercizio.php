<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossOrigin="anonymous">
</head>

<body>
    <header class="bg-light p-1">
        <h1 class="display-6">Applicazione demo</h1>
    </header>
    <main class="container">

        <section class="row">
            <div class="col-sm-4">
                <form class="mt-1 mt-md-5" action="register-user.php" method="post">
                    <div>Nome: <input type="text" name="first-name"><br></div>
                    <div>Cognome: <input type="text" name="last-name"><br></div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Data di nascita</label>
                        <input type="date" class="form-control" name="birthday" id="birthday">
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Luogo di nascita</label>
                        <input type="text" class="" name="" id="">
                        <div>Sesso: <br></div>
                        <div class="mb-3">
                            <label for="genereM" class="form-check-label">M</label>
                            <input type="radio" class="form-check-input" value="M" name="gender" id="genderM">
                        </div>
                        <div class="mb-3">
                            <label for="genereF" class="form-check-label">F</label>
                            <input type="radio" class="form-check-input" value="F" name="gender" id="genderF">
                        </div>
                        <div class="col-sm-4">
                            <form class="mt-1 mt-md-5" action="login-response.php" method="post">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" id="password" name="password" class="form-control">
                                </div>
                                <button class="btn btn-primary btn-sm" type="submit"> Registrati </button>
                            </form>
                        </div>

                        <div class="col-sm-4">
                        </div>
        </section>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossOrigin="anonymous"></script>
</body>

</html>