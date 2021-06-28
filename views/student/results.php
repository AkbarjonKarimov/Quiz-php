<?php include __DIR__ . "../../../Controllers/StudentController.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($results as $k => $result) : ?>
    <h2><?= ++$k . ". " . $result->name . " - " . $result->percentage; ?>%</h2>
    <?php endforeach; ?>
</body>

</html>