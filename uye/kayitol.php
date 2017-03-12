<?php
/**
 * Created by PhpStorm.
 * User: cezvedici
 * Date: 12.03.2017
 * Time: 14:22
 */

require_once "../app.php";
require_once "Kullanici.php";

$kullanici = new Kullanici();
session_start();

if ($kullanici->girisYapildiMi() == true)
    return print ("Zaten giriş yapılmış, kayıt olmaya gerek yoktur.");


?>

<form action="kayitol.php" method="post">
    <label for="username">Kullanıcı Adı:</label>
    <input type="text" name="username" id="username" /> <br>

    <label for="email">E-posta</label>
    <input type="text" name="email" id="email"> <br>

    <label for="password">Parola</label>
    <input type="password" name="password" id="password"> <br>

    <input type="submit" id="submit" name="submit" value="Kayıt Ol" /> <br>
</form>

<?php
    if (isset($_POST['submit'])) {
        $code = $kullanici->kayitOl($_POST['username'], $_POST['password'], $_POST['email']);

        switch ($code) {
            case 400: {
                echo "Kullanıcı adı 4 ile 15 karakter arasında olmak zorundadır.";
                break;
            }
            case 401: {
                echo "Parolanız 8 karakterten az olamaz.";
                break;
            }
            case 402: {
                echo "Girmiş olduğunuz e-posta bir e-posta değil.";
                break;
            }
            case 403: {
                echo "İsteğiniz işlenirken bir hata oluştu. Lütfen daha sonra tekrar deneyiniz.";
                break;
            }
            case 405: {
                echo "Kullanıcı adı veya e-posta kullanılıyor.";
                break;
            }
            default: {
                echo "Kayıt işlemi başarıyla tamamlandı!";
            }
        }
    }






















