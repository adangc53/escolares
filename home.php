<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/icons/css/all.css">
    <link rel="stylesheet" href="src/css/home.css">
    <title>Home</title>
</head>
<body>
    <?php include("Navbar.php") ?>
    <?php  
          if  (!isset($_SESSION)) session_start();
          if (!isset($_SESSION["conect"])) $_SESSION["conect"] = "";
  ?>
    <section class="bienvenidos text-center py-2" >
    <div class="container">
    <p class="h3 mx-auto yt-2" >Bienvenido: <?php echo $_SESSION["usuario"]; ?></p>
    <img  src="src/images/teclado.svg" width="200" class="images img-fluid mx-auto mb-2 mt-1">
    </div>
</section>
</body>
<script src="src/bootstrap/js/jquery.min.js"></script>
<script  src="src/bootstrap/js/bootstrap.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script  type="text/javascript" src="js/index.js"></script>
</html>