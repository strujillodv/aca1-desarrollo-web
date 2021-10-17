<?php

  // VARS
  $HOSTNAME = '172.21.0.1';
  $USERNAME = 'test';
  $PASSWORD = 'test';
  $DATABASENAME = 'dbinicial';
  $PORT = 3306;

  // Connection Database
  $connection = mysqli_connect(
    $HOSTNAME,
    $USERNAME,
    $PASSWORD,
    $DATABASENAME,
    $PORT
  );

  if ($connection->connect_error) {
    die("La conexión no pudo establecerce: " . $connection->connect_error);
  } else { 
    echo "Conexión Establecida";
  }

?>
