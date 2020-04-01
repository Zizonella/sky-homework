<?php
session_start();
require_once '../../php/classes/Agency/connection.php';

$id = $_GET['id'];
$sql = "SELECT * FROM region WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->execute([':id' => $id]);


$region = $stmt->fetch(PDO::FETCH_OBJ);


if (isset($_POST['Update'])) {

    $name = $_POST['name'];
    $sql = "UPDATE region SET name =:name WHERE id=:id";
    $stmt = $conn->prepare($sql);
    if (
    $stmt->execute([':name'=>$name, ':id'=>$id])
    ) {
    header("Location:regionindex.php");
    }

}
require '../header.php'; ?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Update region</h2>
        </div>
        <div class="card-body">
            <form method="post">
                <label for="name">Region name</label>
                <input value="<?php $region->name ?>" type="text" name="name" id="name" class="form-control">
                <div class="form-group">
                    <button type="submit" class="btn mt-2 btn-primary btn-rounded btn-danger" name="Update">Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
