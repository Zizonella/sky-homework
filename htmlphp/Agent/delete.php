<?php
require require_once '../../php/classes/Agency/connection.php';
$id = $_GET['id'];
$sql = 'DELETE FROM agent WHERE id=:id';
$statememt = $conn->prepare($sql);
if ($statement->execute([':id' => $id])){
    header("Location: /");
}
