<?php
namespace App\Enum;


class ProductEnum{

    //产品状态
    const STATUS_SALING = 1;  //正常状态-在售
    const STATUS_STOP = 2;  //已下架
    const STATUS_PRIVATE = 3; //私有产品
    const STATUS_SALED = 4;     //已售出

    public static $status = array(
        self::STATUS_SALED,
        self::STATUS_SALING,
        self::STATUS_PRIVATE,
        self::STATUS_STOP
    );

    public static $status_lang = array(
        self::STATUS_SALING =>  '已上架',
        self::STATUS_STOP   =>  '已下架',
        self::STATUS_SALED  =>  '已售出',
        self::STATUS_PRIVATE    =>'私有产品',

    );

    //产品属性
    //录入方式
    const ATTR_INPUT    =   1;  //单行输入框
    const ATTR_SELECT   =   2;  //单选下拉菜单
    const ATTR_CHECKBOX =   3; //复选框
    const ATTR_RADIO    =   4;  //单选框



}