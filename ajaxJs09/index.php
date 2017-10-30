<?php require('init.inc.php') ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <script src="ajax9.js"></script>
    </head>
    <body>
        <form class="" action="" method="post">

            <?php
                $resultat = $pdo -> query("SELECT * FROM employes");
                $employes = $resultat->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <select id="personne" name ="personne">
                    <?php foreach ($employes as $value){
                        echo '<option>' . $value['prenom'] . '</option>';
                    }
                    ?>
                </select>
                <input type="submit" id="submit" value="OK">
        </form>
        <div id="resultat"></div>
    </body>
</html>
