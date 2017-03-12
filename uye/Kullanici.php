<?php

/**
 * Created by PhpStorm.
 * User: cezvedici
 * Date: 12.03.2017
 * Time: 13:37
 */
class Kullanici
{

    /*
     * Kullanıcının giriş yapıp yapmadığı bilgisini dönderen fonksiyon
     */
    function girisYapildiMi() {

    }

    /**
     * Verilen kullanıcı adı ve şifre ile giriş yapma işlemini
     * sağlar. Bir sonuç kodu dönderir.
     * @param $username : kullanıcı adı
     * @param $password : şifre
     */
    function girisYap($username, $password) {

    }

    /*
     * Kullanıcının oturumunu sonlandırır.
     *
     */
    function cikisYap() {

    }

    /*
     * Kayıt olma fonksiyonudur.
     */
    function kayitOl($username, $password, $email) {
        // $pdo değişkenini globalden bulması için böyle bir yol izledik.
        global $pdo;

        // strlen - bir metnin uzunluğunu dönderir.

        if (strlen($username) < 4 && strlen($username) > 15)
            return 400;     // kullanıcı adı 4 ile 15 karakter arasında değil.

        if (strlen($password) < 8)
            return 401;     // parola 8 karakterden az olamaz.

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            return 402;

        $sql = $pdo->prepare("SELECT id FROM kullanicilar WHERE username = :username OR email = :email");
        $sql->execute(array(
            ":username" => $username,
            ":email" => $email
        ));

        if ($sql->rowCount() != 0)
            return 405;

        $sql = $pdo->prepare("INSERT INTO `kullanicilar` (username, password, email) VALUES (:username, :password, :email);");
        $sql->execute(array(
            ":username" => $username,
            ":password" => $password,
            ":email" => $email
        ));

        if ($sql->rowCount() == 0)
            return 403;

        return 200;

    }























}