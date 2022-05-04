<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola
 da censurare. -->





<?php

$string='Ai miei tempi si poteva dire bobba, bobba e anche bobba. Adesso non si può più dire niente, e che bobba!';

$parametro=$_GET['nome'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1><?php echo $string=str_replace("$parametro","***",$string); ?> </h1>

<h4>La lunghezza del paragrafo è <?php echo strlen($string); ?> caratteri</h4>
    
</body>
</html>

