<?php 

    session_start();
    include("teperbashketa/db.php");
    
    if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('hyr.php','_self')</script>";
        
    }else{
        
        $email_m = $_SESSION['email'];
        
        $menaxheri = "select * from menaxher where email='$email_m'";
        
        $rezultat= mysqli_query($lidhja,$menaxheri);
        
        $rresht = mysqli_fetch_assoc($rezultat);
        
        $id = $rresht['id'];
        
        $emer = $rresht['emri'];
        
        $email = $rresht['email'];
        
        $qytet = $rresht['qyteti'];
        
        $cel = $rresht['nr_cel'];
        //nepermjet sql aksesoj tabelen e barnave,farmacisteve,te porosive 
        $get_products = "select * from barna";
        
        $run_products = mysqli_query($lidhja,$get_products);
        
        $nr_barnave = mysqli_num_rows($run_products);
        
        $klient = "select * from farmaciste";
        
        $run_customers = mysqli_query($lidhja,$klient);
        
        $count_customers = mysqli_num_rows($run_customers);
        
        $get_pending_orders = "select * from porosi";
        
        $run_pending_orders = mysqli_query($lidhja,$get_pending_orders);
        
        $count_pending_orders = mysqli_num_rows($run_pending_orders);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-pharma</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="wrapper">
       
       <?php include("teperbashketa/pjesa_anesore.php"); ?>
       
        <div id="page-wrapper">
            <div class="container-fluid">
                
                <?php
                
                    if(isset($_GET['panel'])){
                        
                        include("panel.php");
                        
                }   if(isset($_GET['shto_produkte'])){
                        
                        include("shto_produkte.php");
                        
                }   if(isset($_GET['shiko_produktet'])){
                        
                        include("shiko_produktet.php");
                        
                }   if(isset($_GET['fshi_produkt'])){
                        
                        include("fshi_produkt.php");
                        
                } 
                        
                 
                 /*  if(isset($_GET['insert_box'])){
                        
                        include("insert_box.php");
                        
                }   if(isset($_GET['view_boxes'])){
                        
                        include("view_boxes.php");
                        
                }   if(isset($_GET['delete_box'])){
                        
                        include("delete_box.php");
                        
                } */
                        
                  if(isset($_GET['shiko_klientet'])){
                        
                        include("shiko_klientet.php");
                        
                }   if(isset($_GET['fshi_klient'])){
                        
                        include("fshi_klient.php");
                        
                }   if(isset($_GET['shiko_porosite'])){
                        
                        include("shiko_porosite.php");
                        
                }  
                        
                 
                   if(isset($_GET['profili'])){
                        
                        include("profili.php");
                        
                }  
                        
        
                ?>
                
            </div>
        </div>
    </div>    
</body>
</html>


<?php } ?>