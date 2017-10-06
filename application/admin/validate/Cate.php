<?php
namespace app\admin\validate;
use think\Validate;


class Cate extends Validate
{
    protected $rule =[
        'model_id' =>'require|number',
        'pid' =>'require|number',
        'cate_name' =>'require|unique:cate',
        'cate_attr' =>'require|number',
    ];

    protected $message = [
        'cate_name.require'  =>'栏目名称不能为空！',
        'cate_name.unique'  =>'栏目名称不能重复！',
        'cate_attr.require'  =>'栏目属性不能为空！',
        'cate_attr.number'  =>'栏目属性必须是数字',
        'pid.require'  =>'上级栏目不能为空！',
        'pid.number'  =>'上级栏目ID必须是数字',
        'model_id.require'  =>'模型名称不能为空！',
        'model_id.number'  =>'模型ID必须是数字！',


    ];

    protected $scene = [
        'add' => ['model_id','pid','cate_name','cate_attr'],
        'edit' => ['model_id','pid','cate_name','cate_attr'],
    ];
}