<?php
// I, Ayub Ali, 000354446 certify that this material is my original work. No other person's work has been used without due acknowledgement.
try{
    $dbh = new PDO(
        "mysql:host=localhost;dbname=000354446",
        "root",
        "root");
        
}catch(Exception $e){
    die("ERROR: Couldn't connect. {$e-> getMessage()}");
}