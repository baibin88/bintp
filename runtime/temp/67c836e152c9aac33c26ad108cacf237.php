<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"/Users/yinbin/Code/bintp/public/../application/admin/view/conf/edit.htm";i:1498379628;s:75:"/Users/yinbin/Code/bintp/public/../application/admin/view/common/header.htm";i:1498214292;s:73:"/Users/yinbin/Code/bintp/public/../application/admin/view/common/left.htm";i:1503389303;}*/ ?>
<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>修改配置项</title>

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
                        <a href="javascript::">系统设置</a>
                    </li>
                    <li>
                        <a href="<?php echo url('lst'); ?>">配置管理</a>
                    </li>
                    <li class="active">修改配置项</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-header bordered-bottom bordered-blue">
                                <span class="widget-caption">新增配置</span>
                            </div>
                            <div class="widget-body">
                                <div id="horizontal-form">
                                    <form class="form-horizontal" role="form" action="" method="post">
                                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                        <div class="form-group">
                                            <label for="username" class="col-sm-2 control-label no-padding-right">中文名称</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="cnname" placeholder="" name="cnname" required="" type="text" value="<?php echo $data['cnname']; ?>">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="username" class="col-sm-2 control-label no-padding-right">英文名称</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="enname" placeholder="" name="enname" required="" type="text" value="<?php echo $data['enname']; ?>">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="group_id" class="col-sm-2 control-label no-padding-right">配置类型</label>
                                            <div class="col-sm-6">
                                                <select name="dt_type" style="width: 100%;">
                                                    <option  <?php if($data['dt_type'] == 1): ?> selected="selected"<?php endif; ?> value="1">单行文本框</option>
                                                    <option  <?php if($data['dt_type'] == 2): ?> selected="selected"<?php endif; ?> value="2">单选按钮</option>
                                                    <option  <?php if($data['dt_type'] == 3): ?> selected="selected"<?php endif; ?>  value="3">复选框</option>
                                                    <option  <?php if($data['dt_type'] == 4): ?> selected="selected"<?php endif; ?> value="4">下拉框</option>
                                                    <option  <?php if($data['dt_type'] == 5): ?> selected="selected"<?php endif; ?> value="5">文本域</option>
                                                    <option  <?php if($data['dt_type'] == 6): ?> selected="selected"<?php endif; ?> value="6">附件</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="group_id" class="col-sm-2 control-label no-padding-right">配置分类</label>
                                            <div class="col-sm-6">
                                                <select name="cf_type" style="width: 100%;">
                                                    <option <?php if($data['cf_type'] == 1): ?> selected="selected"<?php endif; ?> value="1">站点基本上</option>
                                                    <option <?php if($data['cf_type'] == 2): ?> selected="selected"<?php endif; ?> value="2">联系方式</option>
                                                    <option <?php if($data['cf_type'] == 3): ?> selected="selected"<?php endif; ?> value="3">SEO设置</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="username" class="col-sm-2 control-label no-padding-right">值/默认值</label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" name="value"><?php echo $data['value']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="username" class="col-sm-2 control-label no-padding-right">可选值</label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" name="values"><?php echo $data['values']; ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default">保存信息</button>
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
<script src="__ADMIN__/style/jquery_002.js"></script>
<script src="__ADMIN__/style/bootstrap.js"></script>
<script src="__ADMIN__/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="__ADMIN__/style/beyond.js"></script>



</body></html>