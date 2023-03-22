<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $nome= "Mario";
        $eta = 50;
        $passatempi = array("Tennis","Cinema","no sport");

        /* dichiarazione della funzione */
        function saluta($nome){
            return "Ciao io sono $nome, come va?"; //double quote
            //javascript: return "Ciao io sono" + nome + ", come va?"
            //t3emplate literal: `Ciao io sono ${nome}, come va?"`
        }
        
        echo "<h1>scrivo un contenuto</h1>";
        // chiamo la funzione
        // . è incatenatore di stringhe su php
        echo saluta("Gianni");
        echo "<p>".saluta ($nome)."</p>";
        echo "<div>".saluta ($nome)."</div>";

       /*  echo $passatempi;
       genera un errore perche echo può visualizzare solo stringhe e number */

        //passatempi.length = count($array)
        echo "<ul>";
        for ($i=0; $i < count($passatempi); $i++) { 
            echo "<li>$passatempi[$i]</li>"; // $passatempi[],$passatempi[1]
        }
        echo "</ul>";

        ?>

</body>
</html>