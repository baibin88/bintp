<?php
namespace app\admin\model;
use think\Model;
class Cate extends Model
{

    public function  catetree()
    {
        $cateRes = $this->order('sort desc')->select();
        return $this->cateSort($cateRes);

    }
    /**
     * [cateSort 进行排序]
     * @param  [type]  $cateRes   [传递过的栏目数据]
     * @param  [type]  $pid   [上级栏目ID 默认值0]
     * @param  integer $level [级别 默认值 0]
     * @return [type]         [description]
     */
    public function cateSort($cateRes,$pid=0,$level=0)
    {
        static $arr = array();
        foreach ($cateRes as $key => $value) {
            if($value['pid'] == $pid){
                $value['level'] = $level;
                $arr[] = $value;
                //进行递归
                $this->cateSort($cateRes,$value['id'],$level+1);
            }
        }
        return $arr;
    }
    //获取子栏目ID
    public function cateDelId($cateid)
    {
        $data = db('cate')->field('id,pid')->select();
        return $this->_cateDelId($data,$cateid);
    }

    public function _cateDelId($data,$cateid)
    {
        static $arr = array();
        foreach ($data as $key => $value) {
            if($value['pid'] == $cateid){
                $arr[] = $value['id'];
                //进行递归
                $this->_cateDelId($data,$value['id']);
            }
        }
        return $arr;
    }
    //批量删除
    public function pdel($srt)
    {
        foreach ($srt as $key => $value) {
                $info[] = $this->cateDelId($value);
                $info[] = $value;
            }
            $info_array = array();
            foreach ($info as $k => $v) {
              if(is_array($v)){
                foreach ($v as $key => $value) {
                    $info_array[] = $value;
                }
              }else{
                $info_array[] = $v;
              }
            }
            $info_array= array_unique($info_array);
            // p($info_array);die;
            $obj = $this::destroy($info_array);

            return $obj;
    }

}