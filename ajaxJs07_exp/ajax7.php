<?php

require_once("init.inc.php");

$pdo -> exec("INSERT INTO employes (prenom) VALUES ('$_POST[personne]')");

$tab = array();
$tab['monresultat'] = '';

$resultat = $pdo -> query("SELECT * FROM employes");

$tab['monresultat'] .= '<table border="10">';

$tab['monresultat'] .= '<tr>';

for($i = 0; $i < $resultat->columnCount(); $i++ ){
   $colonne = $resultat->getColumnMeta($i);
   $tab['monresultat'] .= '<th>' . $colonne['name'] . '</th>';
}
$tab['monresultat'] .= '</tr>';

while($enregistrement = $resultat -> fetch(PDO::FETCH_ASSOC)){

    $tab['monresultat'] .= '<tr>';
    foreach($enregistrement as $valeur){
        $tab['monresultat'] .= '<td>' . $valeur . '</td>';

    }
    $tab['monresultat'] .= '</tr>';
}


echo json_encode($tab);
// json_encode permet de transformer le tableau ARRAY au bon format (JSON)
// Ce format (JSON) assure la possibilité de transporter les données. Sans JSON, nous ne pouvons pas transporter les données.
?>
