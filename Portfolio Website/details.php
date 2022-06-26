<?php
    require 'functions.php';
    $connection = dbconnect();

    if( !isset( $_GET['id']) ){
        echo "De id is niet gegeven";
        exit;
    }

    $id = $_GET['id'];
    $check_int = filter_var($id, FILTER_VALIDATE_INT);
    if($check_int == false){
        echo"This is not a number";
        exit;
    }
     
    $statement = $connection->prepare('SELECT * FROM `projecten` WHERE id=?');
    $params = [$id];
    $statement->execute($params);
    $place = $statement->fetch(PDO::FETCH_ASSOC);

    $result = $connection->query('SELECT * FROM `berichten`');
    $params = [$id];
    $statement->execute($params);
    $place = $statement->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styledetails.css">
</head>
<body class="body--beschrijving">
    <div class="container">
        <h1 class="header--beschrijving"><?php echo $place['titel']?></h1>
        <figure><img src="img/<?php echo $place['foto']?>" alt="" width="700px" height="500px"></figure>
        <p class="p--beschrijving"><?php echo $place['beschrijving']?></p>
        <form method="get" action="contact.php">
                <button type="submit">Contact me!</button>
            </form>
        <form method="get" action="index.php">
                <button type="submit">Home</button>
            </form>
    </div>
    
</body>
</html>



