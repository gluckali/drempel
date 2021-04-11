<?php
session_start();
// $_SESSION['id'] = "";
// $_SESSION['gebruikersnaam'] = "";
// $_SESSION['wachtwoord'] = "";
if(isset($_GET['logout'])) {
    session_destroy($_SESSION[]);
    session_unset($_SESSION['gebruikersnaam']);
 }
if(empty($_SESSION['id'])) header("location: medewerkerlogin.php");
echo "you logged out succesfully";
// else{
//     echo"error, checkpoint #404"; 
?>
