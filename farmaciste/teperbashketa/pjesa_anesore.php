<div class="panel panel-default sidebar-menu">   
    <div class="panel-heading">
        
           <?php 
        
        $email_s = $_SESSION['email'];
        
        $farmacisti = "select * from farmaciste where Email='$email_s'";
        
        $realizo = mysqli_query($lidhja,$farmacisti);
        
        $rresht = mysqli_fetch_array($realizo);
        
        $emri = $rresht['Emri'];
        
        if(!isset($_SESSION['email'])){
            
        }
		else{
            
            echo "<center><img src='foto_profili/Foto_profili.png' class='img-responsive' ></center>          
                <br/>               
                <h3 class='panel-title' align='center'>Emri: $emri</h3>"; 
        }
        
        ?>
    </div>   
    <div class="panel-body">       
        <ul class="nav-pills nav-stacked nav">           
            <li>         
                <a href="llogaria.php?HitoriaBlerjes">Historia e Blerjes</a>
            </li>      
          
            <li>             
                <a href="llogaria.php?modifiko_llogarine">Modifiko llogarine</a>             
            </li>
            
            <li>              
                <a href="llogaria.php?ndrysho_fjalekalim">Ndrysho fjalekalim</a>
            </li> 
            <li>                
                <a href="llogaria.php?fshi_llogarine">Fshi llogarine</a>             
            </li>
          
        </ul>
        
    </div>
    
</div>