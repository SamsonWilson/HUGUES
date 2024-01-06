<?php
require_once "model.class.php";
require_once "client.class.php";

 class clientManager extends model{

    
    private $clients;

    public function ajoutclient($client){
        $this->clients[]= $client;
    }

    public function getclient(){
        return $this->clients;
    }

     public function chargementclient(){
        // $req->execute();
       // $meslivres=$req->fetchall(PDO::FETCH_ASSOC);
       // $req->closeCursor();


        //foreach ($meslivres as $livre){
          //  $l = new livre($livre["id"],$livre["titre"],$livre["nbPage"],$livre["image"]);
          //  $this->ajoutLivre($l);
            # code...
       // }
     }


    }

?>