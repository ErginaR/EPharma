<?php 

    include("teperbashketa/fillimi.php");
?>
    
    <div id="content">
       <div class="container">                   
    <?php
	
	   
	if(isset($_GET['pro_id'])){							  
	$id= $_GET['pro_id'];							    
	$barna = "select * from barna where Nr_seri=$id ";
									$r=mysqli_query($lidhja,$barna);
									$rez=mysqli_fetch_array($r);
                                    $pro_title = $rez['Emri_b'];

                                    $pershkrim = $rez['Pershkrim'];

                                     $pro_img1 = $rez['Foto_b'];
                                     $cmimi = $rez['Cmimi'];
								  
								  ?>
                              
                               <div class="clas1">
                                 <img class="img-responsive" src="menaxher/foto/<?php echo $pro_img1; ?>" alt="produkti 1.1">
                                   
								</div> 
                                <div class="clas2">
 								   <h4> <?php echo $pro_title; ?> </h4>							
                                   <h5>Pershkrim<p><?php echo $pershkrim; ?> </p></h5>
                                     
								   <?php } ?>
                           <form action="ruaj.php?add_cart=<?php echo $id; ?>"  method="post">
                               <div class="form-group">
                                   
                                   
                                   <div class="col-md-3">
								   <label>Sasia
                                          <select name="sasia" id="" class="form-control">
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                           </select>
                                   </label>
                                    </div>
                                   
                               </div>
                               
                               <p><b>Cmimi<b> $ <?php echo $cmimi; ?></p>
                               
                               <p><button class="btn btn-primary"> Shto ne shporte</button></p>
                               
                           </form>
                           
                             </div>
               
               <br>
			   <br>
			   <br>
               <div>
                   <div class="col-sm-9">
				   <div class="col-md-6">
                           <h3 >Sugjerime</h3>
                      
                   
                   <?php 
                   
                    $get_products = "select * from barna LIMIT 2";
                             
                            $run_products = mysqli_query($lidhja,$get_products);
                             
                            while($row_products=mysqli_fetch_array($run_products)){
                                
                                $pro_id = $row_products['Nr_seri'];
        
                                $pro_title = $row_products['Emri_b'];

                                $pershkrim = $row_products['Pershkrim'];

                                $pro_img1 = $row_products['Foto_b'];
                                $cmimi = $row_products['Cmimi'];
                                echo "
                                
                                    <div class='col-md-6 col-sm-6 center-responsive'>
                                    
                                        <div class='product'>
                                        
                                            <a href='informacione.php?pro_id=$pro_id'>
                                            
                                                <img class='img-responsive' src='menaxher/foto/$pro_img1'>
                                            
                                            </a>
                                            
                                            <div class='text'>
                                            
                                                <h3>
                                                
                                                    <a href='informacione.php?pro_id=$pro_id'> $pro_title </a>
                                                
                                                </h3>
                                            
                                                
                                            
                                            </div>
                                        
                                        </div>
                                    
                                    </div>
                                
                                ";
                       
                   }
                   
                   ?>
                   
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