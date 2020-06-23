<!-- Statement of Authorship “I, Ayub Ali, student number 000354446, certify that this material is my original work. No other person's work has been used without due acknowledgement and I have not made my work available to anyone else. -->
<?php
    include 'init.php';

    $userid = filter_input(INPUT_POST,"userid",FILTER_VALIDATE_INT);

    $command = "DELETE FROM users WHERE userID =".$userid;
    $stmt = $dbh->prepare($command);
    $success = $stmt->execute();
        session_destroy();
        session_unset();
        header('Location: ./index.php');
?>

