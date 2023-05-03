<?php 
include 'C:/xampp/htdocs/projetweb/Controller/eventC.php';
$eventC = new eventC();
    $eventC->supprimerevent( $_GET['deleteid']);
   

        header("Location: listevent.php");
   

    

?>
