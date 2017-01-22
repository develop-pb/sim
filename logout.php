<?php
    session_start();

    if ($_SESSION['id'] > 0) {
        session_destroy();
        header("Location: login.php");
    } else {
        echo "Precisa fazer login primeiro";
    }
?>
