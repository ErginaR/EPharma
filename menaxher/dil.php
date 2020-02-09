<?php 

    session_start();
    session_destroy();

    echo "<script>window.open('hyr.php','_self')</script>";

?>