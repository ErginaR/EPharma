<?php 

    session_start();
    include("teperbashketa/db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Menaxheri i depos</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
   
   <div class="container">
       <form action="" class="form-login" method="post">
           <h2 class="form-login-heading"> Pershendetje </h2>
           
           <input type="text" class="form-control" placeholder="Email" name="email" required>
           
           <input type="password" class="form-control" placeholder="Fjalekalimi" name="fjalekalim" required>
           
           <button type="submit" class="btn btn-lg btn-primary" name="hyr">
               
               hyr
               
           </button>
           
       </form>
   </div>
    
</body>
</html>


<?php 

    if(isset($_POST['hyr'])){
        
        $Email = $_POST['email'];
        
        $fjalekalim = $_POST['fjalekalim'];
        
        $menaxheri = "select * from menaxher where email='$Email' AND fjalekalimi='$fjalekalim'";
        
        $realizo = mysqli_query($lidhja,$menaxheri);
        
        $nr_rreshtave = mysqli_num_rows($realizo);
        
        if($nr_rreshtave==1){
            
            $_SESSION['email']=$Email;
            
            echo "<script>alert('Hyrja me sukses')</script>";
            
            echo "<script>window.open('index.php?panel','_self')</script>";
            
        }else{
            
            echo "<script>alert('Te dhena te vendosura gabim!')</script>";
            
        }
        
    }

?>