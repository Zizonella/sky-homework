
<?php
require 'db.php';
$id =$_GET['id'];
$sql = 'SELECT * FROM agent WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id'=>$id]);
$agents = $statement->fetch(PDO::FETCH_OBJ);

$message ='';
if (isset ($_POST['first_name']) && isset ($_POST['last_name']) && isset ($_POST['password']) && isset ($_POST['email']) 
        && isset ($_POST['is_administrator']) && isset ($_POST['is_employed'])  && isset ($_POST['salary']) ){
            
           $first_name= $_POST['first_name'];
           $last_name= $_POST['last_name'];
           $password= $_POST['password'];
           $email= $_POST['email'];
           $is_administrator= $_POST['is_administrator'];
           $is_employed= $_POST['is_employed'];
           $salary= $_POST['salary'];
           
           $sql='UPDATE agent SET first_name=:first_name, last_name=:last_name, password=:password, email=:email, is_administrator=:is_administrator, is_employed=:is_employed, salary=:salary WHERE id=:id';
           $statement = $connection-> prepare($sql);
        if ($statement->execute([':first_name'=>$first_name, ':last_name'=>$last_name, ':password'=>$password, ':email'=>$email, ':is_administrator'=>$is_administrator,':is_employed'=>$is_employed, ':salary'=>$salary])){
       header("Location: index.php");
         }
         
        
        }



?>


<?php require 'header.php' ?>

 <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                  <h2> Update agent</h2>  
                
            </div>   
            <div class="card-body">
                <?php if(!empty($message)):?>
                <div class ="alert alert-success">
                    <?= $message;?>
                </div>
                <?php endif; ?>
                <form method="post">
                    <div class="form-group">
                        <label for="name">First name</label> 
                        <input value= "<?=$agents->first_name;?>" type="text" name="first_name" id="first_name" class="form-control"> 
                        
                    </div> 
                     <div class="form-group">
                        <label for="name">Last name</label> 
                        <input value= "<?=$agents->last_name;?>" type="text" name="last_name" id="last_name" class="form-control"> 
                        
                    </div>
                     <div class="form-group">
                        <label for="name">Password</label> 
                        <input value= "<?=$agents->password;?>" type="text" name="password" id="password" class="form-control"> 
                        
                    </div>
                     <div class="form-group">
                        <label for="name">Email</label> 
                        <input value= "<?=$agents->email;?>" type="text" name="email" id="email" class="form-control"> 
                        
                    </div>
                     <div class="form-group">
                        <label for="name">Is administrator</label> 
                        <input value= "<?=$agents->is_administrator;?>" type="text" name="is_administrator" id="is_administrator" class="form-control"> 
                        
                    </div>
                     <div class="form-group">
                        <label for="name">Is employed</label> 
                        <input value= "<?=$agents->is_employed;?>" type="text" name="is_employed" id="is_employed" class="form-control"> 
                        
                    </div>
                     <div class="form-group">
                        <label for="name">Salary</label> 
                        <input value= "<?=$agents->salary;?>" type="text" name="salary" id=" salary" class="form-control"> 
                        
                         </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Update agent</button>
                        
                    </div>
                </form>
                
                
            </div>
            
            
        </div>    
        
     
    </div>  

<?php
require 'footer.php';
?>