<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeWork #2 - MLimani</title>

    <style>
        p {
            text-align: center;
            font-size: 120px;
            margin-top: 38vh;
        }
    </style>

</head>
<body>

    <?php

        $time = date("H");
        $timezone = date("e");

        if ($time < "19") {
            echo "<p>Good morning!</p>";
        } elseif ($time >= "12" && $time < "17") {
            echo "<p>Good afternoon!</p>";
        } elseif ($time >= "17" && $time < "19") {
            echo "<p>Good evening!</p>";
        } elseif ($time >= "19") {
            echo "<p>Good night!</p>";
        } else {
            echo "Have a Good Day!";
        }

    ?>

</body>
</html>