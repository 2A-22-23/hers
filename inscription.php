<?php
require_once '../../controller/userc.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'mail/Exception.php';
require 'mail/PHPMailer.php';
require 'mail/SMTP.php';
$userc=new Userc();
if (isset($_POST["submit"])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tel = $_POST['tel'];
    $adresse = $_POST['adresse'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<script>alert("Adresse e-mail invalide"); window.location = "inscription.php";</script>';
        exit;
    }



    if ($nom != "" && $prenom != "" && $tel != "" && $adresse != "" && $email != "" && $login != "" && $mdp != "") {
        $user = new User($nom, $prenom, $tel, $adresse, $email, $login, $mdp, "user");
        $userc->adduser($user);



        echo '<script> alert("Utilisateur ajouté avec succès!"); window.location = "login.php";</script>';
    } else {
        echo '<script>alert("Vous devez remplir tous les champs"); window.location = "inscription.php";</script>';
    }
}
?>
<html>
<head>
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div>
    <a href="index.php">
        <img src="images/logo.png" alt="">
    </a>
</div>
<div class="loginbox">
    <img src="img1.png" class="avatar">
    <h1>Login</h1>
    <form id="formAuthentication" class="mb-3" action="inscription.php" method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">Nom</label>
            <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="nom"
                    placeholder="Enter your nom"
                    autofocus
            />
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Prenom</label>
            <input type="text" class="form-control" id="email" name="prenom" placeholder="Enter your prenom" />
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Telephone</label>
            <input type="text" class="form-control" id="email" name="tel" placeholder="Enter your Numero de telephone" />
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Adresse</label>
            <input type="text" class="form-control" id="email" name="adresse" placeholder="Enter your Adresse" />
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your Email" />
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Login</label>
            <input type="text" class="form-control" id="email" name="login" placeholder="Enter your Login" />
        </div>
        <div class="mb-3 form-password-toggle">
            <label class="form-label" for="password">Mot De Passe</label>
            <div class="input-group input-group-merge">
                <input
                        type="password"
                        id="password"
                        class="form-control"
                        name="mdp"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="password"
                />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            </div>
        </div>
        <button class="btn btn-primary d-grid w-100" name="submit">Sign up</button>
    </form>

</div>
</body>
</html>