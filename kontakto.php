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
                       
                       <center>
                           
                           <h2> Na kontaktoni</h2>
                           
                           
                       </center>
                       
                       <form action="kontakto.php" method="post">
                           
                           <div class="form-group">
                               
                               <label>Emri</label>
                               
                               <input type="text" class="form-control" name="name" required>
                               
                           </div>
                           
                           <div class="form-group">
                               
                               <label>Email</label>
                               
                               <input type="text" class="form-control" name="email" required>
                               
                           </div>
                           
                           <div class="form-group">
                               
                               <label>Titulli</label>
                               
                               <input type="text" class="form-control" name="subject" required>
                               
                           </div>
                           
                           <div class="form-group">
                               
                               <label>Mesazhi</label>
                               
                               <textarea name="message" class="form-control"></textarea>
                               
                           </div>
                           
                           <div class="text-center">
                               
                               <button type="submit" name="submit" class="btn btn-primary">Dergo</button>
                            
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