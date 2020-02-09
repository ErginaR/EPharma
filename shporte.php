<?php 
    include("teperbashketa/fillimi.php");
?>
   <div id="content">
       <div class="container">          
           <div id="cart" class="col-md-9">               
               <div class="box">
                   
                   <form action="shporte.php" method="post">
                       
                       <h1>Shporta</h1>
					   
                       <div class="table-responsive">
                           
                           <table class="table">
                               
                               <thead>
                                   
                                   <tr>
                                       
                                       <th >Produkte</th>
                                       <th>Sasi</th>
                                       <th>Cmimi</th>
                                       <th >Totali</th>
                                       <th >Fshi</th>
                                       
                                   </tr>
                                   
                               </thead>
                               
                               <tbody>
                                  
                         <?php $total = 0;//totali i gjithe produkteve
						       $total2 = 0;//totali i produkteve duke perfshire transportin
							   $sasi_t=0;
                        if(!empty($_SESSION["shporte"])){
                           
                        foreach ($_SESSION["shporte"] as $celes => $vlere) {
							$id=$vlere['id'];
							$sasi_t+=$vlere["sasi"];
							$barnat= "select * from barna where Nr_seri='$id' ";
                             $realizo=mysqli_query($lidhja,$barnat);          
                             $rr=mysqli_fetch_array($realizo); 
							 $nr=mysqli_num_rows($realizo);
                             if($nr==1)	{
								$emri= $rr['Emri_b'];
								$cmimi=$rr['Cmimi'];
                              }								 
                         ?>
                        <tr>
                            <td><?php echo $emri ?></td>
                            <td><?php echo $vlere["sasi"];?></td>
                            <td>$ <?php echo $cmimi; ?></td>
                            <td>
                                $ <?php echo number_format($vlere["sasi"] * $cmimi, 2); ?></td>
                            <td><input type="checkbox" name="fshi[]" value="<?php echo $id; ?>"></td>
                              
                        </tr>
                        <?php
                        $total = $total + ($vlere["sasi"] * $cmimi);
					  if($sasi_t>0){
						if($sasi_t==1)
						  $total2=50+$total;
					    else
							$total2=50+30*($sasi_t-1)+$total;
						}	
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">$ <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?>
                              
                           </table>
                           
                       </div>
                        
                       <div class="box-footer">
                           
                           <div class="pull-left">
                               
                               <a href="index.php" class="btn btn-default">Kthehu</a>
                               
                           </div>
                           
                           <div class="pull-right">
                               
                               <button type="submit" name="perditeso" value="Update Cart" class="btn btn-default">Perditeso</button>
                                 
                               <a href="kontrollo.php" class="btn btn-primary">Realizo Blerjen</a>
                             
                           </div>
                           
                       </div>
                       
                   </form>
                   
               </div>
               
               <?php 
               
					 if(isset($_POST['perditeso'])){
                        
                        foreach($_POST['fshi'] as $vlere1){
                            foreach ($_SESSION["shporte"] as $celes2 => $vlere2){
                              if ($vlere2["id"] == $vlere1){
                                unset($_SESSION["shporte"][$celes2]);
                             }
                           }
						echo '<script>alert("Barnat nuk jane me pjese e shportes")</script>';
                        echo '<script>window.location="shporte.php"</script>';
                }
               }
			 
               ?>
               
               
           </div>
           
           <div class="col-md-3">
               
               <div id="order-summary" class="box">
                   
                   <div class="box-header">
                       
                       <h3>Porosite</h3>
                       
                   </div>
                   
                   <p class="text-muted">
                       
                       !!Totali duke perfshire transportin
                       
                   </p>
                   
                   <div class="table-responsive">
                       
                       <table class="table">
                           
                           <tbody>
                               
                               <tr>
                                   
                                   <td> Totali i porosise </td>
                                   <th> $<?php echo $total; ?> </th>
                                   
                               </tr>
                               
                               <tr>
                                   
                                   <td> Transporti</td>
                                   <td> $30-50 </td>
                                   
                               </tr>
                               
                               
                               <tr class="total">
                                   
                                   <td> Totali perfundimtar</td>
                                   <th> $<?php echo $total2; ?> </th>
                                   
                               </tr>
                               
                           </tbody>
                           
                       </table>
                       
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
