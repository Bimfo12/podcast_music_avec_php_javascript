<?php ob_start()   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/francial.css">
    
    <title>Connection</title>
</head>

<body>
<?php require_once 'bdd.php' ?>
<?php 

    if(isset($_POST['connexion'])){
        $mail = $_POST['mail'];
        $passworden = $_POST['password'];
        

    $requete = $podc->prepare('SELECT * FROM podcaste.utilisateur WHERE mail=:mail');
    $requete -> execute(array('mail'=>$mail));
    $resultat = $requete->fetch();

    if(!$resultat){
        $messages = "Veilliez entré mail valide ou s'inscrire";
    }
    else{
        $passwordve = sha1($passworden.'tsihainy');
       // $passwordOK = password_verify($passwordve,$resultat['password']);
        if($passwordve == $resultat['password']){
            session_start();
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['pseudo'] = $resultat['pseudo'];
            $_SESSION['mail'] = $resultat['mail'];

            header('location:index.php');
        }
        else{
            $messages = 'Veilliez entrer mot de passe valide';
        }
    }
    
    }
?>


<div id="login">
    <h1>LOGIN</h1>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    <form class="box" action="" method="post">
                            <h1>LOGIN</h1>
                            <div class="erreur"><?php if(isset($messages)) echo $messages ?> </div>
                            <div class="form-group">
                                <input type="text" name="mail" id="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="text" name="password" id="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="connexion" class="btn btn-info btn-md" value="Login">
                            </div>

                            <div class="hr"></div> 
                                <div class="foot-lnk"> <a href="inscription.php" >Inscription </a> 
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php
    $content = ob_get_clean();
    require 'templete.php';

?>