<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\controller\Common;
class Conf extends Common
{
    /**
     * 配置列表
     */
    public function conflist()
    {
        if(request()->isPost()){
            $data = input('post.');
            $ennameArr = db('conf')->column('enname');
            $confArr = array();
           //附件类类型处理
            $imgcolumn = db('conf')->where('dt_type',6)->column('enname');
            foreach ($data as $k=>$v){
               $confArr[] = $k;
               if(is_array($v)){
                   $v = implode(',',$v);
               }
               db('conf')->where(array('enname'=>$k))->update(array('value'=>$v));
            }
            foreach ($ennameArr as $k=>$v ){
               if(!in_array($v,$confArr) && !in_array($v,$imgcolumn)){
                   db('conf')->where(array('enname'=>$v))->update(array('value'=>''));
               }
            }

            foreach ($imgcolumn as $k=>$v){
                if($_FILES[$v]['tmp_name'] !=''){
                    $file = request()->file($v);
                    $info = $file->move(ROOT_PATH . 'public/static/admin/uploads');
                    $imgSrc = $info->getSaveName();
                    if($imgSrc){
                        db('conf')->where('enname',$v)->update(['value'=>$imgSrc]);
                    }

                }
            }
//            p($imgcolumn);die;
           $this->success('修改成功','conflist');
        }
        $confRes = db('conf')->select();
        $this->assign('confRes',$confRes);
        return view();
    }

    /**
     * 添加
     */
    public  function add()
    {
        if(request()->isPost()){
            $data = input('post.');
            $data['uptime'] = time();
            $validate  = validate('conf');
            if(!$validate->scene('add')->check($data)){
               $this->error($validate->getError());die;
            }
            $add = db('conf')->insert($data);
            if($add){
                $this->success('添加配置项成功！','lst');
            }else{
                $this->error('添加配置项失败！');
            }
        }
        return $this->fetch();
    }

    /**
     * 编辑
     */
    public function edit($id)
    {
        if(request()->isPost()){
            $info  = input('post.');
            $validate = validate('conf');
            if(!$validate->scene('edit')->check($info)){
                $this->error($validate->getError());
            }
            $save = db('conf')->update($info);
            if($save){
                $this->success('修改成功','lst');
            }else{
                $this->error('修改失败');
            }
        }
        $data = db('conf')->find($id);
        $this->assign('data',$data);
        return view();
    }
    public function lst()
    {
        $confRes = db('conf')->field('id,cnname,enname,value,values')->paginate(6);
        $this->assign('confRes',$confRes);
        return view();
    }

    /**
     * 删除成功
     */
    public function  del()
    {
        $id = input('id');
        $data = db('conf')->delete($id);
        if($data){
            $this->success('删除配置成功','lst');

        }else{
            $this->error('删除配置项失败');
        }
    }


}