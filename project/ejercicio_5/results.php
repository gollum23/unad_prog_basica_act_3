<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Diego Forero</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    <link href="http://alexgorbatchev.com/pub/sh/current/styles/shCore.css" rel="stylesheet" type="text/css" />
    <link href="http://alexgorbatchev.com/pub/sh/current/styles/shThemeDefault.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
    <header>
        <div class="row">
            <div class="col-xs-12">
                <div class="page-header">
                    <h1 class="text-center">Programación de Sitios Web</h1>
                    <h3 class="text-center">Ejercicio 5</h3>
                    <div class="text-center">
                        <a href="/">Volver al menu</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="content">
        <?php
        $array_edad = $_POST['edad'];
        $array_sexo = $_POST['sexo'];
        $array_calificacion = $_POST['qualification'];

        $hombres = 0;
        $mujeres = 0;
        $otros = 0;
        $malo = 0;
        $regular = 0;
        $bueno = 0;
        $excelente = 0;
        $menor23 = 0;
        $mayor33 = 0;
        $entre24_32 = 0;

        foreach ($array_edad as $edad) {
            if ($edad <= 23) {
                $menor23 += 1;
            }
            elseif ($edad >= 33) {
                $mayor33 += 1;
            }
            else {
                $entre24_32 += 1;
            }
        }

        foreach ($array_sexo as $sexo) {
            if ($sexo == 'Masculino') {
                $hombres += 1;
            }
            elseif ($sexo == 'Femenino') {
                $mujeres += 1;
            }
            else {
                $otros += 1;
            }
        }

        foreach ($array_calificacion as $calificacion) {
            switch ($calificacion) {
                case 'Malo':
                    $malo += 1;
                    break;
                case 'Regular':
                    $regular += 1;
                    break;
                case 'Bueno':
                    $bueno += 1;
                    break;
                case 'Excelente':
                    $excelente += 1;
                    break;
                default:
                    echo 'Opción no valida';
                    break;
            }
        }

        ?>

        <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Resultados de la encuesta.
                    </div>
                    <h3>Por genero</h3>
                    <p>Mujeres: <?=$mujeres;?></p>
                    <p>Hombres: <?=$hombres;?></p>
                    <p>Otros: <?=$otros;?></p>

                    <h3>Por edad</h3>
                    <p>Menor o igual a 23 años: <?=$menor23;?></p>
                    <p>Entre 24 y 32 años: <?=$entre24_32;?></p>
                    <p>Mayor o igual a 33 años: <?=$mayor33;?></p>

                    <h3>Calificación</h3>
                    <p>Malo: <?=$malo;?></p>
                    <p>Regular: <?=$regular;?></p>
                    <p>Bueno: <?=$bueno;?></p>
                    <p>Excelente: <?=$excelente;?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <h3 class="text-center">Código del ejercicio</h3>
            <pre class="brush: php">
    &ltdiv class="content"&gt
        &lt?php
        $array_edad = $_POST['edad'];
        $array_sexo = $_POST['sexo'];
        $array_calificacion = $_POST['qualification'];

        $hombres = 0;
        $mujeres = 0;
        $otros = 0;
        $malo = 0;
        $regular = 0;
        $bueno = 0;
        $excelente = 0;
        $menor23 = 0;
        $mayor33 = 0;
        $entre24_32 = 0;

        foreach ($array_edad as $edad) {
            if ($edad &lt= 23) {
                $menor23 += 1;
            }
            elseif ($edad &gt= 33) {
                $mayor33 += 1;
            }
            else {
                $entre24_32 += 1;
            }
        }

        foreach ($array_sexo as $sexo) {
            if ($sexo == 'Masculino') {
                $hombres += 1;
            }
            elseif ($sexo == 'Femenino') {
                $mujeres += 1;
            }
            else {
                $otros += 1;
            }
        }

        foreach ($array_calificacion as $calificacion) {
            switch ($calificacion) {
                case 'Malo':
                    $malo += 1;
                    break;
                case 'Regular':
                    $regular += 1;
                    break;
                case 'Bueno':
                    $bueno += 1;
                    break;
                case 'Excelente':
                    $excelente += 1;
                    break;
                default:
                    echo 'Opción no valida';
                    break;
            }
        }

        ?&gt

        &ltdiv class="row"&gt
            &ltdiv class="col-xs-4 col-xs-offset-4"&gt
                &ltdiv class="panel panel-success"&gt
                    &ltdiv class="panel-heading"&gt
                        Resultados de la encuesta.
                    &lt/div&gt
                    &lth3&gtPor genero&lt/h3&gt
                    &ltp&gtMujeres: &lt?=$mujeres;?&gt&lt/p&gt
                    &ltp&gtHombres: &lt?=$hombres;?&gt&lt/p&gt
                    &ltp&gtOtros: &lt?=$otros;?&gt&lt/p&gt

                    &lth3&gtPor edad&lt/h3&gt
                    &ltp&gtMenor o igual a 23 años: &lt?=$menor23;?&gt&lt/p&gt
                    &ltp&gtEntre 24 y 32 años: &lt?=$entre24_32;?&gt&lt/p&gt
                    &ltp&gtMayor o igual a 33 años: &lt?=$mayor33;?&gt&lt/p&gt

                    &lth3&gtCalificación&lt/h3&gt
                    &ltp&gtMalo: &lt?=$malo;?&gt&lt/p&gt
                    &ltp&gtRegular: &lt?=$regular;?&gt&lt/p&gt
                    &ltp&gtBueno: &lt?=$bueno;?&gt&lt/p&gt
                    &ltp&gtExcelente: &lt?=$excelente;?&gt&lt/p&gt
                &lt/div&gt
            &lt/div&gt
        &lt/div&gt
    &lt/div&gt
                </pre>
        </div>
    </div>

    <footer>
        <div class="row">
            <div class="col-xs-12">
                <h2 class="text-center">Universidad Nacional Abierta y a Distancia</h2>
                <h4 class="text-center">Grupo 301127 - 13</h4>
                <p class="text-center">Bogotá, Colombia Octubre 2016</p>
            </div>
        </div>
    </footer>
</div>

<script src="../js/bootstrap.min.js"></script>
<script src="http://alexgorbatchev.com/pub/sh/current/scripts/shCore.js" type="text/javascript"></script>
<script src="http://alexgorbatchev.com/pub/sh/current/scripts/shAutoloader.js" type="text/javascript"></script>
<script src="http://alexgorbatchev.com/pub/sh/current/scripts/shBrushPhp.js" type="text/javascript"></script>
<script>
    SyntaxHighlighter.all();
</script>
</body>
</html>
<?php
