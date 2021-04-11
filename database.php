<?php 
class database{

    private $servername;
    private $database;
    private $username;
    private $password;
    private $conn;


    // geef de waardes mee aan de construct 
    public function __construct() {
        $this->servername = 'localhost';
        $this->database = 'hotel';
        $this->username = 'root';
        $this->password = '';
    
        try{
            // targeting the database using server name and database
            $dsn="mysql:host=$this->servername; dbname=$this->database";
            $this->conn = new PDO($dsn, $this->username, $this->password);
    
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        }  catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function medewerker_login($username, $wachtwoord) {
        // id, username en password ophalen van de database voor gegeven username en password  
    $sql = "SELECT id, gebruikersnaam, wachtwoord FROM medewerker WHERE gebruikersnaam = :gebruikersnaam"; 
    
    // prepare
    $stmt = $this->conn->prepare($sql);
    // execute
    $stmt->execute([
        'gebruikersnaam' => $username
    ]);
    // fetch sql statement 
    $result = $stmt->fetch(PDO::FETCH_ASSOC); //fetchdatahere
    print_r($result);
    print_r($result['wachtwoord']); // used for hashed_password validation (password_verify)
    if (is_array($result)){  // if statment checkt als het een array is 
       if(password_verify($wachtwoord, $result['wachtwoord'])){
       }
       print_r($wachtwoord);
       echo "checkpoint 1";
        if(count($result)> 0){  // is het gelijk met de resultaat met de login, dan log het je in
        // check of de ingevoerde username en password overeen komt met de gegevens in de database
            if($username == $result['gebruikersnaam'] && password_verify($wachtwoord, $result['wachtwoord'])){ // && means both of them have to be true    == means is/ identical too     
                $_SESSION['id'] = $result['id'];
                $_SESSION['username'] = $result['gebruikersnaam'];
                // als hij correct inlogt dan gaat hij naar je index.php
                header("location: ..\index.php");
                echo "checkpoint 2";
            }
        }else{
            echo"failed to login";
        }

    }else{
        echo 'Incorrect password or username please make sure to reread everything ';
        }
    }
    public function update_or_delete($statement, $named_placeholder){
        // if you have errors, make sure to pass third argument to location parameter, (check conn / dbh)    
        $stmt = $this->conn->prepare($statement);
        $stmt->execute($named_placeholder);
        header('location: medewerkeroverzicht.php');
        exit();
      }
    public function select($statement, $named_placeholder){
        $stmt = $this->conn->prepare($statement);
        $stmt->execute($named_placeholder); //['uname'=>$username]
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function add_reservering($statement, $named_placeholder, $location){ 
            $stmt = $this->conn->prepare($statement);
            $stmt->execute($named_placeholder);
            header('location: reserveringoverzicht.php');
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            exit();
          }
 }

    


?>