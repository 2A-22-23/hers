<?php 
class event {
    private $id_event;
    private $nom_event;
    private $description;
  

    function __construct($id_event,$nom_event,$description){
        $this->id_event=$id_event;
        $this->nom_event=$nom_event;
        $this->description=$description;
        

    }

    //GE0T000000000000TERS
    function getid_event(){
        return $this->id_event;
    }
    function getnom_event(){
        return $this->nom_event;
    }
   
    function getdescription(){
        return $this->description;
    }
    
  

    //SETTERS
    function setid_event(int $id_event){
        $this->id_event=$id_event;
    }
    function setnom_event(string $nom_event){
        $this->nom_event=$nom_event;
    }
   
   function setdescription(string $description){
       $this->description=$description;
   }
    
  
}
?>