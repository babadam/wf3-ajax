<?php
require_once("init.inc.php");
$resultat = $pdo -> query("DELETE FROM employes WHERE prenom = '$_POST[personne]'");


$tab = array();
$tab['monresultat'] = '';

$resultat = $pdo -> query("SELECT * FROM employes");
$employes = $resultat -> fetchAll(PDO::FETCH_ASSOC);
// echo $tab['monresultat'];

$tab['monresultat'] .= '<select name="personne" id="personne">';
     foreach ($employes as $value){
        $tab['monresultat'] .= '<option>' . $value['prenom'] . '</option>';
    }

$tab['monresultat'] .= '</select>';

//echo $tab['monresultat'];

echo json_encode($tab);
// json_encode permet de transformer le tableau ARRAY au bon format (JSON)
// Ce format (JSON) assure la possibilité de transporter les données. Sans JSON, nous ne pouvons pas transporter les données.
?>


<?php
