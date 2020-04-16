<?php
print('line 2');
if (!is_numeric($_GET['dag']) || !is_numeric($_GET['maand']) || !is_numeric($_GET['jaar'])){
    header("Location: invoer.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verwerk</title>
</head>
<body>
    <?php
        print('line 13');
        require_once '/src/Util/Date.php';
        print('line 17');
        use Util\Date;
        print('line 19');
        $date = new Date(1,1,2010);
        print('line 21');
        $date->printMonth();
        print('test');
    ?>
</body>
</html>
