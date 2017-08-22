<?php
namespace app\admin\controller;
use app\admin\controller\Common;
class Cate extends Common
{
    public  function index()
    {
        return view();
    }

    public function  upimg()
    {
        $file = request()->file('file');
        $info = $file->validate(['ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public/static/admin/uploads/cateimg');
        if($info){
            // 成功上传后 获取上传信息
            $img = $info->getSaveName();
            return json(array('msg'=>'200','img'=>$img));
        }else{
            // 上传失败获取错误信息
            $img = $file->getError();
            return json(array('msg'=>'201','img'=>$img));

        }
    }
    public function add()
    {
        return view();
    }

}