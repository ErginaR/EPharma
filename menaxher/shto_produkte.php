<?php 

include("teperbashketa/db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Shto Produkte </title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
</head>
<body>
    
<div class="row">
    
    <div class="col-lg-12">
        
        <ol class="breadcrumb">
            
            <li class="active"><!-- active Begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Insert Products
                
            </li><!-- active Finish -->
            
        </ol><!-- breadcrumb Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
       
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i> Insert Product 
                   
               </h3><!-- panel-title Finish -->
               
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data">
                   
                    <div>
                      <label> Emri <input name="emri" type="text"  required></label> 
                    </div>      
                    <div>
                      <label> Pershkrimi<input name="pershkrim" type="text"  required></label> 
                    </div> 
                   
                   <div>
                      <label> foto <input name="foto" type="file" required></label>                   
                   </div>
				   
                   <div>
                      <label> Vendi Prodhimit <input name="vendi_p" type="text"  required></label> 
                    </div> 
					
					<div >
                       
                      <label> Lloje produktesh </label> 
                
                          <select name="kategori_b">
                              
                              <option> Zgjidh </option>
                              
                              <?php 
                              
                              $get_p_cats = "select * from kategori_barna";
                              $run_p_cats = mysqli_query($lidhja,$get_p_cats);
                              
                              while ($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                  
                                  $p_cat_id = $row_p_cats['Id_kat'];
                                  $p_cat_title = $row_p_cats['Kategoria'];
                                  
                                  echo "
                                  
                                  <option value='$p_cat_id'> $p_cat_title </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select>
                          
                      </div>
					  
					  <div>
                      <label> Cmimi<input name="cmimi" type="text"  required></label> 
                      </div> 
                      <div>
                          
                          <input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">
                          
                      </div>
                 
                   
               </form><!-- form-horizontal Finish -->
               
           </div><!-- panel-body Finish -->
            
        </div><!-- canel panel-default Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->


</body>
</html>


<?php 

if(isset($_POST['submit'])){
    
    $emri = $_POST['emri'];
    $pershkrim = $_POST['pershkrim'];
    $foto = $_FILES['foto']['name'];
	$foto_kopje = $_FILES['foto']['tmp_name'];
	move_uploaded_file($foto_kopje,"foto/$foto");//vendos imazhet ne vendodhjen e percaktuar nga ne
    $vendi_p = $_POST['vendi_p'];
    $kategori = $_POST['kategori_b'];
    $cmimi = $_POST['cmimi'];
    $insert_product = "insert into barna(Emri_b,Pershkrim,Date_P,Date_S,Foto_b,Vendi_P,Id_kat,Cmimi) 
	                   values ('$emri','$pershkrim',Now(),Now(),'$foto','$vendi_p','$kategori','$cmimi')";
    
    $run_product = mysqli_query($lidhja,$insert_product);
    
    if($run_product){
        
        echo "<script>alert('Shtimi  i produktit u krye me sukses')</script>";
       
        
    }
    
}

?>