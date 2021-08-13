<br>
</main>
<footer class="main-footer">
<div class="container">
<div class="row">
  <div class="col-sm-6">
    <img class="image-responsive" alt="RS I" src="../img/rsi.png" height="100">
    <p class="text-muted small"><a href="https://creativecommons.org/licenses/by/2.5/ar/">Los contenidos de Argentina.gob.ar están licenciados bajo Creative Commons Reconocimiento 2.5 Argentina License</a></p>
  </div>
  <!--
  <div class="col-md-3 col-sm-6">
    <ul>
      <li><a>Op1</a></li>
      <li><a>Op2</a></li>
      <li><a>Op3</a></li>
      <li><a  aria-label="Mapa del Estado - Sitio Externo">Op4</a></li>
    </ul>
  </div>
  <div class="col-md-3 col-sm-6">
    <ul>
      <li><a>Acerca de este sitio</a></li>
      <li><a>Términos y condiciones</a></li>
      <li><a>Ayuda</a></li>
    </ul>
  </div>
-->
</div>
</div>
</footer>

<script>
let ul = document.querySelectorAll("ul.dropdown-menu.dropdown-menu-right");
for (let i = 0; i < ul.length; i++){
  let item_listas = ul[i].querySelectorAll('li');
  console.log(item_listas);
  codigo(item_listas);
}
function codigo(elementos){
  
  
  let ultimoitem = elementos.length - 1;
  //console.log(elementos[0].parentNode.parentNode);
  // recorro los item de la lista
  for (let i = 0; i < elementos.length; i++) {
    
    
    // Primer item de la lista
    if(i == 0){
      elementos[i].addEventListener("keydown", function(e) {
        /* tecla shift + (keycode = 9) es igual a la tecla de tabulacion */
        if(e.shiftKey && e.keyCode == 9){
          
          
          elementos[i].parentNode.parentNode.classList.remove("open");
           
          elementos[i].parentNode.parentNode.firstElementChild.setAttribute("aria-expanded", 'false');
          
          
          
          //alert('close1');
        }
        /* (keycode = 38) es igual a la tecla flecha arriba */
        if(e.keyCode == 38){
          
          elementos[i].parentNode.parentNode.classList.remove("open");
           
          elementos[i].parentNode.parentNode.firstElementChild.setAttribute("aria-expanded", 'false');  
            
          
        //  elementos[i].firstElementChild.focus();
        }
      });
      // ultimo item de la lista
    }else if (ultimoitem == i ) {
      elementos[i].addEventListener("keydown", function(e) {
        /* tecla shift + (keycode = 9) es igual a la tecla de tabulacion */
      if(e.shiftKey && e.keyCode == 9){
          
          elementos[i].parentNode.parentNode.classList.add("open");
          elementos[i].parentNode.parentNode.firstElementChild.setAttribute("aria-expanded", 'true');
          //alert('subi');
         /* (keycode = 9) es igual a la tecla de tabulacion */
        }else if(e.keyCode == 9){
          
          elementos[i].parentNode.parentNode.classList.remove("open");
          elementos[i].parentNode.parentNode.firstElementChild.setAttribute("aria-expanded", 'false');
          //alert('close2' + elementos[i]);
        }
        /* (keycode = 40) es igual a la tecla flecha abajo */
        if(e.keyCode == 40){
          
          elementos[i].parentNode.parentNode.classList.remove("open");
           
          elementos[i].parentNode.parentNode.firstElementChild.setAttribute("aria-expanded", 'false');  
            
          
        //  elementos[i].firstElementChild.focus();
        }
      });
      
    }
  }
}
</script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.18/r-2.2.2/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.18/r-2.2.2/datatables.min.js"></script>

</body>
</html>