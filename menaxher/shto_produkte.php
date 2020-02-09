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
            
            <li class="active">Shto Produkte</li>
            
        </ol>
        
    </div>
    
</div>
       
<div class="row">
    
    <div class="col-lg-12">
        
        <div class="panel panel-default">
            
           <div class="panel-heading">
               
               <h3 class="panel-title">Shto Produkt</h3>
                 
           </div> 
           
           <div class="panel-body">
               
               <form method="post" class="form-horizontal">
                   
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
                              
                              $kategorite = "select * from kategori_barna";
                              $realizo = mysqli_query($lidhja,$kategorite);
                              
                              while ($rresht=mysqli_fetch_array($realizo)){
                                  
                                  $id = $rresht['Id_kat'];
                                  $emri = $rresht['Kategoria'];
                                  
                                  echo "
                                  
                                  <option value='$id'> $emri </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select>
                          
                      </div>
					  
					  <div>
                      <label> Cmimi<input name="cmimi" type="text"  required></label> 
                      </div> 
                      <div>
                          
                          <input name="dergo" value="Shto" type="submit" class="btn btn-primary form-control">
                          
                      </div>
                 
                   
               </form>
               
           </div>
            
        </div>       
    </div>    
</div>
</body>
</html>


<?php 

if(isset($_POST['dergo'])){
    
    $emri = $_POST['emri'];
    $pershkrim = $_POST['pershkrim'];
    $foto = $_FILES['foto']['name'];
	$foto_kopje = $_FILES['foto']['tmp_name'];
	move_uploaded_file($foto_kopje,"foto/$foto");//vendos imazhet ne vendodhjen e percaktuar nga ne
    $vendi_p = $_POST['vendi_p'];
    $kategori = $_POST['kategori_b'];
    $cmimi = $_POST['cmimi'];
    $shto_p = "insert into barna(Emri_b,Pershkrim,Date_P,Date_S,Foto_b,Vendi_P,Id_kat,Cmimi) 
	                   values ('$emri','$pershkrim',Now(),Now(),'$foto','$vendi_p','$kategori','$cmimi')"; 
    $realizo = mysqli_query($lidhja,$shto_p);
    
    if($realizo){
        
        echo "<script>alert('Shtimi  i produktit u krye me sukses')</script>";  
    }   
}
?>