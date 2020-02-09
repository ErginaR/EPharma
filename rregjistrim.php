<?php 
    include("teperbashketa/fillimi.php");
?>    
       
   <div id="content">
       <div class="container">
           
           <div class="col-md-3">
   
   <?php 
    
    include("teperbashketa/pjesa_anesore.php");
    
    ?>
               
           </div>
           
           <div class="col-md-9">
               
               <div class="box">
                   
                   <div class="box-header">
                       <h2> Rregjistrohu </h2>
                      
                       <form action="rregjistrim.php" method="post">
                           
                           <div class="form-group">
                               
                               <label>Emri<input type="text" class="form-control" name="emri" required></label>
                         
                           </div>
                           <div class="form-group">
                               
                               <label>Mbiemri<input type="text" class="form-control" name="mbiemri" required></label>
                         
                           </div>
                           <div class="form-group">
                               
                               <label>Email<input type="text" class="form-control" name="email" required></label>
                          
                           </div>
                           
                           <div class="form-group">
                               
                               <label>Fjalekalimi<input type="password" class="form-control" name="fjalekalim" required></label>
                             
                           </div>
                           <div class="form-group">
                               
                               <label>Adresa<input type="text" class="form-control" name="adrese" required></label>
                             
                           </div>
                           <div class="form-group">
                               
                               <label>Qyteti<input type="text" class="form-control" name="qytet" required></label>
                              
                           </div>
                           <div class="form-group">
                               
                               <label>Shteti<input type="text" class="form-control" name="shtet" required></label>
                              
                           </div>
						   <div class="form-group">
                               
                               <label>Kodi postar<input type="text" class="form-control" name="k_postar" required></label>
                              
                           </div>
                           
                           <div class="text-center">
                               
                               <button type="submit" name="rregjistrim" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i>Rregjistrohu
                               
                               </button>
                               
                           </div>
                           
                       </form>
                       
                   </div>
                   
               </div>
               
           </div>
           
       </div>
   </div>
   
   <?php 
    
    include("teperbashketa/fundi.php");
    
    ?>

</body>
</html>
<?php 

if(isset($_POST['rregjistrim'])){
    
    $emri = $_POST['emri'];
	
    $mbiemri = $_POST['mbiemri'];
	
    $emaili = $_POST['email'];
    
    $fjalekalimi = $_POST['fjalekalim'];
    
	$adresa = $_POST['adrese'];
	
    $qyteti = $_POST['qytet'];
    
    $shteti = $_POST['shtet'];
    
    $kodi_p = $_POST['k_postar'];
    
    $shto_klient = "insert into farmaciste (Emri,Mbiemri,Email,Fjalekalimi,Adresa,Qyteti,Shteti,Kodi_postar) values ('$emri','$mbiemri','$emaili','$fjalekalimi','$adresa','$qyteti','$shteti','$kodi_p')";
    
    $rezultati = mysqli_query($lidhja,$shto_klient);
    
    if($rezultati){
        
        $_SESSION['email']=$email;
        
        echo "<script>alert('Sapo u rregjistruat me sukses')</script>";
        
        echo "<script>window.open('index.php','_self')</script>";
        
    }
    
}

?>