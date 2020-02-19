<?php
require_once('../vendor/autoload.php');
use bbs\PostMethod;

$postMethod = new PostMethod();
$fileName = __FILE__;

$list = $postMethod->list();
foreach ($list as $item) {
    echo "{$item->name}<br/>";
    echo "{$item->title}<br/>";
    echo "{$item->content}";

    echo "<form action=\"./delete.php\" method=\"POST\">
    <input type=\"text\" name=\"fileName\" value=\"{$fileName}\">
    <button type=\"submit\">削除</button></form>";

    echo '----------------------------------------<br/>';
}
