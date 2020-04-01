<?php
require '../../php/classes/Pdo/connection.php';
$id = $_GET['id'];
$sql = 'DELETE FROM listing_type WHERE id=:id';
$statement = $conn->prepare($sql);
if ($statement->execute([':id' => $id])){
    header("Location: ReadType.php"); 
}






