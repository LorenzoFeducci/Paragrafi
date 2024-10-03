<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $size = 20;
        $num = 7;

        for($i = 0; $i < $num; $i++){
            echo "<p style='font-size: $size" . "px'>ciao a tutti</p>";
            $size = $size + 2;
        }
    ?>
</body>
</html>