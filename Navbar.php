<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/navbar.css">
    <link rel="stylesheet" href="src/icons/css/all.css">
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
    
    <title>Document</title>
</head>
<body>
<?php  
          if  (!isset($_SESSION)) session_start();
          if (!isset($_SESSION["conect"])) $_SESSION["conect"] = "";
          if ($_SESSION["conect"]!="53345fe&%/&%6756"){
            
            header("location:index.html");
        }
        else
             $bandera = true;
  ?>
    <div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home.php">Syscolares</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <?php  
        if ($_SESSION["usuario"]=="master")
        {
          print "
      <li class='nav-item active'>
        <a class='nav-link' href='Users.php'>Usuarios <span class='sr-only'>(current)</span></a>
      </li> ";
    }
    ?>
      <li class="nav-item">
        <a class="nav-link" href="Graficas.php">Graficas</a>
      </li>
      <?php  
        if ($_SESSION["usuario"]=="master"||$_SESSION["usuario"]=="Becas")
        {
          print '
      <li class="nav-item">
        <a class="nav-link" href="Becas.php">Becas</a>
      </li>';
    }
    ?>
      <?php  
        if ($_SESSION["usuario"]=="master"||$_SESSION["usuario"]=="Titulacion")
        {
          print '  <li class="nav-item">
        <a class="nav-link" href="Titulacion.php">Titulacion</a>
      </li>';
    }
    ?>
      <?php  
        if ($_SESSION["usuario"]=="master"||$_SESSION["usuario"]=="Constancias")
        {
          print "
      <li class='nav-item active'>
        <a class='nav-link' href='constancias.php'>Constancias<span class='sr-only'>(current)</span></a>
      </li> ";
    }
    
    ?>   
      <li class='nav-item active'>
        <a class='nav-link' href='reportes.php'>Reportes<span class='sr-only'>(current)</span></a>
      </li> 
  
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <a class="nav-link logout" href="templates/Logout.php">Cerrar sesion</a>
    </form>
  </div>
</nav>
</div>

<script src="src/bootstrap/js/jquery.min.js"></script>
<script  src="src/bootstrap/js/bootstrap.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script  type="text/javascript" src="js/index.js"></script>
</body>
</html>

