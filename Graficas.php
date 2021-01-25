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
<div class="container">
    <div class="align-items-center offset-3">
<?php 
    $pc = new C_PhpChartX(array(array(11, 250, 5, 12, 4,6)),'basic_chart');
    $pc->set_animate(true);
    $pc->set_title(array('text'=>'Basic Chart Animated'));
    $pc->draw();
?> 
</div>
</div>
</body>
</html>