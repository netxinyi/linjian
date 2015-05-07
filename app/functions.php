<?php

//自定义函数


//时间格式化
if(function_exists('format_date')){

    function format_date($time = NULL,$format='Y-m-d H:i:s'){
        is_null($time) AND $time = time();
        return date($format, $time);
    }
}