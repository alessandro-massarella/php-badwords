<!-- Esercizio 1 - PHP Badwords
repo: php-badwords
Creare una variabile con un paragrafo di testo.
Recuperare dalla query string un parametro badword che contiene una parola definita dall'utente
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *. -->

<?php

$testo = "lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia ipsam dicta odio pariatur porro, dolore ducimus vel. Atque animi mollitia, earum numquam consectetur, aliquam repellendus voluptatibus recusandae est magnam dolore";

$bad_word = $_GET["bad_word"];

// var_dump($bad_word);

// var_dump($testo);

// trovo la bad word e la sostituisco con ***
$new_testo = str_replace($bad_word, "***", $testo);
// var_dump($new_testo);

// lunghezza del paragrafo
$long_par = strlen($new_testo);
// var_dump($long_par);



?>

<!-- stampo in un paragrafo il contenuto della variabile testo -->
<p> TESTO ORIGINALE:<?php echo $testo ?> </p>
<p> TESTO CENSURATO:<?php echo $new_testo ?> </p>

<p>Lunghezza paragrafo: <?php echo $long_par ?> parole</p>
