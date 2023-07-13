<?php
    
    // inseriamo la classe 
    class SystemComunication {
        private $mittente;
        private $destinatario;
        private $messaggio;
        private $contenuto;


        public function __construct(String $mittente, String $destinatario, String $messaggio, String $contenuto) {
            $this->mittente = $mittente;
            $this->destinatario = $destinatario;
            $this->messaggio = $messaggio;
            $this->contenuto = $contenuto;

        }

        // inseriamo le funzioni getter e setter
        public function getMittente(){
            return $this->mittente;
        }

        public function setMittente($mittente){
            $this->mittente = $mittente;
        }
        

        public function getDestinatario(){
            return $this->destinatario;
        }
        public function setDestinatario($destinatario){
            $this->destinatario = $destinatario;
        }



        public function getMessaggio(){
            return $this->messaggio;
        }
        public function setMessaggio($messaggio){
            $this->messaggio = $messaggio;
        }



        public function getContenuto(){
            return $this->contenuto;
        }
        public function setContenuto($contenuto){
            $this->contenuto = $contenuto;
        }
    };

?>