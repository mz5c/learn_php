<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/16
 * Time: 14:55
 */
echo 'hello "world"'.'<br>';
$str = "🌟壕！新娘不断戴金手镯项链 浑身挂满引围观";
echo ltrim($str,"💥🍃🐨🔴💌").'<br>';
$letters = array('💥', '🍃', '🐨', '🔴', '🌟', '🔥', '🍈', '💋', '🐶', '🍁', '🍒', '🎭', '📢', '🍂', '😱', '🅾', '🌼', '🔜', '💟', '💓', '🌺', '🈲', '🍄', '🍇', '🌻', '💇', '😂', '💠', '🌿', '💕', '👶', '💦', '🌛', '🌸', '🍎', '👣', '👑', '👵', '👀', '🎁', '🚘', '👾', '🍀');
$fruit   = array('');
$text    = '🍀比起吃什么，怎么';
$output  = str_replace($letters, $fruit, $text);
echo $output;echo '<br>';

function deletteSpecialChar($str){
    $list = array('💥', '🍃', '🐨', '🔴', '🌟', '🔥', '🍈', '💋', '🐶', '🍁', '🍒', '🎭', '📢', '🍂', '😱', '🅾', '🌼', '🔜', '💟', '💓', '🌺', '🈲', '🍄', '🍇', '🌻', '💇', '😂', '💠', '🌿', '💕', '👶', '💦', '🌛', '🌸', '🍎', '👣', '👑', '👵', '👀', '🎁', '🚘', '👾', '🍀');
    $replace = array('');
    $output = str_replace($list, $replace, $str);
    return $output;
}
$str = "🌟壕！新🍈娘不断戴金🔥手镯项链 浑身挂🌿满引围观";
echo $str.'<br>';
echo deletteSpecialChar($str);