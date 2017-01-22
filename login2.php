<?php

    session_start();
    require_once("server/conn.php");

    $sql = "SELECT * FROM user WHERE email = '".$_POST['email']."' AND password = '".$_POST['password']."'";
    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_array($result);

    $_SESSION['id'] = $row['id'];
    $_SESSION['nome'] = $row['nome'];
    $_SESSION['sobrenome'] = $row['sobrenome'];

    echo $_SESSION['nome'];

    header("Location:home.php");

?>
