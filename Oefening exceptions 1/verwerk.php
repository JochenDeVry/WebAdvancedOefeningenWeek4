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
        try{
            if ($dag == 0 && $maand == 0 && $jaar == 0){
                $date = Date::make();
            }
            elseif ($jaar == 0){
                $date = Date::make($dag, $maand);
                if ($date->getMonth() == 0){
                    $date = $date->changeMonth(1);
                }
                if ($date->getDay() == 0){
                    $date = $date->changeDay(1);
                }
            }
            else{
                $date = Date::make($dag, $maand, $jaar);
                if ($date->getMonth() == 0){
                    $date = $date->changeMonth(1);
                }
                if ($date->getDay() == 0){
                    $date = $date->changeDay(1);
                }
            }
            $date->printMonth();
        }
        catch(Exception $e){
            print($e);
        }
    ?>
</body>
</html>
