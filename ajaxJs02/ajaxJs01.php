<?php

require_once("init.inc.php");

$tab = array();
$tab['monresultat'] = '';

$resultat = $pdo -> query("SELECT * FROM employes WHERE prenom = '$_POST[personne]'");

$tab['monresultat'] .= '<table border="10">';

$tab['monresultat'] .= '<tr>';

for($i = 0; $i < $resultat->columnCount(); $i++ ){
   $colonne = $resultat->getColumnMeta($i);
   $tab['monresultat'] .= '<th>' . $colonne['name'] . '</th>';
}
$tab['monresultat'] .= '</tr>';

while($enregistrement = $resultat -> fetch(PDO::FETCH_ASSOC)){
    foreach($enregistrement as $valeur){
        $tab['monresultat'] .= '<td>' . $valeur . '</td>';

    }
    $tab['monresultat'] .= '</tr><br>';
}

// echo $tab['monresultat'];

$f = fopen('test.txt', 'a');
fwrite($f, json_encode($tab));

echo json_encode($tab);
// json_encode permet de transformer le tableau ARRAY au bon format (JSON)
// Ce format (JSON) assure la possibilité de transporter les données. Sans JSON, nous ne pouvons pas transporter les données.
?>


<?php
// require_once("init.inc.php");
// $tab = array();
// extract($_POST);
// $tab['monresultat'] ='';
//
// $resultat = $pdo -> query("SELECT * FROM employes WHERE prenom ='$_POST[personne]'");
// $ligne= $resultat -> fetch(PDO::FETCH_ASSOC);
// $tab['monresultat'] .= '<table border ="5">'; // création du tableau HTML
// $tab['monresultat'] .= '<tr>'; // création de la ligne de titre
//
// for($i = 0; $i < $resultat -> columnCount(); $i++){
//     $colonne = $resultat -> getColumnMeta($i);
//     $tab['monresultat'] .= '<th>'.$colonne['name'].'</th>';
// }
// $tab['monresultat'] .= '</tr>'; // fin de ligne de titre
// $tab['monresultat'] .= '<tr>';
// foreach($ligne as $informations){ // parcourt tous les enregistrements
//     $tab['monresultat'] .= '<td>' .$informations . '</td>';
// }
// $tab['monresultat'] .= '</tr>';
// $tab['monresultat'] .= '</table>';
//
// echo $tab['monresultat'];
//
// $f = fopen('test.txt', 'a');
// fwrite($f, json_encode($tab));
//
// echo json_encode($tab); // permet de transformer le tableau ARRAY au bon format (JSON)
// Ce format (JSON) assure la possibilité de tranpsporter les données. Sans Json, nous ne pouvons pas transporter les données
?>
