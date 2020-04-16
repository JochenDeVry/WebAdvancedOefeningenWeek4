<?php
if (!is_numeric($_GET['dag']) || !is_numeric($_GET['maand']) || !is_numeric($_GET['jaar'])){
    header("Location: invoer.html");
}
$dag = $_GET['dag'];
$maand = $_GET['maand'];
$jaar = $_GET['jaar'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verwerk</title>
</head>
<body>
    <?php
        require_once 'vendor/autoload.php';
        use Util\Date;
        if ($dag == 0 && $maand == 0 && $jaar == 0){
            $date = new Date();
        }
        elseif ($jaar == 0){
            $date = new Date($dag, $maand);
        }
        else{
            $date = new Date($dag, $maand, $jaar);
        }
        $date->printMonth();
    ?>
</body>
</html>
