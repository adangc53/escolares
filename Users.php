<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <?php include("Navbar.php") ?>
    <div class="container text-center mt-2">
        <p class="h2">Catalogo de usuarios</p>
        
    </div>
    <div id="tabla" class="container" ></div>
    <script >
        $("#tabla").load("templates/TableUsers.php");
    </script>
</body>
</html>