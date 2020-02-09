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
                               Ne kete faqe do te gjeni produkte te ndryshme ne lidhje me fushen e farmaceutikes ,te cilat mund te porositen online nepermjet kesaj faqe.Ne lidhje me koston e transportiti shihni ne ikonen \"Shporta\"
                           </p>
                       </div>

                       ";
                        
                  
                   }
               
               ?>
               
               <div class="row">
               
                   <?php 
                    
                         if(!isset($_GET['kat'])){
                            
                            $barnat1 = "select * from barna order by 1 DESC LIMIT 9";
                             
                            $realizo = mysqli_query($lidhja,$barnat1);
                             
                            while($rresht=mysqli_fetch_array($realizo)){
                                
                                $id = $rresht['Nr_seri'];
                                $emri = $rresht['Emri_b'];
                                $pershkrim = $rresht['Pershkrim'];
                                $foto = $rresht['Foto_b'];
                                $cmimi = $rresht['Cmimi'];
                                echo "
                                
                                    <div class='col-md-4 col-sm-6 center-responsive'>
                                    
                                        <div class='product'>
                                        
                                            <a href='informacione.php?id_b=$id'>
                                            
                                                <img class='img-responsive' src='menaxher/foto/$foto'>
                                            
                                            </a>
                                            
                                            <div class='text'>
                                            
                                                <h3>
                                                
                                                    <a href='informacione.php?id_b=$id'> $emri </a>
                                                
                                                </h3>
                                            
                                                <p class='price'>

                                                    $$cmimi

                                                </p>

                                                <p class='buttons'>

                                                    <a class='btn btn-default' href='informacione.php?id_b=$id'>

                                                        Informacion

                                                    </a>

                                                    <a class='btn btn-primary' href='informacione.php?id_b=$id'>

                                                         Shto ne shporte

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
               
                <?php 
               
              if(isset($_GET['kat'])){
                      $Id_kat = $_GET['kat'];
                      $kategori_zgj = "select * from kategori_barna where Id_kat='$Id_kat'";
                      $realizo2= mysqli_query($lidhja,$kategori_zgj);
                      $rresht2 = mysqli_fetch_array($realizo2);
                      $emri_kat = $rresht2['Kategoria'];  
                      $q3 = "select * from barna where Id_kat='$Id_kat' LIMIT 6";
                      $realizo3 = mysqli_query($lidhja,$q3);
                      $nr = mysqli_num_rows($realizo3);
        
                if($nr==0){
                   echo "
                  <div class='box'>
                    <h1>Kjo kategori nuk perban asnje artikull</h1>
                  </div>     
                   ";
                }
				else{
                   echo "<div class='box'><h1> $emri_kat</h1></div>";
				}    
        
              while($rresht3=mysqli_fetch_array($realizo3)){
            
                                $id = $rresht3['Nr_seri'];
                                $emri = $rresht3['Emri_b'];
                                $pershkrim = $rresht3['Pershkrim'];
                                $foto = $rresht3['Foto_b'];								
                                $cmimi = $rresht3['Cmimi'];
                                echo "                             
                                    <div class='col-md-4 col-sm-6 center-responsive'>                                   
                                        <div class='product'>                                        
                                           <a href='informacione.php?id_b=$id'>                                            
                                                <img class='img-responsive' src='menaxher/foto/$foto'>                                            
                                            </a>                                           
                                            <div class='text'>                                           
                                                <h3>                                               
                                                    <a href='informacione.php?id_b=$id'> $emri </a>                                               
                                                </h3>                                           
                                                <p class='price'>
                                                    $$cmimi
                                                </p>
                                                <p class='buttons'>
                                                    <a class='btn btn-default' href='informacione.php?id_b=$id'>
                                                        Informacion
                                                    </a>
                                                    <a class='btn btn-primary' href='informacione.php?id_b=$id'>
                                                         shto ne shporte

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
   </div>
   
   <?php 
    
    include("teperbashketa/fundi.php");
    
    ?>
    
</body>
</html>