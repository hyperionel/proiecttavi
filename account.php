<h1>Welcome <?php
                session_start();
                $user = $_SESSION["user"]; 
                echo $user["name"]; 
            ?> to GFG Shopping Web Application</h1>

<a href="/proiect/logout.php">Logout</a>