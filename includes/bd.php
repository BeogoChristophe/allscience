<?php

use PhpMyAdmin\Charsets\Charset;

    $pdo = new PDO('mysql:host=localhost;dbname=beogo_christophe;Charset=utf8', 'root', '',[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_OBJ
    ]);

     

    
?>
