<html>
    <head>
        <title>Benim İlk PHP Sayfam</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
    <div class="kutumuz">
        <form action="index.php" method="post">
            <div class="satir">
                <label for="name">Ad Soyadı</label>
                <input type="text" id="name" name="name" />
            </div>

            <div class="satir">
                <label for="email">E-posta</label>
                <input type="text" id="email" name="email" />
            </div>

            <div class="satir">
                <label for="mesaj">Mesaj</label>
                <textarea class="mesaj" name="mesaj"></textarea>
            </div>

            <div class="satir">
                <input type="submit" value="Gönder" name="submit" />
            </div>
        </form>
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
    </div>
    </body>
</html>


































