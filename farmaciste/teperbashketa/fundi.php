<div id="footer">
    <div>
        <div class="row" >
            <div class="col-md-4">
               
               <h4>Faqet kryesore</h4>
                
                <ul>
                    <li><a href="shporte.php">Shporta</a></li>
                    <li><a href="kontakto.php">Na Kontaktoni</a></li>
                    <li><a href="produkte.php">Produkte</a></li>
                    <li><a href="farmaciste/llogaria.php">Llogaria</a></li>
                    <li>                    
					<?php 
                           
                           if(!isset($_SESSION['email'])){
                               
                               echo"<a href='kontrollo.php'>Hyr</a>";
                               
                           }else{
                               
                              echo"<a href='farmaciste/llogaria.php?HistoriaBlerjes'>Llogaria</a>"; 
                               
                           }
                           
                           ?>
                    </li>
                    <li><a href="rregjistrim.php">Rregjistrohu</a></li>
                </ul>
                
            </div>
            
            <div class=" col-md-4">
                
                <h4>Na gjeni</h4>
                
                <p>
                    
                    <strong>E-Pharma Media inc.</strong>
                    <br/>Tirane
                    <br/>0691234567
                    <br/>epharma@gmail.com
                    <br/><strong>ErginaR</strong>
                    
                </p>                
                
            </div>
            
            <div class="col-md-4">
                
                <h4>Na ndiqni </h4>
                
                <p >
				   <ul>
                    <li><a href="#" >Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Youtube</a></li>
                    <li><a href="#">Linkedin</a></li>
                    <li><a href="#">Instagram</a></li>
					<ul>
                </p>
                
            </div>
        </div>
    </div>
</div>


<div id="tedrejtat">
   <div style="float:left; color:black">
    <p>&copy; 2020 E-Pharma Te gjitha te drejtat te rezervuara |Realizuar nga ErginaR</p>   
   </div>	
</div>