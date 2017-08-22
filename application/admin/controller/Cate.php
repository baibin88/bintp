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
        if(request()->isPost()){
            $data = input('post.');
            //判断栏目名不为空
            if(isset($dta['cate_name']) || !$data['cate_name']){
               return json(array('msg'=>'202','text'=>'栏目名称不能为空'));
            }
            //插入数据
            $add = db('cate')->insert($data);
            if($add){
                return json(array('msg'=>'200','text'=>'添加栏目成功'));
            }else{
                return json(array('msg'=>'201','text'=>'添加栏目失败'));
            }
        }
        //栏目获取
        $cateRes = db('cate')->select();
        $this->assign('cateRes',$cateRes);
        return view();
    }

}