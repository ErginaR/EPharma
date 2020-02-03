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
             
             <?php 
               
                if(!isset($_GET['kat'])){
             
                      echo "

                       <div class='box'>
                           <h1>Produkte</h1>
                           <p>
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo deleniti accusamus, consequuntur illum quasi ut. Voluptate a, ipsam repellendus ut fugiat minima? Id facilis itaque autem, officiis veritatis perferendis, quaerat!
                           </p>
                       </div>

                       ";
                        
                  
                   }
               
               ?>
               
               <div class="row">
               
                   <?php 
                   
                        
                            
                         if(!isset($_GET['kat'])){
                            
                            $per_page=6; 
                             
                            if(isset($_GET['page'])){
                                
                                $page = $_GET['page'];
                                
                            }else{
                                
                                $page=1;
                                
                            }
                            
                            $start_from = ($page-1) * $per_page;
                             
                            $get_products = "select * from barna order by 1 DESC LIMIT $start_from,$per_page";
                             
                            $run_products = mysqli_query($lidhja,$get_products);
                             
                            while($row_products=mysqli_fetch_array($run_products)){
                                
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
                        
                   ?>
               
               </div>
               
               <center>
                   <ul class="pagination">
					 <?php
                             
                    $query = "select * from barna";
                             
                    $result = mysqli_query($lidhja,$query);
                             
                    $total_records = mysqli_num_rows($result);
                             
                    $total_pages = ceil($total_records / $per_page);
                             
                        echo "
                        
                            <li>
                            
                                <a href='produkte.php?page=1'> ".'Faqja e pare'." </a>
                            
                            </li>
                        
                        ";
                             
                        for($i=1; $i<=$total_pages; $i++){
                            
                              echo "
                        
                            <li>
                            
                                <a href='produkte.php?page=".$i."'> ".$i." </a>
                            
                            </li>
                        
                        ";  
                            
                        };
                             
                        echo "
                        
                            <li>
                            
                                <a href='produkte.php?page=$total_pages'> ".'Faqja e fundit'." </a>
                            
                            </li>
                        
                        ";
                             
					    	}
							
						
					 
					 ?> 
                       
                   </ul>
               </center>
                
                <?php 
               
               
               
               getcatpro();
               
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