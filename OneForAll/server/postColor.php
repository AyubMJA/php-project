<!-- Statement of Authorship “I, Ayub Ali, student number 000354446, certify that this material is my original work. No other person's work has been used without due acknowledgement and I have not made my work available to anyone else. -->

<?php
    include './database/connect.php';
    //Getting the POST Params 
    
    $color = filter_input(INPUT_POST,"colorProfile",FILTER_SANITIZE_STRING);
    $userid = filter_input(INPUT_POST,"userid",FILTER_VALIDATE_INT);

     $command = "INSERT INTO colour (userID,colourChoice) VALUES(?,?)";
     $stmt = $dbh->prepare($command);
     $params = [$userid,$color];
     $success = $stmt->execute($params);
     echo $success;
?> 