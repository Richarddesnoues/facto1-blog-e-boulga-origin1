<?php 

// Point d'entrée pour la page d'accueil

// Inclusion des fichiers nécessaires comme les DATA


//affichage 
require __DIR__.'/inc/templates/header.tpl.php';

// je récupère le de la page demandée en parametre d'URL (page) avec le $_GET

// Par defaut la page que je souhaite consulter est la home
$pageToDisplay = 'home';

// Mais si je précise dans l'URL une autre page, alors c'est celle là qui sera affichée si elle existe
if(isset($_GET['page'])) {
    $pageToDisplay = $_GET['page'];
}


// Maintenant que je sais quelle page je vais afficher 
require __DIR__.'/inc/templates/' . $pageToDisplay . '.tpl.php';


require __DIR__.'/inc/templates/footer.tpl.php';