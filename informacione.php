<?php 

    include("teperbashketa/fillimi.php");
?>
    
    <div id="content">
       <div class="container">                   
    <?php
	
	          if(isset($_GET['id_b'])){							  
	                $id= $_GET['id_b'];							    
	                $barna = "select * from barna where Nr_seri=$id ";
					$r=mysqli_query($lidhja,$barna);
					$rez=mysqli_fetch_array($r);
                    $emri = $rez['Emri_b'];
                    $pershkrim = $rez['Pershkrim'];
                    $foto = $rez['Foto_b'];
                    $cmimi = $rez['Cmimi'];
	?>
                              
                               <div class="clas1">
                                 <img class="img-responsive" src="menaxher/foto/<?php echo $foto; ?>" alt="produkti 1.1">
							   </div> 
								
                                <div class="clas2">
 								   <h4> <?php echo $emri; ?> </h4>							
                                   <h5>Pershkrim<p><?php echo $pershkrim; ?> </p></h5>
                                     
								   
                           <form action="ruaj.php?id_b=<?php echo $id; ?>"  method="post">
                               <div class="form-group">
                                   
                                   <div class="col-md-3">
								   <label>Sasia
                                          <select name="sasia"class="form-control">
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
               <?php } ?>
               <br>
			   <br>
			   <hr>
               <div>
                   <div class="col-sm-9">
				   <div class="col-md-6">
                           <h3 >Sugjerime</h3>
                      
                   
                   <?php 
                   
                    $barnat = "select * from barna LIMIT 2";
                             
                            $realizo = mysqli_query($lidhja,$barnat);
                             
                            while($rresht=mysqli_fetch_array($realizo)){
                                
                                $id = $rresht['Nr_seri'];
        
                                $emri = $rresht['Emri_b'];

                                $pershkrim = $rresht['Pershkrim'];

                                $foto = $rresht['Foto_b'];
                                $cmimi = $rresht['Cmimi'];
                                echo "
                                
                                    <div class='col-md-6 col-sm-6 center-responsive'>
                                    
                                        <div class='product'>
                                        
                                            <a href='informacione.php?id_b=$id'>
                                            
                                                <img class='img-responsive' src='menaxher/foto/$foto'>
                                            
                                            </a>
                                            
                                            <div class='text'>
                                            
                                                <h3>
                                                
                                                    <a href='informacione.php?id_b=$id'> $emri </a>
                                                
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