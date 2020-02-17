<?php
require_once('../private/config.php');
require_once('./PostMethod.php');
$postMethod = new PostMethod();

$list = $postMethod->list();
foreach ($list as $item) {
    echo "{$item->name}<br/>";
    echo "{$item->title}<br/>";
    echo "{$item->content}";
    echo '<form action="" method="POST"><button type="submit">削除</button></form>';
    echo '----------------------------------------<br/>';
}
