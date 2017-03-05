<?php
    require_once "app.php";

    global $pdo;

    $sql = $pdo->prepare("SELECT * FROM iletisim;");
    $sql->execute();

    $data = $sql->fetchAll(PDO::FETCH_ASSOC);

?>
<html>
<head>
    <title>Mesajlar</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
    foreach ($data as $mesaj) {
?>
    <div class="kayit">
        <span class="label">Kayıt ID: </span>
        <span class="value"><?php echo $mesaj['id']; ?></span>

        <span class="label">Ad Soyad: </span>
        <span class="value"><?php echo $mesaj['ad_soyad']; ?></span>

        <span class="label">E-posta: </span>
        <span class="value"><?php echo $mesaj['eposta']; ?></span>

        <span class="label">Mesaj: </span>
        <span class="value"><?php echo $mesaj['mesaj']; ?></span>
    </div>
<?php
    }
?>
</body>
</html>

