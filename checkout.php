<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>BTA3OV - 4.5 Assessment: Five Page Web Design</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <?php
        $fname = "";
        if ( isset( $_POST['fname'] ) ){
        $fname = $_POST['fname'];
        }
        echo '<h1 id="thank_you">Thank you for your purchase '.$fname.'!</h1>\n';
        echo '<p id="order"> You are order #1 </p>\n';
        echo '<p id="order"> You will recieve a confirmation email with your purchase</p>\n';
        echo '<p id="order"> Enjoy your flowers!</p>\n';
        ?>
    </body>
</html>
