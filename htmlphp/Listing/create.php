<?php
session_start();
require_once '../../php/classes/Agency/connection.php';
$message = '';
if (isset($_POST['Submit'])) {
    $id = $_POST['id'];
    $region = $_POST['region_id'];
    $postcode = $_POST['postcode'];
    $bedrooms = $_POST['bedrooms'];
    $bathrooms = $_POST['bathrooms'];
    $listing_type = $_POST['listing_type_id'];
    $garden = $_POST['has_garden'];
    $parking = $_POST['has_parking'];
    $sold = $_POST['sold'];
    $asking_price = $_POST['asking_price'];

    $sql = "INSERT INTO listing (
                     region_id,
                     postcode,
                     bedrooms,
                     bathrooms,
                     listing_type_id,
                     has_garden,
                     has_parking,
                     sold, 
                     asking_price) 
 VALUES (
         :region_id,
         :postcode,
         :bedrooms,
         :bathrooms,
         :listing_type_id,
         :has_garden,
         :has_parking,
         :sold,
         :asking_price)";

    $stmt = $conn->prepare($sql);
    if ($stmt->execute([
        ':region_id' => intval($region),
        ':postcode' => $postcode,
        ':bedrooms' => intval($bedrooms),
        ':bathrooms' => intval($bathrooms),
        ':listing_type_id' => intval($listing_type),
        ':has_garden' => intval($garden),
        ':has_parking' => intval($parking),
        ':sold' => intval($sold),
        ':asking_price' => intval($asking_price)
    ])) {
        $message = 'data inserted successfully';
    }
}

require '../header.php';
require 'listing.header.php' ?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Create listing</h2>
        </div>
        <div class="card-body">
            <?php if (!empty($message)): ?>
                <h4 class="alert alert-success"><?php echo $message; ?></h4>
            <?php endif; ?>
            <form method="post">
                <div class="form-group">
                    <label for="Region">Region</label>
                    <select class="form-control " id="Region" name="region_id" size="1" autofocus>
                        <option value="1">North</option>
                        <option value="2">West</option>
                        <option value="3">South</option>
                        <option value="4">East</option>
                        <option value="5">Central</option>
                    </select>

                </div>
                <div class="form-group ">
                    <label for="Postcode">Postcode</label>
                    <input type="text" class="form-control" id="Postcode" name="postcode">
                </div>
                <div class="form-group">
                    <label for="Bedroom">Bedroom</label><
                    <select class="form-control form-control-sm" id="Bedroom" name="bedrooms">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5+</option>
                    </select>

                </div>
                <div class="form-group">
                    <label for="Bathroom" class="col-sm-6  col-form-label-sm">Bathroom</label>
                    <div class="col-sm-10">
                        <select class="form-control form-control-sm" id="Bathroom" name="bathrooms">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3+</option>
                        </select>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="Type">Type</label>

                    <select class="form-control" id="Type" name="listing_type_id">
                        <option value="1">cottage</option>
                        <option value="2">flat</option>
                        <option value="3">house</option>
                        <option value="4">bungalow</option>
                    </select>

                </div>
                <div class="form-group ">
                    <label for="Garden">Garden</label>
                    <select class="form-control form-control-sm" id="Garden" name="has_garden">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <div class="form-group ">
                    <label for="Parking">Parking</label>
                    <select class="form-control " id="Parking" name="has_parking">
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>
                </div>
                <div class="form-group ">
                    <label for="Sold">Sold</label>
                    <select class="form-control " id="Sold" name="sold">
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>
                </div>
                <div class="form-group ">
                    <label for="AskingPrice">Asking Price</label>
                    <input type="number" class="form-control" id="AskingPrice" name="asking_price">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn mt-2 btn-primary btn-rounded btn-danger" name="Submit">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>