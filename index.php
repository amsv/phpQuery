<?php
header('Content-type: text/html; charset=utf-8');
$url = 'https://privatbank.ua/';
$file = file_get_contents($url);
require 'phpQuery.php';

/*$pattern = '#<table id="course-table-pb.+?</table>#s';
preg_match($pattern, $file, $matches);
print_r($matches);*/

$doc = phpQuery::newDocument($file);
//$tbl = $doc->find('#course-table-pb');
$tr = $doc->find('#selectByPB tr:eq(2) td:eq(1)')->text();
echo $tr;
//
?>