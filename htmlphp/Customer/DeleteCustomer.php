<?php
require '../../php/classes/Pdo/connection.php';
$id = $_GET['id'];
$sql = 'DELETE FROM customer WHERE id=:id';
$statement = $conn->prepare($sql);
if ($statement->execute([':id' => $id])){
    header("Location: ReadCustomer.php"); 
}

