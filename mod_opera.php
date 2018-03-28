<?php 

require_once('../../fl_core/autentication.php');
include('fl_settings.php'); // Variabili Modulo 





if(isset($_POST['parent_id'])) {

$parent_id = check($_POST['parent_id']);
$ordine_id = check($_POST['ordine_id']);

foreach($_POST['codice'] as $item => $val) {

    echo '<br>'.$_POST['id'][$item];
    echo '<br>'.$_POST['codice'][$item];
    echo '<br>'.$_POST['descrizione'][$item];
    echo '<br>'.$_POST['unita_di_misura'][$item];
    echo '<br>'.$_POST['qty'][$item];
    echo '<br>'.$_POST['prezzo'][$item];
    echo '<br>'.$_POST['sc'][$item];
    echo '<br>'.$_POST['iva'][$item];
    
    $id = check($_POST['id'][$item]); // ID del formato se 0 è un nuovo formato non anagrafato
    $codice_fornitore = check($_POST['codice'][$item]);
    $descrizione = check($_POST['descrizione'][$item]);
    $unita_di_misura = check($_POST['unita_di_misura'][$item]);
    $qty = check($_POST['qty'][$item]);
    $sc = check($_POST['sc'][$item]);
    $prezzo = check($_POST['prezzo'][$item]);
    $iva = check($_POST['iva'][$item]);
    $lotto = $note = ''; // TO ADD ON FORM


 $insertVoceDoc = "INSERT INTO `fl_doc_acquisto_voci` (`id`, `parent_id`, `codice`, `descrizione`, `unita_di_misura`, `quantita`, `valuta`, `importo`, `sconto`, `aliquota`, `imposta`, `subtotale`, `operatore`) 
VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '', '');";

echo $insertMovimentoMag = "INSERT INTO `fl_magazzino_movimentazioni` (`id`, `status_movimentazione`, `ordine_id`, `doc_vendita_id`, `tipo_movimentazione`, `workflow_id`, `parent_id`, `codice_fornitore`, `codice_ean`, `descrizione`, `unita_di_misura`, `valuta`, `prezzo_unitario`, `iva`, `lotto`, `note`, `quantita`, `magazzino_id`, `settore_id`, `cella_id`, `data_creazione`, `data_aggiornamento`, `operatore`)
 VALUES (NULL, '0', '$parent_id', '$ordine_id', '0', '0', '$id', '$codice_fornitore', '', '$descrizione', '$unita_di_misura', 'EUR', '$prezzo', '$iva', '$lotto', '$note', '$qty', '0', '0', '0', NOW(), NOW(), '".$_SESSION['number']."');";



}
exit;

}




mysql_close(CONNECT);
header("Location: ".$_SERVER['HTTP_REFERER']); 
exit;

?>
