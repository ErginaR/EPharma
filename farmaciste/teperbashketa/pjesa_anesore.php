<div class="panel panel-default sidebar-menu">
    
    <div class="panel-heading">
        
           <?php 
        
        $customer_session = $_SESSION['email'];
        
        $get_customer = "select * from farmaciste where Email='$customer_session'";
        
        $run_customer = mysqli_query($lidhja,$get_customer);
        
        $row_customer = mysqli_fetch_array($run_customer);
        
        $customer_name = $row_customer['Emri'];
        
        if(!isset($_SESSION['email'])){
            
        }else{
            
            echo "
            
                <center>
                
                    <img src='foto_profili/Foto_profili.png' class='img-responsive' >
                
                </center>
                
                <br/>
                
                <h3 class='panel-title' align='center'>
                
                    Emri: $customer_name
                
                </h3>
            
            ";
            
        }
        
        ?>
    </div>
    
    <div class="panel-body">
        
        <ul class="nav-pills nav-stacked nav">
            
            <li>
                
                <a href="llogaria.php?HitoriaBlerjes">
                    
                    <i class="fa fa-list"></i> Historia e Blerjes
                    
                </a>
                
            </li>
            
            
            <li>
                
                <a href="llogaria.php?modifiko_llogarine">
                    
                    <i class="fa fa-pencil"></i> Modifiko llogarine
                    
                </a>
                
            </li>
            
            <li>
                
                <a href="llogaria.php?ndrysho_fjalekalim">
                    
                    <i class="fa fa-user"></i>Ndrysho fjalekalim
                    
                </a>
                
            </li> 
            <li>
                
                <a href="llogaria.php?fshi_llogarine">
                    
                    <i class="fa fa-trash-o"></i> Fshi llogarine
                    
                </a>
                
            </li>
            
            
        </ul>
        
    </div>
    
</div>