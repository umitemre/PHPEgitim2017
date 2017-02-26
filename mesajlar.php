<?php
    require_once "app.php";

    global $pdo;

    $sql = $pdo->prepare("SELECT * FROM iletisim;");
    $sql->execute();

    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    


