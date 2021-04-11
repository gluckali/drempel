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
    // this is made for the " klanten " to do an order NOTE: they aren't logged in
    include "database.php";
    $db = new database();

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // request method post, daarna roep je alles van de database qua naam (van database naam tot $_post = naam op database)
            $datum = $_POST["datum"]; 
            $naam = $_POST["naam"];
            $adres = $_POST["adres"];
            $postcode = $_POST["postcode"];
            
        $sql = "INSERT INTO klantreservering
      (datum, naam, adres, postcode)
       VALUES  
      (:datum, :naam, :adres, :postcode)"; 
    
    
    $placeholder = [
        'datum'=>$_POST['datum'],
        'naam'=>$_POST['naam'],
        'adres'=>$_POST['adres'],
        'postcode'=>$_POST['postcode']
    ];

    $db = new database();
    $db -> add_reservering($sql, $placeholder, 'reserveringoverzicht.php');
}
    ?>

   <!DOCTYPE html>
<html lang="en">
<head>
</head>
<form action="reserveringoverzicht.php" method="post">
        <input type="date" name="datum" placeholder="datum" required>
        <input type="naam" name="naam" placeholder="naam">
        <input type="adres" name="adres"placeholder="adres"  required>
        <input type="postcode" name="postcode" placeholder="postcode" required>
        <input type="submit" value="Voeg reservering toe">
        <script>
        function clickAlert() {
        alert("after printing make sure to download the reservering!");
        }
        onclick="window.print()"
    </script>
            <button onclick="window.print()">
        <input type="button" onclick="clickAlert()" value="Print before reservering">
     </form>
</html>