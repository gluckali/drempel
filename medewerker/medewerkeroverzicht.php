<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href= "print.css" media="print">
    <title>overzicht</title>
</head>
<body>
    <?php 
    include "..\database.php";
    $db = new database();

    $reserveringen = $db->select("SELECT * FROM reservering", []);
    // print_r($kamers);

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
            <th colspan="2">action</th>
        </tr>
            <th colspan="3"> </th>
            <td>
            <a href="medewerkeredit.php">edit</a>
            </td>
            <?php  
            foreach($row_data as $rows){
                echo "<tr>";
                    foreach($rows as $data){
                        echo "<td>$data</td>";
                    }
                    ?>
            <td> 
            <a href="medewerkeredit.php?reservering_id=<?php echo $rows['id']?>">edit</a>
            <a href="medewerkerdelete.php?id=<?php echo $rows['id']?>">delete</a>
            </td>            
            </tr>
          <?php  } ?>  
        <button onclick="window.print()">Print the available rooms</button></a>

</table>
</body>
</html>

