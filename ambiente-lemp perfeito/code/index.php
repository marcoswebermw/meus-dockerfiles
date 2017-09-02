<?php

    // Credenciais.
    $servername = "mariadb";
    $username = "usuario_mariadb";
    $password = "minha_senha";
    $dbname = "bd_mariadb";

    // --------------------------------------------------------------
    // Conexão com MySQLi

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Conectado corretamente com MySQLi<br />";


    // --------------------------------------------------------------
   // Conexão com PDO
   try {
     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     // set the PDO error mode to exception
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "Conectado corretamente com PDO.";
   }
   catch(PDOException $e)
   {
     echo "Connection failed: " . $e->getMessage();
   }

    // --------------------------------------------------------------
   echo "<br /> <a href='./info.php'>InfoPHP</a>";


  ?>
