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
                    <h3 class="text-center">Ejercicio 2</h3>
                    <div class="text-center">
                        <a href="/">Volver al menu</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="content">


        <div class="row">
            <div class="col-xs-3">
                <form action="." method="post">
                    <div class="form-group">
                        <label for="name_one" >Primer nombre</label>
                        <input class="form-control" type="text" id="name_one" name="name_one" value=<?=$_POST['name_one'];?> >
                    </div>
                    <div class="form-group">
                        <label for="name_two">Segundo nombre</label>
                        <input class="form-control" type="text" id="name_two" name="name_two" value=<?=$_POST['name_two'];?> >
                    </div>
                    <div class="form-group">
                        <label for="name_three">Tercer nombre</label>
                        <input class="form-control" type="text" id="name_three" name="name_three" value=<?=$_POST['name_three'];?> >
                    </div>
                    <div class="form-group">
                        <label for="name_four">Cuarto nombre</label>
                        <input class="form-control" type="text" id="name_four" name="name_four" value=<?=$_POST['name_four'];?> >
                    </div>
                    <div class="form-group">
                        <label for="name_five">Quinto nombre</label>
                        <input class="form-control" type="text" id="name_five" name="name_five" value=<?=$_POST['name_five'];?> >
                    </div>
                    <div class="form-group">
                        <label for="name_six" >Sexto nombre</label>
                        <input class="form-control" type="text" id="name_six" name="name_six" value=<?=$_POST['name_six'];?> >
                    </div>
                    <div class="form-group">
                        <label for="name_seven">Septimo nombre</label>
                        <input class="form-control" type="text" id="name_seven" name="name_seven" value=<?=$_POST['name_seven'];?> >
                    </div>
                    <div class="form-group">
                        <label for="name_eight">Octavo nombre</label>
                        <input class="form-control" type="text" id="name_eight" name="name_eight" value=<?=$_POST['name_eight'];?> >
                    </div>
                    <div class="form-group">
                        <label for="name_nine">Noveno nombre</label>
                        <input class="form-control" type="text" id="name_nine" name="name_nine" value=<?=$_POST['name_nine'];?> >
                    </div>
                    <div class="form-group">
                        <label for="name_ten">Decimo nombre</label>
                        <input class="form-control" type="text" id="name_ten" name="name_ten" value=<?=$_POST['name_ten'];?> >
                    </div>
                    <div class="form-group">
                        <label for="name_first" >Nombre a insertar de primero</label>
                        <input class="form-control" type="text" id="name_first" name="name_first" value=<?=$_POST['name_first'];?> >
                    </div>
                    <div class="form-group">
                        <label for="name_last">Nombre a insertar de último</label>
                        <input class="form-control" type="text" id="name_last" name="name_last" value=<?=$_POST['name_last'];?> >
                    </div>
                    <button type="submit" class="btn btn-success">Ejecutar!</button>
                </form>
            </div>
        <!--            </div>-->

        <?php
        if (isset($_POST['name_one']) and isset($_POST['name_two']) and isset($_POST['name_three']) and isset($_POST['name_four'])
            and isset($_POST['name_five']) and isset($_POST['name_six']) and isset($_POST['name_seven']) and isset($_POST['name_eight'])
            and isset($_POST['name_nine']) and isset($_POST['name_ten']) and isset($_POST['name_first']) and isset($_POST['name_last'])) {
                $names[] = $_POST['name_one'];
                $names[] = $_POST['name_two'];
                $names[] = $_POST['name_three'];
                $names[] = $_POST['name_four'];
                $names[] = $_POST['name_five'];
                $names[] = $_POST['name_six'];
                $names[] = $_POST['name_seven'];
                $names[] = $_POST['name_eight'];
                $names[] = $_POST['name_nine'];
                $names[] = $_POST['name_ten'];
        ?>
            <div class="col-xs-2 col-xs-offset-1">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Resultado - Paso 1
                    </div>
                    <div class="panel-body">
        <?php
                        foreach ($names as $name) {
        ?>
                            <p><?=$name;?></p>
        <?php
                        }
        ?>
                    </div>
                </div>
            </div>
        <?php

                $first = $_POST['name_first'];
                $last = $_POST['name_last'];
                // Poner nombre al principio del array
                array_unshift($names, $first);
                // Poner nombre al final del array
                array_push($names, $last);
        ?>
                <div class="col-xs-2">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Resultado - Paso 2
                        </div>
                        <div class="panel-body">
        <?php
                foreach ($names as $name) {
        ?>
                            <p><?=$name;?></p>
        <?php
                }
        ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Resultado - Paso 3
                        </div>
                        <div class="panel-body">
        <?php
                // Eliminar el nombre de la posición 5 del array
                // Las posiciones en los arrays inician en 0 por eso es el index 4
                unset($names[4]);
                foreach ($names as $name) {
        ?>
                    <p><?=$name;?></p>
        <?php
                }
        ?>
                        </div>
                    </div>
                </div>
            <div class="col-xs-2">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Resultado - Paso 4
                    </div>
                    <div class="panel-body">
        <?php
                // Ordenar el array
                sort($names);
                foreach ($names as $name) {
        ?>
                    <p><?=$name;?></p>
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
        &ltdiv class="row"&gt
            &ltdiv class="col-xs-3"&gt
                &ltform action="." method="post"&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="name_one" &gtPrimer nombre&lt/label&gt
                        &ltinput class="form-control" type="text" id="name_one" name="name_one" value=&lt?=$_POST['name_one'];?&gt &gt
                    &lt/div&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="name_two"&gtSegundo nombre&lt/label&gt
                        &ltinput class="form-control" type="text" id="name_two" name="name_two" value=&lt?=$_POST['name_two'];?&gt &gt
                    &lt/div&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="name_three"&gtTercer nombre&lt/label&gt
                        &ltinput class="form-control" type="text" id="name_three" name="name_three" value=&lt?=$_POST['name_three'];?&gt &gt
                    &lt/div&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="name_four"&gtCuarto nombre&lt/label&gt
                        &ltinput class="form-control" type="text" id="name_four" name="name_four" value=&lt?=$_POST['name_four'];?&gt &gt
                    &lt/div&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="name_five"&gtQuinto nombre&lt/label&gt
                        &ltinput class="form-control" type="text" id="name_five" name="name_five" value=&lt?=$_POST['name_five'];?&gt &gt
                    &lt/div&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="name_six" &gtSexto nombre&lt/label&gt
                        &ltinput class="form-control" type="text" id="name_six" name="name_six" value=&lt?=$_POST['name_six'];?&gt &gt
                    &lt/div&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="name_seven"&gtSeptimo nombre&lt/label&gt
                        &ltinput class="form-control" type="text" id="name_seven" name="name_seven" value=&lt?=$_POST['name_seven'];?&gt &gt
                    &lt/div&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="name_eight"&gtOctavo nombre&lt/label&gt
                        &ltinput class="form-control" type="text" id="name_eight" name="name_eight" value=&lt?=$_POST['name_eight'];?&gt &gt
                    &lt/div&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="name_nine"&gtNoveno nombre&lt/label&gt
                        &ltinput class="form-control" type="text" id="name_nine" name="name_nine" value=&lt?=$_POST['name_nine'];?&gt &gt
                    &lt/div&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="name_ten"&gtDecimo nombre&lt/label&gt
                        &ltinput class="form-control" type="text" id="name_ten" name="name_ten" value=&lt?=$_POST['name_ten'];?&gt &gt
                    &lt/div&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="name_first" &gtNombre a insertar de primero&lt/label&gt
                        &ltinput class="form-control" type="text" id="name_first" name="name_first" value=&lt?=$_POST['name_first'];?&gt &gt
                    &lt/div&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="name_last"&gtNombre a insertar de último&lt/label&gt
                        &ltinput class="form-control" type="text" id="name_last" name="name_last" value=&lt?=$_POST['name_last'];?&gt &gt
                    &lt/div&gt
                    &ltbutton type="submit" class="btn btn-success"&gtEjecutar!&lt/button&gt
                &lt/form&gt
            &lt/div&gt
            &lt!--            &lt/div&gt--&gt

            &lt?php
            if (isset($_POST['name_one']) and isset($_POST['name_two']) and isset($_POST['name_three']) and isset($_POST['name_four'])
            and isset($_POST['name_five']) and isset($_POST['name_six']) and isset($_POST['name_seven']) and isset($_POST['name_eight'])
            and isset($_POST['name_nine']) and isset($_POST['name_ten']) and isset($_POST['name_first']) and isset($_POST['name_last'])) {
            $names[] = $_POST['name_one'];
            $names[] = $_POST['name_two'];
            $names[] = $_POST['name_three'];
            $names[] = $_POST['name_four'];
            $names[] = $_POST['name_five'];
            $names[] = $_POST['name_six'];
            $names[] = $_POST['name_seven'];
            $names[] = $_POST['name_eight'];
            $names[] = $_POST['name_nine'];
            $names[] = $_POST['name_ten'];
            ?&gt
            &ltdiv class="col-xs-2 col-xs-offset-1"&gt
                &ltdiv class="panel panel-success"&gt
                    &ltdiv class="panel-heading"&gt
                        Resultado - Paso 1
                    &lt/div&gt
                    &ltdiv class="panel-body"&gt
        &lt?php
        foreach ($names as $name) {
            ?&gt
            &ltp&gt&lt?=$name;?&gt&lt/p&gt
            &lt?php
        }
        ?&gt
                    &lt/div&gt
                &lt/div&gt
            &lt/div&gt
            &lt?php

            $first = $_POST['name_first'];
            $last = $_POST['name_last'];
            // Poner nombre al principio del array
            array_unshift($names, $first);
            // Poner nombre al final del array
            array_push($names, $last);
            ?&gt
            &ltdiv class="col-xs-2"&gt
                    &ltdiv class="panel panel-success"&gt
                        &ltdiv class="panel-heading"&gt
                            Resultado - Paso 2
                        &lt/div&gt
                        &ltdiv class="panel-body"&gt
        &lt?php
        foreach ($names as $name) {
            ?&gt
            &ltp&gt&lt?=$name;?&gt&lt/p&gt
            &lt?php
        }
        ?&gt
                        &lt/div&gt
                    &lt/div&gt
                &lt/div&gt
                &ltdiv class="col-xs-2"&gt
                    &ltdiv class="panel panel-success"&gt
                        &ltdiv class="panel-heading"&gt
                            Resultado - Paso 3
                        &lt/div&gt
                        &ltdiv class="panel-body"&gt
        &lt?php
            // Eliminar el nombre de la posición 5 del array
            // Las posiciones en los arrays inician en 0 por eso es el index 4
            unset($names[4]);
            foreach ($names as $name) {
                ?&gt
                &ltp&gt&lt?=$name;?&gt&lt/p&gt
                &lt?php
            }
        ?&gt
                        &lt/div&gt
                    &lt/div&gt
                &lt/div&gt
            &ltdiv class="col-xs-2"&gt
                &ltdiv class="panel panel-success"&gt
                    &ltdiv class="panel-heading"&gt
                        Resultado - Paso 4
                    &lt/div&gt
                    &ltdiv class="panel-body"&gt
        &lt?php
            // Ordenar el array
            sort($names);
            foreach ($names as $name) {
                ?&gt
                &ltp&gt&lt?=$name;?&gt&lt/p&gt
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

