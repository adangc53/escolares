<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/Constancias.css">
    <title>Constancias</title>
</head>
<body>
<?php include("Navbar.php") ?>
  <section class="container text-center">
        <p class="h2 mt-2">Catalogo de Constancias</p>
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
  <a class="btn btn-success float-lg-right" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
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
     <input type="datetime" id="Date"class="form-control">
     <a href="#" class="btn btn-lg btn-secondary mt-2 float-lg-right" id="save">Guardar</a>
    </div>
</div>
</div>
 </section>
 <div class="container text-center">
<h1>Tabla de constancias emitidas</h1>   
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody id="myTable">
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>


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
</body>
</html>