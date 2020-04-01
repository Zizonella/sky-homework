<?php
require_once '../../php/classes/Agency/connection.php';
$sql = "SELECT * FROM region";
$stmt = $conn->prepare($sql);
$stmt->execute();
$region = $stmt->fetchAll(PDO::FETCH_OBJ);

require '../header.php';
require 'region.header.php'?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Region</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>id</th>
                    <th>region</th>
                    <th>Actions</th>
                </tr>
                <?php foreach ($region as $reg): ?>
                <tr>
                    <td><?php echo $reg->id; ?></td>
                    <td><?php echo $reg->name; ?></td>
                    <td><a href="edit.php?id=<?php echo $reg->id; ?>"
                           class="btn btn-info">Edit</a></a>
                        <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?php echo $reg->id; ?>"
                           class="btn btn-danger">Delete</a></a> </td>
                </tr>
                <?php endforeach; ?>

            </table>
        </div>
    </div>
</div>