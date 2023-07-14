<?php
    require_once __DIR__.'/models/SystemComunication.php';
    require_once __DIR__.'/models/Mail.php';


    // richiamiamo la classe tramite il costruttore
    $comunicate= new SystemComunication('marco', 'Giulio','auguri di buon compleanno', 'Tanti auguri Giulio');
    

    // stampiaimo a schermo le funzioni getter

    echo 'Mittente: '.$comunicate->getMittente().'</br>';
    echo 'Destinatario: '.$comunicate->getDestinatario().'</br>';
    echo 'Messaggio: '. $comunicate->getMessaggio().'</br>';
    echo 'Contenuto: '.$comunicate->getContenuto().'</br>';

    echo '<hr/>';


    $mail = new Mail('Marco','Giulio', 'Text', ' auguri di buon compleanno', 'file_text', true);

    echo 'Mittente: '.$mail->getMittente().'</br>';
    echo 'Destinatario: '.$mail->getDestinatario().'</br>';
    echo 'tipo di Messaggio: '. $mail->getMessaggio().'</br>';
    echo 'Contenuto: '.$mail->getContenuto().'</br>';
    if($mail->getNotifica()){
        echo 'messaggio inoltrato corretamente <br/>';
    }else {
        echo 'messaggio non inviato ';
    };


    // inserimento metodi della classe
    echo 'controllo stato: ',$mail->controllMessage().'</br>';
    echo 'stato della mail: ',$mail->sendMessage();

    echo '<hr/>';
    
    





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