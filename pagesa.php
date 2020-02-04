<div class="box">
   
   <?php 
    
    $email = $_SESSION['email'];
    
    $farmacist = "select * from farmaciste where email='$email'";
    
    $rezultat = mysqli_query($lidhja,$farmacist);
    
    $rresht = mysqli_fetch_array($rezultat);
    
    $id = $rresht['id_farmacistit'];
    
    ?>
    
    
     <p class="lead text-center">
         <form action="porosi.php" method="get" >
		    <h1>Konfirmo adresen</h1>
		    <div class="form-group">
                           
                         <label> Adresa: </label>
                          
                          <input type="text" class="form-control" name="adrese" required>
                           
                       </div>
		  <table class="table">
                               
                               <thead>
                                   
                                   <tr>
                                       
                                       <th >Produkte</th>
                                       <th>Sasi</th>
                                       <th>Cmimi</th>
                                       <th >Totali</th>
                                       
                                   </tr>
                                   
                               </thead>
                               
                               <tbody>
                                  
                                  <?php 
                         if(!empty($_SESSION["shporte"])){
                           $total = 0;
                        foreach ($_SESSION["shporte"] as $celes => $vlere) {
							$id=$vlere['id'];
							$barna = "select * from barna where Nr_seri='$id' ";
                             $r=mysqli_query($lidhja,$barna);          
                             $rr=mysqli_fetch_array($r); 
							 $nr=mysqli_num_rows($r);
                             if($nr==1)	{
								$emri= $rr['Emri_b'];
								$cmimi=$rr['Cmimi'];
                             }								 
                        ?>
                        <tr>
                            <td><?php echo $emri ?></td>
                            <td><?php echo $vlere["sasi"]; ?></td>
                            <td>$ <?php echo $cmimi; ?></td>
                            <td>$ <?php echo number_format($vlere["sasi"] * $cmimi, 2); ?></td>                           
                        </tr>
                        <?php
                        $total = $total + ($vlere["sasi"] * $cmimi);
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
         <input type="submit"value="submit"> </input>
         </form>
     </p>
      
</div>