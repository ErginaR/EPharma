<div class="box">
   
   <?php 
    
    $email = $_SESSION['email'];
    
    $farmacist = "select * from farmaciste where email='$email'";
    
    $rezultat = mysqli_query($lidhja,$farmacist);
    
    $rresht = mysqli_fetch_array($rezultat);
    
    $id = $rresht['id_farmacistit'];
    
    ?>
    
    
     <p class="lead text-center">
         <form action="porosi.php" method="post" >
		    <h1>Konfirmo adresen</h1>
		    <div class="form-group">
                           
                         <label> Adresa: </label>
                          
                          <input type="text" class="form-control" name="adrese" required>
                           
                       </div>
		 </form>
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
                         if(!empty($_SESSION["cart"])){
                           $total = 0;
                        foreach ($_SESSION["cart"] as $key => $value) {
							$id=$value['product_id'];
							$get_products = "select * from barna where Nr_seri='$id' ";
                             $r=mysqli_query($lidhja,$get_products);          
                             $rr=mysqli_fetch_array($r); 
							 $nr=mysqli_num_rows($r);
                             if($nr==1)	{
								$emri= $rr['Emri_b'];
								$cmimi=$rr['Cmimi'];
                             }								 
                        ?>
                        <tr>
                            <td><?php echo $emri ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td>$ <?php echo $cmimi; ?></td>
                            <td>
                                $ <?php echo number_format($value["item_quantity"] * $cmimi, 2); ?></td>
                            

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $cmimi);
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
         <a href="porosi.php?total=<?php echo $total ?>"> Realizo pagesen</a>
         
     </p>
      <img class="img-responsive" src="foto/foto4.png" alt="img-paypall">
     
    
</div>