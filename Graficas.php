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
    <div class="row justify-content-center">
    <select name="depo" id="depo" class="form-control col-md-8">
        <option value="titulacion">titulacion</option>
        <option value="Becas">Becas</option>
        <option value="Constancias">Constancias</option>
        
    </select>
    </div>
    <div class="row justify-content-md-center mt-2">
        <input type="date" id ="startDate" class="form-control col-md-3 mr-2">
        <input type="date" id="endDAte" class="form-control col-md-3 ml-2">
    </div>
    <div class="row justify-content-md-center">
        <a id="filtro" class="btn btn-primary btn-lg mt-3">Graficar ciclo</a>
    </div>
</div>
<div class="container">
    <div class="row justify-content-md-center">
    
    <input type="text" id ="dates" style="display:none;">
<?php 
echo '<script src="js/graficas.js"></script>';
echo '<script language="javascript"> var dates=$("#dates").val();// console.log(dates);</script>';
    $arreglos= array(0,112,250,215,77);

    $pc = new C_PhpChartX(array($arreglos,array(223.338,323,412,123),array(119,401,243,121,273)),'basic_chart');
    $pc->set_animate(true);
    $pc->set_title(array('text'=>'Basic Chart Animated'));
    $pc->draw();
?> 
</div>
</div>

</body>
</html>