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
                    <h3 class="text-center">Ejercicio 1</h3>
                    <div class="text-center">
                        <a href="/">Volver al menu</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="content">

        <form action="." method="post">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="form-group">
                        <label for="number_one" >Primer número</label>
                        <input class="form-control" type="text" id="number_one" name="number_one" value=<?=$_POST['number_one'];?> >
                    </div>
                    <div class="form-group">
                        <label for="number_two">Segundo número</label>
                        <input class="form-control" type="text" id="number_two" name="number_two" value=<?=$_POST['number_two'];?> >
                    </div>
                    <div class="form-group">
                        <label for="number_two">Tercer número</label>
                        <input class="form-control" type="text" id="number_three" name="number_three" value=<?=$_POST['number_three'];?> >
                    </div>
                    <div class="form-group">
                        <label for="number_two">Cuarto número</label>
                        <input class="form-control" type="text" id="number_four" name="number_four" value=<?=$_POST['number_four'];?> >
                    </div>
                    <div class="form-group">
                        <label for="number_two">Quinto número</label>
                        <input class="form-control" type="text" id="number_five" name="number_five" value=<?=$_POST['number_five'];?> >
                    </div>
                    <button type="submit" class="btn btn-success">Calcular!</button>
                </div>
            </div>
        </form>

        <?php
            if (isset($_POST['number_one']) and isset($_POST['number_two']) and isset($_POST['number_three']) and isset($_POST['number_four'])
                and isset($_POST['number_five'])) {
                $my_array[] = $_POST['number_one'];
                $my_array[] = $_POST['number_two'];
                $my_array[] = $_POST['number_three'];
                $my_array[] = $_POST['number_four'];
                $my_array[] = $_POST['number_five'];

        ?>
                <br>
                <div class="row show-grid">
                    <div class="col-xs-4 col-xs-offset-4">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Respuesta
                            </div>
                            <div class="panel-body">
                                <p>Los números ingresados son:</p>
                                <?php
                                    foreach ($my_array as $lu) {
                                ?>
                                     <span><?=$lu;?>, </span>
                                <?php
                                    }
                                ?>
                                <p>Los números ordenados son:</p>
                                <?php
                                    sort($my_array);
                                    foreach ($my_array as $lo) {
                                ?>
                                    <span><?=$lo;?>, </span>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        ?>

        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <h3 class="text-center">Código del ejercicio</h3>
                <pre class="brush: php">
    &ltdiv class="content"&gt

        &ltform action="." method="post"&gt
            &ltdiv class="row"&gt
                &ltdiv class="col-xs-4 col-xs-offset-4"&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="number_one" &gtPrimer número&lt/label&gt
                        &ltinput class="form-control" type="text" id="number_one" name="number_one" value=&lt?=$_POST['number_one'];?&gt &gt
                    &lt/div&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="number_two"&gtSegundo número&lt/label&gt
                        &ltinput class="form-control" type="text" id="number_two" name="number_two" value=&lt?=$_POST['number_two'];?&gt &gt
                    &lt/div&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="number_two"&gtTercer número&lt/label&gt
                        &ltinput class="form-control" type="text" id="number_three" name="number_three" value=&lt?=$_POST['number_three'];?&gt &gt
                    &lt/div&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="number_two"&gtCuarto número&lt/label&gt
                        &ltinput class="form-control" type="text" id="number_four" name="number_four" value=&lt?=$_POST['number_four'];?&gt &gt
                    &lt/div&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="number_two"&gtQuinto número&lt/label&gt
                        &ltinput class="form-control" type="text" id="number_five" name="number_five" value=&lt?=$_POST['number_five'];?&gt &gt
                    &lt/div&gt
                    &ltbutton type="submit" class="btn btn-success"&gtCalcular!&lt/button&gt
                &lt/div&gt
            &lt/div&gt
        &lt/form&gt

        &lt?php
        if (isset($_POST['number_one']) and isset($_POST['number_two']) and isset($_POST['number_three']) and isset($_POST['number_four'])
            and isset($_POST['number_five'])) {
            $my_array[] = $_POST['number_one'];
            $my_array[] = $_POST['number_two'];
            $my_array[] = $_POST['number_three'];
            $my_array[] = $_POST['number_four'];
            $my_array[] = $_POST['number_five'];

            ?&gt
            &ltbr&gt
            &ltdiv class="row show-grid"&gt
                    &ltdiv class="col-xs-4 col-xs-offset-4"&gt
                        &ltdiv class="panel panel-success"&gt
                            &ltdiv class="panel-heading"&gt
                                Respuesta
                            &lt/div&gt
                            &ltdiv class="panel-body"&gt
                                &ltp&gtLos números ingresados son:&lt/p&gt
                                &lt?php
                                foreach ($my_array as $lu) {
                                    ?&gt
                                    &ltspan&gt&lt?=$lu;?&gt, &lt/span&gt
                                    &lt?php
                                }
                                ?&gt
                                &ltp&gtLos números ordenados son:&lt/p&gt
                                &lt?php
                                sort($my_array);
                                foreach ($my_array as $lo) {
                                    ?&gt
                                    &ltspan&gt&lt?=$lo;?&gt, &lt/span&gt
                                    &lt?php
                                }
                                ?&gt
                            &lt/div&gt
                        &lt/div&gt
                    &lt/div&gt
                &lt/div&gt
            &lt?php
        }
        ?&gt
    &lt/div&gt
                </pre>
            </div>
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

