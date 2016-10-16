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
            if (isset($_POST['polls'])) {
                $polls = $_POST['polls'];
        ?>
                <form action="results.php" method="post">
        <?php
                for ($i=0; $i < $polls; $i++){
        ?>
                    <div class="row show-grid">
                        <div class="col-xs-4 col-xs-offset-4">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    Encuesta No. <?=$i+1;?>
                                </div>
                                <div class="panel-body">
                                    <p>Calificación</p>
                                    <input type="radio" id="qualification" name="qualification[<?=$i;?>]" value="Malo"> Malo<br>
                                    <input type="radio" id="qualification" name="qualification[<?=$i;?>]" value="Regular"> Regular<br>
                                    <input type="radio" id="qualification" name="qualification[<?=$i;?>]" value="Bueno"> Bueno<br>
                                    <input type="radio" id="qualification" name="qualification[<?=$i;?>]" value="Excelente"> Excelente<br>

                                    <p>Genero</p>
                                    <select name="sexo[]" id="sexo">
                                        <option value="Masculino">Hombre</option>
                                        <option value="Femenino">Mujer</option>
                                        <option value="Otro">Otro</option>
                                    </select>

                                    <p>Edad</p>
                                    <input type="text" name="edad[]" id="edad">
                                </div>
                            </div>
                        </div>
                    </div>
        <?php
                }
        ?>
                    <div class="row">
                        <div class="col-xs-4 col-xs-offset-4">
                            <button type="submit" class="btn btn-success">Resultados!</button>
                        </div>
                    </div>

                </form>
        <?php
            }
        ?>
        </div>

        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <h3 class="text-center">Código del ejercicio</h3>
                <pre class="brush: php">
    &ltdiv class="container"&gt
        &ltheader&gt
            &ltdiv class="row"&gt
                &ltdiv class="col-xs-12"&gt
                    &ltdiv class="page-header"&gt
                        &lth1 class="text-center"&gtProgramación de Sitios Web&lt/h1&gt
                        &lth3 class="text-center"&gtEjercicio 5&lt/h3&gt
                        &ltdiv class="text-center"&gt
                            &lta href="/"&gtVolver al menu&lt/a&gt
                        &lt/div&gt
                    &lt/div&gt
                &lt/div&gt
            &lt/div&gt
        &lt/header&gt

        &ltdiv class="content"&gt
        &lt?php
        if (isset($_POST['polls'])) {
            $polls = $_POST['polls'];
            ?&gt
            &ltform action="results.php" method="post"&gt
        &lt?php
        for ($i=0; $i &lt $polls; $i++){
            ?&gt
            &ltdiv class="row show-grid"&gt
                        &ltdiv class="col-xs-4 col-xs-offset-4"&gt
                            &ltdiv class="panel panel-success"&gt
                                &ltdiv class="panel-heading"&gt
                                    Encuesta No. &lt?=$i+1;?&gt
                                &lt/div&gt
                                &ltdiv class="panel-body"&gt
                                    &ltp&gtCalificación&lt/p&gt
                                    &ltinput type="radio" id="qualification" name="qualification[&lt?=$i;?&gt]" value="Malo"&gt Malo&ltbr&gt
                                    &ltinput type="radio" id="qualification" name="qualification[&lt?=$i;?&gt]" value="Regular"&gt Regular&ltbr&gt
                                    &ltinput type="radio" id="qualification" name="qualification[&lt?=$i;?&gt]" value="Bueno"&gt Bueno&ltbr&gt
                                    &ltinput type="radio" id="qualification" name="qualification[&lt?=$i;?&gt]" value="Excelente"&gt Excelente&ltbr&gt

                                    &ltp&gtGenero&lt/p&gt
                                    &ltselect name="sexo[]" id="sexo"&gt
                                        &ltoption value="Masculino"&gtHombre&lt/option&gt
                                        &ltoption value="Femenino"&gtMujer&lt/option&gt
                                        &ltoption value="Otro"&gtOtro&lt/option&gt
                                    &lt/select&gt

                                    &ltp&gtEdad&lt/p&gt
                                    &ltinput type="text" name="edad[]" id="edad"&gt
                                &lt/div&gt
                            &lt/div&gt
                        &lt/div&gt
                    &lt/div&gt
            &lt?php
        }
        ?&gt
                &ltdiv class="row"&gt
                    &ltdiv class="col-xs-4 col-xs-offset-4"&gt
                        &ltbutton type="submit" class="btn btn-success"&gtResultados!&lt/button&gt
                    &lt/div&gt
                &lt/div&gt
                &lt/form&gt
            &lt?php
        }
        ?&gt
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
