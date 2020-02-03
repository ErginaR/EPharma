<?php 
    
    if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('hyr.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['fshi_produkt'])){
        
        $delete_id = $_GET['fshi_produkt'];
        
        $delete_pro = "delete from barna where Nr_seri='$delete_id'";
        
        $run_delete = mysqli_query($lidhja,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('Barna sapo u fshi')</script>";
            
            echo "<script>window.open('index.php?shiko_produktet','_self')</script>";
            
        }
        
    }

?>

<?php } ?>