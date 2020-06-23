<?php
//<!-- Statement of Authorship “I, Ayub Ali, student number 000354446, certify that this material is my original work. No other person's work has been used without due acknowledgement and I have not made my work available to anyone else. -->

// Resource
// 1. https://css-tricks.com/css-variables-with-php/

// This page was meant to allow for the user to change there background color. Any time they wanted.
// Currently it doesn't work. The first attempt change the background from the data in the sql db in the 
// colour tables. Ideally I wanted it to change for the user per user id. However I ran out of time.
    header("Content-type: text/css; charset: UTF-8");
    include '../server/init.php';

    $command = "SELECT colourChoice FROM colour";
    $stmt = $dbh->prepare($command);
    $success = $stmt->execute();

    $backgroundColor = $stmt->fetch($dbh::FETCH_ASSOC);
    $color = $backgroundColor["colourChoice"];

    
?>

div.jumbotron{
    background-color:<?php echo $color;?>;
}