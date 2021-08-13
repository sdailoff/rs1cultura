<?php include('../layout/header.php'); ?>
<div class="container jumbotron_body">
    <div class="col-xs-12 text-center">
        <h4>Formulario de carga de resultados en los puntos de testeo de la RS I</h4>
    </div>
</div>
<div class="overlay"></div>
</section>
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<section class="container">
    <main class="container g-12">
        <form class="needs-validation" novalidate>
            <section class="row" style="border-bottom: 2px solid #dbdbdb; padding-top:1.5em; padding-bottom:1.5em;">
                <h4 class="mb-3">PENDIENTES DE INFORMAR RESULTADO</h4>


                <!-- -->

                <div class="table-responsive col-lg-12">
                    <div class="row" style="margin:auto;">
                        <input id="entradafilter" type="text" class="form-control" placeholder="Ingresa parte del resultado a buscar..." autofocus="autofocus" tabindex="1">
                    </div>

                    <?php

                    require_once("../classes/classConexion.php");
                    @$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE_NAME);
                    if (!$link) {
                        echo "Se produjo un error";
                        die;
                    }
                    ?>

                    <table class="table" id="tab_emp">
                        <thead>
                            <tr align="center">
                                <th style="vertical-align: middle;">A</th>
                                <th style="vertical-align: middle;">B</th>
                                <th style="vertical-align: middle;">C</th>
                                <th style="vertical-align: middle;">D</th>
                                <th style="vertical-align: middle;">E</th>
                                <th style="vertical-align: middle;">F</th>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="contenidobusqueda">
                            <?php
                            require_once '../Clases/classPedido.php';;
                            @$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE_NAME);
                            if (!$link) {
                                echo "Se produjo un error";
                                die;
                            }

                            mysqli_set_charset($link, DB_CHARSET);

                            $sql = " SELECT U.user, P.id AS ID, S.descripcion AS Servicio, persona, solicitud, F.descripcion AS Falla, impideTrabajar, T.nombre AS Tecnico, fhAsignado, Urgencia, fhRealizado, observacion ";
                            $sql .= " from Pedidos P  ";
                            $sql .= " inner join Usuarios T on T.id=P.tecnicoAsignado ";
                            $sql .= " INNER JOIN Usuarios U ON U.id = P.usuario ";
                            $sql .= " inner join Servicios S on S.id=P.servicio ";
                            $sql .= " inner join Fallas F on F.id=P.tipoFalla where fhRealizado='0000-00-00 00:00:00' and T.User='" . $usuario_actual . "'";
                            $sql .= " order by urgencia, fhAsignado desc ";
                            $rs = mysqli_query($link, $sql);
                            if ($rs) {

                                $filas_encontradas = mysqli_num_rows($rs);
                                include_once '../classes/classFunciones.php';
                                $F = new classFunciones();
                                while ($row = mysqli_fetch_assoc($rs)) : ?>
                                    <tr bgcolor="<?php echo $F->ColoresUrgencia($row['Urgencia']) ?>">
                                        <td class="<?= $F->ColoresUrgencia($row['Urgencia']) ?>" id="<?= $row['ID']; ?>" style="vertical-align: middle;"><?= $row['ID'] ?><button id="detalle" style="visibility: hidden;position:absolute;" data-toggle="modal" data-target=".bd-example-modal-lg"></button></td>
                                        <td id="<?= $row['ID']; ?>" style="vertical-align: middle;"><?= $row['Servicio'] ?></td>
                                        <td id="<?= $row['ID']; ?>" style="vertical-align: middle;"><?= $row['persona'] ?></td>
                                        <td id="<?= $row['ID']; ?>" style="vertical-align: middle;"><?= $row['solicitud'] ?></td>
                                        <td id="<?= $row['ID']; ?>" style="vertical-align: middle;" align="center"><?= $row['Falla'] ?></td>
                                        <td id="<?= $row['ID']; ?>" style="vertical-align: middle;" align="center"><?php if ($row['impideTrabajar'] == 1) { echo "SI"; } ?></td>

                                    </tr>
                            <?php

                                endwhile;
                            } else
                                echo "Ha ocurrido un error en la conexión.";
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td id="footer" align="center" style="font-weight: bold;" colspan="8">Pedidos totales
                                    encontrados: <?= $filas_encontradas ?></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <!-- -->

            </section>

            <button class="w-50 center-block mt-4 btn-success btn-lg" type="submit">Grabar resultados</button>
        </form>
    </main>
</section>

<script src="assets/dist/js/bootstrap.bundle.min.js"></script>

<script>
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>


<?php
include("../layout/footer.php");
?>