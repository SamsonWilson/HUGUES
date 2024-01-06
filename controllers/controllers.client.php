<?php
require_once "models/client.class.php";

class clientController{
    private $clientManager;



    public function __construct(){
       
        $this->clientManager = new livremanager;
        $this->clientManager->chargementLivre();
    }

    public function AffficherLivres(){
        $livres= $this->clientManager->getlivre();
        require "views/client/client.view.php";
    }
}



?>