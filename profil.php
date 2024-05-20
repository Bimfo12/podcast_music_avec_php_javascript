<?php ob_start()   ?>


<?php
          session_start();
          if(isset($_SESSION['id'])){ ?>


<link rel="stylesheet" href="bootstrap/profil.css">
<link rel="stylesheet" href="bootstrap/bootstrap.css">
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/podcast.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<?php
    require 'bdd.php';
 
?>
<body>

<a href="pdp.php" class="pdp">👤</i></a>
<div class="touts">
   <div class="enregistrement">

   <?php 
       $requete = $podc->query('SELECT * FROM pdp');
       while($donnes = $requete->fetch()){
        $profil = $donnes['emplacement'];
       } 
       ?>
      <img src="<?= $profil ?>" class="rounded-circle" width="200" height="200">
      
      <?php 
       $requete = $podc->query('SELECT * FROM info');
       while($donnes = $requete->fetch()){
       echo '<div class="test">
            <tr>
                <td>👤 Nom :'.$donnes['nom'].'</td>
            </tr><br>
            <tr>
                <td>🕵️ Prenom : '.$donnes['prenom'].'</td>
            </tr><br>
            <tr>
                <td>📞 Téléphone : '.'0'.$donnes['telepnon'].'</td>
            </tr><br>
            <tr>
                <td>🏠 Adresse : '.$donnes['adresse'].'</td><br>
                <a href="infoperso.php">modifier</a>
            </tr>
              
            </div>            
            ';  
          }

          $requete1 = $podc->query('SELECT * FROM plusinfo');
          while($donnes1 = $requete1->fetch()){
          echo '<div class="info_suplementaire">
          <tr>
              <td><p>🎁 Date de naissance :'.$donnes1['datedenaissance'].'</p></td>
          </tr>
          <tr>
              <td><p>♂ Sexe : '.$donnes1['sexe'].'</p></td>
          </tr>
          <tr>
              <td><p>🧘🏻 Situation matrimoniale : '.$donnes1['situation'].'</p></td>
          </tr>
          <tr>
              <td><p>⚽ Loisir : '.$donnes1['loisire'].'</p></td>    
          </tr>
          <tr><td><p>😁 Descripion : '.$donnes1['description'].'</p></td>
           <a href="#">modifier</a>
          </tr>
            
          </div>            
          ';  
        }
          ?>
   
  </div>
     
      <div class="enregistrer">
      <div class="menu_song">

      <?php 
      $id = 1;
       $requete = $podc->query('SELECT * FROM pdp  ORDER BY id DESC');
       while($donnes = $requete->fetch()){
         $sary = $donnes['emplacement'];
        }
       $requete = $podc->query('SELECT * FROM info  ORDER BY id DESC');
       while($donnes = $requete->fetch()){
         $nom = $donnes['nom'];
        }

       $requete = $podc->query('SELECT * FROM audio ORDER BY id DESC');
       while($donnes = $requete->fetch()){
         $titre = $donnes['titre'];
         $chemin = $donnes['emplacement'];
         
       ?>

     <?php
       
        $id ++;

      ?>
      
       <div class="list">
          
          <li class="songItem">
           
            <span><?= $id - 1  ?></span>
              <img src="<?= $sary ?>" alt="donald trump">
              <h5><?= $titre ?><br>
            <div class="sous_titre"><?= $nom ?></div>
          </h5>
          <audio src="<?= $chemin ?>" type="audio/mp3" controls></audio>
        <!-- <i class="bi playListPlay bi-play-circle-fill " <?= $id ?>></i> -->
       
        </li>
        </div>
        <?php  }  ?>
     </div>
     
    </div>
    
</div>
<script src="bootstrap/jqu.js" ></script>
<script src="bootstrap/jqui.js"></script>
<script src="bootstrap/bootstrap.bundle.min.js"></script>
<!-- <script src="bootstrap/accueil.js"></script> -->
<script src="js/audio.js"></script>

</body>


<?php
          }
?>

<?php
    $content = ob_get_clean(); 
    require 'templete.php';

?>