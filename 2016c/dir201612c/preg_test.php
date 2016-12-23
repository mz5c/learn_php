<?php
$data = file_get_contents('message.txt');
//preg_match_all("#\\$([\w]+)#", $data, $res);
//preg_match_all("#(1[3-9]\d{9})#", $data, $res);
//preg_match_all("#(<a[^>]+>)#", $data, $res);
//preg_match_all("#(0\d{2}-\d{8}|0\d{3}-\d{7})#", $data, $res);
//preg_match_all("#(\d{5}-\d{4}|\d{5})#", $data, $res);
//preg_match_all("#(\d{5}|\d{5}-\d{4})#", $data, $res);
//preg_match_all("#((\d{1,3}\.){3}\d{1,3})#", $data, $res);
//preg_match_all("#(((2[0-4]\d|25[0-5]|[01]?\d\d?)\.){3}(2[0-4]\d|25[0-5]|[01]?\d\d?))#", $data, $res);
//preg_match_all("#\b(?<Word>\w+)\b\s+\k<Word>\b\s+\k<Word>#", $data, $res);
//preg_match_all("#('|\")([\w]+)\\1#", "\"this is a 'string' \"", $res);
//$res = preg_replace("#\[url\](?<Word>\d\.gif)\[/url\]#", "xxx$1", "[url]1.gif[/url][url]2.gif[/url]");
//preg_match_all("#(?<=<div>)(.*)(?=</div>)#", "<div>hello</div>", $res);
preg_match_all("#<div>gg</div>#i", "<dIv>gG</div>", $res);

var_dump($res);