<?php
session_start();
require_once '../../php/classes/Agency/connection.php';

$id = $_GET['id'];
$sql = "SELECT * FROM agent WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->execute([':id' => $id]);


$agent = $stmt->fetch(PDO::FETCH_OBJ);

if (isset($_POST['Update'])) {
    $last_name = $_POST['last_name'];
    $sql = "UPDATE agent SET is_administrator =1 WHERE id=:id";
    $stmt = $conn->prepare($sql);
//    if (
    $stmt->execute([':name = $name',':id'=>$id]);
//    )
//    ) {
//    header("Location:regionindex.php");
//    }

}
//require 'header.php'; ?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Update agent</h2>
        </div>
        <div class="card-body">
            <form method="post">
                <label for="admin">Is Admin</label>
                <input value="<?php $agent->name ?>" type="text" name="last_name" id="name" class="form-control">
                <div class="form-group">
                    <button type="submit" class="btn mt-2 btn-primary btn-rounded btn-danger" name="Update">Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
