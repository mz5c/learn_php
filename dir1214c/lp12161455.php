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
$letters = array('💥', '🍃', '🐨', '🔴', '🌟', '🔥', '🍈', '💋', '🐶', '🍁', '🍒', '🎭', '📢', '🍂', '😱', '🅾', '🌼', '🔜', '💟', '💓', '🌺', '🈲', '🍄', '🍇', '🌻', '💇', '😂', '💠', '🌿', '💕', '👶', '💦', '🌛', '🌸', '🍎', '👣', '👑', '👵', '👀', '🎁', '🚘', '👾', '🍀', '🚥', '🚧', '📆', '⚠', '👉', '👍', '🈂', '🌞', '🎀', '👫', '😃', '👩', '🍑', '🔍', '🚙', '💬', '🍮', '📹', '🎵', '🎄', '🐳', '🚌', '👯', '🔔', '🍡', '📚', '🎉', '🚕', '🔩', '🔵', '💌', '🍰', '🔮', '🙏', '🌷', '💘', '🚑', '🎨', '🚨', '🌕', '🍖', '🎅', '😁', '👸', '💀', '🎪', '🐮', '📜', '🎮', '🎈', '😔', '👼', '💑', '😻', '👻', '📖', '📷', '🍊', '🐠', '🐌', '😨', '😍', '🌽', '🌹', '🌴', '💄', '🎯', '🍲', '💪', '💰', '😠', '🎂', '🎥', '💐', '🍟', '😅', '🏭', '🏧', '💳', '🐾', '🌀', '📋', '📝', '🌱', '💯', '🚫', '📱', '💃', '🆕', '🆘', '🎶', '😘', '🔞', '🔑', '💗', '🔰', '👄', '🎐', '💞', '💆', '👮', '🔧', '🍭', '👪', '😳', '😏', '📳', '💎', '🚦', '🌈', '💝', '💫', '💖', '🔋', '💢', '😭', '💉', '🀄', '🍓', '📍', '📛', '🔱', '🙀', '🍵', '😲', '👨', '👙', '🍠', '🌰', '🌙', '🔯', '🙈', '👳', '📣', '💏', '👅', '👦', '🎋', '📌', '👰', '🌂', '👠', '👧', '🌜', '🚩', '😷', '🅰', '🎦', '🍳', '🎬', '🍨', '👋', '😇', '💲', '🚺', '🌵', '😉', '📲', '😄', '🍥', '🚗', '🎱', '😩', '💔', '🚓', '🔹', '😆', '🔌', '🌋', '👿', '😤', '🍜', '👏', '🏡', '🎊', '😞', '😌', '🌏', '🍅', '😹', '😡', '😜', '🙇', '🔷', '🍉', '🐂', '🍗', '🙋', '💩', '🎏', '🏩', '🙌', '🏮', '📅', '🔘', '💍', '🍣', '🌓', '😝', '🎧', '😚', '🔶', '👐', '💮', '🏃', '🐵', '💊', '📨', '😥', '🐲', '💹', '🍏', '🍆', '🈷', '🆚', '🔺', '🐈', '🍔', '💡', '🙅');
$fruit   = array('');
$text    = '🍀告诉孩子，这就是';
$output  = str_replace($letters, $fruit, $text);
echo $output;echo '<br>';

function deletteSpecialChar($str){
    $list = array('💥', '🍃', '🐨', '🔴', '🌟', '🔥', '🍈', '💋', '🐶', '🍁', '🍒', '🎭', '📢', '🍂', '😱', '🅾', '🌼', '🔜', '💟', '💓', '🌺', '🈲', '🍄', '🍇', '🌻', '💇', '😂', '💠', '🌿', '💕', '👶', '💦', '🌛', '🌸', '🍎', '👣', '👑', '👵', '👀', '🎁', '🚘', '👾', '🍀', '🚥', '🚧', '📆', '⚠', '👉', '👍', '🈂', '🌞', '🎀', '👫', '😃', '👩', '🍑', '🔍', '🚙', '💬', '🍮', '📹', '🎵', '🎄', '🐳', '🚌', '👯', '🔔', '🍡', '📚', '🎉', '🚕', '🔩', '🔵', '💌', '🍰', '🔮', '🙏', '🌷', '💘', '🚑', '🎨', '🚨', '🌕', '🍖', '🎅', '😁', '👸', '💀', '🎪', '🐮', '📜', '🎮', '🎈', '😔', '👼', '💑', '😻', '👻', '📖', '📷', '🍊', '🐠', '🐌', '😨', '😍', '🌽', '🌹', '🌴', '💄', '🎯', '🍲', '💪', '💰', '😠', '🎂', '🎥', '💐', '🍟', '😅', '🏭', '🏧', '💳', '🐾', '🌀', '📋', '📝', '🌱', '💯', '🚫', '📱', '💃', '🆕', '🆘', '🎶', '😘', '🔞', '🔑', '💗', '🔰', '👄', '🎐', '💞', '💆', '👮', '🔧', '🍭', '👪', '😳', '😏', '📳', '💎', '🚦', '🌈', '💝', '💫', '💖', '🔋', '💢', '😭', '💉', '🀄', '🍓', '📍', '📛', '🔱', '🙀', '🍵', '😲', '👨', '👙', '🍠', '🌰', '🌙', '🔯', '🙈', '👳', '📣', '💏', '👅', '👦', '🎋', '📌', '👰', '🌂', '👠', '👧', '🌜', '🚩', '😷', '🅰', '🎦', '🍳', '🎬', '🍨', '👋', '😇', '💲', '🚺', '🌵', '😉', '📲', '😄', '🍥', '🚗', '🎱', '😩', '💔', '🚓', '🔹', '😆', '🔌', '🌋', '👿', '😤', '🍜', '👏', '🏡', '🎊', '😞', '😌', '🌏', '🍅', '😹', '😡', '😜', '🙇', '🔷', '🍉', '🐂', '🍗', '🙋', '💩', '🎏', '🏩', '🙌', '🏮', '📅', '🔘', '💍', '🍣', '🌓', '😝', '🎧', '😚', '🔶', '👐', '💮', '🏃', '🐵', '💊', '📨', '😥', '🐲', '💹', '🍏', '🍆', '🈷', '🆚', '🔺', '🐈', '🍔', '💡', '🙅');
    $replace = array('');
    $output = str_replace($list, $replace, $str);
    return $output;
}
$str = "🍒姑娘一开口，和尚都醉了";
echo deletteSpecialChar($str);
if(date('Y-m-d H:i:s') >= date('Y-m-d').' 02:00:00'){
    echo date('Y-m-d');
}