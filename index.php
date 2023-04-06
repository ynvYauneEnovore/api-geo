<?php
/**
*============================================================================
* Name        : Inicio
* Author      : Yovan Y. enovore
* Version     : 1.0.0
* Copyright   : YNV Ⓒ 2023
* Description : Pagina de inicio.
*============================================================================
*/
?>
<!DOCTYPE html>
<html lang="es-BO">
  <head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <!-- Se incluye la biblioteca de jQuery para el manejo de peticiones AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
  
    <?php
    include 'head_index.php';
    ?>
    <!-- Se crea un contenedor que ocupa el 80% de la anchura y 100% de la altura de la ventana, con contenido centrado verticalmente y horizontalmente -->
    <div class="container w-80 vh-100 d-flex justify-content-center align-items-center">
      <!-- Se agrega un enlace a "guardar.php" con el texto "Data" -->
      <button onclick="location.href='guardar.php'" type="button" class="btn bg-success text-white"><h1>Ir a ver los REGISTROS</h1></button>
    </div>
      <!-- Se inicia un script de JavaScript -->
      <script type="text/javascript">
        $(document).ready(function() {
          // Se realiza una petición AJAX para obtener información de geolocalización
          $.getJSON('https://api.vatcomply.com/geolocate', function(ip){
            // Se obtiene la información de la IP, nombre y moneda del resultado de la petición
            var data = {
              ip: ip.ip,
              name: ip.name,
              currency: ip.currency,
            };
            
            const moneda = ip.currency; // código de la moneda que deseas obtener

            // Se realiza otra petición AJAX para obtener información de las monedas
            fetch('https://api.vatcomply.com/currencies')
              .then(response => response.json())
              .then(data1 => {
                console.log(data.ip); // muestra el ip del visitante
                console.log(data.name); // muestra el nombre del pais del visitante
                console.log(data.currency); // muestra el nombre de la moneda del pais
                window.datosMoneda = data1[moneda];
                console.log(datosMoneda.name); // muestra el nombre de la moneda
                console.log(datosMoneda.symbol); // muestra el simbolo de la moneda

                // Se envían los datos al servidor mediante una petición AJAX de tipo POST
                $.ajax({
                  url: 'guardar.php',
                  type: 'POST',
                  data: {
                    ip: data.ip,
                    name: data.name,
                    currency: data.currency,
                    currency_name: window.datosMoneda.name,
                    currency_symbol: window.datosMoneda.symbol
                  },
                  success: function(response) {
                    console.log(response);
                  },
                  error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                  }
                });
              })
              .catch(error => console.error("NO TENEMOS UNA MONEDA DE SU PAIS"));
          });
        });
      </script>
      <?php
    include 'footer.php';
    ?>
  </body>
      </html>