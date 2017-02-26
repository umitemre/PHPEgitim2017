<?php
    require_once "config.php";

    global $db_config;

    try {
        $pdo = new PDO("mysql:host=" . $db_config['host'] . ";dbname=" . $db_config['veritabani_adi'] . "",
            $db_config['user'],
            $db_config['pass']);
    } catch (PDOException $exception) {
        die("MySQL bağlantısı başarısız oldu.");
    }