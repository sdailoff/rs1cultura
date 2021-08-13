<?php

include ('../layout/header.php');
?>
<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="js/jquery.tm.counter.min.js"></script>
<script type="text/javascript" src="js/jquery.tm.horizon.min.js"></script>
  <div class="jumbotron_body">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2 text-center horizon">
          <h1>Centros de testeo rápidos<br>Covid-19
          <p>Acercate sin turno previo al dispositivo de testeo más cercano a tu domicilio para hacerte el test si sos contacto estrecho, personal estratégico, estás en contacto con personas de riesgo o sos turista y volvés a la Ciudad.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="overlay"></div>
</section>

<!---------- *********************** ------->

<section>
    
<script>

$(document).ready( function(){
	// Call counter and set autostart to false
	$('.stats').counter( {
		autoStart: false 
	});

	// Call horizon
	$('.stats').horizon({
	 recurring:	true, 

	// Start counter once element is in view
	inView:	function(){ 
			$( '.stats' ).each( function(){
			var counter = $( this ).data( 'counter' );
				counter.startCounter();
			});
		},

	// Clear counter once element is out of view
	outOfView:	function(){ 
			$( '.stats' ).each( function(){
			var counter = $( this ).data( 'counter' );
				counter.clearCounter();
			});
		}
	});
});


$( document ).ready( function(){
	$( '.horizon' ).horizon();
});
</script>
  <div class="container">
    <div class="row panels-row justify-content-center">
      <?php
      if ($usuario_actual != ""){
      ?>
      
      <div class="col-xs-12 col-sm-6 col-md-3 horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;">
        <a class="panel panel-default panel-icon" href="../sisa/fichaSisa.php">
          <div class="panel-heading"><i class="fa fa-star"></i></div>
          <div class="panel-body">
            <p class="h3_title">Triage</p>
            <p class="text-muted" aria-hidden="true">Recepción y carga de les pacientes</p>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;">
        <a class="panel panel-default panel-icon" href="../sisa/resultados.php">
          <div class="panel-heading"><i class="fa fa-hospital-o"></i></div>
          <div class="panel-body">
            <p class="h3_title">Resultados</h3>
            <p class="text-muted" aria-hidden="true">Carga de resultados de testeos rápidos</p>
          </div>
        </a>
      </div>
      <?php
      }
      ?>

        <div class="col-xs-12 col-sm-6 col-md-3 horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;">
      
        <a class="panel panel-default panel-icon" href="">
          <div class="panel-heading"><i class="fa fa-medkit"></i></div>
          <div class="panel-body">
            <p class="h3_title">Info de interés</h3>
            <p class="text-muted" aria-hidden="true">Días, horarios de los puntos de testeo</p>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;">
        <a class="panel panel-default panel-icon" href="../cetec/aislMain.php">
          <div class="panel-heading"><i class="fa fa-bookmark-o"></i></div>
          <div class="panel-body">
            <p class="h3_title">Aislamiento</h3>
            <p class="text-muted" aria-hidden="true">Medidas de cuidado durante el aislamiento</p>
          </div>
        </a>
      </div>
    </div>

  </div>
</section>


<!--------- *********************** -------->
<?php
include ('../layout/footer.php');
?>