<?php 
    include("teperbashketa/fillimi.php");

    if(isset($_SESSION['email'])){
		
    if(isset($_GET['add_cart'])){
        
       if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");//aksesoj vetem id e porosive
            if (!in_array($_GET["add_cart"],$item_array_id)){//shoh nese ka ndonje porosi me id te tille
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET['add_cart'],
                    'item_quantity' => $_POST['sasia'],
                );
				
                $_SESSION["cart"][$count] = $item_array;
				
			   echo '<script>alert("sapo u shtua")</script>';
               echo "<script>window.open('produkte.php','_self')</script>";
               }
			else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="produkte.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET['add_cart'],
                
                'item_quantity' => $_POST["sasia"],
            );
			
            $_SESSION["cart"][0] = $item_array;
			   echo '<script>alert("sapo u shtua")</script>';
               echo "<script>window.open('produkte.php','_self')</script>";
            
        }
        
    }
    
}

?> 