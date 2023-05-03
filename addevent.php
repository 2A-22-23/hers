
<?php

include 'C:/xampp/htdocs/projetweb/Controller/eventC.php';
$err="";
$id_event="";
	$nom_event="";
	$description="";
	
	if(isset($_POST['submit']) )
	{
	$id_event=$_POST['id_event'];
	$nom_event=$_POST['nom_event'];
	$description=$_POST['description'];
        if (
            !empty($id_event) && 
                !empty($nom_event) &&
            !empty($description) 
                    ){
            $event = new event($id_event,$nom_event,$description);

                    $eventC = new eventC();
                
                    
                    

                        $eventC->ajouterevent($event);
                    

                            header("Location:listevent.php");
        }else
            $err="vous devez remplir tous les champs";     
          
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
        <title>Add</title>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">ajout event</h3></div>
                                    <div class="card-body">
                                        <form method="POST"  class="env">
                                            <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" for="inputid_event">id_event</label>
                                                            <input class="form-control py-4" id="id_event" type="number" name="id_event"  placeholder="Enter id_event" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" for="inputName">nom_event</label>
                                                            <input class="form-control py-4" id="nom_event" onkeyup="nameValidation()" type="text"name="nom_event"  placeholder="Enter event name" />
                                                            <p style="color: red" id="nameEr"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" for="inputdescription">description</label>
                                                            <input class="form-control py-4" id="description" onkeyup="descriptionValidation()" type="text" name="description"  placeholder="Enter description" />
                                                            <p style="color: red" id="descriptionEr"></p>
                                                        </div>
                                                    </div>
                                                    
                                            </div>
                                           
                                            
                                            <div class="form-group mt-4 mb-0">
                             
                                                <button type="submit"  onclick="nameValidation()" onclick="descriptionValidation()" class="btn btn-primary btn-block" name="submit">Save</button>
                                                <p id="error"></p>
                                                <?php echo $err ?>
                                            </div>
                                            
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="listProduit.php">Cancel</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
    
        </div>
        <script src="validation1.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="./../js/scripts.js"></script>
    </body>
</html>





