<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
    <?php 
    include "..\database.php";
    $db = new database();

    if(isset($_GET['reservering_id'])){
        $reservering = $db->select("SELECT * FROM reservering WHERE id =:reservering_id", ['reservering_id'=>$_GET['reservering_id']]);
    }
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $sql = "UPDATE reservering SET kamers=:kamers, beschikbaar=:beschikbaar, prijs=:prijs WHERE id =:reservering_id";
    
    
    $placeholders = [
        'kamers'=>$_POST['kamers'],
        'prijs'=>$_POST['prijs'],
        'beschikbaar'=>$_POST['beschikbaar'],
        'reservering_id'=>$_POST['reservering_id']

    ];

    print_r($placeholders);

    $db->update_or_delete($sql, $placeholders);
}
    ?>
    <form action="medewerkeredit.php" method="post">
    <input type="hidden" name="reservering_id" value="<?php echo isset($_GET['reservering_id']) ? $_GET['reservering_id'] : '' ?>">
    <input type="text" name="kamers" placeholders="kamers" value="<?php echo isset($reservering) ? $reservering[0]['kamers'] : ''?>">
    <input type="text" name="prijs" placeholders="prijs" value="<?php echo isset($reservering) ? $reservering[0]['prijs'] : ''?>">
    <input type="text" name="beschikbaar" placeholders="beschikbaar" value="<?php echo isset($reservering) ? $reservering[0]['beschikbaar'] : ''?>">
    <input type="submit" value="edit">
</body>
</html>