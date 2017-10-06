<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use think\console\command\make\Model;

class Cate extends Common
{
    public  function index()
    {
        $cateRes = model('cate')->catetree();
        $this->assign('cateRes',$cateRes);
        return view();
    }
    /**
     * [upimg 栏目图片上传]
     * @return [type] [description]
     */
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
    /**
     * [add 增加数据]
     */
    public function add()
    {
        if(request()->isPost()){
            $data = input('post.');
            //验证
            $validate  = validate('cate');
            if(!$validate->scene('add')->check($data)){
                return json(array('msg'=>'202','text'=>$validate->getError()));
            }

            //判断栏目名不为空
            if(isset($dta['cate_name']) || !$data['cate_name']){
               return json(array('msg'=>'202','text'=>'栏目名称不能为空'));
            }

            if($data['id']){
                return $this->GetSave($data);
            }else{
                $add = db('cate')->insert($data);

            }
            //插入数据
            if($add){
                return json(array('msg'=>'200','text'=>'添加栏目成功'));
            }else{
                return json(array('msg'=>'201','text'=>'添加栏目失败'));
            }
        }
        //栏目获取
        $cateRes = model('cate')->catetree();

        $cateid = input('cate_id');
        $this->assign(array(
            'cateRes'=>$cateRes,
            'cateid' =>$cateid,
            ));
        return view();
    }
    /**
     * [cateStatus 栏目状态]
     * @return [type] [获取ajax传递过来id 进行更改状态  0.隐藏 1.显示 ]
     */
    public function cateStatus()
    {
        if(request()->isAjax()){
            $cateid = input('cateid');
            $data = db('cate')->field('status')->where(array('id'=>$cateid))->find();
            $status = $data['status'];
            if($status ==1){
                $data['status'] = '0';
                db('cate')->where(array('id'=>$cateid))->update($data);
                return json(array('msg'=>'200','text'=>'隐藏成功'));
            }else{
                $data['status'] = '1';
                db('cate')->where(array('id'=>$cateid))->update($data);
                return json(array('msg'=>'201','text'=>'显示成功'));
            }
        }else{
            return json(array('msg'=>'202','text'=>'访问方式错误'));
        }
    }
    /**
     * [cateSort 栏目进行排序]
     * @return [type] [description]
     */
    public function cateSort()
    {
        if(request()->isAjax()){
            $sort = input('sort');
            $cateid = input('id');
            if(!is_numeric($cateid) || !$cateid || !is_numeric($sort) || !$sort){
                return json(array('msg'=>'202','text'=>'非法ID或非法数字'));
            }
            $info['sort'] = $sort;

            $data = db('cate')->where(array('id'=>$cateid))->update($info);
            if($data){
                 return json(array('msg'=>'200','text'=>'排序成功'));
            }else{
                return json(array('msg'=>'201','text'=>'排序失败'));
            }

        }else{
            return json(array('msg'=>'202','text'=>'访问方式错误'));
        }
    }
    /**
     * [cateDel 单ID删除]
     * @return [type] [description]
     */
    public function cateDel()
    {
        if(request()->isAjax()){
            $cateid = input('cateid');
            $srt = input('srt');
            $srt = json_decode($srt);
            if($srt){
                $info = model('cate')->pdel($srt);
                if($info){
                    return json(array('msg'=>'200','text'=>'删除成功'));
                }else{
                    return json(array('msg'=>'201','text'=>'删除失败'));
                }
            }
            $data = model('cate')->cateDelId($cateid);
            $data[] = $cateid;
            $del = db('cate')->delete($data);
            if($del){
                return json(array('msg'=>'200','text'=>'删除成功'));
            }else{
                return json(array('msg'=>'202','text'=>'删除失败'));
            }
        }else{
            return json(array('msg'=>'202','text'=>'访问方式错误'));
        }
    }

    /**
     * 编辑
     * @return \think\response\View
     */
    public function edit()
    {

        $cateid = input('cateid');
        $cateRes = model('cate')->catetree();
        $cates = db('cate')->find($cateid);
//        p($cates);die;
        $this->assign(array(
             'cateRes'=>$cateRes,
            'cates' =>$cates,
            ));

        return view();
    }

    /**
     * 更新数据
     * @param $data 传输数据
     * @return \think\response\Json
     */
    public function  GetSave($data)
    {
        $list =array();
        $validate  = validate('cate');
        foreach ($data as $k =>$v){
            $list[] =$k;
        }
        if(!in_array('status',$list)){
            $data['status'] = '1';
        }
        $id = $data['id'];
        unset($data['id']);
        $data =db('cate')->where(array('id'=>$id))->update($data);
        if($data !== false){
            return json (array('msg'=>'200','text'=>'编辑成功'));

        }else{
            return json (array('msg'=>'202','text'=>'编辑失败'));
        }
    }

    /**
     * 删除栏目图片
     * @return \think\response\Json
     */
    public function delimg()
    {
        $imgurl = input('imgurl');
        $id = input('id');
        if($id){
            db('cate')->where('id',$id)->setField('img','');
        }
        $imgurl = ADMINIMG.$imgurl;
        $src = unlink($imgurl);
        if($src){
            return json(array('msg'=>'200','text'=>'图片文件撤销成功'));
        }else{
            return json(array('msg'=>'201','text'=>'图片文件撤销成功'));
        }
    }

    /**
     *  栏目收缩功能
     * @return \think\response\Json
     */
    public function CateOpen()
    {
        if(request()->isAjax()) {
            $id = input('id');
            $open = model('cate')->cateDelId($id);
            if ($open) {
                return json(array('msg' => '200', 'text' => $open));
            } else {
                return json(array('msg' => '201', 'text' => '无分类'));
            }
        }else{
            return json(array('msg'=>'202','text'=>'访问方式错误'));
        }

    }

}