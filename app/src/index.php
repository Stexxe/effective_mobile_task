<?php

try {
  $pdo = new PDO("mysql:host=db;dbname=test_db;charset=UTF8", 'user', 'passwd');
  echo 'MySQL version: ' . $pdo->getAttribute(PDO::ATTR_SERVER_VERSION);
} catch (PDOException $e) {
  echo $e->getMessage();
}