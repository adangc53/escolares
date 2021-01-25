<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/Constancias.css">
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
    <title>Titulacion</title>
</head>
<body>
<?php include("Navbar.php") ?>
  <section class="container text-center">
        <p class="h2 mt-2">Catalogo de Titulacion</p>
  </section>
  <section>
  <div class="container">
  <form class="form-inline float-lg-right">
  <input class="form-control float-lg-right" id="myInput" type="text" placeholder="Search..">
    </form>
  </div>
  <br>
  </section>
 <section class="container mt-4">
 <p>
  <a id="ckbtn" class="btn btn-success float-lg-right dateadd" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    <i class="fa fa-plus" ></i>
  </a>
  
</p>
<br>
<br>
<div class="collapse mt-2 DataCard" id="collapseExample">
  <div class="card card-body">
    <div class="form">
     <label for="folio">
            Folio
     </label>
     <input type="text" class="form-control" id="folio">
     <label for="NoControl">No. Control</label>
     <input type="text" id="NoControl" class="form-control">
     <label for="Date">Fecha</label>
     <input type="date" id="Date"class="form-control">
     
     <a href="#" class="btn btn-lg btn-secondary mt-2 float-lg-right" id="save" >Guardar</a>
     <a href="#" class="btn btn-lg  mt-2 float-lg-right border mr-1" id="clear" >Limpiar</a>
    </div>
</div>
</div>
 </section>
 <div class="container text-center">
<h1>Tabla de titulacion</h1>   
<input id="aaa" type="text" style="display:none;"  value="inserta">
</div>
<section>
<div id="tabla" class="container" ></div>
    <script >
        $("#tabla").load("templates/TableTitulacion.php");
    </script>
</section>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script src="js/titulacion.js"></script>
</body>
</html>