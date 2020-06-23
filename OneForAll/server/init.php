<!-- Statement of Authorship “I, Ayub Ali, student number 000354446, certify that this material is my original work. No other person's work has been used without due acknowledgement and I have not made my work available to anyone else. -->
<?php
    include 'database/connect.php';
    include 'classFiles/user.php';
    

    global $dbh;

    session_start();
    
    $userClass = new User($dbh);
?>