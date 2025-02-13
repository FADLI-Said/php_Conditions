<?php

$show = false;
$bloc = "";

if ($show == true) {
    $bloc = '<div id="bloc">
<p>Je suis le bloc visible</p>
</div>
';
} else {
    $bloc = "<p>Le bloc est caché</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php echo "$bloc" ?>
    </div>
</body>
</html>