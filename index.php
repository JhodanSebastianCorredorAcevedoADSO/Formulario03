<!DOCTYPE html>
<html lang="sp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <header>
        <h1 class="text-center">Calculadora</h1>
    </header>

    <main>

        <section>
            <div class="container ">
                <?php
                $numero1 = "";
                $numero2 = "";
                $numero3 = "";
                $calculo = 0;


                if (isset($_POST['numero1'])) {


                    //Validamos si hay algo en los inputs
                
                    $numero1 = isset($_POST['numero1']) ? $_POST['numero1'] : "";
                    $numero2 = isset($_POST['numero2']) ? $_POST['numero2'] : "";
                    $numero3 = isset($_POST['numero3']) ? $_POST['numero3'] : "";
                    $calculo = isset($_POST['calculos']) ? $_POST['calculos'] : "";

                } ?>



                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card mb-3">
                                <form action="index.php" method="post" class="row" id="formulario">
                                    <div class="mb-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="calculos" id="calculo1"
                                                value="suma" <?php if ($calculo == "suma")
                                                    echo "checked" ?>>
                                                <label class="form-check-label" for="calculo1">Suma</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="calculos" id="calculo2"
                                                    value="resta" <?php if ($calculo == "resta")
                                                    echo "checked" ?>>
                                                <label class="form-check-label" for="calculo2">Resta</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="calculos" id="calculo3"
                                                    value="multiplicacion" <?php if ($calculo == "multiplicacion")
                                                    echo "checked" ?>>
                                                <label class="form-check-label" for="calculo3">Multiplicación</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="calculos" id="calculo4"
                                                    value="division" <?php if ($calculo == "division")
                                                    echo "checked" ?>>
                                                <label class="form-check-label" for="calculo3">División</label>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="numero1" class="form-label">Número 1</label>
                                            <input type="text" name="numero1" class="form-control" id="numero1"
                                                value="<?php echo $numero1 ?>" autocomplete="off">
                                    </div>

                                    <div class="mb-3">
                                        <label for="numero2" class="form-label">Número 2</label>
                                        <input type="text" name="numero2" class="form-control" id="numero2"
                                            value="<?php echo $numero2 ?>" autocomplete="off">
                                    </div>

                                    <div class="mb-3">
                                        <label for="numero3" class="form-label">Número 3</label>
                                        <input type="text" name="numero3" class="form-control" id="numero3"
                                            value="<?php echo $numero3 ?>" autocomplete="off">
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary" id="btn-enviar">Enviar</button>
                                    </div>
                                </form>

                                <div id="resultado" class="text-center">
                                    <h1>Resultado:
                                        <?php
                                        include "operaciones.php";
                                        resultado();
                                        ?>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>
    
    <script src="validacion.js" type="text/javascript"></script>

</body>

</html>