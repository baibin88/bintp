<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;

class Common extends controller{

    public function _initialize()
    {
        $request = Request::instance();
        $con = $request->controller();
        $this->assign('con',$con);

    }
}