<?php 
include 'C:/xampp/htdocs/projetweb/Controller/particpantC.php';

$participantC = new participantC();
    $participantC->supprimerparticipant( $_GET['deleteid']);
   

        header("Location:listparticipant.php");
   

    

?>