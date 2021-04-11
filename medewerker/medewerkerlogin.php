<?php
    session_start(); 
    print_r(password_hash("1234", PASSWORD_DEFAULT));
    include "../database.php";

    if (isset($_POST['submit'])){
        $fields = ['gebruikersnaam', 'wachtwoord'];
        
        $error = false;

        foreach($fields as $field){
            if (!isset($_POST[$field]) || empty($_POST[$field])){
                $error = true;
            }
        }

        if(!$error){
            $username= $_POST['gebruikersnaam'];
            $wachtwoord= $_POST['wachtwoord'];
            $db = new database ();
            $db -> medewerker_login($username, $wachtwoord);
        }
    }
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id='login' action='#' method='post'>
		<fieldset>
			<p> Login medewerker terminal </p>
			<legend>inloggen</legend>
			<input type="text" name="gebruikersnaam" placeholder="Username" required/>
			<input type="password" name="wachtwoord" placeholder="Password" required/>
			<input type='submit' name='submit' value='submit' />
			<p>
				geen account? <a href="register.php">registeren</a>
			</p>
			<!-- <p> geen account medewerker? <a href="medewerkerreg.php"> Medewerker registeren! </a>
			</p> -->
</body>
</html>

