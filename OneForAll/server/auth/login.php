<!-- Statement of Authorship “I, Ayub Ali, student number 000354446, certify that this material is my original work. No other person's work has been used without due acknowledgement and I have not made my work available to anyone else. -->
<?php 

    $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_STRING);

    if(isset($_POST['login']) and !empty($_POST['login'])){
        if(empty($email) or empty($password)){
            $error = "email and password must be filled in";
        }else{
            if($userClass->loginUser($email, $password) === false){
                $error = "The email or password it wrong Try again.";
            } 
        }
    }
?>
<form method="POST">
    <input type="text" class="email email-login" id ="email" name = "email" placeholder="email"><br>
    <input type="password" class="password" name = "password" placeholder="password"><br>
    <input type="submit" class="login-button" name="login" value="login"/>
    <?php
        if(isset($error)){
            echo $error;
        }
    ?>
</form>