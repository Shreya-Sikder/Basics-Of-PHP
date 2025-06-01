<?php
$name = "John Doe";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML emb with PHP</title>
</head>
<body>
    <h1><?php echo   "Hllo" ?> Hi</h1>  
    <h1>Hello <?php echo $name ?> </h1>
    <hr>
    <?php for($i = 0; $i < 10; $i++){ ?>
     <h1><?php echo $i ?> -Hello <?php echo $name ?></h1>
     <?php } ?>
</body>
</html>