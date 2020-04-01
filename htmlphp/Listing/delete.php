<?php
session_start();
$id = $_GET['id'];

require_once '../../php/classes/Agency/connection.php';
$sql = "DELETE from listing WHERE id=:id";
$stmt = $conn->prepare($sql);
if($stmt->execute([':id' => $id])){
    header("Location:listingindex.php");

}


//if (isset($_GET['delete'])) {
//    $id = $_GET['delete'];
//    $sql = "DELETE FROM region WHERE id = $id";
////    echo $sql;
//    $stmt = $conn->query($sql);
//    $_SESSION['message'] = "Record has been deleted";
//    $_SESSION['msg_type'] = "danger";
//}

