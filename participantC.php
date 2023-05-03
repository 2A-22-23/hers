<?php
   include  'C:/xampp/htdocs/projetweb/config.php';
   include  'C:/xampp/htdocs/projetweb/Model/participantM.php';
class participantC{
    function afficherparticipant() {
        $sql = "SELECT * FROM participants ";
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
  
function ajouterparticipant($participant){
                            
    $idparticipants=$participant->getidparticipants();
    $nom_event=$participant->getnom_event();
    $nomparticipants=$participant->getnomparticipants();

    
try {
$sql = "INSERT INTO participants (idparticipants,nom_event,nomparticipants)
VALUES('$idparticipants','$nom_event','$nomparticipants')";

$db = config::getConnexion();
    $query = $db->prepare($sql);
    $query->execute();
} catch(Exception $e){
    $e->getMessage();
}
}


function supprimerparticipant($idparticipants){
    $db = config::getConnexion();
    $sql = "DELETE FROM participants where idparticipants=:idparticipants";

    try {
        $query = $db->prepare($sql);
        $query->execute(['idparticipants'=>$idparticipants]);
    }catch(Exception $e){
        $e->getMessage();
    }
}

public function modifierparticipant($participant,$idparticipants)
{
    $sql="UPDATE participants SET nom_event=:nom_event ,nomparticipants=:nomparticipants  WHERE idparticipants=:idparticipants";
    $db = config::getConnexion();
    $query=$db->prepare($sql);

    $query->bindValue(':idparticipants',$idparticipants);
    $query->bindValue(':nom_event',$participant->getnom_event());
    $query->bindValue(':nomparticipants',$participant->getnomparticipants());

    $query->execute();
}

function affichermodif($idparticipants) {
    $sql = "SELECT * FROM participants where idparticipants=:idparticipants";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->execute(['idparticipants'=>$idparticipants]);

         $liste = $query->fetchAll();
        return $liste;
    } catch(Exception $e){
        $e->getMessage();
    }
}
public function triparticipant(){
    $pdo = config::getConnexion();
    try {
    $query = $pdo->prepare(
        "SELECT * FROM participants ORDER BY idparticipants asc"
    );
    $query->execute();
    $liste = $query->fetchAll();

    return $liste;
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

}
?>