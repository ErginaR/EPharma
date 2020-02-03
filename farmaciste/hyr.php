<div class="box">
    
  <div style="font-align:center">
      
      <center>
          
          <h1>Hyr </h1> 
          
      </center>
      
  </div>
   
  <form method="post" action="checkout.php">
      
      <div >
          
          <label> Email</label>
          
          <input name="email" type="text" required>
          
      </div>
      
       <div>
          
          <label> Fjalekalimi </label>
          
          <input name="flkalim" type="password"  required>
          
      </div>
      <div style="font-align:center">
          
          <button name="hyr" value="Login" class="btn btn-primary">
              
              <i class="fa fa-sign-in"></i> Hyr
              
          </button>
          
      </div>   
      
  </form>
   
  <center>
      
     <a href="rregjistrim.php">
         
         <h4> Ende nuk zoteroni nje llogari? Rregjistrohu tani</h4>
         
     </a> 
      
  </center>
    
</div>

<?php 

if(isset($_POST['hyr'])){
    
    $email = $_POST['email'];
    
    $fjalekalimi = $_POST['flkalim'];
    
    $farmacisti= "select * from farmaciste where Email='$email' AND Fjalekalimi='$fjalekalimi'";
    
    $realizo = mysqli_query($lidhja,$farmacisti);
	
    $nr_rreshtave= mysqli_num_rows($realizo);
	
	$rresht_f=mysqli_fetch_array($realizo);
	
    $Id_fr=$rresht_f['id_farmacistit'];
	
    $porosia = "select * from porosi where Id_klientit='$Id_fr' ";
    
    $realizo_l = mysqli_query($lidhja,$porosia);
    
    $nr_rresht_p = mysqli_num_rows($realizo_l);
    
    if($nr_rreshtave==0){
        
        echo "<script>alert('Te dhenat e futura jane gabim')</script>";
        
        exit();
        
    }
    
    if($nr_rreshtave==1 AND $nr_rresht_p=0){
        
        $_SESSION['email']=$email;
        
       echo "<script>alert('Hyrja me sukses')</script>"; 
        
       echo "<script>window.open('farmaciste/llogaria.php?porosia','_self')</script>";
        
    }else{
        
        $_SESSION['email']=$email;
        
       echo "<script>alert('Hyrja me sukses'</script>"; 
        
       echo "<script>window.open('checkout.php','_self')</script>";
        
    }
    
}

?>