<?php
require 'db.php';
$sql = 'SELECT * FROM agent';

        $statement = $connection->prepare($sql);
        $statement->execute();
        $agents = $statement->fetchAll(PDO::FETCH_OBJ);
        
        ?>

<?php require_once 'header.php';?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            
            <h2>All agents</h2>
            
        </div>   
        
        <div class="card-body" >
            <table class="table table-bordered">
                
                <tr>
                    <th> ID </th>
                    <th> First name </th> 
                    <th> Last name </th>  
                    <th> Password </th>  
                    <th> Email </th>      
                    <th> Is administrator </th>          
                    <th> Is employed </th>          
                    <th> Salary </th>       
                    <th> Action</th>   
                    
                    
                </tr>
                <?php foreach($agents as $per_agent): ?>
                <tr>
                     <td><?=$per_agent->id?></td> 
                    <td><?=$per_agent->first_name?></td>  
                    <td><?=$per_agent->last_name?></td>   
                     <td><?=$per_agent->password?></td>  
                     <td><?=$per_agent->email?></td>   
                     <td><?=$per_agent->is_administrator?></td>  
                     <td><?=$per_agent->is_employed?></td>  
                     <td><?=$per_agent->salary?></td>  
                     <td>
                         <a href="edit.php?id=<?= $per_agent->id ?>"class="btn btn-info">Edit</a>
                          <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $per_agent->id ?>"class="btn btn-info" >Delete</a>
                        
                     </td> 
                </tr>
                   <?php endforeach; ?>
                
            </table>
            
        </div>
        
    </div>   
    
    
    
</div>

<?php require_once 'footer.php';?>
