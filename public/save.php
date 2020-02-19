<?php
require_once('../vendor/autoload.php');
use bbs\PostMethod;
use PostMethod;

date_default_timezone_set('Asia/Tokyo');
$fileName = date('Y-m-d H:i:s');
$name = $_POST['name'];
$title = $_POST['title'];
$content = $_POST['content'];

$postMethod = new PostMethod;
$post = new Post;
$post->name = $name;
$post->title = $title;
$post->content = $content;
$postMethod->save($post);

echo '<!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>
        <p>書き込み内容を保存しました</p>
    </body>
    </html>';


