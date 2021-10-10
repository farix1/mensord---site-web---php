<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8;', 'root', '');
if(isset($_POST['register'])){
  if(!empty($_POST['username']) && !empty($_POST['password'] && !empty($_POST['email']))){
    $email = htmlspecialchars($_POST['email']);
    $username = htmlspecialchars($_POST['username']);
    $password = sha1($_POST['password']);
    $insertUSer = $bdd->prepare('INSERT INTO users(email, username, password)VALUES(?, ?, ?)');
    $insertUSer->execute(array($email, $username, $password,));

    $recupUser = $bdd->prepare('SELECT * FROM users WHERE `email` = ? `username` = ? AND password = ?');
    $recupUser->execute(array($email, $username, $password));
    if($recupUser->rowCount() > 0){
      $_SESSION['email'] = $email;
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
      $_SESSION['id'] = $recupUser->fetch()['id'];
    }
    echo  "we are now ";
    echo $_SESSION['id'];    
  }else{
    echo "Please complete all fields ...";
  }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Mensord | Register</title>
    <link rel="stylesheet" href="css./styless.css">
    <link rel="stylesheet" href="css./styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shojumaru&display=swap" rel="stylesheet">
    
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
                <a href="login.php">
                Login</a>
            </li>
            
           
        </ul>
    </nav>


  <form class="box1" method="post">
  <input type="text" name="email" placeholder="email" >
  <input type="text" name="username" placeholder="username" autocomplete="off">
  <input type="password" name="password" placeholder="password" autocomplete="off">
  <input type="submit" name="register" value="register">
  
</form>


</body>
</html>

