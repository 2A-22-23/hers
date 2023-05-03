<?php 
class participant {
    private $idparticipants;
    private $nom_event;
    private $nomparticipants;
  

   function __construct($idparticipants,$nom_event,$nomparticipants){
    $this->idparticipants=$idparticipants;

        $this->nom_event=$nom_event;
        $this->nomparticipants=$nomparticipants;
        

    }

    //GE0T000000000000TERS
    function getidparticipants(){
        return $this->idparticipants;
    }
    function getnom_event(){
        return $this->nom_event;
    }
    function getnomparticipants(){
        return $this->nomparticipants;
    }
   
  
    
  

    //SETTERS
    function setidparticipants(int $idparticipants){
        $this->idparticipants=$idparticipants;
    }

    function setnom_event(string $nom_event){
        $this->nom_event=$nom_event;
    }
    function setnomparticipants(string $nomparticipants){
        $this->nomparticipants=$nomparticipants;
    }
   
   
   
  
}
?>