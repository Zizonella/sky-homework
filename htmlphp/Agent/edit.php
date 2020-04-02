<?php
require_once '../../php/classes/Agency/connection.php';

$id = $_GET['id'];
$sql = 'SELECT * FROM agent WHERE id=:id';
$statement = $conn->prepare($sql);
$statement->execute([':id' => $id]);
$agents = $statement->fetch(PDO::FETCH_OBJ);

if (isset($_POST['Update'])) {
//    ($_POST['first_name']) && isset ($_POST['last_name']) && isset ($_POST['password']) && isset ($_POST['email'])
//    && isset ($_POST['is_administrator']) && isset ($_POST['is_employed']) && isset ($_POST['salary'])) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $is_administrator = $_POST['is_administrator'];
    $is_employed = $_POST['is_employed'];
    $salary = $_POST['salary'];

    $sql = "UPDATE agent SET email=:email,
                 password=:password,
                 first_name=:first_name, 
//                 last_name=:last_name,  
//                 is_administrator=:is_administrator, 
//                 is_employed=:is_employed,
//                 salary=:salary
WHERE id=:id";
    $statement = $conn->prepare($sql);
    if
    ($statement->execute([':email'=>$email,
        ':password'=>$password,
        ':first_name'=>$first_name,
//        ':last_name'=>$last_name,
//        ':is_administrator'=>$is_administrator,
//        ':is_employed'=>$is_employed,
//        ':salary'=>$salary
    ]))

       {
        header("Location:index.php");

    }


}


?>


<?php require '../header.php' ?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2> Update agent</h2>

        </div>
        <div class="card-body">
            <?php if (!empty($message)): ?>
                <div class="alert alert-success">
                    <?= $message; ?>
                </div>
            <?php endif; ?>
            <form method="post">
                <div class="form-group">
                    <label for="name">First name</label>
                    <input value="<?= $agents->first_name; ?>" type="text" name="first_name" id="first_name"
                           class="form-control">

                </div>
                <div class="form-group">
                    <label for="name">Last name</label>
                    <input value="<?= $agents->last_name; ?>" type="text" name="last_name" id="last_name"
                           class="form-control">

                </div>
                <div class="form-group">
                    <label for="name">Password</label>
                    <input value="<?= $agents->password; ?>" type="text" name="password" id="password"
                           class="form-control">

                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input value="<?= $agents->email; ?>" type="text" name="email" id="email" class="form-control">

                </div>

                <div class="form-group row ">
                    <div class="col-sm-2"></div>
                    <label for="is_administrator" class="col-sm-2 col-form-label">Administrator </label>
                    <div class="form-check form-check-inline">
                        <input value="<?= $agents->is_administrator; ?>" class="form-check-input" type="radio" name="is_administrator" id="is_administrator" value="1">
                        <label class="form-check-label" for="inlineRadio1">IN</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input value="<?= $agents->is_administrator; ?>" class="form-check-input" type="radio" name="is_administrator" id="is_administrator" value="0">
                        <label class="form-check-label" for="inlineRadio2">OUT</label>
                    </div>
                </div>
                <div class="form-group row ">
                    <div class="col-sm-2"></div>
                    <label for="is_employed" class="col-sm-2 col-form-label">Employed </label>
                    <div class="form-check form-check-inline">
                        <input value="<?= $agents->is_employed; ?>" class="form-check-input" type="radio" name="is_employed" id="is_employed" value="1">
                        <label class="form-check-label" for="inlineRadio1">IN</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input value="<?= $agents->is_employed; ?>" class="form-check-input" type="radio" name="is_employed" id="is_employed" value="0">
                        <label class="form-check-label" for="inlineRadio2">OUT</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name">Salary</label>
                    <input value="<?= $agents->salary; ?>" type="text" name="salary" id="salary" class="form-control">

                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info" name = "Update">Update agent</button>

                </div>
            </form>


        </div>


    </div>


</div>

<?php
//require 'footer.php';
?>