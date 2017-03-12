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
    return print ("Zaten giriş yapılmış, giriş yapmaya gerek yoktur.");

?>

<form action="girisyap.php" method="post">
    <label for="username">Kullanıcı Adı:</label>
    <input type="text" name="username" id="username" /> <br>

    <label for="password">Parola</label>
    <input type="password" name="password" id="password"> <br>

    <input type="submit" id="submit" name="submit" value="Giriş Yap" /> <br>
</form>


<?php
if (isset($_POST['submit'])) {
    $code = $kullanici->girisYap($_POST['username'], $_POST['password']);

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
            echo "Kullanıcı adı veya parola hatalıdır.";
            break;
        }
        default: {
            echo "Giriş işlemi başarıyla tamamlandı!";
        }
    }
}
