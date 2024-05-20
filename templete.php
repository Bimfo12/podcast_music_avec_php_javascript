<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="bootstrap/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    
    <title>Podcast</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
<?php
        //  session_start();

          if(isset($_SESSION['id'])){  
      ?>
  <a class="navbar-brand" href="index.php">PODCAST NAKAHY</a>

  <?php
          }else{
            header('connection');
          }
      ?>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto gauche">
       
             <li class="nav-item">
              <a class="nav-link" href="connection.php">Connexion</a>
               </li>
            <li class="nav-item">
           <a class="nav-link" href="inscription.php">Créer un compte</a>
         </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      
      <?php
         // session_start();

          if(isset($_SESSION['id'])){  
      ?>

      <li class="nav-item active">
          <a class="nav-link" href="profil.php">Profil</a>
           </li>
       <li class="nav-item active">
          <a class="nav-link" href="audio.php">Enregistrement</a>
           </li>
      <li class="nav-item">
        <a class="nav-link" href="deconnection.php">Deconexion</a>
      </li>

      <?php
          }else{
            header('connection');
          }
      ?>

    </ul>
  </div>
</nav>


         <?=$content?>
<script src="bootstrap/jqu.js" ></script>
<script src="bootstrap/jqui.js"></script>
<script src="bootstrap/jquir.js"></script>

</body>
</html>