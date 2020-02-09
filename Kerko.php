<?php 

    include("teperbashketa/fillimi.php");
     
?>       
   <div id="content">
       <div class="container">
	   
           <?php
           if(isset($_GET['vendos'])){
		      $kerko=$_GET['kerko'];
              $barna_zgj = "select * from barna where Emri_b='$kerko'";                           
              $realizo = mysqli_query($lidhja,$barna_zgj);							
              $nr=mysqli_num_rows($realizo);
        
        if($nr==0){                       
            echo "<div class='box'><h1>Nuk ka te dhena</h1></div>";                  
        }
		else{            
            echo "<div class='box'><h1> $nr te dhena u gjenden </h1></div>"; 
        }
        
        while($rresht=mysqli_fetch_array($realizo)){
            
                                $id = $rresht['Nr_seri'];
        
                                $emri = $rresht['Emri_b'];

                                $pershkrim = $rresht['Pershkrim'];

                                $foto_b = $rresht['Foto_b'];
								
                                $cmimi = $rresht['Cmimi'];
                                echo "
                                
                                    <div class='col-md-4 col-sm-6 center-responsive'>
                                    
                                        <div class='product'>
                                        
                                            <a href='informacione.php?id_b=$id'>
                                            
                                                <img class='img-responsive' src='menaxher/foto/$foto_b'>
                                            
                                            </a>
                                            
                                            <div class='text'>
                                            
                                                <h3>
                                                
                                                    <a href='informacione.php?id_b=$id'> $emri </a>
                                                
                                                </h3>
                                            
                                                <p class='price'>

                                                    $$cmimi

                                                </p>

                                                <p class='buttons'>

                                                    <a class='btn btn-default' href='informacione.php?id_b=$id'>Informacion</a>
                                                    <a class='btn btn-primary' href='informacione.php?id_b=$id'> shto ne shporte</a>
                                                </p>
                                            
                                            </div>
                                        
                                        </div>
                                    
                                    </div>";
         
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