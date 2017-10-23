<?php require_once("init.inc.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <script type="text/javascript" src="ajax5.js"></script>
    </head>
    <body>
        <form action="#" method="post">
            <fieldset>
                <legend>Employés</legend>
                <?php
                    $resultat = $pdo -> query("SELECT * FROM employes");
                    $employes = $resultat -> fetchAll(PDO::FETCH_ASSOC);
                    ?>
                    <div id="resultat">
                    <select name="personne" id="personne">
                        <?php foreach ($employes as $value){
                            echo '<option>' . $value['prenom'] . '</option>';
                        }
                        ?>
                    </select><br><br>
                    </div>
                    <input id="submit" type="submit" name="" value="Supprimer">
            </fieldset>
        </form>
    </body>
</html>
