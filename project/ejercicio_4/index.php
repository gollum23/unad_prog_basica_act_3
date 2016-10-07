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
                    <h3 class="text-center">Ejercicio 4</h3>
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
                        <label for="identification" >Cedula</label>
                        <input class="form-control" type="text" id="identification" name="identification" >
                    </div>
                    <div class="form-group">
                        <label for="name" >Nombres</label>
                        <input class="form-control" type="text" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="lastname" >Apellidos</label>
                        <input class="form-control" type="text" id="lastname" name="lastname">
                    </div>
                    <div class="form-group">
                        <label for="years" >Edad</label>
                        <input class="form-control" type="number" id="age" name="age">
                    </div>
                    <div class="form-group">
                        <label for="years" >Sexo</label>
                        <input class="form-control" type="text" id="gender" name="gender">
                    </div>
                    <div class="form-group">
                        <label for="hobby" >Hobby</label>
                        <input class="form-control" type="text" id="hobby" name="hobby">
                    </div>
                    <div class="form-group">
                        <label for="city" >Ciudad de residencia</label>
                        <input class="form-control" type="text" id="city" name="city">
                    </div>

                    <button type="submit" class="btn btn-success">Calcular!</button>
                </div>
            </div>
        </form>

        <?php
            if (isset($_POST['identification']) and isset($_POST['name']) and isset($_POST['lastname']) and isset($_POST['age'])
                and isset($_POST['gender']) and isset($_POST['hobby']) and isset($_POST['city'])) {
                $data[] = $_POST['identification'];
                $data[] = $_POST['name'];
                $data[] = $_POST['lastname'];
                $data[] = $_POST['age'];
                $data[] = $_POST['gender'];
                $data[] = $_POST['hobby'];
                $data[] = $_POST['city'];

                $fp = fopen("ejercicio_4.txt", "a+") or die("No se puede abrir o crear el archivo");

                fputcsv($fp, $data);

                fclose($fp);
        ?>
                <br>
                <div class="row show-grid">
                    <div class="col-xs-4 col-xs-offset-4">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Resultado
                            </div>
                            <div class="panel-body">
                                <p>Información guardada correctamente.</p>

                                <p><a href="ejercicio_4.txt">Descarge el archivo</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row show-grid">
                    <div class="col-xs-8 col-xs-offset-2">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Contenido del archivo
                            </div>
                            <div class="panel-body">
                                <?php
                                    $read_file = fopen("ejercicio_4.txt", "r") or die("No se puede abrir el archivo");
                                ?>
                                <table class="table table-stripe">
                                    <thead>
                                        <tr>
                                            <th>Cedula</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Edad</th>
                                            <th>Sexo</th>
                                            <th>Hobby</th>
                                            <th>Ciudad</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php
                                    while ($row = fgetcsv($read_file, 0, ",")) {
                                ?>
                                        <tr>
                                        <?php
                                            for ($c=0; $c < count($row); $c++) {
                                        ?>
                                            <th><?=$row[$c];?></th>
                                        <?php
                                            }
                                        ?>
                                        </tr>
                                <?php
                                    }
                                    fclose($read_file)
                                ?>
                                    </tbody>
                                </table>


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
                        &ltlabel for="identification" &gtCedula&lt/label&gt
                        &ltinput class="form-control" type="text" id="identification" name="identification" &gt
                    &lt/div&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="name" &gtNombres&lt/label&gt
                        &ltinput class="form-control" type="text" id="name" name="name"&gt
                    &lt/div&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="lastname" &gtApellidos&lt/label&gt
                        &ltinput class="form-control" type="text" id="lastname" name="lastname"&gt
                    &lt/div&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="years" &gtEdad&lt/label&gt
                        &ltinput class="form-control" type="number" id="age" name="age"&gt
                    &lt/div&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="years" &gtSexo&lt/label&gt
                        &ltinput class="form-control" type="text" id="gender" name="gender"&gt
                    &lt/div&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="hobby" &gtHobby&lt/label&gt
                        &ltinput class="form-control" type="text" id="hobby" name="hobby"&gt
                    &lt/div&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="city" &gtCiudad de residencia&lt/label&gt
                        &ltinput class="form-control" type="text" id="city" name="city"&gt
                    &lt/div&gt

                    &ltbutton type="submit" class="btn btn-success"&gtCalcular!&lt/button&gt
                &lt/div&gt
            &lt/div&gt
        &lt/form&gt

        &lt?php
        if (isset($_POST['identification']) and isset($_POST['name']) and isset($_POST['lastname']) and isset($_POST['age'])
            and isset($_POST['gender']) and isset($_POST['hobby']) and isset($_POST['city'])) {
            $data[] = $_POST['identification'];
            $data[] = $_POST['name'];
            $data[] = $_POST['lastname'];
            $data[] = $_POST['age'];
            $data[] = $_POST['gender'];
            $data[] = $_POST['hobby'];
            $data[] = $_POST['city'];

            $fp = fopen("ejercicio_4.txt", "a+") or die("No se puede abrir o crear el archivo");

            fputcsv($fp, $data);

            fclose($fp);
            ?&gt
            &ltbr&gt
            &ltdiv class="row show-grid"&gt
                    &ltdiv class="col-xs-4 col-xs-offset-4"&gt
                        &ltdiv class="panel panel-success"&gt
                            &ltdiv class="panel-heading"&gt
                                Resultado
                            &lt/div&gt
                            &ltdiv class="panel-body"&gt
                                &ltp&gtInformación guardada correctamente.&lt/p&gt

                                &ltp&gt&lta href="ejercicio_4.txt"&gtDescarge el archivo&lt/a&gt&lt/p&gt
                            &lt/div&gt
                        &lt/div&gt
                    &lt/div&gt
                &lt/div&gt
            &ltdiv class="row show-grid"&gt
                    &ltdiv class="col-xs-8 col-xs-offset-2"&gt
                        &ltdiv class="panel panel-success"&gt
                            &ltdiv class="panel-heading"&gt
                                Contenido del archivo
                            &lt/div&gt
                            &ltdiv class="panel-body"&gt
                                &lt?php
                                $read_file = fopen("ejercicio_4.txt", "r") or die("No se puede abrir el archivo");
                                ?&gt
                                &lttable class="table table-stripe"&gt
                                    &ltthead&gt
                                        &lttr&gt
                                            &ltth&gtCedula&lt/th&gt
                                            &ltth&gtNombres&lt/th&gt
                                            &ltth&gtApellidos&lt/th&gt
                                            &ltth&gtEdad&lt/th&gt
                                            &ltth&gtSexo&lt/th&gt
                                            &ltth&gtHobby&lt/th&gt
                                            &ltth&gtCiudad&lt/th&gt
                                        &lt/tr&gt
                                    &lt/thead&gt
                                    &lttbody&gt
                                &lt?php
                                while ($row = fgetcsv($read_file, 0, ",")) {
                                    ?&gt
                                    &lttr&gt
                                        &lt?php
                                        for ($c=0; $c &lt count($row); $c++) {
                                            ?&gt
                                            &ltth&gt&lt?=$row[$c];?&gt&lt/th&gt
                                            &lt?php
                                        }
                                        ?&gt
                                        &lt/tr&gt
                                    &lt?php
                                }
                                fclose($read_file)
                                ?&gt
                                    &lt/tbody&gt
                                &lt/table&gt


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

