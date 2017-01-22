<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Página de BackEnd</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Molle:400i" rel="stylesheet">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <div class="main_header">
                <div class="logo">
                    <a href="index.html">
                        <img src="img/logo.png">
                </div>
                <div class="description">
                    <h3>Backend</h3>
                </div>
                <div class="buttons">
                    <p><?php echo $_SESSION['nome']." ".$_SESSION['sobrenome'];?> - <a href="logout.php">Logout</a></p>
                </div>
            </div>
        </header>
        <div class="container_reis">
            <h3>Upload de imagens</h3>
            <div class="upload">
                <?php
                    $target_dir = "gallery/".$_POST['reis']."/";
                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                    //  VERIFICA SE É IMAGEM
                    if(isset($_POST["submit"])) {
                        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                        if($check !== false) {
                            echo "<br><font color='#000000' size='4'><p>O ficheiro é do tipo - " . $check["mime"] . ".</p>";
                            $uploadOk = 1;
                        } else {
                            echo "<p>O ficheiro não é uma imagem.</p>";
                            $uploadOk = 0;
                        }
                    }
                    // vERIFICA SE O FICHEIRO JÁ EXISTE
                    if (file_exists($target_file)) {
                        echo "<p>O ficheiro já existe na galeria deste Rei.</p>";
                        $uploadOk = 0;
                    }
                    // VERIFICA TAMANHO DO FICHEIRO
                    if ($_FILES["fileToUpload"]["size"] > 500000) {
                        echo "<p>O ficheiro é grande demais.</p>";
                        $uploadOk = 0;
                    }
                    // VERIFICA EXTENSÕES DE FICHEIRO
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                        echo "<p>Só JPG, JPEG, PNG & GIF files são permitidos.</p>";
                        $uploadOk = 0;
                    }
                    // VERIFICA ESTADO DE UPLOAD
                    if ($uploadOk == 0) {
                        echo "<p>O seu ficheiro não foi carregado.</p>";
                    } else {
                        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            echo "<p>O ficheiro ". basename( $_FILES["fileToUpload"]["name"]). " foi carregado com sucesso.</p>";
                        } else {
                            echo "<p>Erro ao carregar ficheiro, deve escolher o Rei.</p><br>";
                        }
                    }
                ?>
                <a href="home.php">
                    <input type="submit" name="submit" value="Inserir mais imagens"/>
                </a>
            </div>
        </div>
    </body>
</html>
