<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"/Users/yinbin/Code/bintp/public/../application/admin/view/cate/add.htm";i:1506181825;s:75:"/Users/yinbin/Code/bintp/public/../application/admin/view/common/header.htm";i:1498214292;s:73:"/Users/yinbin/Code/bintp/public/../application/admin/view/common/left.htm";i:1503389303;}*/ ?>
<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>ThinkPHP5.0</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__ADMIN__/style/bootstrap.css" rel="stylesheet">
    <link href="__ADMIN__/style/font-awesome.css" rel="stylesheet">
    <link href="__ADMIN__/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="__ADMIN__/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__ADMIN__/style/demo.css" rel="stylesheet">
    <link href="__ADMIN__/style/typicons.css" rel="stylesheet">
    <link href="__ADMIN__/style/animate.css" rel="stylesheet">
    <script src="__ADMIN__/style/jquery_002.js"></script>
    <script src="__ADMIN__/puls/ueditor/ueditor.config.js"></script>
    <script src="__ADMIN__/puls/ueditor/ueditor.all.min.js"></script>
    <script src="__ADMIN__/puls/ueditor/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
<!-- 头部 -->
<div class="navbar">
        <div class="navbar-inner">
            <div class="navbar-container">
                <!-- Navbar Barnd -->
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                                <img src="__ADMIN__/images/logo.png" alt="">
                            </small>
                    </a>
                </div>
                <!-- /Navbar Barnd -->
                <!-- Sidebar Collapse -->
                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="collapse-icon fa fa-bars"></i>
                </div>
                <!-- /Sidebar Collapse -->
                <!-- Account Area and Settings -->
                <div class="navbar-header pull-right">
                    <div class="navbar-account">
                        <ul class="account-area">
                            <li>
                                <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                    <div class="avatar" title="View your public profile">
                                        <img src="__ADMIN__/images/adam-jansen.jpg">
                                    </div>
                                    <section>
                                        <h2><span class="profile"><span>admin</span></span></h2>
                                    </section>
                                </a>
                                <!--Login Area Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                    <li class="username"><a>David Stevenson</a></li>
                                    <li class="dropdown-footer">
                                        <a href="/admin/user/logout.html">
                                                退出登录
                                            </a>
                                    </li>
                                    <li class="dropdown-footer">
                                        <a href="/admin/user/changePwd.html">
                                                修改密码
                                            </a>
                                    </li>
                                </ul>
                                <!--/Login Area Dropdown-->
                            </li>
                            <!-- /Account Area -->
                            <!--Note: notice that setting div must start right after account area list.
                                no space must be between these elements-->
                            <!-- Settings -->
                        </ul>
                    </div>
                </div>
                <!-- /Account Area and Settings -->
            </div>
        </div>
    </div>

<!-- /头部 -->

<div class="main-container container-fluid">
    <div class="page-container">
        <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
        <ul class="nav sidebar-menu">
            <!--Dashboard-->
            <?php if($con =='Conf'):?>
            <li class="open">
            <?php else:?>
            <li>
            <?php endif;?>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa f fa-gears"></i>
                    <span class="menu-text">系统设置</span>
                    <i class="menu-expand"></i>
                </a>
                <ul class="submenu">
                    <li>
                        <a href="<?php echo url('Conf/conflist'); ?>">
                            <span class="menu-text">
                                配置管理
                            </span>
                            <i class="menu-expand"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo url('Conf/lst'); ?>">
                            <span class="menu-text">
                                配置列表
                            </span>
                            <i class="menu-expand"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <?php if($con =='Cate'):?>
            <li class="open">
                <?php else:?>
            <li>
                <?php endif;?>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa f fa-folder"></i>
                    <span class="menu-text">栏目管理</span>
                    <i class="menu-expand"></i>
                </a>
                <ul class="submenu">
                    <li>
                        <a href="<?php echo url('Cate/index'); ?>">
                            <span class="menu-text">
                                栏目列表
                            </span>
                            <i class="menu-expand"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo url('Cate/add'); ?>">
                            <span class="menu-text">
                                栏目添加
                            </span>
                            <i class="menu-expand"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa fa-user"></i>
                    <span class="menu-text">管理员</span>
                    <i class="menu-expand"></i>
                </a>
                <ul class="submenu">
                    <li>
                        <a href="/admin/document/index.html">
                            <span class="menu-text">
                                管理列表                                    </span>
                            <i class="menu-expand"></i>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa fa-file-text"></i>
                    <span class="menu-text">文档</span>
                    <i class="menu-expand"></i>
                </a>
                <ul class="submenu">
                    <li>
                        <a href="/admin/document/index.html">
                            <span class="menu-text">
                                文章列表                                    </span>
                            <i class="menu-expand"></i>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">系统</span>
                    <i class="menu-expand"></i>
                </a>
                <ul class="submenu">
                    <li>
                        <a href="/admin/document/index.html">
                            <span class="menu-text">
                                配置                                   </span>
                            <i class="menu-expand"></i>
                        </a>
                    </li>
                </ul>
            </li>


        </ul>
    <!-- /Sidebar Menu -->
    </div>
        <!-- /Page Sidebar -->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <a href="<?php echo url('Index/index'); ?>">系统</a>
                    </li>
                    <li class="active"> <a href="<?php echo url('Cate/index'); ?>">栏目管理</a></li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->
            <div class="page-body">

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">

                            <div class="widget-body">
                                <div id="horizontal-form">
                                    <form class="form-horizontal" id="cat_add">
                                        <div class="tabbable">
                                            <ul class="nav nav-tabs tabs-flat" id="myTab11">
                                                <li class="active">
                                                    <a data-toggle="tab" href="#home11">
                                                        基本信息
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#profile11">
                                                        SEO信息
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#profile12">
                                                        栏目信息
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content tabs-flat">
                                                <div id="home11" class="tab-pane active">
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-2 control-label no-padding-right">所属模型</label>
                                                        <div class="col-sm-6">
                                                            <select name="model_id">
                                                                <option value="1">文章模型</option>
                                                                <option value="2">电影模型</option>
                                                            </select>
                                                        </div>
                                                        <p class="help-block col-sm-4 red">* 必填</p>
                                                    </div>
                                                     <div class="form-group">
                                                        <label for="username" class="col-sm-2 control-label no-padding-right">上级栏目</label>
                                                        <div class="col-sm-6">
                                                            <!--单行文本-->
                                                            <select name="pid">
                                                                <option value="0">顶级栏目</option>
                                                                <?php if(is_array($cateRes) || $cateRes instanceof \think\Collection || $cateRes instanceof \think\Paginator): $i = 0; $__LIST__ = $cateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                                                                    <option <?php if($cate['id'] == $cateid): ?> selected="selected" <?php endif; ?> value="<?php echo $cate['id']; ?>"><?php echo str_repeat('-',$cate['level']*4)?><?php echo $cate['cate_name']; ?></option>
                                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                                            </select>
                                                        </div>
                                                        <p class="help-block col-sm-4 red">* 必填</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-2 control-label no-padding-right">栏目名称</label>
                                                        <div class="col-sm-6">
                                                            <!--单行文本-->
                                                            <input class="form-control"  placeholder="" name="cate_name" type="text" value="">
                                                        </div>
                                                        <p class="help-block col-sm-4 red">* 必填</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-2 control-label no-padding-right">隐藏栏目</label>
                                                        <div class="col-sm-6" style="float: left; padding-left:10px;top: 6px;" >
                                                            <!--单行文本-->
                                                            <label >
                                                                <input value="0"  name="status" class="checkbox-slider colored-blue" type="checkbox">
                                                                <span class="text"></span>
                                                            </label>
                                                        </div>
                                                        <p class="help-block col-sm-4 red">* 必填</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-2 control-label no-padding-right">栏目图片</label>
                                                        <div class="col-sm-6" style="top: 6px;">
                                                            <!--单行文本-->
                                                            <input type="file" name="file" id="imgFile" value="" style="display:none"/>
                                                            <input type="button" value="图片上传" onclick="upload()">
                                                            <input type="hidden" name="img" value="" id="imgcat">
                                                        </div>
                                                    </div>
                                                     <div class="form-group" id="cateimgdiv" style="display: none;">
                                                        <label for="username" class="col-sm-2 control-label no-padding-right"></label>
                                                        <div class="col-sm-6" style="top: 6px;">
                                                            <label id="cateimg">

                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-2 control-label no-padding-right">栏目属性</label>
                                                        <div class="col-sm-6" style="top: 6px;">
                                                            <!--单行文本-->
                                                            <div class="radio" style="float: left; padding-left:10px ">
                                                                <label>
                                                                    <input name="cate_attr"  value="1" type="radio" checked="checked" >
                                                                    <span class="text"> 列表页栏目(可以发表文章)</span>
                                                                </label>
                                                            </div>
                                                            <div class="radio" style="float: left; padding-left:10px ">
                                                                <label>
                                                                    <input  name="cate_attr"  value="2"  type="radio" class="inverted" >
                                                                    <span class="text"> 封面频道栏目</span>
                                                                </label>
                                                            </div>
                                                              <div class="radio" style="float: left; padding-left:10px ">
                                                                <label>
                                                                    <input  name="cate_attr"  value="3"  type="radio" class="inverted" >
                                                                    <span class="text"> 外链栏目</span>
                                                                </label>
                                                            </div>

                                                        </div>
                                                        <p class="help-block col-sm-4 red">* 必填</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-2 control-label no-padding-right">列表页模板</label>
                                                        <div class="col-sm-6">
                                                            <!--单行文本-->
                                                            <input class="form-control"  placeholder="" name="list_tmp" type="text" value="">
                                                        </div>
                                                          <p class="help-block col-sm-4 red">* 必填</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-2 control-label no-padding-right">频道页模板</label>
                                                        <div class="col-sm-6">
                                                            <!--单行文本-->
                                                            <input class="form-control"  placeholder="" name="index_tmp" type="text" value="">
                                                        </div>
                                                        <p class="help-block col-sm-4 red">* 必填</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-2 control-label no-padding-right">内容页模板</label>
                                                        <div class="col-sm-6">
                                                            <!--单行文本-->
                                                            <input class="form-control"  placeholder="" name="article_tmp" type="text" value="">
                                                        </div>
                                                        <p class="help-block col-sm-4 red">* 必填</p>
                                                    </div>
                                                      <div class="form-group">
                                                        <label for="username" class="col-sm-2 control-label no-padding-right">外链地址</label>
                                                        <div class="col-sm-6">
                                                            <!--单行文本-->
                                                            <input class="form-control"  placeholder="" name="link" type="text" value="">
                                                        </div>
                                                          <p class="help-block col-sm-4 red">* 请用http://开头</p>
                                                    </div>

                                                </div>

                                                <div id="profile11" class="tab-pane">
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-2 control-label no-padding-right">栏目标题</label>
                                                        <div class="col-sm-6">
                                                            <!--单行文本-->
                                                            <input class="form-control"  placeholder="" name="title" type="text" value="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-2 control-label no-padding-right">栏目关键词</label>
                                                        <div class="col-sm-6">
                                                            <!--单行文本-->
                                                            <input class="form-control"  placeholder="" name="keywords" type="text" value="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="col-sm-2 control-label no-padding-right">栏目描述</label>
                                                        <div class="col-sm-6">
                                                            <!--单行文本-->
                                                            <textarea name="desc" class="form-control" id="" ></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="profile12" class="tab-pane">
                                                    <div class="col-lg-12 col-sm-12 col-xs-12">
                                                        <div class="widget flat radius-bordered">

                                                            <div class="widget-body">
                                                                <div class="widget-main no-padding">
                                                                    <textarea name="content" id="content" ></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="id" value="">
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="button" class="btn btn-default" onclick="cate_save_button()">保存信息</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- /Page Body -->
        </div>
        <!-- /Page Content -->
    </div>
</div>

<!--Basic Scripts-->
<script src="__ADMIN__/style/bootstrap.js"></script>
<script src="__ADMIN__/dialog/layer.js"></script>
<script src="__ADMIN__/dialog.js"></script>
<script src="__ADMIN__/style/common.js"></script>
<!--Beyond Scripts-->
<script src="__ADMIN__/style/beyond.js"></script>
<script>
    var SCOPE = {
        'upimg_url' : "<?php echo url('Cate/upimg'); ?>",
        'cateurl':"__ADMIN__",
        'cate_addurl' :"<?php echo url('Cate/add'); ?>",
        'cate_lsturl' :"<?php echo url('Cate/index'); ?>"
      }


</script>
<script>
    var ue = UE.getEditor('editor');
    UE.getEditor('content',{initialFrameWidth:1000,initialFrameHeight:400,});
</script>
</body></html>