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
            <form method="post" id="formUpload" class="form" action="upload.php" enctype="multipart/form-data">
                <p class="mainselection">
                    <select name="reis">
                        <option value="0">Escolha o Rei</option>
                        <option value="dA1">D. Afonso Henriques</option>
                        <option value="dS1">D. Sancho I</option>
                        <option value="dA2">D. Afonso II</option>
                        <option value="dS2">D. Sancho II</option>
                        <option value="dA3">D. Afonso III</option>
                        <option value="dD1">D. Dinis I</option>
                        <option value="dA4">D. Afonso IV</option>
                        <option value="dP1">D. Pedro I</option>
                        <option value="dF1">D. Fernando I</option>
                        <option value="dJ1">D. João I</option>
                        <option value="dd1">D. Duarte I</option>
                        <option value="dA5">D. Afonso V</option>
                        <option value="dJ2">D. João II</option>
                        <option value="dM1">D. Manuel I</option>
                        <option value="dJ3">D. João III</option>
                        <option value="dSb">D. Sebastião I</option>
                        <option value="dH1">D. Henrique I</option>
                        <option value="dAt">D. António I</option>
                        <option value="dFl1">D. Filipe I</option>
                        <option value="dFl2">D. Filipe II</option>
                        <option value="dFl3">D. Filipe III</option>
                        <option value="dJ4">D. João IV</option>
                        <option value="dA6">D. Afonso VI</option>
                        <option value="dP2">D. Pedro II</option>
                        <option value="dJ5">D. João V</option>
                        <option value="dJs1">D. José I</option>
                        <option value="dMr1">D. Maria I</option>
                        <option value="dJ6">D. João VI</option>
                        <option value="dP4">D. Pedro IV</option>
                        <option value="dMg1">D. Miguel I</option>
                        <option value="dMr2">D. Maria II</option>
                        <option value="dP5">D. Pedro V</option>
                        <option value="dL1">D. Luís I</option>
                        <option value="dC1">D. Carlos I</option>
                        <option value="dM2">D. Manuel II</option>
                    </select>
                </p>
                <br>
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" name="submit" value="Upload Imagem" />
            </form>
        </div>
    </body>
</html>
