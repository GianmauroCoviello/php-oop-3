<?php
    //richiamiamo solo una volta i file delle classi all'interno dell'index
    require_once __DIR__.'/models/SystemComunication.php';
    require_once __DIR__.'/models/Mail.php';
    require_once __DIR__.'/models/SMS.php';


    // richiamiamo la classe tramite il costruttore
    $comunicate= new SystemComunication('marco', 'Giulio','auguri di buon compleanno', 'Tanti auguri Giulio');
    

    // stampiamo a schermo le funzioni getter

    echo 'Mittente: '.$comunicate->getMittente().'</br>';
    echo 'Destinatario: '.$comunicate->getDestinatario().'</br>';
    echo 'Messaggio: '. $comunicate->getMessaggio().'</br>';
    echo 'Contenuto: '.$comunicate->getContenuto().'</br>';

    echo '<hr/>';


    $mail = new Mail('Marco','Giulio', 'Text', ' auguri di buon compleanno', 'file_text', true);

    echo 'Mittente: '.$mail->getMittente().'</br>';
    echo 'Destinatario: '.$mail->getDestinatario().'</br>';
    echo 'Tipo di Messaggio: '. $mail->getMessaggio().'</br>';
    echo 'Contenuto: '.$mail->getContenuto().'</br>';
    if($mail->getNotifica()){
        echo 'messaggio inoltrato corretamente <br/>';
    }else {
        echo 'messaggio non inviato ';
    };


    // inserimento metodi della classe
    echo 'Controllo stato: ',$mail->controllMessage().'</br>';
    echo 'Stato della mail: ',$mail->sendMessage();

    echo '<hr/>';
    
    $SMS = new SMS('Marco','Antonio', 'Text', ' auguri di buon compleanno', false, true);

    echo 'Mittente: '.$SMS->getMittente().'</br>';
    echo 'Destinatario: '.$SMS->getDestinatario().'</br>';
    echo 'Tipo di Messaggio: '. $SMS->getMessaggio().'</br>';
    echo 'Contenuto: '.$SMS->getContenuto().'</br>';
    // echo 'Contenuto: '.$SMS->getSongNotification().'</br>';
    

    // 
    if($SMS->getColorLed()){
        echo 'Colore LED: VERDE <br/>';
    }else {
        echo 'Colore LED: ROSSO <br/>';
    };

    if($SMS->getSongNotification()){
        echo 'Suono Notifica: DRIIIIIIIIIIIIIN!!! <br/>';
    }else {
        echo 'Messaggio non inviato';
    };






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