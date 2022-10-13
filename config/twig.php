<?php

require_once __DIR__ . '/../vendor/autoload.php';


// Tu indiques ici à Twig où aller chercher tes fichiers de vues

// Le loader (Twig\Loader\FilesystemLoader) demande un paramètre, 
// qui sera le répertoire dans lequel tes fichiers de vues en *.twig se trouveront.
$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');


// TwigEnvironment prend ensuite cet objet loader en paramètre, 
// et un tableau de configuration (cache, debug, etc.), 
// à mettre optionnellement en second paramètre, mais tu ne t'en préoccuperas pas pour le moment.
$twig = new Twig\Environment($loader, ['debug' => true]);

//extension qui permet d'utiliser l'équivalent du var_dump(), soit : dump()  chez twig
// ex : {{ dump(objectIWantExamine) }}
$twig->addExtension(new Twig\Extension\DebugExtension());
//liste des extensions dispos:
// https://twig.symfony.com/doc/3.x/api.html#using-extensions
