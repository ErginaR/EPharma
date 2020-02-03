<?php 

$customer_session = $_SESSION['email'];

$get_customer = "select * from farmaciste where Email='$customer_session'";

$run_customer = mysqli_query($lidhja,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['id_farmacistit'];

$customer_name = $row_customer['Emri'];

$customer_email = $row_customer['Email'];

$customer_city = $row_customer['Qyteti'];

$customer_address = $row_customer['Adresa'];

?>
    <h1> Fshi llogarine</h1>
    
    <form action="" method="post">
    
    <div>
        <label> Emri: <?php echo $customer_name; ?></label>
    </div>  
   
    <div>
        <label>Email:<?php echo $customer_email; ?></label>
     </div>   
	 
    <div>
        <label>Qyteti: <?php echo $customer_city; ?></label>
     </div>   

    <div>
        <label>Adresa:<?php echo $customer_address; ?> </label>
    </div>
	
       <input type="submit" name="fshi" value="Fshi" class="btn btn-danger"> 
        
    </form>
    
</center>
<?php 

$email = $_SESSION['email'];

if(isset($_POST['fshi'])){
    
    $delete_customer = "delete from farmaciste where Email='$email'";
    
    $run_delete_customer = mysqli_query($lidhja,$delete_customer);
    
    if($run_delete_customer){
        
        session_destroy();
        
        echo "<script>alert('Tashme llogaria juaj nuk ekziston me')</script>";
        
        echo "<script>window.open('../index.php','_self')</script>";
        
    }
    
}


?>