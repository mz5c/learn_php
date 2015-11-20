<?php
/* //获取openid&ext
 public function getOpenid($page=1) {
    $url = "http://weixin.sogou.com/weixin?query=".urlencode($this->name)."&type=1&page=".$page;
    $res = $this->https_request($url);
    $matchOpenid = array();$openids=array();
    preg_match_all('|<div class="wx-rb bg-blue wx-rb_v1 _item" href="/gzh\?openid=([\S]+)&amp;ext=([\S]+)" target="_blank"|', $res, $matchOpenid);
    preg_match_all('|<span>微信号：([\S]*)<\/span>|', $res, $openids);
    foreach($openids[1] as $k=>$v){
        if($this->openid==trim($v)){
            $ret=array('openid'=>$matchOpenid[1][$k],'ext'=>$matchOpenid[2][$k]); 
            return $ret;
        }
    }  
} */
$res = <<<eof
abcdefg
abefdaa
edabeab
abd
abcdd
eof;
$match = array();
preg_match_all('|ab(c)?(d)*|',$res,$match);
echo '<xmp>';var_dump($match);echo '</xmp>';