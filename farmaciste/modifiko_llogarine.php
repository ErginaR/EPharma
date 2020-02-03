<?php 

$email = $_SESSION['email'];

$q4 = "select * from farmaciste where Email='$email'";

$rez = mysqli_query($lidhja,$q4);

$rresht = mysqli_fetch_array($rez);

$customer_id = $row_customer['id_farmacistit'];

$customer_name = $row_customer['Emri'];

$customer_email = $row_customer['Email'];

$customer_city = $row_customer['Qyteti'];


$customer_address = $row_customer['Adresa'];


?>

<h1 align="center"> Modifiko llogarine </h1>

<form action="" method="post">
    
    <div>
        <label> Emri:<input type="text" name="c_name"  value="<?php echo $customer_name; ?>" required> </label>
    </div>  
   
    <div>
        <label>Email:<input type="text" name="c_email" value="<?php echo $customer_email; ?>" required></label>
     </div>   
	 
    <div>
        <label>Qyteti: <input type="text" name="c_city"value="<?php echo $customer_city; ?>" required></label>
     </div>   

    <div>
        <label>Adresa:<input type="text" name="c_address" value="<?php echo $customer_address; ?>" required> </label>
    </div> 
    
    <div>
        
        <button name="update" class="btn btn-primary">Modifiko</button>
    </div>        
</form>            

<?php 

if(isset($_POST['update'])){
    
    $update_id = $customer_id;
    
    $c_name = $_POST['c_name'];
    
    $c_email = $_POST['c_email'];
    
    
    $c_city = $_POST['c_city'];
    
    $c_address = $_POST['c_address'];
    
    
    $update_customer = "update farmaciste set Emri='$c_name',Email='$c_email',Qyteti='$c_city',Adresa='$c_address'where id_farmacistit='$update_id' ";
    
    $run_customer = mysqli_query($lidhja,$update_customer);
    
    if($run_customer){
        
        echo "<script>alert('Modifikimi u realizua me sukses')</script>";
        
    }
    
}

?>