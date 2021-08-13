<?php include('../layout/header.php'); ?>
<div class="container jumbotron_body">
    <div class="col-xs-12 text-center">
        <h4>Aislamiento domiciliario y en centros extrahospitalarios</h4>
    </div>
</div>
<div class="overlay"></div>
</section>

<!---------- *********************** ------->

<section>

    <script>
        $(document).ready(function() {
            // Call counter and set autostart to false
            $('.stats').counter({
                autoStart: false
            });

            // Call horizon
            $('.stats').horizon({
                recurring: true,

                // Start counter once element is in view
                inView: function() {
                    $('.stats').each(function() {
                        var counter = $(this).data('counter');
                        counter.startCounter();
                    });
                },

                // Clear counter once element is out of view
                outOfView: function() {
                    $('.stats').each(function() {
                        var counter = $(this).data('counter');
                        counter.clearCounter();
                    });
                }
            });
        });


        $(document).ready(function() {
            $('.horizon').horizon();
        });
    </script>
    <div class="container">
     

    </div>
</section>
<section class="container">
    <p class="h4">INTRODUCCIÓN </p>
    <p class="mb-3">En el marco de la emergencia declarada por pandemia COVID-19 es necesario tomar medidas tendientes a minimizar la expansión del virus y evitar la mayor cantidad de casos y muertes que sean posibles.</p>
    <p class="mb-3">La intersectorialidad deja de ser, en este caso, una simple postura retórica o una acción esporádica, sino que crea una forma de trabajo sanitario que debe redundar en ventajas para la provincia y el país.</p>
    <p class="mb-3">Se prevén dos modalidades de aislamiento extrahospitalario, en el domicilio del paciente o en centros extrahospitalarios disponibles para tal fin. Todas las personas podrán acceder a los centros extrahospitalarios siempre que se trate de casos confirmados sin criterio clínico de internación hospitalaria y cumplan con los requisitos establecidos en este anexo. El aislamiento domiciliario estará disponible para casos sospechosos y confirmados sin criterio clínico de internación si el paciente dispone de un teléfono para estar permanentemente comunicado con el establecimiento de salud, es capaz de comprender y aplicar de forma correcta y consistente las medidas básicas de higiene, prevención y control de la infección y no convive con mayores de 60 años y/o con personas con factores de riesgo (hipertensión arterial, diabetes, insuficiencia renal crónica terminal, obesidad, gestación o pacientes oncológicos en tratamiento). Además, se deben tener en cuenta las condiciones habitacionales para dar cumplimiento a las recomendaciones.</p>

    <p class="h4 mt-3">AISLAMIENTO DOMICILIARIO</p>
    <p class="mb-3">El aislamiento domiciliario estará disponible para casos sospechosos y confirmados sin criterio clínico de internación, siempre que se cumplan con las condiciones del <b>LISTADO DE CHEQUEO DE CONDICIONES DE AISLAMIENTO DOMICILIARIO<b> <a href="CHEK-LIST_-final.pdf" target="_blank">(descargar)</a>.</p>
    
</section>

<!--------- *********************** -------->
<?php
include('../layout/footer.php');
?>