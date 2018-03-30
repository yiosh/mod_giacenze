<?php 
require_once('../../fl_core/autentication.php');
include('fl_settings.php'); // Variabili Modulo 

$parent_id = (isset($_GET['parent_id'])) ? check($_GET['parent_id']) : 0;
$order_id = (isset($_GET['ordine_id'])) ? check($_GET['ordine_id']) : 0;
$multi_order = (isset($_GET['multi_order'])) ? check($_GET['multi_order']) : 0;


$dettagli = check($_GET['dettagli']);
$module_title = "Carica DDT n. ".$dettagli;

require_once("../../fl_inc/headers.php");
?>

<script src="js/script.js"></script>
<link rel="stylesheet" href="css/style.css">

<?php if(!isset($_GET['external'])) include_once('../../fl_inc/testata.php'); ?>
<?php if(!isset($_GET['external'])) include_once('../../fl_inc/menu.php'); ?>
<?php if(!isset($_GET['external'])) include_once('../../fl_inc/module_menu.php'); ?>



<div class="container" lang="en-US">

  <form name="" method="POST" class="" action="mod_opera.php">
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

        <tr id="r1">
          <td class="codice"><input class="codice-field" type="text" name="codice[]" placeholder="Inserisci codice"><input class="id-field" type="hidden" name="id[]"></td>
          <td class="descrizione"><input class="descrizione-field" type="text" name="descrizione[]" placeholder="Inserisci descrizione"></td>
          <td class="um">
            <select class="um-field numero-field" name="unita_di_misura[]" id="">
              <option value="KG">KG</option>
              <option value="LT">LT</option>
              <option value="PZ">PZ</option>
              <option value="BT">BT</option>
							<option value="CT">CT</option>
              <option value="KP">KP</option>
            </select>
          </td>
          <td class="qty numero-field"><input class="qty-field" type="number" step="0.001" name="qty[]" value="1"></td>
          <td class="prezzo numero-field"><input class="prezzo-field" step="0.001" type="number" name="prezzo[]" value="0.00"></td>
          <td class="sc numero-field"><input class="sc-field" type="number" step="0.001" name="sc[]"  value="0.00"></td>
          <td class="iva numero-field"><input class="iva-field" type="number" step="0.001" name="iva[]" value="0.00"></td>
          <td class="importo numero-field"><input class="importo-field" step="0.001" type="number" name="importo[]" value="0.00" readonly></td>
          <th class="delete-row"></th>
        </tr>
      </table>

 

    </div>
 
    
    <input type="hidden" name="doc_vendita" value="<?php echo $parent_id; ?>">
    <input type="hidden" name="ordine_id" value="<?php echo $order_id; ?>">
    <input type="hidden" name="multi_order" value="0">
    <div class="aggiungi msg green">
      <label id="aggiungi" for=""><i  title="Aggiungi riga" class="fa fa-plus"></i></label>
    </div>
    <input id="submit" type="submit" value="Carica Voci" class="salva button">

  </form>
</div>
<?php include_once("../../fl_inc/footer.php"); ?>