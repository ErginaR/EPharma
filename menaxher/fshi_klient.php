<?php 
    
    if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('hyr.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['fshi_klient'])){
        
        $delete_id = $_GET['fshi_klient'];
        
        $delete_c = "delete from farmaciste where id_farmacistit='$delete_id'";
        
        $run_delete = mysqli_query($lidhja,$delete_c);
        
        if($run_delete){
            
            echo "<script>alert('Klienti sapo u fshi')</script>";
            
            echo "<script>window.open('index.php?shiko_klientet','_self')</script>";
            
        }
        
    }

?>

<?php } ?>