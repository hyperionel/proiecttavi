<?php
session_start(); 
session_destroy();
echo '<script type="text/javascript"> 
        window.onload = function () { 
            alert("Welcome to our shopping website"); 
            window.location.href = "index.php";  
        }; 
    </script>
    ';
?>
