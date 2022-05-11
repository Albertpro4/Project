<?php
 $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
 $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

 
 $pass = md5($pass. "grreegrg");


   $user = 'root';
$password = 'root';
$db = 'register_doken';
$host = 'localhost';
$port = 3307;

$link = mysqli_init();
$success = mysqli_real_connect(
 $link,
 $host,
 $user,
 $password,
 $db,
 $port
);

    $resert = $link->query("SELECT * FROM `igroki` where `login` = '$login' AND `pass` = '$pass'");
    $user = $resert->fetch_assoc();

    if(count($user) == 0)
    {
      echo "Такой пользователь не найден";
    
    exit();
    

    }

    setcookie('igroki', $user['name'], time() + 3600, "/");

    $link->close();



    header('Location: index1.php');

?> 