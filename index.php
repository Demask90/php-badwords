<?php
    # Creare una variabile con un paragrafo di testo a vostra scelta.
    $paragraph = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius praesentium qui, repellat ipsum facilis vitae in, quibusdam at similique odio, consectetur officia dignissimos corrupti. Minus dolor dolorem tenetur nihil eum.';
    $lenghtParagraph = strlen($paragraph);

    # Definisco badword  
    // $badword = 'rit';
    $badword = $_GET['badword'];

    # Creo variabile che ritorna la variabile p sostituendo però la badword con '***'
    $newParagraph = str_replace($badword, '***', $paragraph);
    $lenghtNewParagraph = strlen($newParagraph)
?>

<!-- Stampare a schermo il paragrafo e la sua lunghezza. -->
<div>
    <h2 style="color: red">Testo originale:</h2>
    <h2><?php echo $paragraph ?></h2>
    <h3>Lunghezza paragrafo: <?php echo $lenghtParagraph ?> caratteri</h3>
    <hr>
    <h1>Badword:</h1>
    
    <form>
    <input type="text" name="badword">
    <button type="submit">invia</button>
    </form>
    
    <h2 style="color: red">Risultato:</h2>
    <!-- Stampo il nuovo paragrafo censurato e la sua lunghezza -->
    <h2><?php echo $newParagraph ?></h2>
    <h3>Lunghezza nuovo paragrafo: <?php echo $lenghtNewParagraph ?> caratteri</h3>
</div>
