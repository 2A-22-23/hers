<?php
require_once '../../controller/userc.php';
$id=$_GET["id"];
$userc=new Userc();
$pub=$userc->supprimeruser($id);
header("Location: afficheruser.php");
?>