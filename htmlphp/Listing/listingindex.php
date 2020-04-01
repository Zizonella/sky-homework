<?php
require_once '../../php/classes/Agency/connection.php';
$sql = "SELECT * FROM listing";
$stmt = $conn->prepare($sql);
$stmt->execute();
$listing = $stmt->fetchAll(PDO::FETCH_OBJ);

require '../header.php';
require 'listing.header.php' ?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Listing</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Region ID</th>
                    <th>Postcode</th>
                    <th>Bedroom</th>
                    <th>Bathroom</th>
                    <th>Type</th>
                    <th>Garden</th>
                    <th>Parking</th>
                    <th>Sold</th>
                    <th>Asking price</th>
                    <th>Actions</th>
                </tr>
                <?php foreach ($listing as $list): ?>
                <tr>
                    <td><?php echo $list->id; ?></td>
                    <td><?php echo $list->region_id; ?></td>
                    <td><?php echo $list->postcode; ?></td>
                    <td><?php echo $list->bedrooms; ?></td>
                    <td><?php echo $list->bathrooms; ?></td>
                    <td><?php echo $list->listing_type_id; ?></td>
                    <td><?php echo $list->has_garden; ?></td>
                    <td><?php echo $list->has_parking; ?></td>
                    <td><?php echo $list->sold; ?></td>
                    <td><?php echo $list->asking_price; ?></td>
                    <td><a href="edit.php?id=<?php echo $list->id; ?>"
                           class="btn btn-info">Edit</a></a>
                        <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?php echo $list->id; ?>"
                           class="btn btn-danger">Delete</a></a> </td>
                </tr>
                <?php endforeach; ?>

            </table>
        </div>
    </div>
</div>