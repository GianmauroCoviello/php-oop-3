<?php
    require_once __DIR__.'/models/SystemComunication.php';
    require_once __DIR__.'/models/Mail.php';


    // richiamiamo la classe tramite il costruttore
    $comunicate= new SystemComunication('marco', 'Giulio','augurio di compleanno', 'Tanti auguri Giulio');
    

    // stampiaimo a schermo le funzioni getter

    echo 'Mittente: '.$comunicate->getMittente().'</br>';
    echo 'Destinatario: '.$comunicate->getDestinatario().'</br>';
    echo 'Messaggio: '. $comunicate->getMessaggio().'</br>';
    echo 'Contenuto: '.$comunicate->getContenuto().'</br>';


    $mail = new Mail('')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>