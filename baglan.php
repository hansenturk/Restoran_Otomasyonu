<?php

try {
    $db = new PDO("mysql:host=localhost; dbname=restoran_otomasyonu; charest=utf8", 'root', '');
    
} catch (Exception $e) {
    echo $e->getMessage();
}


?>