<?php 
session_start();
if(!isset($_SESSION['email'])){
    
    echo "<script>window.open('../checkout.php','_self')</script>";
    
}else{//kllapa mbyllese ne fund te faqes
include("teperbashketa/db.php");
include("funksione/fux.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>E-Pharma</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
   <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/stili.css">
</head>
<body>
   
   <div id="top">
        <div> 		
           
               
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
                   <li>
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
                       
                       
                        <?php 
                           
                           if(!isset($_SESSION['email'])){
                       
                                echo "<a href='checkout.php'> Hyr</a>";

                               }else{

                                echo " <a href='dil.php'> Dil </a> ";

                               }
                           
                         ?>
                       
                       
                   </li>
                   
               </ul>
               
           </div>
           
       </div>
       
   
    <div class="navbar "> 
   <div>         
              <ul class="nav navbar-nav ">
                       
					   <li>
                           <a href="..\index.php"><img src="foto/epharma-logo.png" alt="E-Pharmas Logo" ></a>
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
                    
					<form method="get" action="../Kerko.php" class="navbar-form">
                       
                       <div style="float:right;">
                           
                           <input type="text"  placeholder="Kerko" name="kerko" required>
                           
                           <button type="submit" name="submit" value="Kerkim" class=" btn-primary">Kerko </button>
                               
                       </div>
                       
                   </form>
               </div>
               

               
           </div>
           
       </div>
       
   </div>
   
   <div id="content">
       <div class="container">
           
           <div class="col-md-3">
   
   <?php 
    
    include("teperbashketa/pjesa_anesore.php");
    
    ?>
               
           </div>
           
          <div class="col-md-9">
               
               <div class="box">
                   
                   <?php
                   
                   if (isset($_GET['HitoriaBlerjes'])){
                       include("HitoriaBlerjes.php");
                   }
                   
                   ?>
                   
                   <?php
                   
                   if (isset($_GET['modifiko_llogarine'])){
                       include("modifiko_llogarine.php");
                   }
                   
                   ?>
                   
                   <?php
                   
                   if (isset($_GET['ndrysho_fjalekalim'])){
                       include("ndrysho_fjalekalim.php");
                   }
                   
                   ?>
                   
                   <?php
                   
                   if (isset($_GET['fshi_llogarine'])){
                       include("fshi_llogarine.php");
                   }
                   
                   ?>
                   
               </div>
               
           </div>
           
       </div>
   </div>
   
   <?php 
    
    include("teperbashketa/fundi.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
<?php } ?>