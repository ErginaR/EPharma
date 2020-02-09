<?php 

    if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('hyr.php','_self')</script>";
        
    }else{

?>
   
<?php 

    if(isset($_SESSION['email'])){
        
        $email = $_SESSION['email'];
        
        $menaxheri = "select * from menaxher where email='$email'";
        
        $realizo = mysqli_query($lidhja,$menaxheri);
        
        $rresht = mysqli_fetch_array($realizo);
        
        $id = $rresht['id'];
        
        $emri = $rresht['emri'];
        
        $fjalekalim = $rresht['fjalekalimi'];
        
        $qyteti = $rresht['qyteti'];
        
        $nr_cel = $rresht['nr_cel'];
        
        
    }

?>
    
<h3>Modifiko Profilin</h3>
       
<div class="row">
    
    <div class="col-lg-12">
        
        <div class="panel panel-default">
           <div class="panel-body">
               
               <form method="post">
                   
                   <div>
                       
                      <label >Emri <input value="<?php echo $emri; ?>" name="emri" type="text" required></label> 
                     
                   </div>
                   
                   <div>
                       
                      <label> E-mail <input value="<?php echo $email; ?>"  name="email" type="text" required></label> 
                    
                          
                          
                   </div>
                   
                   <div>
                       
                      <label> Fjalekalimi <input value="<?php echo $fjalekalim; ?>"  name="fjalekalimi" type="text"  required></label> 
                      
                   </div>
                   
                   <div>
                       
                      <label> Qyteti <input value="<?php echo $qyteti; ?>"  name="qyteti" type="text" required> </label> 
                     
                   </div>
                   
                   <div>
                       
                      <label> Nr Cel<input value="<?php echo $nr_cel; ?>"  name="nr_cel" type="text"required> </label> 
                      
                      
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
    
    $emri_m = $_POST['emri'];
    $email_m = $_POST['email'];
    $fjalekalim_m = $_POST['fjalekalimi'];
    $qytet_m = $_POST['qyteti'];
    $nr_cel_m = $_POST['nr_cel'];
    
    $modifiko = "update menaxher set emri='$emri_m',email='$email_m',fjalekalimi='$fjalekalim_m',qyteti='$qytet_m',nr_cel='$nr_cel_m'";
    $realizoje = mysqli_query($lidhja,$modifiko);
    
    if($realizoje){
        
        echo "<script>alert('Modifikimi u realizua me sukses')</script>";
        echo "<script>window.open('hyr.php','_self')</script>";
        
        session_destroy();
        
    }
    
}

?>


<?php } ?>