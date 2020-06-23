<!-- Statement of Authorship “I, Ayub Ali, student number 000354446, certify that this material is my original work. No other person's work has been used without due acknowledgement and I have not made my work available to anyone else. -->

<?php
    include 'server/init.php';
    if($_SESSION['userID'] == null){
        session_unset();
        session_destroy();
        header('Location: index.php');
    }else{
        $userID = $_SESSION['userID'];
        $user = $userClass->userInfo($userID);
    }    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script src="https://use.fontawesome.com/e2d54e4cc8.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script> 
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    
    <script src="js/profile.js"></script>
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel='stylesheet' type='text/css' href='css/profilecss.php' />
    <title>Profile</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">One For All</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="profile.php">Profile: <?php echo $user->email;?></a>
                </li>
            </ul>
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="server/auth/logout.php">Logout</a>
            </div>
        </div>
    </nav>

    <!-- User Profile information -->
    <div class="container">
        <div class="jumbotron">
            <div class="userImage">
                <div class="userInfoContainer">
                    <img src="https://vignette.wikia.nocookie.net/marvelcinematicuniverse/images/3/35/IronMan-EndgameProfile.jpg/revision/latest/scale-to-width-down/2000?cb=20190423175213"
                        alt="ljlklkj">
                    <h3>User information</h3>
                    <h4><?php echo $user->email;?></h4><br><br>
                    <form id="deleteForm" method="POST">
                        <input type="hidden" name="userid" id="userid" value="<?=$_SESSION['userID']?>">
                        <button type="submit" class="btn btn-danger">Danger</button>
                    </form>
                    <form method="POST">
                        <input type="email" name="updateEmail" placeholder="updateEmail"><br>
                        <a class="btn btn-primary btn-lg" href="#" role="button">Update Email</a>
                    </form>
                </div>
            </div>

            <h1>pick a colour</h1>
            <form id="colorForm" method="POST">
                <input type="color" name = "colorProfile"  id="colorProfile"class="profile-colour">
                <input type="hidden" name="userid" id="userid" value="<?=$_SESSION['userID']?>">
                <button type="submit" class ="color-button" id="color-button">set-color</button>
            </form>
        </div>
    </div>
</body>

</html>