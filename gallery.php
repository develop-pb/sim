<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Molle:400i" rel="stylesheet">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/modernizr.js"></script>
        <script type="text/javascript" src="highslide/highslide-with-gallery.js"></script>
        <link rel="stylesheet" type="text/css" href="highslide/highslide.css" />

        <script type="text/javascript">
            hs.graphicsDir = 'highslide/graphics/';
            hs.align = 'center';
            hs.transitions = ['expand', 'crossfade'];
            hs.wrapperClassName = 'dark borderless floating-caption';
            hs.fadeInOut = true;
            hs.dimmingOpacity = .75;

            // controlbar
            if (hs.addSlideshow) hs.addSlideshow({
                interval: 5000,
                repeat: false,
                useControls: true,
                fixedControls: 'fit',
                overlayOptions: {
                    opacity: .6,
                    position: 'bottom center',
                    hideOnMouseOut: true
                }
            });
        </script>

        <title>Galeria</title>

    </head>
    <body>
        <header>
            <div class="main_header">
                <div class="logo">
                    <a href="index.html">
                    <img src="img/logo.png">
                </div>
                <div class="description">
                    <h3>Galeria de imagens</h3>
                </div>
                <div class="buttons">
                    <a class="buttonStyle5" href="timeline.html" target="_self">Reis</a>
                    <a class="buttonStyle1" href="flag.html" target="_self">Bandeiras</a>
                    <a class="buttonStyle2" href="javascript:window.history.go(-1)" target="_self">Voltar</a>
                    <a class="buttonStyle3" href="login.php" target="_self">Entrar</a>
                </div>
            </div>
    	</header>
        <div class="container_reis">
            <h3>Galeria</h3>
            <?php

                $id_rei = $_GET['id_rei'];
                $dir=opendir("gallery/".$id_rei);

                    while($file=readdir($dir)){
                        if($file != "." && $file != ".." && $file != "Thumbs.db"){
                            echo "<a href='gallery/$id_rei/$file' class='highslide' onclick='return hs.expand(this)'>
                                <img src='gallery/$id_rei/$file' width='150' height='150' alt='Highslide JS' title='Click to enlarge' />
                                </a>";
                        }
                    }
            ?>
        </div>
    </body>
</html>
