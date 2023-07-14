<?php
    class SMS extends SystemComunication{

        public $ColorLed;
        public $SongNotification;

        public function __construct(String $mittente, String $destinatario, String $messaggio, String $contenuto, Bool $ColorLed, Bool $SongNotification) {
            // richiamiamo il construct della classe 'padre'
            parent::__construct($mittente, $destinatario, $messaggio,$contenuto);

            $this->ColorLed = $ColorLed;
            $this->SongNotification = $SongNotification;
            
        }

        // polimorfismo invio()
        public function getColorLed(){
            return $this-> ColorLed;
        }
        public function getSongNotification(){
            return $this->SongNotification;
        }

        
        public function invio(){
            return 'messaggio inviato correttamente';
        }


    }


?>