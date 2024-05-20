
<?php ob_start()   ?>

<?php
          session_start();
          if(isset($_SESSION['id'])){ ?>



<?php
require_once 'deco.php';
require_once 'bdd.php';
?>

<link rel="stylesheet" href="bootstrap/audio.css">
<body>

<?php 
        // session_start();

        if(isset($_POST["envoier"])){
            if(empty($_POST["titre"])){
                $message = "vous avez oublier la titre";
            }
            elseif(empty($_POST["genre"])){
                $message = "Veillez entrer la genre de votre video ";
            }
            
            else{
              try {
                $req = $podc->prepare("INSERT INTO audio(titre,genre ,emplacement)
                VALUE (:titre,:genre ,:emplacement)");
                    $req ->bindvalue(':titre',$_POST['titre']);
                    $req ->bindvalue(':genre',$_POST['genre']);
                    $req ->bindvalue(':emplacement', $_SESSION['stock'] );
                    $req->execute();
                    session_destroy();
                    $message = "tache effectuer";
                   // header('location:audio.php');

                  } catch (PDOException $e) {
                    echo "Erreur : " . $e->getMessage();
                }
            }
        }
     ?>

<?php
if(isset($_FILES['audio'])) {
 $tmpName = $_FILES['audio']['tmp_name'];
 $fileName = $_FILES['audio']['name'];
 $_SESSION['stock'] = 'audio/'.date('d.m.y').time().'.'.'mp3';
 $targetPath = $_SESSION['stock'];
 move_uploaded_file($tmpName, $targetPath);
 
}
?> 
    

<div class="touts">
   <div class="enregistrement">
      <audio id="audioPlayer" controls></audio>
       <button id="recordButton" class="recordstopButton"></button>
       <span id="currentStrart">0:00</span>
    </div>
    <form method="POST" enctype="multipart/form-data">
        <div class="enregistrer">
            <table>
                <tr>
                    <td>Titre : </td>
                    <td><input type="text" name="titre"></td>
                </tr>
                <tr>
                    <td>Genre: </td>
                    <td> <input type="text" name="genre" placeholder="Ex: Poliique,cultirel,etc"> </td>
                </tr>
            </table>
            <button type="submit" name="envoier">Envoyer</button>
        </div>
    </form>
</div>

<script src="js/audio.js"></script>
</body>

<?php
          }
?>
<?php
    $content = ob_get_clean(); 
    require 'templete.php';

?>