<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/15
 * Time: 10:44
 */

function getTaxfee($opt, $price) {
    $tax = 0;
    switch($opt){
        case 0://personal
            if($price<800) $total = $price;
            else if($price<=3360) $total = round(($price-800)/0.8+800,2);
            else if($price<=21000) $total = round($price*0.8/0.84/0.8,2);
            else if($price<=49500) $total = round(($price-2000)*0.8/0.76/0.8,2);
            else $total = round(($price-7000)*0.8/0.68/0.8,2);
            $tax = round($total - $price);
            break;
        case 1://common
            $tax = round($price*0.1);
            break;
        case 2://special for ad
            $tax = 0;
            break;
        case 3://special for service
            $tax = round($price*0.06);
            break;
        default:;
    }
    return $tax;
}

echo getTaxfee(1,1200);die;

$a = array('💥', '🍃', '🐨', '🔴', '🌟', '🔥', '🍈', '💋', '🐶', '🍁', '🍒', '🎭', '📢', '🍂', '😱', '🅾', '🌼', '🔜', '💟', '💓', '🌺', '🈲', '🍄', '🍇', '🌻', '💇', '😂', '💠', '🌿', '💕', '👶', '💦', '🌛', '🌸', '🍎', '👣', '👑', '👵', '👀', '🎁', '🚘', '👾', '🍀', '🚥', '🚧', '📆', '⚠', '👉', '👍', '🈂', '🌞', '🎀', '👫', '😃', '👩', '🍑', '🔍', '🚙', '💬', '🍮', '📹', '🎵', '🎄', '🐳', '🚌', '👯', '🔔', '🍡', '📚', '🎉', '🚕', '🔩', '🔵', '💌', '🍰', '🔮', '🙏', '🌷', '💘', '🚑', '🎨', '🚨', '🌕', '🍖', '🎅', '😁', '👸', '💀', '🎪', '🐮', '📜', '🎮', '🎈', '😔', '👼', '💑', '😻', '👻', '📖', '📷', '🍊', '🐠', '🐌', '😨', '😍', '🌽', '🌹', '🌴', '💄', '🎯', '🍲', '💪', '💰', '😠', '🎂', '🎥', '💐', '🍟', '😅', '🏭', '🏧', '💳', '🐾', '🌀', '📋', '📝', '🌱', '💯', '🚫', '📱', '💃', '🆕', '🆘', '🎶', '😘', '🔞', '🔑', '💗', '🔰', '👄', '🎐', '💞', '💆', '👮', '🔧', '🍭', '👪', '😳', '😏', '📳', '💎', '🚦', '🌈', '💝', '💫', '💖', '🔋', '💢', '😭', '💉', '🀄', '🍓', '📍', '📛', '🔱', '🙀', '🍵', '😲', '👨', '👙', '🍠', '🌰', '🌙', '🔯', '🙈', '👳', '📣', '💏', '👅', '👦', '🎋', '📌', '👰', '🌂', '👠', '👧', '🌜', '🚩', '😷', '🅰', '🎦', '🍳', '🎬', '🍨', '👋', '😇', '💲', '🚺', '🌵', '😉', '📲', '😄', '🍥', '🚗', '🎱', '😩', '💔', '🚓', '🔹', '😆', '🔌', '🌋', '👿', '😤', '🍜', '👏', '🏡', '🎊', '😞', '😌', '🌏', '🍅', '😹', '😡', '😜', '🙇', '🔷', '🍉', '🐂', '🍗', '🙋', '💩', '🎏', '🏩', '🙌');
echo count($a);die;
//https请求（支持GET和POST）
function https_request($url, $data = null) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    if (!empty($data)) {
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
}

$url = 'http://weixin.sogou.com/weixin?query=jkys2015&type=1&page=1';
//echo '<xmp>';var_dump(https_request($url));
$res = https_request($url);

$matchOpenid = array();$openids=array();
preg_match_all('|<div class="wx-rb bg-blue wx-rb_v1 _item" href="/gzh\?openid=([\S]+)&amp;ext=([\S]+)" target="_blank"|', $res, $matchOpenid);
echo '<xmp>';var_dump($matchOpenid);echo '<br>';
preg_match_all('|<label name="em_weixinhao">([\S]*)<\/label><\/span>|', $res, $openids);
echo '<xmp>';var_dump($openids);