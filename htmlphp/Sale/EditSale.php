<!DOCTYPE html>
<?php
require '../../php/classes/Pdo/connection.php';

$id = $_GET['id'];
$sql='SELECT * FROM sale WHERE id=:id';
$statement = $conn->prepare($sql);
$statement -> execute([':id' => $id]);
$soldListings = $statement->fetch(PDO::FETCH_OBJ);


if (isset($_POST['date']) && ($_POST['agent_id']) && ($_POST['customer_id']) && ($_POST['listing_id']) && ($_POST['price'])){
    $date = $_POST['date'];
    $agent = $_POST['agent_id'];
    $buyer = $_POST['customer_id'];
    $listingID = $_POST['listing_id'];
    $price = $_POST['price'];
    $sql = 'UPDATE sale SET date=:date, agent_id=:agent, customer_id=:buyer, listing_id=:listingId, price=:price';
    $statement = $conn->prepare($sql);
    
    if ($statement->execute([':date'=>$date, ':agent'=>$agent, ':buyer'=>$buyer, ':listingId'=>$listingID,':price'=>$price])){
        header("Location: ReadSale.php");
    }
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <link href="css.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div class="container">
    <div class="row h-25 d-inline-block"></div>
    <div class="row">
        <div class="col-md-7">
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
            </ul>
        </div>
        <div class="col-md-5">
            <a href="Homepage.php"><img src="../images/logo.png" max-width="400px" alt="Logo"/></a>

        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="ReadSale.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="InsertSale.php">Create New Sold Properties <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
</div>
<div class="container">
    <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Update Sold Properties</h3>
        
        <div class="card-body"> 
            
                <form method="post">
                    
                    <div class="form-group row col-auto">
                        <label for="type" class="col-sm-2  col-form-label-sm">Date</label>
                        <div class="col-sm-10">
                            <input value="<?= $soldListings->date; ?>" type="text" class="form-control form-control-sm" id="date" name="date">
                        </div>
                    </div>
                    <div class="form-group row col-auto">
                        <label for="type" class="col-sm-2  col-form-label-sm">Agent</label>
                        <div class="col-sm-10">
                            <input value="<?= $soldListings->agent_id; ?>" type="text" class="form-control form-control-sm" id="agent_id" name="agent_id">
                        </div>
                    </div>
                    <div class="form-group row col-auto">
                        <label for="type" class="col-sm-2  col-form-label-sm">Buyer</label>
                        <div class="col-sm-10">
                            <input value="<?= $soldListings->customer_id; ?>" type="text" class="form-control form-control-sm" id="customer_id" name="customer_id">
                        </div>
                    </div>
                    <div class="form-group row col-auto">
                        <label for="type" class="col-sm-2  col-form-label-sm">Listing ID</label>
                        <div class="col-sm-10">
                            <input value="<?= $soldListings->listing_id; ?>" type="text" class="form-control form-control-sm" id="listing_id" name="listing_id">
                        </div>
                    </div>
                    <div class="form-group row col-auto">
                        <label for="type" class="col-sm-2  col-form-label-sm">Price Sold</label>
                        <div class="col-sm-10">
                            <input value="<?= $soldListings->price; ?>" type="text" class="form-control form-control-sm" id="price" name="price">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm btn-lg">
                        <input type="submit" value="Update Sold Properties" class="btn btn-danger btn-rounded btn-sm my-0 text-center col-auto float-right" id="btn-colour"/>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--<script src="js/Listing.js"></script>-->
</body>
</html>
<!-- Editable table -->
