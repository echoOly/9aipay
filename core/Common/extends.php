<?php

/**
 * Think 用户自定义公共函数库
 * @category   Think
 * @package  Common
 * @author   yptang <yptangecho@163.com>
 */

/**
 * 截取字符长度
 */
function getShort($str, $length = 40, $ext = '...') {
    $str    =   htmlspecialchars($str);
    $str    =   strip_tags($str);
    $str    =   htmlspecialchars_decode($str);
    $strlenth   =   0;
    $out        =   '';
    preg_match_all("/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/", $str, $match);
    foreach($match[0] as $v){
        preg_match("/[\xe0-\xef][\x80-\xbf]{2}/",$v, $matchs);
        if(!empty($matchs[0])){
            $strlenth   +=  1;
        }elseif(is_numeric($v)){
            $strlenth   +=  0.545;
        }else{
            $strlenth   +=  0.475;
        }

        if ($strlenth > $length) {
            $output .= $ext;
            break;
        }

        $output .=  $v;
    }
    return $output;
}
