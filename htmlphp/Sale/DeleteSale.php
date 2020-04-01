<?php
require '../../php/classes/Pdo/connection.php';
$id = $_GET['id'];
$sql = 'DELETE FROM sale WHERE id=:id';
$statement = $conn->prepare($sql);
if ($statement->execute([':id' => $id])){
    header("Location: ReadSale.php"); 
}

