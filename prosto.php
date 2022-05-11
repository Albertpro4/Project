<?php
   $login = filter_var(trim($_POST['login']),
   	FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),
   	FILTER_SANITIZE_STRING);
 $pass = filter_var(trim($_POST['pass']),
   	FILTER_SANITIZE_STRING);


 if(mb_strlen($login) < 5 || mb_strlen($login) > 90) 
 {
   echo "Длина не допустимая суть логина ";
   exit();
 } else if(mb_strlen($name) < 4 || mb_strlen($name) > 70)
 {
          echo "Длина не допустимая суть имени ";
 	        exit();
 	 }
 else if(mb_strlen($pass) < 8 || mb_strlen($pass) > 40)
 {
          echo "Длина не допустимая суть пароля ";
           exit();
    }
   

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

    $link->query("INSERT INTO `igroki`(`login`, `pass`, `name`) VALUES('$login', '$pass', '$name')");




    $link->close();



    header('Location: /');