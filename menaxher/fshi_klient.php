<?php 
    
    if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('hyr.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['fshi_klient'])){
        
        $id = $_GET['fshi_klient'];
        
        $fshije = "delete from farmaciste where id_farmacistit='$id'";
        
        $realizo = mysqli_query($lidhja,$fshije);
        
        if($realizo){
            
            echo "<script>alert('Klienti sapo u fshi')</script>";
            
            echo "<script>window.open('index.php?shiko_klientet','_self')</script>";
            
        }
        
    }

?>

<?php } ?>