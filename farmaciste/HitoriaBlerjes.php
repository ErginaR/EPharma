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
            
            $get_customer = "select * from farmaciste where Email='$email'";
            $run_customer = mysqli_query($lidhja,$get_customer);
            $row_customer = mysqli_fetch_array($run_customer);
            $customer_id = $row_customer['id_farmacistit'];
            
            $get_orders = "select * from porosi where Id_klientit='$customer_id'";//gjej te gjitha porosite e realizuara nga klienti
            $run_orders = mysqli_query($lidhja,$get_orders);
			$nr=mysqli_num_rows($run_orders);
			if($nr>0){
            $i = 0;
            
            while($row_orders = mysqli_fetch_array($run_orders)){
                
                $order_id = $row_orders['Id_porosi'];
				$d_p= $row_orders['DatePorosi'];
                $q7="select * from rreshtporosi where id_p=$order_id";
				$r7=mysqli_query($lidhja,$q7);
				$rr=mysqli_fetch_array($r7);
                $cmim = $rr['Cmimi'];
                $sasi = $rr['sasia'];
				$id_b=$rr['nr_seri'];
                $q6="select * from barna where Nr_seri=$id_b";
				$r6=mysqli_query($lidhja,$q6);
				$rr2=mysqli_fetch_array($r6);
                $emri=$rr2['Emri_b']; 
                //$order_date = substr($row_orders['data_porosi'],0,11);
               
                
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