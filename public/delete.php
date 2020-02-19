<?php
require_once('v../endor/autoload.php');
use bbs\PostMethod;

$postMethod = new PostMethod();
$fileName = $_POST['fileName'];

$list = $postMethod->delete($fileName);
header("Location: {$url}/input.php");
