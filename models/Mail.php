<?php


    class Mail extends SystemComunication{

        public $file_allegati;
        public $notifica;


        public function __construct(String $mittente, String $destinatario, String $messaggio, String $contenuto, String $file_allegati, Bool $notifica) {
            // richiamiamo il construct della classe 'padre'
            parent::__construct($mittente, $destinatario, $messaggio,$contenuto);

            $this->file_allegati = $file_allegati;
            $this->notifica = $notifica;
            
        }

        //inseriamo le funzioni getter e setter
        public function getFileAllegati(){
            return $this->file_allegati;
        }

        public function setMittente($file_allegati){
            $this->file_allegati= $file_allegati;
        }
        

        public function getNotifica(){
            return $this->notifica;
        }
        public function setDestinatario($notifica){
            $this->notifica = $notifica;
        }


        // inseriamo un metodo
        public function controllMessage(){
            return 'email inoltrata';
        }
        //  polimorfismo su invio del messaggio del metodo invio() in SystemComunication
        public function  sendMessage(){
            return 'mail inviata';
        }



        
    }



?>