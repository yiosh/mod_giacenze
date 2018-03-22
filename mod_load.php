<?php 

require_once('../../fl_core/autentication.php');
include('fl_settings.php'); // Variabili Modulo 

$parent_id = check($_GET['parent_id']);
$order_id = check($_GET['order_id']);
$multi_order = (isset($_GET['multi_order'])) ? check($_GET['multi_order']) : 0;

$module_title = "Carica DDT n. ".check($parent_id);



include("../../fl_inc/headers.php");?>

<?php if(!isset($_GET['external'])) include('../../fl_inc/testata.php'); ?>
<?php if(!isset($_GET['external'])) include('../../fl_inc/menu.php'); ?>
<?php if(!isset($_GET['external'])) include('../../fl_inc/module_menu.php'); ?>

<div class="container">
  <form name="" method="POST" class="ajaxForm">
    <div class="dati-wrapper">
      <table id ="dati" class="dati" summary="Dati">
        <tr>
          <th>Codice</th>
          <th>Descrizione</th>
          <th>UM</th>
          <th>QTY</th>
          <th>Prezzo</th>
          <th>Sc. %</th>
          <th>IVA</th>
          <th>Importo</th>
          <th></th>
          <th></th>
        </tr>

      </table>
    </div>
 
    <i id="aggiungi" title="Aggiungi riga" class="fas fa-plus-circle"></i>

    <input type="submit" value="Carica Voci" class="submit button">

  </form>
</div>
<?php include("../../fl_inc/footer.php"); ?>