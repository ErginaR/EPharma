<?php 

session_start();
require("teperbashketa/db.php");
include("funksione/fux.php");

?>
<?php 

if(isset($_GET['Nr_seri'])){
    
    $id = $_GET['Nr_seri'];
    $q = "select * from barna where Nr_seri='$id' ";
    
    $rezultat = mysqli_query($lidhja,$q);
    
    $rresht = mysqli_fetch_array($rezultat);
    
	$emertimi = $rresht['Emri_b'];
    
    $pershkrimi = $rresht['Pershkrim'];
    
    $date_p = $rresht['Date_P'];
    
    $date_s = $rresht['Date_S'];
    
    $foto_p = $rresht['Foto_p'];
    
    $vendi= $row_product['Vendi_P'];
	
	$Id_kat = $rresht['Id_kat'];
	
    $cmim = $rresht['Cmimi'];
	
    $q2 = "select * from kategori_barna where Id_kat=$Id_kat' ";
    
    $rezultat2 = mysqli_query($lidhja,$q2);
    
    $rresht2 = mysqli_fetch_array($rezultat2);
    
    $kategori = $rresht2['Kategoria'];
    
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>E-Pharma</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
	<link rel="stylesheet" href="styles/stili.css">
</head>
<body>
   
   <div id="top">
           <div >
               
               <ul class="menu">
                   
                   <li>
                       <a href="../rregjistrim.php">Rregjistrohu</a>
                   </li>
                   <li >
                       <a href="llogaria.php">Llogaria</a>
                   </li>
                   <li>
                       <a href="../shporte.php">Shporta</a>
                   </li> 
				   <li>
				   <a href="llogaria.php">
                   
                   <?php 
                   
                   if(!isset($_SESSION['email'])){
                       
                       echo "Guest";
                       
                   }else{
                       
                       echo "". $_SESSION['email']."";
                       
                   }
                   
                   ?>
               
                   </a>
				   </li>
                   <li>
                       <a href="../checkout.php">
                       
                        <?php 
                           
                           if(!isset($_SESSION['email'])){
                       
                                echo "<a href='..\checkout.php'> Hyr</a>";

                               }else{

                                echo " <a href='..\dil.php'> Dil </a> ";

                               }
                           
                         ?>
                       
                       </a>
                   </li>
                   
                        </ul>
               
           </div>
           
       </div>
   
           
 <div class="navbar "> 
   <div>         
              <ul class="nav navbar-nav ">
                       <li>
                           <a href="index.php"><img src="foto/epharma-logo.png" alt="E-Pharmas Logo" ></a>
                       </li>
                        <li>
                           <a href="..\index.php">Kryefaqe</a>
                       </li>
					   <li>
                           <a href="..\rreth_nesh.php">Rreth Nesh</a>
                       </li>
                       <li>
                           <a href="..\produkte.php">Produkte</a>
                       </li>
                       <li>
                           <a href="llogaria.php">Llogaria</a>
                       </li>
                       <li>
                           <a href="..\shporte.php">Shporta</a>
                       </li>
                       
                       
                   </ul>
                    
			<form method="get" action="Kerko.php" class="navbar-form">
                       
                       <div style="float:right;">
                           
                           <input type="text"  placeholder="Kerko" name="kerko" required>
                           
                           <button type="submit" name="submit" value="Kerkim" class=" btn-primary">Kerko </button>
                               
                       </div>
                       
                   </form>
		    
               </div>
            
   </div>
   