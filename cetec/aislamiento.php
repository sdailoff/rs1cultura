<?php include('../layout/header.php'); ?>
<div class="container jumbotron_body">
    <div class="col-xs-12 text-center">
        <h4>CeTeC 19: Recomendaciones para el aislamiento domiciliario para personas con COVID-19</h4>
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


<!--------- *********************** -------->
<?php
include('../layout/footer.php');
?>