<?php
require_once 'CloudsearchClient.php';
require_once 'CloudsearchDoc.php';
require_once 'CloudsearchIndex.php';
require_once 'CloudsearchSearch.php';

$access_key = "your access_key";
$secret = "your secret";
$host = "http://opensearch-cn-hangzhou.aliyuncs.com";//根据自己的应用区域选择API
$key_type = "aliyun";  //固定值，不必修改
$opts = array('host'=>$host, 'debug' => true);
$client = new CloudsearchClient($access_key,$secret,$opts,$key_type);

$app_name = "new_test";

$index_obj = new CloudsearchIndex($app_name,$client);
//$result = $index_obj->createByTemplateName("builtin_novel");
$result = $index_obj->status();
echo $result;die;
var_dump($result);die;

/*$doc_obj = new CloudsearchDoc($app_name,$client);
$docs_to_upload = array();
for ($i = 10; $i < 20; $i++){
    $item = array();
    //指定文档操作类型为：添加
    $item['cmd'] = 'ADD';
    //添加文档内容
    $item["fields"] = array("id" => $i + 1,
        "title" => "我是一条新文档的标题",
        "body" => "我是一条新文档的body",
        "url" => "http://opensearch-cn-hangzhou.aliyuncs.com",
        "create_timestamp" => time());
    $docs_to_upload[] = $item;
}
$json = json_encode($docs_to_upload);
echo $doc_obj->add($json,"main");
die;*/

// 实例化一个搜索类 search_obj
$search_obj = new CloudsearchSearch($client);
// 指定一个应用用于搜索
$search_obj->addIndex($app_name);
// 指定搜索关键词
$search_obj->setQueryString("default:'一条新文档'");
$search_obj->setStartHit(4);
$search_obj->setHits(10);
$search_obj->addSort('id', '-');
$search_obj->addFetchFields('id');
$search_obj->addFetchFields('title');
// 指定返回的搜索结果的格式为json
$search_obj->setFormat("json");
// 执行搜索，获取搜索结果
$json = $search_obj->search();
echo $json;die;