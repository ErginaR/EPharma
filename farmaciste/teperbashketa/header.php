<?php 

require("teperbashketa/db.php");
include("funksione/fux.php");
?>
<?php 

if(isset($_GET['pro_id'])){
    
    $product_id = $_GET['pro_id'];
    
    $get_product = "select * from products where product_id='$product_id'";
    
    $run_product = mysqli_query($con,$get_product);
    
    $row_product = mysqli_fetch_array($run_product);
    
    $p_cat_id = $row_product['p_cat_id'];
    
    $pro_title = $row_product['product_title'];
    
    $pro_price = $row_product['product_price'];
    
    $pro_desc = $row_product['product_desc'];
    
    $pro_img1 = $row_product['product_img1'];
    
    $pro_img2 = $row_product['product_img2'];
    
    $pro_img3 = $row_product['product_img3'];
    
    $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
    
    $run_p_cat = mysqli_query($con,$get_p_cat);
    
    $row_p_cat = mysqli_fetch_array($run_p_cat);
    
    $p_cat_title = $row_p_cat['p_cat_title'];
    
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Pharma</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
   <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
   
   <div id="top">
        <div class="container"> 		
           <div class="col-md-15">
               <ul class="menu"> 
			   
                   <li>
                       <a href="rregjistrim.php">Rregjistrohu</a>
                   </li>
                   <li>
                       <a href="hyr.php">Hyr</a>
                   </li>  
               </ul>
           </div>     
       </div>    
   </div>
   
   <div id="navbar" class="navbar navbar-default"> 
   <div class="container">         
           <div class="navbar-header">              
               <a href="index.php" class="navbar-brand home">
                   <img src="images/epharma-logo.png" alt="E-Pharma Logo" >
      
               </a>               
               
           </div>
           
           <div class="navbar-collapse collapse" id="navigation">
               
               <div class="padding-nav">
                   
                   <ul class="nav navbar-nav left">
                       
                        <li class="<?php if($active=='Kryefaqe') echo"active"; ?>">
                           <a href="index.php">Kryefaqe</a>
                       </li>
                       <li class="<?php if($active=='Produkte') echo"active"; ?>">
                           <a href="produkte.php">Produkte</a>
                       </li>
                       <li class="<?php if($active=='Llogaria') echo"active"; ?>">
                           <a href="farmaciste/llogaria.php">Llogaria</a>
                       </li>
                       <li class="<?php if($active=='Shporta') echo"active"; ?>">
                           <a href="shporte.php">Shporta</a>
                       </li>
                       <li class="<?php if($active=='Kontakto') echo"active"; ?>">
                           <a href="kontakto.php">Kontaktoni</a>
                       </li>
                       
                   </ul>
                    
					<form method="get" action="results.php" class="navbar-form">
                       
                       <div class="input-group">
                           
                           <input type="text" class="form-control" placeholder="Kerko" name="user_query" required>
                           
                           <span class="input-group-btn">
                           
                           <button type="submit" name="search" value="Kerko ne faqe" class="btn btn-primary">
                               
                               <i class="fa fa-search">  Kerko</i>
                               
                           </button>
                           
                           </span>
                           
                       </div>
                       
                   </form>
               </div>
               

               
           </div>
           
       </div>
       
   </div>
   