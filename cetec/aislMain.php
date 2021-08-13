<?php include('../layout/header.php'); ?>
<div class="container jumbotron_body">
    <div class="col-xs-12 text-center">
        <h4>Medidas de cuidado durante el aislamiento</h4>
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
        <div class="row panels-row justify-content-center">

            <div class="col-xs-12 col-sm-6 col-md-4 horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;">
                <a class="panel panel-default panel-icon" href="aislamiento.php">
                    <div class="panel-heading"><i class="fa fa-bookmark"></i></div>
                    <div class="panel-body">
                        <p class="h3_title">CeTeC 19</p>
                        <p class="text-muted" aria-hidden="true">Recomendaciones para el aislamiento domiciliario para personas con COVID-19</p>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;">
                <a class="panel panel-default panel-icon" href="aislamientoEH.php">
                    <div class="panel-heading"><i class="fa fa-bookmark"></i></div>
                    <div class="panel-body">
                        <p class="h3_title">Aislamiento extra hospitalario</h3>
                        <p class="text-muted" aria-hidden="true">Aislamiento domiciliario y en centros extrahospitalarios</p>
                    </div>
                </a>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;">
                <a class="panel panel-default panel-icon" href="estrechos.php">
                    <div class="panel-heading"><i class="fa fa-bookmark"></i></div>
                    <div class="panel-body">
                        <p class="h3_title">CeTeC 19</h3>
                        <p class="text-muted" aria-hidden="true">Recomendaciones para contactos estrechos durante el aislamiento domiciliario</p>
                    </div>
                </a>
            </div>
        </div>

    </div>
</section>


<!--------- *********************** -------->
<?php
include('../layout/footer.php');
?>