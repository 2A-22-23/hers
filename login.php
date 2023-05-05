<?php
require_once '../../controller/userc.php';

$userc=new Userc();

if(!isset($_SESSION['user'])){
if (isset($_POST["submit"])) {

if(($_POST['login']!="")&&($_POST['mdp']!="")) {
    $user=$userc->login($_POST['login'],$_POST['mdp']);

    if($user['success']===true)
    {
        if($user['role']==="admin")
        {
            session_start();
            $_SESSION['user']=$user['login'];
           $_SESSION['role']=$user['role'];
            header("Location: ../back/afficheruser.php");

        }
        else
        {
            session_start();
            $_SESSION['user']=$_POST['login'];
            $_SESSION['role']=$user['role'];
            header("Location: index.php");
        }
    }else{
        echo '<script>alert("login or mot de passe sont incorrect"); window.location = "../pages/login.php";</script>';

    }
}
else
{
    echo '<script>alert("Vous devez remplir tous les champs"); window.location = "../pages/login.php";</script>';

}

}}

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
    <form id="formAuthentication" class="mb-3" action="login.php" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Email or Username</label>
            <input type="text" class="form-control" id="email" name="login" placeholder="Enter your login" autofocus />
        </div>
        <div class="mb-3 form-password-toggle">
            <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Password</label>

            </div>
            <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="mdp" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                <span class="input-group-text cursor-pointer">
                            <i class="bx bx-hide"></i>
                        </span>
            </div>
        </div>
        <div class="mb-3">
            <input type="submit" name="submit" value="login">
        </div> <a class="btn btn-outline-info" href="forgot_password.html">Lost your password?</a><br>
        <a class="btn btn-outline-primary" href="inscription.php">Don't have an account?</a><br>
    </form>

</div>
</body>
</html>