

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Mensord | Acceuil</title>
    <link rel="stylesheet" href="./css/styles.css">
    <meta https-euiv="X-UA-Compatible" content="IE=edge">
    
</head>


<body>

    <nav class="Menu-nav">
        <ul>
            
            <li class="page">
                <a  href="index.php">
                    Home
                </a>
            </li>
            <li class="page">

                <a href="support.php">
                    Support
                </a>

            </li>
            
            

            <li class="page">
                <a href="https://discord.gg/cWj49zpckh" target="blanc">
                Discord</a>
            </li>
            <li class="page">
                <a href="register.php">
                    Register
                </a>
            </li>
            
            <li class="page">
                <a href="login.php">
                Login</a>
            </li>
            
           
        </ul>
    </nav>

    <h1 class="ssdr">
        Mensord | Home
    </a>
    </h1>



    <nav class="sudo">
        <ul>
            <li class="sudo2">
                <a href="booter.php">
                    Booter
                </a>
            </li>
            <li class="sudo2">
                <a href="vpn.php">
                    Vpn
                </a>
            </li>
            <li class="sudo2">

                <a href="ping.php">
                    Ping
                </a>
            </li>
            
          
        </ul>
    </nav>

    <?php
    session_start();
    echo $_SESSION['username'];


    ?>

    
</body>
</html>