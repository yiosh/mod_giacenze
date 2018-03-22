
<?php

$formato1 = array('id'=>'1','codice_fornitore'=>'A0001','descrizione'=>'PRODOTTO CIAO 1','unita_di_misura'=>'KG','qty'=>1,'prezzo'=>'10.50','iva'=>'22');
$formato2 = array('id'=>'2','codice_fornitore'=>'A0002','descrizione'=>'PRODOTTO CIAO 2','unita_di_misura'=>'LT','qty'=>1,'prezzo'=>11.50,'iva'=>10);
$formato3 = array('id'=>'3','codice_fornitore'=>'A0003','descrizione'=>'PRODOTTO CIAO 3','unita_di_misura'=>'PZ','qty'=>1,'prezzo'=>12.50,'iva'=>22);
$formato4 = array('id'=>'4','codice_fornitore'=>'A0004','descrizione'=>'PRODOTTO CIAO 4','unita_di_misura'=>'PZ','qty'=>1,'prezzo'=>13.50,'iva'=>4);
$formato5 = array('id'=>'5','codice_fornitore'=>'A0005','descrizione'=>'PRODOTTO CIAO 5','unita_di_misura'=>'KG','qty'=>1,'prezzo'=>14.50,'iva'=>10);

echo json_encode(array($formato1,$formato2,$formato3,$formato4,$formato5));


?>