<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
               
               <h4>Faqet kryesore</h4>
                
                <ul>
                    <li><a href="shporte.php">Shporta</a></li>
                    <li><a href="kontakto.php">Na Kontaktoni</a></li>
                    <li><a href="produkte.php">Produkte</a></li>
                    <li><a href="farmaciste/llogaria.php">Llogaria</a></li>
                    <li><a href="hyr.php">Hyr</a></li>
                    <li><a href="rregjistrim.php">Rregjistrohu</a></li>
                </ul>
                
            </div>
            <div class="com-sm-6 col-md-3">
                
                <h4>Medikamente</h4>
                
                <ul>
                     <?php 
                    
                        $get_p_cats = "select * from product_categories";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
                    
                        while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                            
                            $p_cat_id = $row_p_cats['p_cat_id'];
                            
                            $p_cat_title = $row_p_cats['p_cat_title'];
                            
                            echo "
                            
                                <li>
                                
                                    <a href='shop.php?p_cat=$p_cat_id'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
                            
                        }
                    
                    ?>
                </ul>
                
                
            </div>
            
            <div class="col-sm-6 col-md-3">
                
                <h4>Na gjeni</h4>
                
                <p>
                    
                    <strong>E-Pharma Media inc.</strong>
                    <br/>Tirane
                    <br/>0691234567
                    <br/>epharma@gmail.com
                    <br/><strong>ErginaR</strong>
                    
                </p>                
                
            </div>
            
            <div class="col-sm-6 col-md-3">
                
                <h4>Na ndiqni </h4>
                
                <p class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-envelope"></a>
                </p>
                
            </div>
        </div>
    </div>
</div>


<div id="copyright">
        <div>
            
            <p class="pull-left">&copy; 2020 E-Pharma Te gjitha te drejtat te rezervuara |Realizuar nga ErginaR</p>
            
        </div>
        
</div>