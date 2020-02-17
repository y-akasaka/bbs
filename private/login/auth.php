<?php
require_once('../config.php');
$id = $_POST['id'];
$password = $_POST['password'];

if ($id === 'id' && $password === 'password') {
    //書き込み画面へ遷移する
    header("Location: {$url}/input.php");
    exit;
} else {
    //もう一度ログイン画面を表示する
    header("Location: {$url}/login/login.php");
    exit;
}

//headerのLocationは正式なURLを入れないといけないからconfig.phpにdirとは別のurlの変数を用意すると良い