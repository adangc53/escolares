<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
    <title>Graficas</title>
</head>
<body>
    <?php require_once("src/phpChart_Lite/conf.php") ?>
<?php include("Navbar.php") ?>
<div class="container mt-2">
    <div class="row justify-content-md-center">
        <input type="date" id ="startDate" class="form-control col-md-3 mr-2">
        <input type="date" id="endDAte" class="form-control col-md-3 ml-2">
    </div>
    <div class="row justify-content-md-center">
        <a href="" id="filtro" class="btn btn-primary btn-lg mt-3">Graficar ciclo</a>
    </div>
</div>
<div class="container">
    <div class="row justify-content-md-center">
<?php 
    echo "<script src='js/graficas.js'> p()</script>";
    $pc = new C_PhpChartX(array(array(11, 250, 5, 12, 4,6)),'basic_chart');
    $pc->set_animate(true);
    $pc->set_title(array('text'=>'Basic Chart Animated'));
    $pc->draw();
?> 
</div>
</div>
<script src="js/graficas.js"></script>
</body>
</html>