<?php 
include("teperbashketa/fillimi.php");
include("teperbashketa/db.php");


    if(isset($_SESSION['email'])){
		
		$email=$_SESSION['email'];
		$q1="select * from farmaciste where Email='$email'";
		$r1=mysqli_query($lidhja,$q1);
		$rresht1=mysqli_fetch_array($r1);
		$id_f=$rresht1['id_farmacistit'];
		
		if(isset($_POST['adrese'])){
		$ad=$_POST['adrese'];//modifikoje adresen
		$q4="update farmaciste set Adresa='$ad' where id_farmacistit='$id_f'";
		$real=mysqli_query($q4);
        }
		
       if (isset($_SESSION["cart"])){
		    $count=count($_SESSION["cart"]);
             foreach ($_SESSION["cart"] as $key => $value) {
							$id=$value['product_id'];
							$sasia=$value['item_quantity'];
							$get_products = "select * from barna where Nr_seri='$id' ";
                             $r=mysqli_query($lidhja,$get_products);          
                             $rr=mysqli_fetch_array($r); 
							 $nr=mysqli_num_rows($r);
                             if($nr==1)	{
								$emri= $rr['Emri_b'];
								$cmimi=$rr['Cmimi'];
                             }	
			  $q2="insert into porosi(Id_klientit,DatePorosi) values('$id_f',Now())";
			  $rezultati=mysqli_query($lidhja,$q2);
			  $id_por=mysqli_insert_id($lidhja);
				
              $query = "insert into rreshtporosi (nr_seri,id_p,sasia,Cmimi) values ('$id','$id_por','$sasia','$cmimi')";
               $run_query = mysqli_query($lidhja,$query);
			   
            }
			foreach ($_SESSION["cart"] as $keys => $value){
                              unset($_SESSION["cart"][$keys]);
                    
                        }
        echo '<h1>Blerja u realizua me sukses</h1>';
        echo "<table border='collapse'><tr><td>Nr artikujve</td><td>Totali</td><td>Adresa</td></tr>
		             <tr><td>$count</td><td>".$_GET['total']."</td><td>".$rresht1['Adresa']."</td></tr>
		     <table>";
    }
	}
?> 