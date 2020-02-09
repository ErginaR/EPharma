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
        $barnat= "select * from barna";
        
        $realizo = mysqli_query($lidhja,$barnat);
        
        $nr_barnave = mysqli_num_rows($realizo);
        
        $klient = "select * from farmaciste";
        
        $realizo2 = mysqli_query($lidhja,$klient);
        
        $nr = mysqli_num_rows($realizo2);
        
        $porosite = "select * from porosi";
        
        $realizo3 = mysqli_query($lidhja,$porosite);
        
        $nr_p = mysqli_num_rows($realizo3);

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