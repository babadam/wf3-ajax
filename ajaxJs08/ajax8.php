<?php

// Réaliser le code PHP permettant d'afficher l'ensemble des employés dans un tableau HTML (stocker le reulstat dans un array)

require_once("init.inc.php");
$resultat = $pdo -> query("SELECT * FROM employes");

$tab = array();
$tab['resultat'] = '';



$tab['resultat'] .= '<table border="10">';

$tab['resultat'] .= '<tr>';

for($i = 0; $i < $resultat->columnCount(); $i++ ){
   $colonne = $resultat->getColumnMeta($i);
   $tab['resultat'] .= '<th>' . $colonne['name'] . '</th>';
}
$tab['resultat'] .= '</tr>';

while($enregistrement = $resultat -> fetch(PDO::FETCH_ASSOC)){

    $tab['resultat'] .= '<tr>';
    foreach($enregistrement as $valeur){
        $tab['resultat'] .= '<td>' . $valeur . '</td>';

    }
    $tab['resultat'] .= '</tr>';
}


echo json_encode($tab);
// json_encode permet de transformer le tableau ARRAY au bon format (JSON)
// Ce format (JSON) assure la possibilité de transporter les données. Sans JSON, nous ne pouvons pas transporter les données.
?>
