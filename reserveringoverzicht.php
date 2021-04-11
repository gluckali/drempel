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
    include "database.php";
    $db = new database();

    $kamers = $db->select("SELECT * FROM kamers", []);
    // print_r($kamers);

    $columns = array_keys($kamers[0]);
    // row_data is the data in the columns
    $row_data = array_values($kamers) 
    
    ?>
     <!-- <script>
        (document).ready(function() {
            ('#example').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
        </script> -->
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
            <a href="reservering.php">edit</a>
            </td>
            <?php  
            foreach($row_data as $rows){
                echo "<tr>";
                    foreach($rows as $data){
                        echo "<td>$data</td>";
                    }
                    ?>
            <td> 
            <a href="reservering.php?kamers_id=<?php echo $rows['id']?>">reserveer</a>
            </td>            
            </tr>
          <?php  } ?>  
        <button onclick="window.print()">Print the order</button></a>
</table>
</body>
</html>