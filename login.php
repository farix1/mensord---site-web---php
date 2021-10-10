<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8;', 'root', '');
if(isset($_POST['login'])){
  if(!empty($_POST['username']) AND !empty($_POST['password'])){
    $username = htmlspecialchars($_POST['username']);
    $password = sha1($_POST['password']);

    $recupUser = $bdd->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
    $recupUser->execute(array($username, $password));

    if($recupUser->rowCount() > 0){
        $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
      $_SESSION['id'] = $recupUser->fetch()['id'];
      echo  "we are now ";
      header('Location: index.php');
      }else {
          echo "Your password or nickname is incorrect";
      }
  }else{
    echo "Please complete all fields ...";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Mensord | Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
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
                Register</a>
            </li>
            
           
        </ul>
    </nav>

    <form class="box" action="" method="post">
        <h1>Login</h1>
  <input type="text" name="username" placeholder="password" autocomplete="off">
  <input type="password" name="password" placeholder="password" autocomplete="off">
  <input type="submit" name="login" value="login">
  
</form>

</body>
</html>