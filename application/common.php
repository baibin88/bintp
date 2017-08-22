<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
/**
 * 自定义一些常见的方法
 */
/**
 * 设置当前页面的编码
 * param string $code 当前网页的编码，默认是urf8;
 */
function BM($code='utf-8'){
    header("Content-type:text/html;charset=".$code);
}
/**打印变量
 * @param null $param
 * @param null $type 不为空就连类型一起打印输出
 */
function p($param=null,$type=null) {
    BM();
    echo '<pre>';
    if(empty($type)){
        print_r($param);
    }else{
        var_dump($param);
    }
    echo '</pre>';
}