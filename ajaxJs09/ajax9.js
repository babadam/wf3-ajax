document.addEventListener("DOMContentLoaded", function(event){
    document.getElementById("submit").addEventListener('click', function(event){
        event.preventDefault(); // annule le comportement par défaut du submit qui est censé rechargé la page
        ajax();
    }
    )});

    function ajax(){
        r = new XMLHttpRequest();
        var p = document.getElementById("personne");
        var personne = p.options[p.selectedIndex].value;
        var parameters = "personne="+personne;
        console.log(parameters);
        r.open('POST', 'ajax9.php', true);
        r.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        r.send(parameters);
        r.onreadystatechange = function(){
            if(r.readyState == 4 && r.status == 200){
                var obj = JSON.parse(r.responseText);
                document.getElementById("resultat").innerHTML = obj.resultat;
            }
        }
    }
