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
        $customer = "";
        if ( isset( $_POST['customer'] ) ){
        $customer = $_POST['customer'];
        }
        echo "<h1>Thank you for your purchase ".$customer."!</h1>\n";
        echo "<p> You are order #1 </p>\n";
        echo "<p> You will recieve a confirmation email with your purchase</p>\n";
        echo "<p> Enjoy your flowers!</p>\n";
        ?>
    </body>
</html>
