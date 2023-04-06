 <?php
 /**
*============================================================================
* Name        : Guardar
* Author      : Yovan Y. enovore
* Version     : 1.0.0
* Copyright   : YNV Ⓒ 2023
* Description : Script para el mostrado de la tabla registro.
*============================================================================
*/
    include 'head_register.php';
    ?>

    <table class="table">
    <thead>
      <tr>
        <td>VISITA</td>
        <td>IP</td>
        <td>PAÍS</td>
        <td>MONEDA_PAIS</td>
        <td>NOMBRE_MONEDA</td>
        <td>SIMBOLO_MONEDA</td>
      </tr>
      </thead>
      <?php
      require 'config.php';
      $rows = mysqli_query($conn, "SELECT * FROM visitas");
      ?>
      <?php foreach($rows as $row) : ?>
        <tbody class="table-group-divider">
      <tr>
        <td><?php echo $row["idvisitas"]; ?></td>
        <td><?php echo $row["ip"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["currency"]; ?></td>
        <td><?php echo $row["currency_name"]; ?></td>
        <td><?php echo $row["currency_symbol"]; ?></td>
      </tr>
      </tbody>
      <?php endforeach; ?>
    </table>
    <?php
require 'config.php';

if (isset($_POST['ip']) && isset($_POST['name']) && isset($_POST['currency']) && isset($_POST['currency_name']) && isset($_POST['currency_symbol'])) {
  // Se obtienen los datos del formulario mediante el arreglo $_POST
  $ip = $_POST['ip'];
  $name = $_POST['name'];
  $currency = $_POST['currency'];
  $currency_name = $_POST['currency_name'];
  $currency_symbol = $_POST['currency_symbol'];

  // Se muestra en pantalla los datos recibidos
  echo "ip: $ip, name: $name, currency: $currency, currency_name: $currency_name, currency_symbol: $currency_symbol<br>";

  // Se construye la consulta SQL para insertar los datos en la base de datos
  $query = "INSERT INTO visitas VALUES('', '$ip', '$name', '$currency', '$currency_name', '$currency_symbol')";

  // Se ejecuta la consulta en la base de datos
  if (mysqli_query($conn, $query)) {
    echo "Los datos se guardaron correctamente en la base de datos";
  } else {
    echo "Error al guardar los datos en la base de datos: " . mysqli_error($conn);
  }
} else {
  echo "Error: No se recibieron todos los datos necesarios";
}
?>

<?php
    include 'footer.php';
    ?>