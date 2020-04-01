<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listing Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/Listing.css">
</head>
<body>

<?php
require_once '../php/classes/Agency/connection.php';

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




//    $sql = "INSERT INTO region (id, name) VALUES ('" . $region->getId() . "', '" . $region->getName() . "')";
    $sql = "INSERT INTO listing (region_id, postcode, bedrooms, bathrooms, listing_type_id, has_garden, has_parking,
                                 sold, asking_price) VALUES ('$region', '$postcode', '$bedrooms',' $bathrooms',' $listing_type',' $garden',' $parking', '$sold', '$asking_price')";
//    echo $sql;
    $stmt = $conn->exec($sql);
}
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM listing WHERE id = $id";
//    echo $sql;
    $stmt = $conn->query($sql);
}

?>
<div>
    <div class="row h-25 d-inline-block"></div>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
               aria-controls="pills-home" aria-selected="true">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
               aria-controls="pills-profile" aria-selected="false">About us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
               aria-controls="pills-contact" aria-selected="false">Contact us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
               aria-controls="pills-contact" aria-selected="false">Login</a>
        </li>
        <div class="col-md-3"></div>
        <li class="nav-item">
            <a href="Homepage.php"><img src="images/logo.png" width="400px" alt="Logo"/></a>
        </li>
    </ul>
</div>

<h3><?php echo date('Y-m-d h:g:s') ?></h3>
<div class="card justify-content-center">
    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Listing</h3>

    <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
        <tr>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Region ID</th>
            <th class="text-center">Postcode</th>
            <th class="text-center">Bedroom</th>
            <th class="text-center">Bathroom</th>
            <th class="text-center">Type</th>
            <th class="text-center">Garden</th>
            <th class="text-center">Parking</th>
            <th class="text-center">Sold</th>
            <th class="text-center">Asking price</th>
            <th colspan="2">Actions</th>
        </tr>
        </thead>


        <?php
        $result = $conn->query("SELECT * FROM listing");
        while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['region_id']; ?></td>
                <td><?php echo $row['postcode']; ?></td>
                <td><?php echo $row['bedrooms']; ?></td>
                <td><?php echo $row['bathrooms']; ?></td>
                <td><?php echo $row['listing_type_id']; ?></td>
                <td><?php echo $row['has_garden']; ?></td>
                <td><?php echo $row['has_parking']; ?></td>
                <td><?php echo $row['sold']; ?></td>
                <td><?php echo $row['asking_price']; ?></td>

                <td><a href="Listingb.html.php?edit=<?php echo $row['id']; ?>"
                       class="btn btn-info">Edit</a></a>
                    <a href="Listingb.html.php?delete=<?php echo $row['id']; ?>"
                       class="btn btn-danger">Delete</a></a> </td>
            </tr>
        <?php endwhile; ?>
    </table>
    <!--        </div>-->
    <!--    </div>-->
</div>

<div class="row justify-content-center">
    <form method="post" action="Listingb.html.php">
        <div class="form-group row col-auto">
            <label for="Region" class="col-sm-6  col-form-label-sm">Region</label>
            <div class="col-sm-10">
                <select class="form-control form-control-sm" id="Region" name="region_id" size="1" autofocus>
                    <option value="1">North</option>
                    <option value="2">West</option>
                    <option value="3">South</option>
                    <option value="4">East</option>
                    <option value="5">Central</option>
                </select>
            </div>
        </div>
        <div class="form-group row col-auto">
            <label for="Postcode" class="col-sm-6  col-form-label-sm">Postcode</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="Postcode" name="postcode">
            </div>
        </div>
        <div class="form-group row col-auto">
            <label for="Bedroom" class="col-sm-6  col-form-label-sm">Bedroom</label>
            <div class="col-sm-10">
                <select class="form-control form-control-sm" id="Bedroom" name="bedrooms">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5+</option>
                </select>
            </div>
        </div>
        <div class="form-group row col-auto">
            <label for="Bathroom" class="col-sm-6  col-form-label-sm">Bathroom</label>
            <div class="col-sm-10">
                <select class="form-control form-control-sm" id="Bathroom" name="bathrooms">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3+</option>
                </select>
            </div>
        </div>
        <div class="form-group row col-auto">
            <label for="Type" class="col-sm-6  col-form-label-sm">Type</label>
            <div class="col-sm-10">
                <select class="form-control form-control-sm" id="Type" name="listing_type_id">
                    <option value="1">cottage</option>
                    <option value="2">flat</option>
                    <option value="3">house</option>
                    <option value="4">bungalow</option>
                </select>
            </div>
        </div>
        <div class="form-group row col-auto">
            <label for="Garden" class="col-sm-6  col-form-label-sm">Garden</label>
            <div class="col-sm-10">
                <select class="form-control form-control-sm" id="Garden" name="has_garden">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
        </div>
        <div class="form-group row col-auto">
            <label for="Parking" class="col-sm-6  col-form-label-sm">Parking</label>
            <div class="col-sm-10">
                <select class="form-control form-control-sm" id="Parking" name="has_parking">
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
            </div>
        </div>
        <div class="form-group row col-auto">
            <label for="Sold" class="col-sm-6  col-form-label-sm">Sold</label>
            <div class="col-sm-10">
                <select class="form-control form-control-sm" id="Sold" name="sold">
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
            </div>
        </div>

        <div class="form-group row col-auto">
            <label for="AskingPrice" class="col-sm-6  col-form-label-sm">Asking Price</label>
            <div class="col-sm-10">
                <input type="number" class="form-control form-control-sm" id="AskingPrice" name="asking_price">
            </div>
        </div>
        <div class="form-group row">
            <button type="submit" class="btn-primary btn-rounded btn-danger" name="Submit"> Submit</button>
        </div>
    </form>
</div>


</body>
</html>
