
<?php
require 'db.php';
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
           
           $sql='INSERT INTO agent(first_name,last_name, password, email, is_administrator,is_employed, salary) VALUES(:first_name, :last_name, :password , :email, :is_administrator, :is_employed, :salary)';
           $statement = $connection-> prepare($sql);
          $statement-> execute([':first_name'=>$first_name, ':last_name'=>$last_name, ':password'=>$password, ':email'=>$email, ':is_administrator'=>$is_administrator,':is_employed'=>$is_employed, ':salary'=>$salary]);
        }



?>


<?php require 'header.php' ?>

 <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                  <h2> Create a agent</h2>  
                
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
                        <input type="text" name="first_name" id="first_name" class="form-control"> 
                        
                    </div> 
                     <div class="form-group">
                        <label for="name">Last name</label> 
                        <input type="text" name="last_name" id="last_name" class="form-control"> 
                        
                    </div>
                     <div class="form-group">
                        <label for="name">Password</label> 
                        <input type="text" name="password" id="password" class="form-control"> 
                        
                    </div>
                     <div class="form-group">
                        <label for="name">Email</label> 
                        <input type="text" name="email" id="email" class="form-control"> 
                        
                    </div>
                     <div class="form-group">
                        <label for="name">Is administrator</label> 
                        <input  type="text" name="is_administrator" id="is_administrator" class="form-control"> 
                        
                    </div>
                     <div class="form-group">
                        <label for="name">Is employed</label> 
                        <input type="text" name="is_employed" id="is_employed" class="form-control"> 
                        
                    </div>
                     <div class="form-group">
                        <label for="name">Salary</label> 
                        <input type="text" name=" salary" id=" salary" class="form-control"> 
                        
                         </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Create an agent</button>
                        
                    </div>
                </form>
                
                
            </div>
            
            
        </div>    
        
     
    </div>  


<?php require 'footer.php';?>