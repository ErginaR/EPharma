<div class="box">
    
      <center>
          
          <h1>Hyr </h1> 
          
      </center>
      
  <form method="post" action="kontrollo.php">
      
      <div>
          
          <label> Email&nbsp&nbsp&nbsp <input name="email" type="text" required></label>
          
      </div>
     
       <div>
          
          <label> Fjalekalimi <input name="flkalim" type="password"  required></label>
          
      </div>
	  
      <div>
          
          <button name="hyr" value="Hyr" class="btn btn-primary"> Hyr</button>
         
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
	
    if($nr_rreshtave==0){
        
        echo "<script>alert('Te dhenat e futura jane gabim')</script>";
        
        exit();
        
    }
    else{
        
        $_SESSION['email']=$email;
        
       echo "<script>alert('Hyrja me sukses'</script>"; 
        
       echo "<script>window.open('produkte.php','_self')</script>";
        
    }
    
}

?>