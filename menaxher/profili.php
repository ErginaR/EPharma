<?php 

    if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('hyr.php','_self')</script>";
        
    }else{

?>
   
<?php 

    if(isset($_SESSION['email'])){
        
        $email = $_SESSION['email'];
        
        $get_user = "select * from menaxher where email='$email'";
        
        $run_user = mysqli_query($lidhja,$get_user);
        
        $row_user = mysqli_fetch_array($run_user);
        
        $user_id = $row_user['id'];
        
        $user_name = $row_user['emri'];
        
        $user_pass = $row_user['fjalekalimi'];
        
        $user_country = $row_user['qyteti'];
        
        $user_contact = $row_user['nr_cel'];
        
        
    }

?>
    
<h3>Modifiko Profilin</h3>
       
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post">
                   
                   <div>
                       
                      <label >Emri <input value="<?php echo $user_name; ?>" name="emri" type="text" required></label> 
                     
                   </div>
                   
                   <div>
                       
                      <label> E-mail <input value="<?php echo $email; ?>"  name="email" type="text" required></label> 
                    
                          
                          
                   </div>
                   
                   <div>
                       
                      <label> Fjalekalimi <input value="<?php echo $user_pass; ?>"  name="fjalekalimi" type="text"  required></label> 
                      
                   </div>
                   
                   <div>
                       
                      <label> Qyteti <input value="<?php echo $user_country; ?>"  name="qyteti" type="text" required> </label> 
                     
                   </div>
                   
                   <div>
                       
                      <label> Nr Cel<input value="<?php echo $user_contact; ?>"  name="nr_cel" type="text"required> </label> 
                      
                      
                   <div>
                          <input name="submit" value="Update User" type="submit" class="btn btn-primary form-control">
                          
                      </div>
                       
                   </div>
               </form>
               
           </div>
            
        </div>
        
    </div>
    
</div>


<?php 

if(isset($_POST['submit'])){
    
    $user_name = $_POST['emri'];
    $user_email = $_POST['email'];
    $user_pass = $_POST['fjalekalimi'];
    $user_country = $_POST['qyteti'];
    $user_contact = $_POST['nr_cel'];
    
    $update_user = "update menaxher set emri='$user_name',email='$user_email',fjalekalimi='$user_pass',qyteti='$user_country',nr_cel='$user_contact'";
    $run_user = mysqli_query($lidhja,$update_user);
    
    if($run_user){
        
        echo "<script>alert('Modifikimi u realizua me sukses')</script>";
        echo "<script>window.open('hyr.php','_self')</script>";
        
        session_destroy();
        
    }
    
}

?>


<?php } ?>