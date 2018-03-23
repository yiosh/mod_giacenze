<?php 

require_once('../../fl_core/autentication.php');
include('fl_settings.php'); // Variabili Modulo 

$parent_id = check($_GET['parent_id']);
$order_id = check($_GET['order_id']);
$multi_order = (isset($_GET['multi_order'])) ? check($_GET['multi_order']) : 0;

$module_title = "Carica DDT n. ".check($parent_id);

// <div id="content-confirm" class="modal">
//         <div class="modal-content modal-confirm">
    
//         </div>
//       </div>
// <label for="">Codice/Descripzione</label>
// <input type="text" name="" id="search">

require_once("../../fl_inc/headers.php"); 

?>

<?php if(!isset($_GET['external'])) include('../../fl_inc/testata.php'); ?>
<?php if(!isset($_GET['external'])) include('../../fl_inc/menu.php'); ?>
<?php if(!isset($_GET['external'])) include('../../fl_inc/module_menu.php'); ?>

<div class="container">
<div class="aggiungi">
  <label id="aggiungi" for=""><i  title="Aggiungi riga" class="fas fa-plus-circle"></i> Aggiungi riga</label>
</div>
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

        <tr id="r1">
          <td class="codice"><input class="codice-field" type="text" name="codice"></td>
          <td class="descrizione"><input class="descrizione-field" type="text" name="descrizione"></td>
          <td class="um">
            <select class="um-field select2" name="" id="">
              <option value="KG">KG</option>
              <option value="LT">LT</option>
              <option value="PZ">PZ</option>
            </select>
          </td>
          <td class="qty"><input class="qty-field"type="number" step="1" min="0" name="qty"></td>
          <td class="prezzo"><input class="prezzo-field" step="0.01" min="0" type="number" name="prezzo"></td>
          <td class="sc"><input class="sc-field" type="text" name="sc"></td>
          <td class="iva"><input class="iva-field" type="text" name="iva"></td>
          <td class="importo"><input class="importo-field" step="0.01" min="0" type="number" name="importo"></td>
          <th class="delete-row"></th>
        </tr>
      </table>
    </div>
 
    

    <input type="submit" value="Carica Voci" class="submit button">

  </form>
</div>
<?php include("../../fl_inc/footer.php"); ?>