
<?php require_once("init.inc.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <script type="text/javascript" src="ajaxJs2.js"></script>
    </head>
    <body>
        <form action="#" method="post">
            <fieldset>
                <legend>Employés</legend>
                <?php
                    $resultat = $pdo -> query("SELECT * FROM employes");
                    $employes = $resultat -> fetchAll(PDO::FETCH_ASSOC);
                ?>
                <select name="personne" id="personne">
                    <?php foreach ($employes as $value){
                        echo '<option>' . $value['prenom'] . '</option>';
                    }
                    ?>
                </select><br><br>

                <input id="submit" type="submit" name="" value="Afficher">
            </fieldset>
        </form>

        <div id="resultat">

        </div>
    </body>
</html>
