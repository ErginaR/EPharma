<?php 
    include("teperbashketa/fillimi.php");

    if(isset($_SESSION['email'])){
		
    if(isset($_GET['id_b'])){
        
      if (isset($_SESSION["shporte"])){
            $id_produkt = array_column($_SESSION["shporte"],"id");//aksesoj vetem id e porosive
            if (!in_array($_GET["id_b"],$id_produkt)){//shoh nese ka ndonje porosi me id te tille
                $nr = count($_SESSION["shporte"]);//$nr ,nr i porosive ne shporte($_SESSION["shporte"])
                $produkt = array('id' => $_GET['id_b'],'sasi' => $_POST["sasia"],);             
                $_SESSION["shporte"][$nr] = $produkt;	
			    echo '<script>alert("sapo u shtua ne shporte")</script>';
                echo "<script>window.open('produkte.php','_self')</script>";
               }
			else{
                echo '<script>alert("Ky produkt eshte shtuar me pare ne karte")</script>';
                echo '<script>window.location="produkte.php"</script>';
            }
        }
	   else{
            $produkt= array('id' => $_GET['id_b'],'sasi' => $_POST["sasia"],);              
            $_SESSION["shporte"][0] = $produkt;
			echo '<script>alert("sapo u shtua")</script>';
            echo "<script>window.open('produkte.php','_self')</script>";
            
        }        
    }    
}
?> 