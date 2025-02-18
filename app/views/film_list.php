<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Film List</h1>
    <?php foreach ($data as $film) {
    echo $film->title . " " . $film->description . "<br>";
}
?>

</body>
</html>