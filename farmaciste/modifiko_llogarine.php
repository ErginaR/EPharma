<?php 

$email = $_SESSION['email'];

$farmacisti = "select * from farmaciste where Email='$email'";

$rez = mysqli_query($lidhja,$farmacisti);

$rresht = mysqli_fetch_array($rez);

$id = $rresht['id_farmacistit'];

$emri = $rresht['Emri'];

$email = $rresht['Email'];

$qyteti = $rresht['Qyteti'];

$adresa = $rresht['Adresa'];


?>

<h1 align="center"> Modifiko llogarine </h1>

<form action="" method="post">
    
    <div>
        <label> Emri:<input type="text" name="emri"  value="<?php echo $emri; ?>" required> </label>
    </div>  
   
    <div>
        <label>Email:<input type="text" name="email" value="<?php echo $email; ?>" required></label>
     </div>   
	 
    <div>
        <label>Qyteti: <input type="text" name="qytet"value="<?php echo $qyteti; ?>" required></label>
     </div>   

    <div>
        <label>Adresa:<input type="text" name="adrese" value="<?php echo $adresa; ?>" required> </label>
    </div> 
    
    <div>
        
        <button name="modifiko" class="btn btn-primary">Modifiko</button>
    </div>        
</form>            

<?php 

if(isset($_POST['modifiko'])){
    
    $id_m = $id;
    
    $emri_f= $_POST['emri'];
    
    $email_f = $_POST['email'];
    
    
    $qytet_f = $_POST['qytet'];
    
    $adresa_f = $_POST['adrese'];
       
    $perditesim = "update farmaciste set Emri='$emri_f',Email='$email_f',Qyteti='$qytet_f',Adresa='$adresa_f'where id_farmacistit='$id_m' ";
    
    $realizim = mysqli_query($lidhja,$perditesim);
    
    if($realizim){
        
        echo "<script>alert('Modifikimi u realizua me sukses')</script>";
        
    }   
}
?>