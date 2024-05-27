<?php 
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "testing"; 

    // Create connection 
    $conn =  
        new mysqli($servername, $username, $password, $dbname); 

    // Check connection 
    if ($conn->connect_error) { 
        die("Connection failed: " . $conn->connect_error); 
    }

    session_start();

    if (isset($_SESSION['user'])) { 
        $user = $_SESSION['user']; 
        
        echo '<script type="text/javascript"> 
            window.onload = function () { 
                alert("Welcome to our shopping website"); 
                window.location.href = "account.php";  
            }; 
        </script>
        ';
    }
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="proiect.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <title>My E-Magazine</title>
</head>
<body>
    <nav class="bar">
        <div class="container">
            <div class="logo">
                <a href="proiect.html">
                    <img src="logo-magazinul-evei.png" alt="logo">
                </a>
            </div>
            <div class="meniu">
                <div class="cautare">
                    <input type="search" class="cautare2" name="caut" id="caut">
                    <a class="btn" href="#" id="caut2">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                </div>
                <ul>
                    <li>
                        <a class="btn" href="#" id="btlista">
                            <i class="fa-sharp fa-solid fa-lines-leaning">Produse</i>
                        </a>
                        <ul class="ascuns" id="listamea">
                            <a href="procesoare.html" class="btn2">Procesoare</a>
                            <a href="placi video.html" class="btn2">Placi video</a>
                            <a href="coolere.html" class="btn2">Coolere</a>
                        </ul>
                    </li>
                    <li>
                        <a class="btn" href="cos.html">
                            <i class="fa-solid fa-cart-shopping">Cosul meu</i>
                        </a>
                    </li>
                    <li>
                        <a class="btn" href="despre.html">
                            <i class="fa-solid fa-circle-info">Despre noi</i>
                        </a>
                    </li>
                    <li>
                        <a class="btn" href="login.html">
                            <i class="fas fa-user">Cont</i>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
<section class="produse">
    <div class="container">
       <h1> Produse la oferta</h1>
        <div class="meniu">
            <ul>
                <li>
<p>Placa video EVGA GeForce RTX 3050 XC GAMING 8GB GDDR6 128-bit</p>
<p class="taiat">1.250 Lei</p>
<p>1.050 Lei</p>
<a class="btn btn-produs" href="#">
    <i class="fa-solid fa-cart-shopping">Adauga in cos</i>
</a>
<img src="Placa video EVGA GeForce RTX 3050 XC GAMING 8GB GDDR6 128-bit.jpg" alt="imgp">

                </li>
                <li>
                    <p>Procesor Intel® Core™ i7-12700
                    </p>
                    <p class="taiat">1.430 Lei</p>
                    <p>1.250 Lei</p>
                    <a class="btn btn-produs" href="#">
                        <i class="fa-solid fa-cart-shopping">Adauga in cos</i>
                    </a>
                    <img src="Procesor Intel® Core™ i7-12700.webp" alt="imgp">
                    
                </li>
                <li>
                    <p>Cooler master hyper 212</p>
                    <p class="taiat">230 Lei</p>
                    <p>150 Lei</p>
                    <a class="btn btn-produs" href="#">
                        <i class="fa-solid fa-cart-shopping">Adauga in cos</i>
                    </a>
                    <img src="Cooler master hyper 212.jpg" alt="imgp">
                    
                </li>
            </ul>
        </div>
    </div>
</section>
    <script src="proiect.js"></script>
</body>
</html>
