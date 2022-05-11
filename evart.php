<?php

    setcookie('igroki', $user['name'], time() - 3600, "/");

 header('Location: index1.php');
?>