<?php ob_start()   ?>

<link rel="stylesheet" href="bootstrap/infoperso.css">

<?php
          session_start();
          if(isset($_SESSION['id'])){ ?>



        <?php
        require_once "bdd.php";
          
        if(isset($_POST['envoier'])){

            if(empty($_POST['nom']) || !preg_match('/[a-zA-Z0-9]+/', $_POST['nom'])){
                $message = 'Vous avez oublier votre nom';
            }
            if(empty($_POST['prenom']) || !preg_match('/[a-zA-Z0-9]+/', $_POST['prenom'])){
                $message = 'Vous avez oublier votre Prenom';
            }
            if(empty($_POST['telepnon']) || !preg_match('/[0-9]+/', $_POST['telepnon'])){
                $message = 'Vous avez oublier votre numero de Téléphone';
            }
            if(empty($_POST['adresse'])){
                $message = 'Vous avez oublier votre adresse';
            }
            else{    
                    $nom = $_POST['nom'];
                    $prenom = $_POST['prenom'];
                    $telepnon = $_POST['telepnon'];
                    $adresse = $_POST['adresse'];

                    $req = $podc->prepare("UPDATE info SET nom=:nom,prenom=:prenom,telepnon=:telepnon,adresse=:adresse");
                    $req->bindvalue(':nom',$nom);
                    $req->bindvalue(':prenom',$prenom);
                    $req->bindvalue(':telepnon',$telepnon);
                    $req->bindvalue(':adresse',$adresse);
                    
                    $req->execute();

                    $message = 'Votre mise a jours de profil est reussit';
               
            }
        }
         ?>


<div class="miseajours">

    <form method="POST" enctype="multipart/form-data">
    <div class="erreur"><?php if(isset($message)) echo $message ?> </div>
            <div class="enregistrer">
                <table>
                    <tr>
                        <td>Nom : </td>
                        <td><input type="text" name="nom"></td>
                    </tr>
                    <tr>
                        <td>Prenom : </td>
                        <td><input type="text" name="prenom"></td>
                    </tr>
                    <tr>
                        <td>Téléphone : </td>
                        <td><input type="text" name="telepnon"></td>
                    </tr>
                    <tr>
                        <td>Adresse: </td>
                        <td> <input type="text" name="adresse" > </td>
                    </tr>
                </table>
                <button type="submit" name="envoier">Envoyer</button>
            </div>
        </form>

</div>






<?php
          }
?>

<?php
    $content = ob_get_clean(); 
    require 'templete.php';

?>