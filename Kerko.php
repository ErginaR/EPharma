<?php 

    include("teperbashketa/fillimi.php");
     
?>       
   <div id="content">
       <div class="container">
	   
           <?php
           if(isset($_GET['submit'])){
		      $kerko=$_GET['kerko'];
              $get_products = "select * from barna where Emri_b='$kerko'";
                             
              $run = mysqli_query($lidhja,$get_products);
							
             $count=mysqli_num_rows($run);
        
        if($count==0){
            
            
            echo "
            
                <div class='box'>
                
                    <h1>Nuk ka te dhena</h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
                <div class='box'>
                
                    <h1> $count te dhena u gjenden </h1>
                    
                
                </div>
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run)){
            
                                $pro_id = $row_products['Nr_seri'];
        
                                $pro_title = $row_products['Emri_b'];

                                $pershkrim = $row_products['Pershkrim'];

                                $pro_img1 = $row_products['Foto_b'];
								
                                $cmimi = $row_products['Cmimi'];
                                echo "
                                
                                    <div class='col-md-4 col-sm-6 center-responsive'>
                                    
                                        <div class='product'>
                                        
                                            <a href='informacione.php?pro_id=$pro_id'>
                                            
                                                <img class='img-responsive' src='menaxher/foto/$pro_img1'>
                                            
                                            </a>
                                            
                                            <div class='text'>
                                            
                                                <h3>
                                                
                                                    <a href='informacione.php?pro_id=$pro_id'> $pro_title </a>
                                                
                                                </h3>
                                            
                                                <p class='price'>

                                                    $$cmimi

                                                </p>

                                                <p class='buttons'>

                                                    <a class='btn btn-default' href='informacione.php?pro_id=$pro_id'>

                                                        Informacion

                                                    </a>

                                                    <a class='btn btn-primary' href='informacione.php?pro_id=$pro_id'>

                                                        <i class='fa fa-shopping-cart'></i> shto ne shporte

                                                    </a>

                                                </p>
                                            
                                            </div>
                                        
                                        </div>
                                    
                                    </div>
                                
                                ";
            
        }
        
    }
                   ?>
               
							
				
           </div>
           
       </div>
   
   <?php 
    
    include("teperbashketa/fundi.php");
    
    ?>
    
</body>
</html>