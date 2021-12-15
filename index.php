<?php
//include our connection
include('include/database.php');

$database = new Connection();
$db = $database->open();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Subject</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>
    <div class="container p-3 my-2 border bg-light">
        <h3 class="text"> Course Subject </h3>
        <hr>

        <select class="form-select w-50" aria-label="Default select example">
            <option selected>Select Course</option>
            <option value="1">BSCS</option>
            <option value="2">BSIT</option>
            <option value="3">MIT</option>
        </select>
        <br><br>

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <!-- modal button for adding subject -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_subject">
                    Add Subject
                </button>
            </div>
        </div>


        <div class="container w-150">
            <div class="table-responsive">
                <table class="table table-primary table-striped table-hover mt-3">
                    <thead>
                        <th>No.</th>
                        <th>ID</th>
                        <th>Subject Code</th>
                        <th>Course_Id</th>
                        <th>Course Description</th>
                        <th>Total Units</th>
                        <th>With Lab Components</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        <?php
                        //include connection'
                        $database = new Connection();
                        $db = $database->open();
                        try {
                            $sql = 'SELECT * FROM subjects ORDER BY id ASC';
                            $no = 0;

                            foreach ($db->query($sql) as $row) {
                                $no++;

                        ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['subject_code']; ?></td>
                                    <td><?php echo $row['course_id']; ?></td>
                                    <td><?php echo $row['course_description']; ?></td>
                                    <td><?php echo $row['total_units']; ?></td>
                                    <td><?php echo $row['with_lab_component']; ?></td>

                                    <td align="right">
                                        <a class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#edit_sub<?php echo ['id']; ?>">Edit</a>
                                        <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete_sub<?php echo ['id']; ?>">Delete</a>
                                    </td>
                                    <?php include('functions/view_delete_sub.php'); ?>
                                    <?php include('functions/view_edit_sub.php'); ?>

                                </tr>
                        <?php
                            }
                        } catch (PDOException $e) {
                            echo "There is some problem in connection: " . $e->getMessage();
                        }
                        $database->close() ?>
                    </tbody>






                </table>
            </div>

        </div>
        <footer>
            <h4> BARBERAN, CASSANDRA S. (BSCS 3-B) </h4>
        </footer>
    </div>
    <?php include('functions/view_add_sub.php') ?>

    <!--JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>