<h1 align="center"> Ndrysho Fjalekalimin </h1>


<form action="" method="post">
    
    <div><!-- form-group Begin -->
        
        <label> Fjalekalimi Vjeter: <input type="text" name="old_pass" class="form-control" required></label>
      </div>
    
    <div>
        
        <label> Fjalekalimi i Ri: <input type="text" name="new_pass" class="form-control" required></label>
        
    </div><!-- form-group Finish -->
    
    <div class="form-group"><!-- form-group Begin -->
        
        <label> Konfirmo Fjalekalimin e Ri:<input type="text" name="new_pass_again" class="form-control" required></label>
        
    </div>
    
    <div class="text-center"><!-- text-center Begin -->
        
        <button type="submit" name="submit" class="btn btn-primary"><!-- btn btn-primary Begin -->
            
            <i class="fa fa-user-md"></i> Update Now
            
        </button><!-- btn btn-primary inish -->
        
    </div><!-- text-center Finish -->
    
</form><!-- form Finish -->
<?php 

if(isset($_POST['submit'])){
    
    $c_email = $_SESSION['email'];
    
    $c_old_pass = $_POST['old_pass'];
    
    $c_new_pass = $_POST['new_pass'];
    
    $c_new_pass_again = $_POST['new_pass_again'];
    
    $sel_c_old_pass = "select * from farmaciste where fjalekalimi='$c_old_pass'";
    
    $run_c_old_pass = mysqli_query($lidhja,$sel_c_old_pass);
    
    $check_c_old_pass = mysqli_fetch_array($run_c_old_pass);
    
    if($check_c_old_pass==0){
        
        echo "<script>alert('Fjalekalimi i pasakte')</script>";
        
        exit();
        
    }
    
    if($c_new_pass!=$c_new_pass_again){
        
        echo "<script>alert('fjalekalimet nuk perputhen')</script>";
        
        exit();
        
    }
    
    $update_c_pass = "update farmaciste set fjalekalimi='$c_new_pass' where Email='$c_email'";
    
    $run_c_pass = mysqli_query($lidhja,$update_c_pass);
    
    if($run_c_pass){
        
        echo "<script>alert('Fjalekalimi sapo u modifikua')</script>";
        
        echo "<script>window.open('llogaria.php?porosia_fr','_self')</script>";
        
    }
    
}

?>