<?php

/**
 * Crée une connexion à la base de données avec PDO 
 * @return PDO l'objet PDO crée
 */ 
function getPDOConnection(): PDO 
{
  //Connexion à la base de données avec PDO
  $dsn = "mysql:host=localhost;port=3306;dbname=test;charset=utf";
  $user = DB_USER;
  $password = DB_PASS;
  $option = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  ];

  try {
    $pdo = new PDO($dsn, $user, $password, $option);
  }
  catch (PDOException $exception) {

    echo 'ERREUR PDO : '. $exception->getMessage();
    exit;
  }

  return $pdo;
}