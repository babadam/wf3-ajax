document.addEventListener("DOMContentLoaded", function(event){
    document.getElementById("submit").addEventListener('click', function(event){
        event.preventDefault(); // annule le comportement par défaut du submit qui est censé rechargé la page
        ajax();
    });

    function ajax(){
        r = new XMLHttpRequest(); //envoi une requête ajax htpp dans l'url
        var p = document.getElementById("personne"); // on pointe vers  le champs (input)
        // console.info(p);
        var personne = p.value; // là on récupère la valeur de l'input
        // console.info(personne); : permet de vérifier si je récupère bien la valeur du champs dans la console OK!

        var parameters = "personne="+personne; // variable parameters que l'on envoie dans la requête 1er personne celui de la requête INTO 2eme personne c'est la variable qui recupère la valeur du champs (input)
        console.info(parameters); // permet de vérifier si le champs personne est égal à la bonne valeur OK;

        r.open("POST", "ajax7.php", true); // je prépare le fichier PHP que je vais ouvrir

        r.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); // avant d'envoyer une requête on la définit

        r.send(parameters); // on donne le feu vert la requête peut être éxécutée dans le meme fichier que r.open

        document.getElementById("resultat").innerHTML = "<span style='background: green; color: white'>employé " + p.value + " ajouté </span>"; // on pointe vers la div ooù on attend le résultat pour l'afficher dans cette div
    }
});
