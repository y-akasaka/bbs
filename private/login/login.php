<?php
require_once('../config.php');
echo "<!DOCTYPE html>
        <html>
        <head>
            <title>掲示板</title>
        </head>
        <body>
            <form action=\"./auth.php\" method=\"post\">
                ID:<input type=\"text\" name=\"id\">
                PW:<input type=\"text\" name=\"password\">
                <button type=\"submit\">ログイン</button>
            </form>
        </body>
        </html>";

//もし変数を埋め込むとなるとバックスラッシュを入れて文字列か変数か分けないといけないので
//その時はechoのすぐあとの括りのシングルをダブルに変更して、formタグの中身とかのタグのダブルクォートの前にバックスラッシュ




