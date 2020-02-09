<?php 
require("teperbashketa/db.php");
?>
<div style="background-color:#D6F6F4;">
    <div style="background-color:#2CB29B;">
        <h3>Kategorite</h3>
    </div>
    
    <div>
        <ul class="nav ">
            
            <?php 
			   
               $kategorite = "select * from kategori_barna";
    
               $rezultat2 = mysqli_query($lidhja,$kategorite);
    
               while($rresht2=mysqli_fetch_array($rezultat2)){
        
                   $id_kat = $rresht2['Id_kat'];
        
                   $kategori = $rresht2['Kategoria'];
        
                   echo "<li><a href='produkte.php?kat=$id_kat'> $kategori </a></li>";
			   }
			?>
            
        </ul>
    </div>
    
</div>