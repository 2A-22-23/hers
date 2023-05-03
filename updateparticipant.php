<?php

include 'C:/xampp/htdocs/projetweb/Controller/participantC.php';

$idparticipants=$_GET['updateid'];
$participantC = new participantC();
$liste=$participantC->affichermodif($idparticipants);
foreach ($liste as $row){
    

        $idparticipants=$row['idparticipants'];
        $nom_event=$row['nom_event'];
        $nomparticipants=$row['nomparticipants'];
}
	if(isset($_POST['submit']) )
	{
	$idparticipants=$_POST['updateid'];
	$nom_event=$_POST['nom_event'];
	$nomparticipants=$_POST['nomparticipants'];
    if (
        !empty($idparticipants) && 
        !empty($nom_event) &&
        !empty($nomparticipants) 
                ){  
        $participant = new participant($idparticipants,$nom_event,$nomparticipants);
        $participantC->modifierparticipant($participant,$idparticipants, $nom_event);

        header("Location:listparticipant.php");
    } else {
        $participantC = new participantC();
        $liste=$participantC->affichermodif($idparticipants);
        foreach ($liste as $row){
            $nom_event=$row['nom_event'];
            $idparticipants=$row['idparticipants'];
            $nomparticipants=$row['nomparticipants'];
        }
    }
    

    }     


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tache_participant</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Update participant</h3></div>
                                    <div class="card-body">
                                        <form method="POST" class="env">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div  class="form-group">
                                                        <label class="small mb-1" for="updateid">idparticipants</label>
                                                        <input class="form-control py-4" id="updateid" type="number" name="updateid" value="<?php echo $idparticipants ?>" />
                                                    </div>
                                                   
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="nom_event"> nom_event</label>
                                                        <input class="form-control py-4" id="nom_event" type="text"name="nom_event" value="<?php echo $nom_event ?>" placeholder="nom_event" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="nomparticipants">nomparticipants</label>
                                                        <input class="form-control py-4" id="nomparticipants" type="text" name="nomparticipants" value="<?php echo $nomparticipants ?>" maxlength="8" placeholder="Enter nomparticipants" />
                                                    </div>
                                                    <div class="col-md-6">
                                                   
                                                    
                                                </div>
</div>
                                               
                                            </div>
                                          
                                            <div class="form-group mt-4 mb-0">
                                                <!-- <a class="btn btn-primary btn-block" name="add">Create Account

                                                </a> -->
                                                <button type="submit" class="btn btn-primary btn-block" name="submit">Save</button>

                                                <p id="error"></p>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="listparticipant.php">Cancel</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
           
        </div>
        <script>
         let idparticipantInput=document.getElementById("idparticipant");
var numbers = /^[0-9]+$/; 

function idparticipantValidation() {
    
    if ( !idparticipantInput.value.match(numbers)) {
        idparticipantError2 = "Veuillez entrer un num de idparticipant valide";
        idparticipantValid2 = false;
        document.getElementById("idparticipantEr").innerHTML = idparticipantError2;
        return false;
    }
    document.getElementById("idparticipantEr").innerHTML =
        "<p style='color:green'> Numéro du idparticipant valide </p>";

    return true;
}

    var text = document.getElementById("text");
    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/; // C'est dans la description 

   
   

 

 document.forms["ajout"].addparticipantListener("submit", function (e) {
    var inputs = document.forms["ajout"];
    let ids = [
        "erreur",
        "idEr"
        "nameEr",
        "nomparticipantsEr",
       
        
    ];

   // ids.map((id) => (document.getElementById(id).innerHTML = "")); // reinitialiser l'affichage des erreurs

    let errors = false;

    //Traitement cas par cas
    if (!carteInput.value.match(numbers)) {
        errors = false;
        document.getElementById("idEr").innerHTML =
            "Veuillez entrer id valid ! (seulement des nombres)";
    } else {
        errors = true;
    }  

    if (errors === false) {
        e.preventDefault();
    } else {
        alert("formulaire envoyé");
    }

}); 



     </script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="./../js/scripts.js"></script>
       
    </body>
</html>
