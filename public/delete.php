<?php
require_once('../private/config.php');
require_once('./PostMethod.php');
$postMethod = new PostMethod();

$list = $postMethod->delete();
