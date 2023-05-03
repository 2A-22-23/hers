<?php 
    include  'C:/xampp/htdocs/projetweb/config.php';
    include  'C:/xampp/htdocs/projetweb/Model/eventM.php';

    class eventC {


        function afficherevent() {
            $sql = "SELECT * FROM evenement ";
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute();

                 $liste = $query->fetchAll();
                return $liste;
            } catch(Exception $e){
				$e->getMessage();
			}
        }


       /*  function ajouterevent($evenement){
                            
            $id_event=$evenement->getid_event();
            $nom_event=$evenement->getnom_event();
            $description=$evenement->getdescription();
    try {
        $sql = "INSERT INTO evenement  (id_event,nom_event,description,)
        VALUES('$id_event','$nom_event','$description')";

        $db = config::getConnexion();
            $query = $db->prepare($sql);
            $query->execute();
        } catch(Exception $e){
            $e->getMessage();
        }
    }
    */
    function ajouterevent($evenement){
                            
        $id_event=$evenement->getid_event();
        $nom_event=$evenement->getnom_event();
        $description=$evenement->getdescription();
        
try {
    $sql = "INSERT INTO evenement (id_event,nom_event,description)
    VALUES('$id_event','$nom_event','$description')";

    $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->execute();
    } catch(Exception $e){
        $e->getMessage();
    }
}
    

    function supprimerevent($id_event){
        $db = config::getConnexion();
        $sql = "DELETE FROM evenement where id_event=:id_event";

        try {
            $query = $db->prepare($sql);
            $query->execute(['id_event'=>$id_event]);
        }catch(Exception $e){
            $e->getMessage();
        }
    }

    function modifierevent($event,$id_event){
            
           
        $nom_event=$event->getnom_event();
        $description=$event->getdescription();
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
            "UPDATE evenement SET
             nom_event = '$nom_event',  description= '$description'
            WHERE id_event = '$id_event'");
            $query->execute();
            echo"succ";
        } catch (PDOException $e) {
            $e->getMessage();

        }
    }
    function affichermodif($ref) {
        $sql = "SELECT * FROM evenement where id_event=:ref";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(['ref'=>$ref]);

             $liste = $query->fetchAll();
            return $liste;
        } catch(Exception $e){
            $e->getMessage();
        }
    }
    public function trievent(){
        $pdo = config::getConnexion();
        try {
        $query = $pdo->prepare(
            "SELECT * FROM evenement ORDER BY id_event asc"
        );
        $query->execute();
        $liste = $query->fetchAll();
    
        return $liste;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
  
/* 
    function calculate_stats($event_table) {
        $sql = "SELECT MIN(description) AS min_description, MAX(description) AS max_description, AVG(description) AS avg_description, SUM(description) AS total_description FROM $event_table";
        return $sql;
    }*/
    }       