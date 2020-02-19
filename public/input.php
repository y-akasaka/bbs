<?php
// GETでアクセスされた場合は画面を表示
// require_once('vendor/bin/input.php');
echo '<!DOCTYPE html>
    <head>
        <title>掲示板</title>
    </head>
    <body>
        <form action="./save.php" method="post">
        ニックネーム:<input type="text" name="name">
        タイトル:<input type="text" name="title">
        本文:<input type="text" name="content">
        <button type="submit">送信</button>
        </form>
    </body>
    </html>';