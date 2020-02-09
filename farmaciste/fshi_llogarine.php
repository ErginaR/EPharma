<?php 

$email = $_SESSION['email'];

$farmacisti = "select * from farmaciste where Email='$email'";

$realizo= mysqli_query($lidhja,$farmacisti);

$rresht = mysqli_fetch_array($realizo);

$id = $rresht['id_farmacistit'];

$emri = $rresht['Emri'];

$qytet = $rresht['Qyteti'];

$adresa= $rresht['Adresa'];

?>
    <h1> Fshi llogarine</h1>
    
    <form action="" method="post">
    
    <div>
        <label> Emri: <?php echo $emri; ?></label>
    </div>  
   
    <div>
        <label>Email:<?php echo $email; ?></label>
     </div>   
	 
    <div>
        <label>Qyteti: <?php echo $qytet; ?></label>
     </div>   

    <div>
        <label>Adresa:<?php echo $adresa; ?> </label>
    </div>
	
       <input type="submit" name="fshi" value="Fshi" class="btn btn-danger"> 
        
    </form>
    
</center>
<?php 

$email = $_SESSION['email'];

if(isset($_POST['fshi'])){
    
    $fshije = "delete from farmaciste where Email='$email'";
    
    $realizoje = mysqli_query($lidhja,$fshije);
    
    if($realizoje){
        
        session_destroy();
        
        echo "<script>alert('Tashme llogaria juaj nuk ekziston me')</script>";
        
        echo "<script>window.open('../index.php','_self')</script>";      
    }
    
}


?>