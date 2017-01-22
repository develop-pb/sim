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
                    <h3>Reis de Portugal</h3>
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

            $sql = "SELECT * FROM reis WHERE id_rei = '".$_GET['id_rei']."'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
            $sql_flag = "SELECT reis.id_flag FROM reis, flag WHERE reis.id_rei = '".$_GET['id_rei']."' AND reis.id_flag = flag.id_flag";
            $result_sql = mysqli_query($conn,$sql_flag);
            $row_flag = mysqli_fetch_array($result_sql);
            $id_rei = $_GET['id_rei'];
            $ref_img = "gallery.php?id_rei=".$id_rei;

            echo "<audio src='".$row['audio']."' autoplay ></audio>";
        ?>
        <div class="container_reis">
            <h3 class="titulo"><?php echo $row['nome']; ?></h3>
            <table>
                <tr>
                    <td class="left_container">
                        <?php
                            $id= $row_flag["id_flag"];
                            $ref= "result_flag.php?id_flag=".$id;
                        ?>
                        <?php echo "<img src ='".$row['imagem']."'";?>
                    </td>
                    <td class="right_container">
                        <?php
                            echo $row['texto'];
                            echo "<br>";
                            echo "<br>";
                        ?>
                        <a href="<?php echo $ref?>">Bandeira de: <?php echo $row['nome']; echo "<br>"?></a><br>
                        <a href="<?php echo $ref_img?>">Galeria de: <?php echo $row['nome']; echo "<br>"?></a><br>
                        <a href="video_timeline.html">Vídeo: História do Primeiro Rei de Portugal</a>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>
