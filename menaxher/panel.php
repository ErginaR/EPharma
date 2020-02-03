<?php 
    
    if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('hyr.php','_self')</script>";
        
    }else{

?> 

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> Dashboard </h1>
    
    </div>
</div>

<div class="row">
     <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">   
            <div class="panel-heading">
                 <div class="huge"> <?php echo $nr_barnave; ?> 	</div>  	       
                  <div> Barna </div>
                </div>
            </div>
            
            <a href="index.php?shiko_produktet">Shiko Produktet </a>
     </div>
    
	
   
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">   
            <div class="panel-heading">
                 <div class="huge"> <?php echo $count_customers; ?> 	</div>  	       
                  <div>Klient </div>
                </div>
            </div>
            
            <a href="index.php?shiko_klientet">Shiko Klientet</a>
     </div>
   
   
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">   
            <div class="panel-heading">
                 <div class="huge"> <?php echo $count_pending_orders; ?>	</div>  	       
                  <div> Porosi </div>
                </div>
            </div>
            
            <a href="index.php?shiko_porosite">Shiko Porosite </a>
     </div>
    
</div>
<br/>
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
           
            
            $get_orders = "select * from porosi ";
            $run_orders = mysqli_query($lidhja,$get_orders);
			$nr=mysqli_num_rows($run_orders);
			if($nr>0){
            $i = 0;
            
            while($row_orders = mysqli_fetch_array($run_orders)){
                
                $order_id = $row_orders['Id_porosi'];
				$id_f = $row_orders['Id_klientit'];
				$d_p= $row_orders['DatePorosi'];
				$get_customer = "select * from farmaciste where id_farmacistit='$id_f'";
                $run_customer = mysqli_query($lidhja,$get_customer);
                $row_customer = mysqli_fetch_array($run_customer);
				$emri_f=$row_customer ['Emri'];
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


<?php } ?><!--kllapa mbyllese e else-->