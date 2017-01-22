<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Molle:400i" rel="stylesheet">
        <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
        <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
        <script src="js/modernizr.js"></script> <!-- Modernizr -->

        <title>Reis de Portugal</title>
    </head>
    <body>
        <header>
            <div class="main_header">
                <div class="logo">
                    <a href="index.html">
                    <img src="img/logo.png">
                </div>
                <div class="description">
                    <h3>Bandeiras de Portugal</h3>
                </div>
                <div class="buttons">
                    <a class="buttonStyle5" href="timeline.html" target="_self">Reis</a>
                    <a class="buttonStyle1" href="flag.html" target="_self">Bandeiras</a>
                    <a class="buttonStyle2" href="javascript:window.history.go(-1)" target="_self">Voltar</a>
                    <a class="buttonStyle3" href="login.php" target="_self">Entrar</a>
                </div>
            </div>
    	</header>
        <?php
            require_once("server/conn_reis.php");

            $sql = "SELECT * FROM flag WHERE id_flag = '".$_GET['id_flag']."'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);

            echo "<audio src='".$row['som']."' autoplay ></audio>";
        ?>
        <div class="container_reis">
            <h3 class="titulo"><?php echo $row['nome']; ?></h3>
            <table>
                <tr>
                    <td class="left_container">
                        <?php echo "<img src ='".$row['imagem']."'";?>
                    </td>
                    <td class="right_container">
                        <?php
                            echo $row['texto'];
                            echo "<br>";
                        ?>
                        <a href="video_flag.html">Vídeo: Evolução da Bandeira
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>
