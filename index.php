<html>
    <head>
        <title>Benim İlk PHP Sayfam</title>
    </head>
    <body>
    <form action="index.php" method="post">
        <label for="name">Ad Soyadı</label>
        <input type="text" name="name" /> <br>

        <label for="email">E-posta</label>
        <input type="text" name="email" /> <br>

        <label for="mesaj">Mesaj</label>
        <textarea name="mesaj"></textarea>

        <input type="submit" value="Gönder" name="submit" />
    </form>
    </body>
</html>

<?php
    require_once "app.php";
    global $pdo;

    if(empty($_POST)) {
        echo "Lütfen yukardaki alanları doldurun.";
    } else {
        if (strlen($_POST['name']) == 0 ||
            strlen($_POST['email']) == 0 ||
            strlen($_POST['mesaj']) == 0
        ) {

            echo "Lütfen tüm bilgileri eksiksiz doldurun.";
            var_dump($_POST);
        }
        else {
            echo "Teşekkürler " . $_POST['name'] . "!";
            echo "Mesajın gönderildi!";


            // her şey yolunda
            $sql = $pdo->prepare("INSERT INTO iletisim (ad_soyad, eposta, mesaj) 
            VALUES (:ad_soyad, :email, :mesaj);");

            $sql->execute(array(
                    ":ad_soyad" => $_POST['name'],
                    ":email" => $_POST['email'],
                    ":mesaj" => $_POST['mesaj']
            ));
        }
    }
?>

































