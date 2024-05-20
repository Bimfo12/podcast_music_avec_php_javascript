
<?php ob_start()   ?>
<?php
         session_start();

          if(isset($_SESSION['id'])){  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="francial.css">
    
    <title>Contact</title>

<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>
    </head>
    <link rel="stylesheet" href="bootstrap/stylecontact.css">
    <body>
        <div class="wrapper">
    <h2>Contact Us</h2>
    <form>
        <div class="input-field">
            <input type="text" name="" required="">
            <label>Name</label>
        </div>
        <div class="input-field">
            <input type="email" name="" required="">
            <label>Email</label>
        </div>
        <div class="input-field">
            <input type="tel" name="" required="">
            <label>Mobile</label>
        </div>
        <div class="input-field">
            <textarea rows="3" required=""></textarea>
            <label>message</label>
        </div>
        <input type="submit" name="" value="Send Message" class="btn">
    </form>
</div>
    </body>
</html>
</html>

<?php
}else{
  header('connection');
}
?>

<?php
    $content = ob_get_clean();
    require 'templete.php';

?>