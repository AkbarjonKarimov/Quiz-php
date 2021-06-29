<?php
include 'Controllers/subject/index.php';
include 'Controllers/subject/create.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-success mt-2" data-toggle="modal" data-target="#exampleModal">
                    Create Subject
                    <span>&plus;</span>
                </button>
                <button onclick="location.href='views/test/create.php'" class="btn btn-success mt-2">Create Test <span>&plus;</span></button>


                <table class="table table-striped table-hover mt-2">
                    <thead class="th-dark">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $res) { ?>
                            <tr>
                                <td><?= $res->id; ?></td>
                                <td><?= $res->name ?></td>
                                <td>
                                    <a href="?id=<?php echo $res->id; ?>" class="btn-btn-succes" data-toggle="modal" data-target="#edit" <?php echo $res->id ?>><i class="fa fa-edit"></i></a>
                                    <a href="controllers/subject/delete.php?id=<?= $res->id ?>" class="btn-btn-danger" onclick="return confirm('Are you sure?')">
                                        <i class="fa fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <!-- Modal Create -->
                            <!-- Modal Edit
                            <div class="modal fade" id="edit<?php $res->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
                                <div class="modal-dialog">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit subject</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="?id=<?php $res->id; ?>" method="post">
                                            <div class="form-group">
                                                <small>name</small>
                                                <input type="text" class="form-control" name="name" value="<?php $res->name; ?>">
                                            </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="edit">Save</button>
                                        </form>
                                    </div>
                                </div>
                            </div> -->
                            <!-- Modal Edit -->
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Create -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="controllers/subject/create.php" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-row">
                            <div class="col-12">
                                <label for="subject_name">Subject Name : </label>
                                <input type="text" id="subject_name" name="name" placeholder="Subject Name..." class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="add">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal Edit -->
    <div class="modal fade" id="edit<?php $res->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit subject</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="?id=<?php $res->id; ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" value="<?php $res->name; ?>">
                        <input type="text" id="subject_name" name="name" placeholder="Subject Name..." class="form-control">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="edit">Save</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Edit -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>