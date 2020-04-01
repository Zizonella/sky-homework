<?php
require_once '../../php/classes/Agency/connection.php';
$message = '';
session_start();

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $sql = "INSERT INTO region (name) VALUES (:name)";
    $stmt = $conn->prepare($sql);
    if (
   $stmt->execute([':name'=>$name])
    ) {
        $message = 'data inserted successfully';
    }
//try{
//    $stmt->execute([':name'=>$name]);
//    echo 'data inserted successfully';
//}
//catch (ExceptionPDO $e){
//    die('Data not inserted' . $e->getMessage());
//}
}
require '../header.php';
require 'region.header.php'?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Create region</h2>
        </div>
        <div class="card-body">
            <?php if (!empty($message)): ?>
                <h4 class="alert alert-success"><?php echo $message; ?></h4>
<!--            else if (is_empty($message)){-->
<!--                <h4 class="alert alert-danger">--><?php //echo 'Not successful'; ?><!--</h4-->
<!--            }-->
            <?php endif; ?>
            <form method="post">
                <label for="name">Region name</label>
                <input type="text" name="name" id="name" class="form-control">
                <div class="form-group">
                    <button type="submit" class="btn mt-2 btn-primary btn-rounded btn-danger" name="Submit">Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>