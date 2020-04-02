<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'DELETE FROM people WHERE id=:id';
$statememt = $connection->prepare($sql);
if ($statement->execute([':id' => $id])){
    header("Location: /");
}
