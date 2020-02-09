<center>   
    <h1> Porosite </h1>   
    <p class="text-muted">       
        Historia juaj e blerjeve       
    </p>   
</center>
<hr>
<div class="table-responsive">  
    <table class="table table-bordered table-hover">
        
        <thead>
            
            <tr>
                
                <th> Nr: </th>
				<th> Data e porosise:</th>
                <th> Cmimi: </th>
                <th> Sasia: </th>
                
                <th> Emri_b </th>
                
                
            </tr>
            
        </thead>
        
        <tbody>
            <?php             
            $email = $_SESSION['email'];
            
            $farmacisti = "select * from farmaciste where Email='$email'";
            $realizo = mysqli_query($lidhja,$farmacisti);
            $rresht = mysqli_fetch_array($realizo);
            $id = $rresht['id_farmacistit'];
            
            $porosite_f = "select * from porosi where Id_klientit='$id'";//gjej te gjitha porosite e realizuara nga klienti
            $realizo2 = mysqli_query($lidhja,$porosite_f);
			$nr=mysqli_num_rows($realizo2);
			if($nr>0){
            $i = 0;
            
            while($rresht2 = mysqli_fetch_array($realizo2)){
                
                $id_pr = $rresht2['Id_porosi'];
				$d_p= $rresht2['DatePorosi'];
                $rreshtp="select * from rreshtporosi where id_p=$id_pr";
				$realizo3=mysqli_query($lidhja,$rreshtp);
				$rresht3=mysqli_fetch_array($realizo3);
                $cmim = $rresht3['Cmimi'];
                $sasi = $rresht3['sasia'];
				$id_b=$rresht3['nr_seri'];
                $barnaa="select * from barna where Nr_seri=$id_b";
				$realizo4=mysqli_query($lidhja,$barnaa);
				$rresht4=mysqli_fetch_array($realizo4);
                $emri=$rresht4['Emri_b']; 
                $i++;                           
            ?>
            
            <tr>
                
                <th> <?php echo $i; ?> </th>
                <td> <?php echo $d_p; ?> </td>
                <td> <?php echo $cmim; ?> </td>
                <td> <?php echo $sasi; ?> </td>
                <td> <?php echo $emri; ?> </td>
                
            </tr>
            
            <?php }} ?>
            
            
        </tbody>
        
    </table>
    
</div>