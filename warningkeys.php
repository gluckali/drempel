<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href= "print.css" media="print">
    <title>warning for rooms</title>
</head>
<body>
    <?php 
    include "database.php";
    $db = new database();

    $reserveringen = $db->select("SELECT COUNT(*) FROM reservering WHERE beschikbaar = 'ja' HAVING COUNT(*)>1", []);
    echo " <br> <strong> <td> if count is more than 3, you have enough rooms </td> <strong>";
    echo "<br> <strong> the count tells you how many rooms you have left available!<br>";

    $columns = array_keys($reserveringen[0]);
    // row_data is the data in the columns
    $row_data = array_values($reserveringen) 
    ?>

<table>
        <tr>
            <?php 
                foreach($columns as $column){
                    echo "<th><strong>$column</strong></th>";
                }
            ?>
            <?php  
            foreach($row_data as $rows){
                echo "<tr>";
                    foreach($rows as $data){
                        echo "<td>$data</td>";
                    }
                }
                    ?>
                    
<!-- 
if statement > if its above 1
echo in sql you have enough rooms
else if its under 2
echo you dont have enough rooms
SELECT COUNT(*) FROM reservering WHERE beschikbaar = 'nee' HAVING COUNT(*) IF(1++);


if(isset($_GET['reservering_id'])){
$nee = ("SELECT * FROM reservering WHERE beschikbaar = 'nee'");
}
if ($nee < 2) {
    echo "you only have a few rooms available, check in the database how many you have left!";
}
else{
    ($nee  > 2);
    echo "you have enough rooms for today!";
}
SELECT COUNT(*) 
FROM reservering WHERE beschikbaar = 'nee'
HAVING COUNT(*)>1
PRINT 'there are enough rooms'; -->
<!-- button that sends code to database and gives output in browser? -->