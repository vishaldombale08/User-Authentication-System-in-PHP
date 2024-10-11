<?php 
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome - <?php echo $_SESSION['username']?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   <?php require 'partials/_nav.php'?>
   
   
   <div class = "my-3">
        <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Welcome - Welcome - <?php echo $_SESSION['username']?></h4>
        <p>Hey how are you doint you are logged in as <?php echo $_SESSION['username']?></p>
        <hr>
        <p class="mb-0">Whenever you need to, be sure to logout<a href ="/loginsystem/logout.php">using this link</a> </p>
        </div>
    </div>
   
   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>