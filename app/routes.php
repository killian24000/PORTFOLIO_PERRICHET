<?php

/**
 * On définit dans le tableau associatif $routes la liste de nos routes.
 * Pour chaque route, on définit : 
 * - son nom 
 * - path (qui apparaît dans l'URL)
 * - controller : fichier à appeler 
 */

 $routes = [

  // Page d'accueil
  'home' => [
      'path' => '/',
      'controller' => 'home.php'
  ],

  // Page Etude
  'etude' => [
      'path' => '/etude',
      'controller' => 'etude.php'
  ],

  // Page Languages
  'languages' => [
      'path' => '/languages',
      'controller' => 'languages.php'
  ],

  // Page Projets
  'projet' => [
      'path' => '/projet',
      'controller' => 'projet.php'
  ],
];

return $routes;