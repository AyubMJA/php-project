<!-- 
{Changes Log}
jQuery -- remains the same when dealing with dom manipulations.
Security -- Is also the same. With minor upgrades in protections from sql injections

 MAJOR changes -- Wasn't able to figure out uploading images and returning them on page
                    Decided wasn't worth using up time I didn't have. Instead attempted to allow users 
                    to change change there information such as Updating the database with new email {Implementation}
                    as fully completed. Allowed users to pic there own background color using ajax it was successfull, however
                    did arrive at the point where it can update the database with new colour. Gave user the ability to delete
                    there own account. However after destorying the session afterwards it was determined that the user can get back in
                    if they login again. Even though their userID, password and email was delete from database. 

                    For the Security Audit. I updated by making the PDO $dbh private only.
                    
                    accessable to class filles that are direct children of it
                    Features I wanted 1. Allow users to delete their account fully
                                      2. Allow users to pic their own profile color.
                                      3. Allow user to update email.

 -->
<?php 
    include 'server/init.php';
    if($_SESSION['userID'] !== null){
        header('Location:home.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
    <title>One For all</title>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <?php include 'server/auth/login.php'?>
    </div>
    <div class="signup-container">
        <h1>Signup</h1>
        <?php include 'server/auth/signup.php'?>
    </div>
</body>
</html> 