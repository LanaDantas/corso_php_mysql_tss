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

           </div>
        <div class="col-sm-4">
            <form class="mt-1 mt-md-5" action="log-in-response.php" method="get">
                <div class="mb-3">
                     <label for="email" class="form-label">email</label>
                     <input type="email" class="form-control" name = "email" id="email">
                </div> 
                <div class="mb-3">
                     <label for="password" class="form-label">password</label>
                     <input type="password" id="password" name = "password" class="form-control">
                </div>

                <button class="btn btn-primary btn-sm"  type="submit"> Accedi </button>
            </form>
        
             
        
        </div>

            <div class="col-sm-4">
            </div>
       </section>
       
       

    </main>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossOrigin="anonymous"></script>
  </body>
</html>


