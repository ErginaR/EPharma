<?php 
    
    if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('hyr.php','_self')</script>";
        
    }else{

?>

<h2>Shiko Barnat</h2>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            
            
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        
                        <thead>
                            <tr>
                                <th> Nr Serial: </th>
                                <th> Emri: </th>
                                <th> Foto: </th>
                                <th> Cmimi: </th>
                                <th> Data e Prodhimit: </th>
                                <th> Data e Skadences: </th>
                                <th> Vendi Prodhimit: </th>
                                <th> Fshi: </th>
                                
                            </tr>
                        </thead>
                        
                        <tbody>
                            
                            <?php 
          
                                $i=0;
                            
                                $barnat = "select * from barna";
                                
                                $realizo = mysqli_query($lidhja,$barnat);
          
                                while($rresht=mysqli_fetch_array($realizo)){
                                    
                                    $id = $rresht['Nr_seri'];
                                    
                                    $emri = $rresht['Emri_b'];
                                    
                                    $foto_b = $rresht['Foto_b'];
                                    
                                    $cmimi = $rresht['Cmimi'];
                                    
                                    $date_p = $rresht['Date_P'];
                                    
                                    $date_s = $rresht['Date_S'];
                                    $vendi_p = $rresht['Vendi_P'];
                                    $i++;
                            
                            ?>
                            
                            <tr>
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $emri; ?> </td>
                                <td> <img src="foto/<?php echo $foto_b; ?>" width="60" height="60"></td>
                                <td> $ <?php echo $cmimi; ?> </td>
                                <td> <?php echo $date_p; ?> </td>
                                <td> <?php echo $date_s ?> </td>
								<td> <?php echo $vendi_p; ?> </td>
                                <td> 
                                     
                                     <a href="index.php?fshi_produkt=<?php echo $id; ?>">Fshi</a>
                                     
                                    
                                </td>
                                
                            </tr>
                            
                            <?php } ?>
                            
                        </tbody>
                        
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php } ?>