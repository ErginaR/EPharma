<?php 
    
    if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('hyr.php','_self')</script>";
        
    }else{

?>

<h1>Shiko klientet</h1>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">         
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        
                        <thead>
                            <tr>
                                <th> Nr: </th>
                                <th> Emri: </th>
                           
                                <th> E-Mail: </th>
                                <th> Qyteti: </th>
                                <th>Shteti:  </th>
                                <th> Adresa: </th>
                                <th> Kodi Postar: </th>
                                <th> Fshi: </th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            
                            <?php 
          
                                $i=0;
                            
                                $farmacistet = "select * from farmaciste";
                                
                                $realizo = mysqli_query($lidhja,$farmacistet);
          
                                while($rresht=mysqli_fetch_array($realizo)){
                                    
                                    $id = $rresht['id_farmacistit'];
                                    
                                    $emri = $rresht['Emri'];
                                    
                                    $email = $rresht['Email'];
                                    
                                    $qytet= $rresht['Qyteti'];
                                    
                                    $shtet = $rresht['Shteti'];
                                    
                                    $adresa = $rresht['Adresa'];
                                    
                                    $kodi_p = $rresht['Kodi_postar'];
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr>
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $emri; ?> </td>
                                
                                <td> <?php echo $email; ?> </td>
                                <td> <?php echo $qytet; ?></td>
                                <td> <?php echo $shtet; ?> </td>
                                <td> <?php echo $adresa ?> </td>
                                <td> <?php echo $kodi_p ?> </td>
                                <td> 
                                     
                                     <a href="index.php?fshi_klient=<?php echo $id; ?>">
                                      Fshi
                                    
                                     </a> 
                                     
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