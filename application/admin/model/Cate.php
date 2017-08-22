<?php
namespace app\admin\model;
use think\Model;
class Cate extends Model
{

    public function  catetree()
    {
        $cateRes = $this->order('id desc')->select();
        return $this->cateSort($cateRes);

    }
    /**
     * [cateSort 进行排序]
     * @param  [type]  $cateRes   [传递过的栏目数据]
     * @param  [type]  $pid   [上级栏目ID 默认值0]
     * @param  integer $level [级别 默认值 1]
     * @return [type]         [description]
     */
    public function cateSort($cateRes,$pid=0,$level=1)
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

}