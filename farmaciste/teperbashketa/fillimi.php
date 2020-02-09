<?php 

session_start();
require("teperbashketa/db.php");

?>
<!DOCTYPE html>
<html>
<head>
    <title>E-Farma</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
	<link rel="stylesheet" href="CSS/stili.css">
</head>
<body>
   
   <div id="top">
           <div >              
               <ul class="menu">                  
                   <li>                    
                        <?php 
                           
                           if(isset($_SESSION['email'])){
                       
                                echo "<a href='../index.php'> Kryefaqe</a>";

                               }
						  else{

                                echo " <a href='../rregjistrim.php'>Rregjistrohu </a> ";

                               }
                           
                         ?>
                       
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
                       
                       echo "I ftuar";
                       
                   }else{
                       
                       echo "". $_SESSION['email']."";
                       
                   }
                   
                   ?>
               
                   </a>
				   </li>
                   <li>
                       <a href="../kontrollo.php">
                       
                        <?php 
                           
                           if(!isset($_SESSION['email'])){
                       
                                echo "<a href='..\kontrollo.php'> Hyr</a>";

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
                           
                           <button type="submit" name="vendos" value="Kerkim" class=" btn-primary">Kerko </button>
                               
                       </div>
                       
                   </form>
		    
               </div>
            
   </div>
   