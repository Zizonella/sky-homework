<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculate Mortgage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
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
    <link rel="stylesheet" href="css/calculateMortgage.css">
</head>


<body>
<?php
//require_once '../php/classes/Agency/connection.php';
//
//try {
//    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//} catch (PDOException $e) {
//    echo $e->getMessage();
//    die();
//}
if (isset($_POST['Calculate'])) {
    $amount = $_POST['amount'];
    $period = $_POST['period'];
    $rate = $_POST['rate'];
    $months = ($period * 12);
    $answer = ($amount * ($rate / 100)) / 12;
    $answer_two = ($amount * (($rate / 12) / 100) / (1 - pow(1 + (($rate / 12) / 100), -$months)));

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
<div class="card justify-content-center">
    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Mortgage calculator</h3>
</div>
<!--    <div class="col-md-8 mx-auto">-->
        <form method="post" action="calculateMortgage.php" class=""col-md-6 mx-auto"">
            <div class="form-group row">
                <div class="form-group col-md-4">
                    <label for="amount">Mortgage Amount</label>
                    <input type="text" class="loan-amount" id="amount" name="amount" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="rate">Interest rate %</label>
                    <input type=text class="loan-interest" name="rate" id="rate" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="period">Period in years</label>
                    <input type=text class="loan-term" name="period" id="period" required>
                </div>
            </div>
            <button class="btn btn-danger btn-rounded col-md-g mx-auto" name="Calculate"> Calculate</button>
        </form>

<!--    </div>-->
<div class="row justify-content-center"><h3><?php echo 'Your monthly mortgage will be: '. round($answer_two, 0,PHP_ROUND_HALF_UP) . '£' ; ?></h3></div>

</body>
</html>