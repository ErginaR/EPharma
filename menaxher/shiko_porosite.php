<?php 
    
    if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('hyr.php','_self')</script>";
        
    }else{

?>

<h2>Shiko Porosite</h2>

<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"> Porosi</h3>
            </div>
            
            <div class="panel-body">
                <div class="table-responsive">
    
    <table class="table table-bordered table-hover">
        
        <thead>
            
            <tr>
                
                <th> Nr: </th>
				<th> Farmacisti:</th>
				<th> Data e porosise:</th>
                <th> Cmimi: </th>
                <th> Sasia: </th>
                <th> Emri_b </th>
                
                
            </tr>
            
        </thead>
        
        <tbody>
            <?php 
           
            
            $porosite = "select * from porosi ";
            $realizo= mysqli_query($lidhja,$porosite);
			$nr=mysqli_num_rows($realizo);
			if($nr>0){
            $i = 0;
            
            while($rresht = mysqli_fetch_array($realizo)){
                
                $id_por = $rresht['Id_porosi'];
				$id_f = $rresht['Id_klientit'];
				$d_p= $rresht['DatePorosi'];
				$farmacisti = "select * from farmaciste where id_farmacistit='$id_f'";
                $realizo2 = mysqli_query($lidhja,$farmacisti);
                $rresht2 = mysqli_fetch_array($realizo2);
				$emri_f=$rresht2 ['Emri'];
                $rresht_p="select * from rreshtporosi where id_p=$id_por";
				$realizo3=mysqli_query($lidhja,$rresht_p);
				$rresht3=mysqli_fetch_array($realizo3);
                $cmim = $rresht3['Cmimi'];
                $sasi = $rresht3['sasia'];
				$id_b=$rresht3['nr_seri'];
                $barnat="select * from barna where Nr_seri=$id_b";
				$realizo4=mysqli_query($lidhja,$barnat);
				$rresht4=mysqli_fetch_array($realizo4);
                $emri=$rresht4['Emri_b']; 
                $i++;
                
            
            ?>
            
            <tr>
                
                <th> <?php echo $i; ?> </th>
				<td> <?php echo $emri_f; ?> </td>
                <td> <?php echo $d_p; ?> </td>
                <td> <?php echo $cmim; ?> </td>
                <td> <?php echo $sasi; ?> </td>
                <td> <?php echo $emri; ?> </td>
                
            </tr>
            
            <?php }} ?>
            
            
        </tbody>
        
    </table>
                </div>
                
                
                
            </div>
            
        </div>
    </div>
    
   
    
</div>

<?php } ?>