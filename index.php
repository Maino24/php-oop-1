<?php

include_once __DIR__ . '/classi/movie.php';

$movieUno = new Movie( "Mamma, ho perso l'aereo","commedia", 1990 );

$movieDue = new Movie( "L'esorcista" , 'horror',  1973);

$movieTre = new Movie( 'Nonno scatenato','commedia', 2016  );

$movieQuattro = new Movie( 'Dark Money','documentario', 2018  );

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <h1>FILMS</h1>

    <div class="containerFilms">
        <div class="containerfilm">
            <!---primo film-->
            <div>
                <?php echo $movieUno->title;?>
            </div>
            <div>
                <?php echo $movieUno->genre;?>
            </div>
            <div>
                <?php echo $movieUno->year;?>
            </div>
            <div>
                <?php echo $movieUno->genere();?>
            </div>
        </div>

        <div class="containerfilm">
            <!---SECONDO film-->
            <div>
                <?php echo $movieDue->title;?>
            </div>
            <div>
                <?php echo $movieDue->genre;?>
            </div>
            <div>
                <?php echo $movieDue->year;?>
            </div>
            <div>
                <?php echo $movieDue->genere();?>
            </div>
        </div>

        <div class="containerfilm">
            <!---terzo film-->
            <div>
                <?php echo $movieTre->title;?>
            </div>
            <div>
                <?php echo $movieTre->genre;?>
            </div>
            <div>
                <?php echo $movieTre->year;?>
            </div>
            <div>
                <?php echo $movieTre->genere();?>
            </div>
        </div>


        <div class="containerfilm">
            <!---quarto film-->
            <div>
                <?php echo $movieQuattro->title;?>
            </div>
            <div>
                <?php echo $movieQuattro->genre;?>
            </div>
            <div>
                <?php echo $movieQuattro->year;?>
            </div>
            <div>
                <?php echo $movieQuattro->genere();?>
            </div>
    </div>
    
</body>
</html>


