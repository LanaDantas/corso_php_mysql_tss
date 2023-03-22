<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercitazione PHP</title>
</head>
<body>

    <?php
    //scrivere ina funzione array2ul che dato un array come argomento restituisce una stringa che return una stringa che rappresenta un elenco html

    /** return una stringa che rappresenta un elenco html (ul)*/
   /* String array2ul(Array $array) {
    }
    echo array2ul(array("rosso","verde"));*/
  
      $array2ul = array("Javascript","Java","HTML","PHP","SQL");
        
         function array2ul($lezioni) {
            $stampa = "<ul>";
              for ($i=0; $i < count($lezioni); $i++) { 
                $stampa .= "<li>$lezioni[$i]<li>";
             }
             $stampa .= "/<ul>";

             return $stampa;
         }

        echo array2ul($array2ul);
       
           /* function array2ul($lezioni) {
                foreach($lezioni as $stampa) {
                    echo "<li>$stampa<li>"; 
            }
        }

        "<ul>".array2ul($lezioni)."</ul>";*/
    ?>
    
</body>
</html>