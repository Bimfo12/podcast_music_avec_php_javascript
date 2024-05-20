<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $nombdd     = "podcaste";

    try{
        $podc = new PDO("mysql:host=$servername;dbname=$nombdd;charset=utf8",$username,$password);
        $podc -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
 
        catch(PDOException $e){

            echo "Erreur : ". $e -> getMessage();
    }
?>