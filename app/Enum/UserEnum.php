<?php
namespace App\Enum;


class UserEnum{

    //用户状态
    const STATUS_OK =   1;      //正常状态

    //用户来源
    const FROM_SITE =   1;      //本站
    const FROM_QQ   =   2;      //QQ
    const FROM_TWEIBO   =   3;  //腾讯微博
    const FROM_SWEIBO   =   4;  //新浪微博
    const FROM_BAIDU    =   5;  //百度
    const FROM_TAOBAO   =   6;  //淘宝

    //性别
    const SEX_FEMALE    =   0;  //女
    const SEX_MALE      =   1;  //男
    const SEX_UNKNOWN   =   2;  //未知|保密

    //Token
    const TOKEN_TYPE_EMAIL  =   1;  //邮箱验证
    const TOKEN_TYPE_MOBILE =   2;  //手机号验证
    const TOKEN_TYPE_UPPWD  =   3;  //修改密码



}