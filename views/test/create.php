<?php include __DIR__ . "/../../Controllers/test/index.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test | Create</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div class="container mt-2">
        <form action="/test/controllers/test/create.php" method="POST">
            <div class="form-row">
                <label for="subject">Subject : </label>
                <select name="subject" id="subject" class="form-control">
                    <?php foreach ($results as $result) { ?>
                        <option value="<?= $result->id; ?>"><?= $result->name; ?></option>
                    <?php }; ?>
                </select>
            </div>

            <div class="form-row mt-2">
                <label for="body">Question : </label>
                <textarea name="body" id="body" rows="5" placeholder="Question..." class="form-control"></textarea>
            </div>

            <div class="form-row mt-2">
                <label for="body">Correct Answer : </label>
                <input name="answer" id="answer" placeholder="Answer..." class="form-control"></textarea>
            </div>

            <div class="form-row mt-3">
                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </div>
        </form>
    </div>
</body>

</html>