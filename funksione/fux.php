<?php 


function getPro(){
    
    global $lidhja;
    
    $get_products = "select * from barna order by 1 DESC LIMIT 0,8";
                             
                            $run_products = mysqli_query($lidhja,$get_products);
                             
                            while($row_products=mysqli_fetch_array($run_products)){
                                
                                $pro_id = $row_products['Nr_seri'];
        
                                $pro_title = $row_products['Emri_b'];

                                $pershkrim = $row_products['Pershkrim'];

                                $pro_img1 = $row_products['Foto_b'];
                                $cmimi = $row_products['Cmimi'];
                                echo "
                                
                                    <div class='col-md-4 col-sm-6 center-responsive'>
                                    
                                        <div class='product'>
                                        
                                            <a href='informacione.php?pro_id=$pro_id'>
                                            
                                                <img class='img-responsive' src='menaxher/foto/$pro_img1'>
                                            
                                            </a>
                                            
                                            <div class='text'>
                                            
                                                <h3>
                                                
                                                    <a href='informacione.php?pro_id=$pro_id'> $pro_title </a>
                                                
                                                </h3>
                                            
                                                <p class='price'>

                                                    $$cmimi

                                                </p>

                                                <p class='buttons'>

                                                    <a class='btn btn-default' href='informacione.php?pro_id=$pro_id'>

                                                        Informacion

                                                    </a>

                                                    <a class='btn btn-primary' href='informacione.php?pro_id=$pro_id'>

                                                        <i class='fa fa-shopping-cart'></i> shto ne shporte

                                                    </a>

                                                </p>
                                            
                                            </div>
                                        
                                        </div>
                                    
                                    </div>
                                
                                ";
                                
                        }
    
}

/// finish getPro functions ///


/// begin getCats functions ///

function getCats(){
    
    global $db;
    
    $get_cats = "select * from categories";
    
    $run_cats = mysqli_query($db,$get_cats);
    
    while($row_cats=mysqli_fetch_array($run_cats)){
        
        $cat_id = $row_cats['cat_id'];
        
        $cat_title = $row_cats['cat_title'];
        
        echo "
        
            <li>
            
                <a href='produkte.php?cat=$cat_id'> $cat_title </a>
            
            </li>
        
        ";
        
    }
    
}


function shfaq_kategori(){
    
    global $lidhja;
    
   
}


?>