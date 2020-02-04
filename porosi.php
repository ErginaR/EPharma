<?php 
include("teperbashketa/fillimi.php");
include("teperbashketa/db.php");

    if(isset($_SESSION['email'])){
		if(isset($_GET['adrese'])){
		$email=$_SESSION['email'];
		$q1="select * from farmaciste where Email='$email'";
		$r1=mysqli_query($lidhja,$q1);
		$rresht1=mysqli_fetch_array($r1);
		$id_f=$rresht1['id_farmacistit'];
		$ad=$_GET['adrese'];//modifikoje adresen
		$q4="update farmaciste set Adresa='$ad' where id_farmacistit='$id_f'";
		$real=mysqli_query($lidhja,$q4);
    	
       if (isset($_SESSION["shporte"])){
		    $nr=count($_SESSION["shporte"]);
             foreach ($_SESSION["shporte"] as $celes => $vlere) {
							$id=$vlere['id'];
							$sasia=$vlere['sasi'];
							$barna = "select * from barna where Nr_seri='$id' ";
                             $r=mysqli_query($lidhja,$barna);          
                             $rr=mysqli_fetch_array($r); 
							 $nr=mysqli_num_rows($r);
                             if($nr==1)	{
								$emri= $rr['Emri_b'];
								$cmimi=$rr['Cmimi'];
                             }	
			  $q2="insert into porosi(Id_klientit,DatePorosi) values('$id_f',Now())";
			  $rezultati=mysqli_query($lidhja,$q2);
			  $id_por=mysqli_insert_id($lidhja);
				
              $q3 = "insert into rreshtporosi (nr_seri,id_p,sasia,Cmimi) values ('$id','$id_por','$sasia','$cmimi')";
              $run_query = mysqli_query($lidhja,$q3);
			   
            }
			foreach ($_SESSION["shporte"] as $celes => $vlere){
                              unset($_SESSION["shporte"][$celes]);
                    
                        }
             echo '<h1>Blerja u realizua me sukses</h1>';
       
    }
	}
	
	}
?> 