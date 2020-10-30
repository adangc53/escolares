<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link rel="stylesheet" href="style.css">
=======
  
>>>>>>> 59880bd (1.0.0.1)
    <title>Document</title>
</head>
<body>

    <?php include("Navbar.php") ?>
    <div class="container text-center mt-2">
        <p class="h2">Catalogo de usuarios</p>
<<<<<<< HEAD
        
    </div>
    <div id="tabla" class="container" ></div>
    <script >
        $("#tabla").load("templates/TableUsers.php");
    </script>
=======
        <button id="AddUser" class="btn btn-primary float-lg-right mb-2" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-user-plus"></i></button>
    </div>
    
   <section >
    <div id="tabla" class="container" ></div>
    <script >
        $("#tabla").load("templates/TableUsers.php");
        $('#AddUser').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
    </script>
    </section>
    <script  type="text/javascript" src="js/user.js"></script>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <label for="user">Usuario</label>
          <input type="text" class="form-control" id="user" placeholder="Nombre de usuario">

          <label for="password">Contreseña</label>
          <input type="password" class="form-control" id="password" placeholder="Contraseña">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a id="Save"  class="btn btn-primary float-right " type="button">Guardar</a>
      </div>
    </div>
  </div>
</div>
>>>>>>> 59880bd (1.0.0.1)
</body>
</html>