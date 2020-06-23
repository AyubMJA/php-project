<!-- Statement of Authorship “I, Ayub Ali, student number 000354446, certify that this material is my original work. No other person's work has been used without due acknowledgement and I have not made my work available to anyone else. -->

<?php 
    $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_STRING);

    if(!empty($email) OR !empty($password)){
        if(!filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL)){
            $error = "email is not in the right format";
        }else if(strlen($password) < 5){
            $error = "Password must be ' 5 ' characters long";
        }else{
            if($userClass->checkEmail($email) === true){
                $error = "Another User has this email";
            }else {
                $userClass->signUp($email,$password);
                header('Location: home.php');
            }
        }

    }
?>
<form method="POST" class="signup-form">
    <input type="text" class="email" id ="email" name = "email" placeholder="email">
    <input type="password" class="password" id="password" name = "password" placeholder="password">
    <input class="signup-button" type="submit" name="signup" value="sign up">
    <?php
        if(isset($error)){
            echo $error;
        }
    ?>
</form>