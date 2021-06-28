<?php include __DIR__ . "../../../Controllers/test/index.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>
    <div class="container">
        <form action="/test/controllers/test/checktest.php" method="POST">
            <?php foreach ($tests as $k => $test) : ?>
                <div class="mt-2">
                    <h3><?= ++$k . ". " . $test->question; ?></h3>
                    <input type="text" id="answer" name="correct_answer[<?= $test->id; ?>]" placeholder="Answer..." class="form-control">
                </div>
            <?php endforeach; ?>

            <div class="mt-2">
                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </div>
        </form>
    </div>
</body>

</html>