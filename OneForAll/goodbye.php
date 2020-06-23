<!-- Statement of Authorship “I, Ayub Ali, student number 000354446, certify that this material is my original work. No other person's work has been used without due acknowledgement and I have not made my work available to anyone else. -->

<?php
    include 'server/init.php';
    $user = $_SESSION['userID'];
    
    if(empty($user)){
        sleep(2);
        header('Location: index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Good Bye</title>
</head>
<body>
    <h1>Its sad to see you leave us!</h1>
    <p>Remember Your is deleted and there is no way to get it back.</p>
</body>
</html>