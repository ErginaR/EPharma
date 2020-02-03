
<?php 

    include("teperbashketa/fillimi.php");

?>
   <div id="content">
       <div class="container">
             
           
           <div id="cart" class="col-md-9">
               
               <div class="box">
                   
                   <form action="shporte.php" method="post" enctype="multipart/form-data">
                       
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
                                  
                                  <?php $total = 0;
                         if(!empty($_SESSION["cart"])){
                           
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
                            <td><input type="checkbox" name="remove[]" value="<?php echo $id; ?>"></td>
                              
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
                           
                       </div>
                        
                       <div class="box-footer">
                           
                           <div class="pull-left">
                               
                               <a href="index.php" class="btn btn-default">
                                   
                                   <i class="fa fa-chevron-left"></i> Kthehu
                                   
                               </a>
                               
                           </div>
                           
                           <div class="pull-right">
                               
                               <button type="submit" name="update" value="Update Cart" class="btn btn-default">
                                   
                                   <i class="fa fa-refresh"></i> Perditeso
                                   
                               </button>
                               
                               <a href="checkout.php" class="btn btn-primary">
                                   
                                   Realizo Blerjen <i class="fa fa-chevron-right"></i>
                                   
                               </a>
                               
                           </div>
                           
                       </div>
                       
                   </form>
                   
               </div>
               
               <?php 
               
                function update_cart(){
					
					 if(isset($_POST['update'])){
                        
                        foreach($_POST['remove'] as $remove_id){
                            foreach ($_SESSION["cart"] as $keys => $value){
                           if ($value["product_id"] == $remove_id){
                              unset($_SESSION["cart"][$keys]);
                             
                            
                             }
                           }
						echo '<script>alert("Barnat nuk jane me pjese e shportes")</script>';
                        echo '<script>window.location="shporte.php"</script>';
                }
               }
			  }
               echo $up_cart = update_cart();
               
               ?>
               
               
           </div>
           
           <div class="col-md-3">
               
               <div id="order-summary" class="box">
                   
                   <div class="box-header">
                       
                       <h3>Porosite</h3>
                       
                   </div>
                   
                   <p class="text-muted">
                       
                       !!Transporti falas kudo
                       
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
                                   <td> $0 </td>
                                   
                               </tr>
                               
                               
                               <tr class="total">
                                   
                                   <td> Totali </td>
                                   <th> $<?php echo $total; ?> </th>
                                   
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
