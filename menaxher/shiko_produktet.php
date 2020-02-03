<?php 
    
    if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('hyr.php','_self')</script>";
        
    }else{

?>

<h2>Shiko Barnat</h2>

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Nr Serial: </th>
                                <th> Emri: </th>
                                <th> Foto: </th>
                                <th> Cmimi: </th>
                                <th> Data e Prodhimit: </th>
                                <th> Data e Skadences: </th>
                                <th> Vendi Prodhimit: </th>
                                <th> Fshi: </th>
                                
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_pro = "select * from barna";
                                
                                $run_pro = mysqli_query($lidhja,$get_pro);
          
                                while($row_pro=mysqli_fetch_array($run_pro)){
                                    
                                    $pro_id = $row_pro['Nr_seri'];
                                    
                                    $pro_title = $row_pro['Emri_b'];
                                    
                                    $pro_img1 = $row_pro['Foto_b'];
                                    
                                    $pro_price = $row_pro['Cmimi'];
                                    
                                    $date_p = $row_pro['Date_P'];
                                    
                                    $date_s = $row_pro['Date_S'];
                                    $vendi_p = $row_pro['Vendi_P'];
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $pro_title; ?> </td>
                                <td> <img src="foto/<?php echo $pro_img1; ?>" width="60" height="60"></td>
                                <td> $ <?php echo $pro_price; ?> </td>
                                <td> <?php echo $date_p; ?> </td>
                                <td> <?php echo $date_s ?> </td>
								<td> <?php echo $vendi_p; ?> </td>
                                <td> 
                                     
                                     <a href="index.php?fshi_produkt=<?php echo $pro_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Fshi
                                    
                                     </a> 
                                     
                                </td>
                                
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>