// fonction permettant d'executer la fonction ajax() toutes les 10sec pour afficher les employés de manière actualisée
setInterval("ajax()", 10000);

ajax(); // execution de la méthode ajax() immédiatementpour ne pas attendre 10sec lors du 1er affichage de la page
// alert("HI");
function ajax(){
    r = new XMLHttpRequest();
    // console.log(r);
    // document.write('test<br>');

    r.open("POST", "ajax8.php", true); // on prépare le fichier PHP auquel on envoie des données


    r.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); // on prépare la requete http
    r.send(); // on donne le feu vert

    r.onreadystatechange = function(){
        if (r.readyState == 4 && r.status == 200) {
            var obj = JSON.parse(r.responseText); // permet de convertir en JSON
            document.getElementById("resultat").innerHTML = obj.resultat;
        }
    }
}
