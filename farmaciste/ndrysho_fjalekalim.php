<h1 align="center"> Ndrysho Fjalekalimin </h1>
<form action="" method="post">
    
    <div>
        
        <label> Fjalekalimi Vjeter: <input type="text" name="fjalekalim_v" class="form-control" required></label>
      </div>
    
    <div>
        
        <label> Fjalekalimi i Ri: <input type="text" name="fjalekalim_r" class="form-control" required></label>
        
    </div>
    
    <div class="form-group">
        
        <label> Konfirmo Fjalekalimin e Ri:<input type="text" name="fjalekalim_r_2" class="form-control" required></label>
        
    </div>
    
    <div class="text-center">       
        <button type="submit" name="dergo" class="btn btn-primary">Perditeso</button>
    </div>
    
</form>
<?php 

if(isset($_POST['dergo'])){
    
    $email = $_SESSION['email'];
    
    $fjalekalim_v = $_POST['fjalekalim_v'];
    
    $fjalekalim_r= $_POST['fjalekalim_r'];
    
    $fjalekalim_r_2 = $_POST['fjalekalim_r_2'];
    
    $farmacisti = "select * from farmaciste where fjalekalimi='$fjalekalim_v'";
    
    $realizo= mysqli_query($lidhja,$farmacisti);
    
    $rresht= mysqli_fetch_array($realizo);
    
    if($rresht==0){
        
        echo "<script>alert('Fjalekalimi i pasakte')</script>";
        
        exit();
        
    }
    
    if($fjalekalim_r!=$fjalekalim_r_2){       
        echo "<script>alert('fjalekalimet nuk perputhen')</script>";       
        exit();        
    }  
    $perditeso = "update farmaciste set fjalekalimi='$fjalekalim_r' where Email='$email'";
    
    $realizo2 = mysqli_query($lidhja,$perditeso);
    
    if($realizo2){
        
        echo "<script>alert('Fjalekalimi sapo u modifikua')</script>";
        
        echo "<script>window.open('llogaria.php','_self')</script>";
        
    }
    
}

?>