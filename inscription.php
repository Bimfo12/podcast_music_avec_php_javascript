<?php ob_start()   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/francial.css">
    <title>Inscription</title>
</head>
<body>



<?php

    require_once "bdd.php";

    if(isset($_POST['inscription'])){
        if(empty($_POST['pseudo']) || !preg_match('/[a-zA-Z0-9]+/', $_POST['pseudo'])){
            $message = "votre pseudo est invalide";
        }
        elseif(empty($_POST['mail']) || !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
            $message = "veillez verifier votre mail s'il vous plait";
        }
        elseif(empty($_POST['password'])){
            $message = "Veillez sesire votre mot de passe";
        }
        elseif($_POST['password'] != $_POST['password2']){
            $message = "votre mot de passe ne correspond pas";
        }

        else{
            $req = $podc->prepare("SELECT* FROM podcaste.utilisateur WHERE pseudo = :pseudo");
            $req ->bindvalue('pseudo',$_POST['pseudo']);
            $req->execute();
            $resultat = $req->fetch();

            $req1 = $podc->prepare("SELECT* FROM podcaste.utilisateur WHERE mail = :mail");
            $req1 ->bindvalue('mail',$_POST['mail']);
            $req1->execute();
            $resultat1 = $req1->fetch();

            if($resultat){
                $message = "votre pseudo exist déjà";
            }
            elseif($resultat1){
                $message = "votre mail exist déjà";
            }
            else{
                $passwordHacher = sha1($_POST['password'].'tsihainy') ;
                $req = $podc->prepare("INSERT INTO utilisateur(pseudo,mail,password)
                                        VALUE (:pseudo,:mail,:password)");
                $req ->bindvalue('pseudo',$_POST['pseudo']);
                $req ->bindvalue('mail',$_POST['mail']);
                $req ->bindvalue('password',$passwordHacher);
                $req->execute();
    
                $message2 = "Votre inscription est un reussite";
            }          
        }
    }
?>




<div id="Inscription">
         
        <div class="container">
           
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    <form class="box" action="" method="post">
                    <h1>Inscription</h1>
                    <div class="erreur"><?php if(isset($message)) echo $message ?> </div>
                    <div class="reusi"><?php if(isset($message2)) echo $message2 ?> </div>

                            <div class="form-group">
                                <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo">
                            </div>
                            <div class="form-group">
                                <input type="mail"  name="mail" id="mail" placeholder="Mail">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password2" id="password2" placeholder="Confirmation">
                            </div><br>
                            <div class="form-group">
                                <button type="submit" name="inscription" class="btn btn-info btn-md" value="submit">Inscription</button>
                               
                            </div>
                                <div class="hr"></div> 
                                <div class="foot-lnk"> <a href="connection.php" >Already Member? </a> 
                                </div>
              
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