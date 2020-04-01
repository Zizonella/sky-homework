<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Delete Region</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/Listing.css">
</head>
<body>
<?php


require_once '../php/classes/Agency/connection.php';

$id = '';
$name ='';
if (isset($_POST['Submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
//    $sql = "INSERT INTO region (id, name) VALUES ('" . $region->getId() . "', '" . $region->getName() . "')";
//    $sql = "INSERT INTO region (name) VALUES ('$name')";
    $sql = "INSERT INTO region (id, name) VALUES ('$id', '$name')";
//    echo $sql;
    $stmt = $conn->exec($sql);
    $_SESSION['message'] = "Record has been saved";
    $_SESSION['msg_type'] = "success";
}
if (isset($_POST['Edit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $sql = "UPDATE region SET name = '$name' WHERE id = $id";

    $stmt = $conn->exec($sql);
    $_SESSION['message'] = "Record has been updated";
    $_SESSION['msg_type'] = "success";
}
//use post instead of $_GET
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM region WHERE id = $id";
//    echo $sql;
    $stmt = $conn->query($sql);
    $_SESSION['message'] = "Record has been deleted";
    $_SESSION['msg_type'] = "danger";
}

if (isset($_GET['view'])){
    $id = $_GET['view'];
    $statement = $conn->query("SELECT * FROM region WHERE id = $id ");
    if ($statement->rowCount() == 1) {
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        $name = $row['name'];
    }
}

?>
<?php
if (isset($_SESSION['message'])) :?>
<div class="alert alert -<?=$_SESSION['msg_type']?>
<? echo $_SESSION['message'];
unset($_SESSION['message']); ?>


"></div>
<?php endif; ?>
<div>
    <div class="row h-25 d-inline-block"></div>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
               aria-controls="pills-home" aria-selected="true">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
               aria-controls="pills-profile" aria-selected="false">About us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
               aria-controls="pills-contact" aria-selected="false">Contact us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
               aria-controls="pills-contact" aria-selected="false">Login</a>
        </li>
        <div class="col-md-3"></div>
        <li class="nav-item">
            <a href="Homepage.php"><img src="images/logo.png" width="400px" alt="Logo"/></a>
        </li>
    </ul>
</div>

<div class="card justify-content-center">
    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Region</h3>
<!--    <div class="card-body">-->
        <!--        <div id="table" class="table-editable">-->
        <table class="table table-bordered table-responsive-md table-striped text-center">
            <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Name</th>
                <th colspan="2">Actions</th>
            </tr>
            </thead>


            <?php
            $result = $conn->query("SELECT * FROM region");
            while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><a href="EditDeleteRegioncrud.html.php?view=<?php echo $row['id']; ?>"
                           class="btn btn-info">Edit</a></a>
                        <a href="EditDeleteRegioncrud.html.php?delete=<?php echo $row['id']; ?>"
                           class="btn btn-danger">Delete</a></a> </td>
                </tr>
            <?php endwhile; ?>
        </table>
        <!--        </div>-->
<!--    </div>-->
</div>
<div class="row justify-content-center">
    <form method="post" action="EditDeleteRegioncrud.html.php">
        <div class="form-group row col-auto">
            <label for="id" class="col-sm-6  col-form-label-sm">Id</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="id"
                       value ="<?php echo $id ?>" name="id">
            </div>
        </div>
        <div class="form-group row col-auto">
            <label for="name" class="col-sm-6  col-form-label-sm">Region</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="name"
                       value ="<?php echo $name ?>"name="name">
            </div>
        </div>
        <div class="form-group row">
            <button type="submit" class="btn btn-primary btn-rounded btn-danger" name="Submit">Submit</button>
        </div>
    </form>
</div>
<?php $conn = null; ?>

<!--<td>
                                <a onclick="return confirm('Are you sure you want to remove this entry?')"href="RemoveType.php?id= <?= $typeOption->id ?> "><span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span></a>
                            </td> -->
</body>
</html>