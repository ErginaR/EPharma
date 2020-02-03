<?php 
    
    if(!isset($_SESSION['email'])){
        
        echo "<script>window.open('hyr.php','_self')</script>";
        
    }else{

?>
   
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        
        <a href="index.php?panel" class="navbar-brand">Menaxher  <?php echo $emer;  ?> </a>
        
    </div>
    
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php?panel">Paneli</a>
            </li>           
            <li>
                <a href="index.php?shto_produkte">shto_produkte</a>
            </li> 
            <li>
                <a href="index.php?shiko_produktet">Shiko Produktet</a>
            </li>  			
          
             <li>
                <a href="index.php?shiko_klientet">Shiko Klientet </a>
            </li>
            
            <li>
                <a href="index.php?shiko_porosite">Shiko Porosite</a>      
            </li>
            
            <li>
                <a href="index.php?profili">Profili im</a>
            </li>
            
            <li>
                <a href="dil.php">Dil </a>
            </li>
          
         <!--shtim konferncash   
              
                    <li>
                        <a href="index.php?insert_konf"> Shto Konferenca </a>
                    </li>
                    <li>
                        <a href="index.php?view_konf"> Shiko</a>
                    </li> -->
           
        </ul>
    </div>
    
</nav>


<?php } ?>