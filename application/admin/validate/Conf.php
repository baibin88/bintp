<?php
namespace app\admin\validate;
use think\Validate;


class Conf extends Validate
{
    protected $rule =[
        'cnname' =>'require|max:60|unique:conf',
        'enname' =>'require|max:60|unique:conf',
        'dt_type' =>'require|number',
        'cf_type' =>'require|number',
    ];

    protected $message = [
        'cnname.require'  =>'中文名称不能为空！',
        'cnname.unique'  =>'中文名称不能重复！',
        'enname.require'  =>'英文名称不能为空！',
        'enname.unique'  =>'英文名称不能重复！',
        'dt_type.require' =>'配置类型不能为空',
        'dt_type.number' =>'配置类型必须是数据类型',

    ];

    protected $scene = [
        'add' => ['cnname','enname','dt_type','cf_type'],
        'edit' => ['cnname','enname','dt_type','cf_type'],
      ];
}