<?php 
    
    if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('hyr.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['fshi_produkt'])){
        
        $id = $_GET['fshi_produkt'];
        
        $fshije = "delete from barna where Nr_seri='$id'";
        
        $realizo = mysqli_query($lidhja,$fshije);
        
        if($realizo){
            
            echo "<script>alert('Barna sapo u fshi')</script>";
            
            echo "<script>window.open('index.php?shiko_produktet','_self')</script>";
            
        }
        
    }

?>

<?php } ?>