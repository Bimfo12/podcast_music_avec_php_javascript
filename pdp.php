<?php ob_start()   ?>
<?php
          session_start();
          if(isset($_SESSION['id'])){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>uploads</title>
</head>
<body>
    
<?php 
    require 'bdd.php';
?>

<style>
.form{
    position: relative;
    top: 200px;
    margin-left: 600px;
}
</style>

<?php 
           if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0 ){

            if($_FILES["image"]["size"] <= 3000000){

                $error = 1;
                $informationImage = pathinfo($_FILES["image"]["name"]);
                $extensionImage = strtolower($informationImage["extension"]);
                $extensionArray = array("png","jpg","jpeg");  

                if(in_array($extensionImage,$extensionArray )){
                    $sariko =  "image/".date('d.m.y').time().rand().rand().'.'.$extensionImage;
                    move_uploaded_file($_FILES["image"]["tmp_name"],$sariko);
                    echo "lasagna tsara izy igny";
                    $error = 0;
                   
                }
            }
        }
            ?>
           <?php 
                if(isset($_POST["submit"])){ 
                        $req = $podc->prepare("UPDATE pdp SET emplacement=:photoprofil");
                        $req->bindvalue(':photoprofil',$sariko);
                        $req->execute();
                        header('location:profil.php');
                    }
             ?>
       
        <div class="form">
         <form method="post" action="" enctype="multipart/form-data">
          
           <h1>Ajouter un image</h1>
            <input type="file" name="image"> <br/>
            <button type="submit" name="submit">submit</button>
         </form>
         
       </div>

         </body>
</html>

<?php
          }
?>

<?php
    $content = ob_get_clean(); 
    require 'templete.php';

?>