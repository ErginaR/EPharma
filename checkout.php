<?php 

    $active='Account';
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
           
           <?php 
           
           if(!isset($_SESSION['email'])){
               
               include("farmaciste/hyr.php");
               
           }else{
               
               include("pagesa.php");
               
           }
           
           ?>
           
           </div>
           
       </div>
   </div>
   
   <?php 
    
    include("teperbashketa/fundi.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>