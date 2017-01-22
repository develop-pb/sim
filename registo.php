<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Molle:400i" rel="stylesheet">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">

        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

        <title>Página de Login</title>

    </head>
    <body>
        <header>
            <div class="main_header">
                <div class="logo">
                    <a href="index.html">
                        <img src="img/logo.png">
                </div>
                <div class="description">
                    <h3>Login</h3>
                </div>
                <div class="buttons">
                    <a class="buttonStyle5" href="timeline.html" target="_self">Reis</a>
                    <a class="buttonStyle1" href="flag.html" target="_self">Bandeiras</a>
                    <a class="buttonStyle2" href="javascript:window.history.go(-1)" target="_self">Voltar</a>
                    <a class="buttonStyle3" href="login.php" target="_self">Entrar</a>
                </div>
            </div>
        </header>
        <div class="main_login">
            <div class="login">
                <div class="title_login" align="center">
                    <h1>NOVO UTILIZADOR</h1>
                </div>
                <form method="post" id="formAdd">
                    <input type="text" placeholder="Nome" name="nome" id="nome" required="">
                    <input type="text" placeholder="Sobrenome" name="sobrenome" id="sobrenome" required="">
                    <input type="email" placeholder="Email" name="email" id="email" required="">
                    <input type="password" placeholder="password" name="password" id="password" required="">
                    <input type="password" placeholder="confirmar password" name="conf_password" id="conf_password" required="">
                    <input type="submit" value="Registar" name="registar">
                </form>
                <?php
                    if(isset($_POST['registar'])){

                        require_once("server/conn.php");

                        $email = $_POST['email'];
                        $pass = $_POST['password'];
                        $conf_pass = $_POST['conf_password'];

                        $emailBD = "SELECT email FROM user WHERE email='".$_POST['email']."'";
                        $emailConf = mysqli_query($conn, $emailBD);
                        $row = mysqli_num_rows($emailConf);

                        if ($row != 0){
                            echo "Utilizador já existente";
                        } elseif ($pass != $conf_pass){
                            echo "Password diferente!";
                        } else {
                            $strSQL = "INSERT INTO user (nome, sobrenome, email, password) VALUES ('".$_POST['nome']."', '".$_POST['sobrenome']."','".$_POST['email']."', '".$_POST['password']."')";

                            $insertSQL= mysqli_query($conn, $strSQL);

                            if ($insertSQL){
                                echo "Utilizador criado";
                            } else {
                                echo "Erro". $conn->error;
                            }
                            $conn->close();
                        }
                    }
                ?>
            </div>
        </div>
    </body>
</html>
