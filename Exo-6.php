<?php

$mode = "dark";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .dark {
            color: white;
            background-color: black;
            border: 1px solid black;
        }

        .light {
            color: black;
            background-color: light-grey;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <div id="myElement" class="<?= $mode ?>">
        <p>Hello World</p>
    </div>
</body>

</html>