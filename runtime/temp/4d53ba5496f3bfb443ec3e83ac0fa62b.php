<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"/Users/yinbin/Code/bintp/public/../application/admin/view/conf/conflist.htm";i:1500819790;s:75:"/Users/yinbin/Code/bintp/public/../application/admin/view/common/header.htm";i:1498214292;s:73:"/Users/yinbin/Code/bintp/public/../application/admin/view/common/left.htm";i:1499956419;}*/ ?>
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
                                配置列表
                            </span>
                            <i class="menu-expand"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo url('Conf/lst'); ?>">
                            <span class="menu-text">
                                配置管理                                    </span>
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
                        <a href="javascript:;">系统设置</a>
                    </li>
                    <li>
                        <a href="javascript:;">设置列表</a>
                    </li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <!--<div class="widget">-->
                        <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                            <div class="widget-body">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs tabs-flat" id="myTab11">
                                        <li class="active">
                                            <a data-toggle="tab" href="#home11">
                                                基本信息设置
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#profile11">
                                                联系方式
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#qita">
                                                SEO设置
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content tabs-flat">
                                        <div id="home11" class="tab-pane in active">
                                            <?php foreach($confRes as $k=>$v):if($v['cf_type'] == '1' ):?>
                                                <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo $v['cnname']?></label>
                                                <div class="col-sm-6">
                                                    <?php if($v['dt_type'] =='1'):?><!--单行文本-->
                                                    <input class="form-control" id="username" placeholder="" name="<?php echo $v['enname']?>" type="text" value="<?php echo $v['value'];?>">
                                                    <?php elseif($v['dt_type'] =='2'):?><!--单选按钮-->
                                                    <?php $valuesArr = explode(',',$v['values']);foreach($valuesArr as $key=>$val):?>
                                                        <div class="radio" style="float: left; padding-left:10px ">
                                                            <label>
                                                                <input <?php if($val == $v['value']): ?> checked="checked" <?php endif; ?> name="<?php echo $v['enname']?>[]"  type="radio" class="colored-blue" value="<?php echo $val;?>">
                                                                <span class="text"> <?php echo $val;?></span>
                                                            </label>
                                                        </div>
                                                    <?php endforeach;elseif($v['dt_type'] =='3'):?><!--复选框-->
                                                    <?php $valuesArr = explode(',',$v['values']);$valueArr = explode(',',$v['value']);foreach($valuesArr as $key=>$val):?>
                                                    <div class="checkbox" style="float: left; padding-left:10px">
                                                        <label>
                                                            <input  name="<?php echo $v['enname']?>[]"  <?php if(in_array($val,$valueArr)){echo 'checked="checked"';}?>  value="<?php echo $val?>" type="checkbox" class="inverted" >
                                                            <span class="text"><?php echo $val?></span>
                                                        </label>
                                                    </div>
                                                    <?php endforeach;elseif($v['dt_type'] =='4'):?><!--下拉框-->
                                                    <select name="<?php echo $v['enname']?>"  id="">
                                                        <?php $valuesArr = explode(',',$v['values']);foreach($valuesArr as $key=>$val):?>
                                                            <option <?php if($val == $v['value']): ?> selected="selected" <?php endif; ?> value="<?php echo $val?>"><?php echo $val?></option>
                                                        <?php endforeach;?>

                                                    </select>
                                                    <?php elseif($v['dt_type'] =='5'):?><!--文本框-->
                                                    <textarea  name="<?php echo $v['enname']?>"  class="form-control"><?php echo $v['value'];?></textarea>
                                                    <?php elseif($v['dt_type'] =='6'):?><!--附件类型-->
                                                    <input  id="username" placeholder="" name="<?php echo $v['enname']?>"  style="float: left;margin-top: 5px;" type="file" value="<?php echo $v['value'];?>" >
                                                    <?php if($v['value']):?>
                                                    <img height="30" src="__ADMIN__/uploads/<?php echo $v['value']?>" >
                                                    <?php else:?>
                                                     未上传
                                                    <?php endif;endif;?>
                                                </div>
                                                <p class="help-block col-sm-4 red">* 必填</p>
                                            </div>
                                            <?php endif;endforeach;?>
                                        </div>

                                        <div id="profile11" class="tab-pane">
                                            <?php foreach($confRes as $k=>$v):if($v['cf_type'] == '2'):?>
                                                <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo $v['cnname']?></label>
                                                <div class="col-sm-6">
                                                    <?php if($v['dt_type'] =='1'):?><!--单行文本-->
                                                    <input class="form-control" id="username" placeholder="" name="<?php echo $v['enname']?>"  type="text" value="<?php echo $v['value'];?>">
                                                    <?php elseif($v['dt_type'] =='2'):?><!--单选按钮-->
                                                    <?php $valuesArr = explode(',',$v['values']);foreach($valuesArr as $key=>$val):?>
                                                    <div class="radio" style="float: left; padding-left:10px ">
                                                        <label>
                                                            <input <?php if($val == $v['value']): ?> checked="checked" <?php endif; ?> name="<?php echo $v['enname']?>[]"  type="radio" class="colored-blue" value="<?php echo $val;?>">
                                                            <span class="text"> <?php echo $val;?></span>
                                                        </label>
                                                    </div>
                                                    <?php endforeach;elseif($v['dt_type'] =='3'):?><!--复选框-->
                                                    <?php $valuesArr = explode(',',$v['values']);$valueArr = explode(',',$v['value']);foreach($valuesArr as $key=>$val):?>
                                                    <div class="checkbox" style="float: left; padding-left:10px">
                                                        <label>
                                                            <input  <?php if(in_array($val,$valueArr)){echo 'checked="checked"';}?> name="<?php echo $v['enname']?>[]"  value="<?php echo $val?>" type="checkbox" class="inverted" >
                                                            <span class="text"><?php echo $val?></span>
                                                        </label>
                                                    </div>
                                                    <?php endforeach;elseif($v['dt_type'] =='4'):?><!--下拉框-->
                                                    <select name="<?php echo $v['enname']?>"  id="">
                                                        <?php $valuesArr = explode(',',$v['values']);foreach($valuesArr as $key=>$val):?>
                                                        <option <?php if($val == $v['value']): ?> selected="selected" <?php endif; ?> value="<?php echo $val?>"><?php echo $val?></option>
                                                        <?php endforeach;?>

                                                    </select>
                                                    <?php elseif($v['dt_type'] =='5'):?><!--文本框-->
                                                    <textarea  name="<?php echo $v['enname']?>"  class="form-control"><?php echo $v['value'];?></textarea>
                                                    <?php elseif($v['dt_type'] =='6'):?><!--附件类型-->
                                                    <input  id="username" placeholder="" name="<?php echo $v['enname']?>"  style="float: left;margin-top: 5px;" type="file" value="<?php echo $v['value'];?>" >
                                                    <?php if($v['value']):?>
                                                    <img height="30" src="__ADMIN__/uploads/<?php echo $v['value']?>" >
                                                    <?php else:?>
                                                    未上传
                                                    <?php endif;endif;?>
                                                </div>
                                                <p class="help-block col-sm-4 red">* 必填</p>
                                            </div>
                                            <?php endif;endforeach;?>
                                        </div>
                                        <div id="qita" class="tab-pane">
                                            <?php foreach($confRes as $k=>$v):if($v['cf_type'] == '3'):?>
                                                <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo $v['cnname']?></label>
                                                <div class="col-sm-6">
                                                    <?php if($v['dt_type'] =='1'):?><!--单行文本-->
                                                    <input class="form-control" id="username" placeholder="" name="<?php echo $v['enname']?>"   type="text" value="<?php echo $v['value'];?>">
                                                    <?php elseif($v['dt_type'] =='2'):?><!--单选按钮-->
                                                    <?php $valuesArr = explode(',',$v['values']);foreach($valuesArr as $key=>$val):?>
                                                    <div class="radio" style="float: left; padding-left:10px ">
                                                        <label>
                                                            <input <?php if($val == $v['value']): ?> checked="checked" <?php endif; ?> name="<?php echo $v['enname']?>[]"  type="radio" class="colored-blue" value="<?php echo $val;?>">
                                                            <span class="text"> <?php echo $val;?></span>
                                                        </label>
                                                    </div>
                                                    <?php endforeach;elseif($v['dt_type'] =='3'):?><!--复选框-->
                                                    <?php $valuesArr = explode(',',$v['values']);$valueArr = explode(',',$v['value']);foreach($valuesArr as $key=>$val):?>
                                                    <div class="checkbox" style="float: left; padding-left:10px">
                                                        <label>
                                                            <input  <?php if(in_array($val,$valueArr)){echo 'checked="checked"';}?> name="<?php echo $v['enname']?>[]"  value="<?php echo $val?>" type="checkbox" class="inverted" >
                                                            <span class="text"><?php echo $val?></span>
                                                        </label>
                                                    </div>
                                                    <?php endforeach;elseif($v['dt_type'] =='4'):?><!--下拉框-->
                                                    <select name="<?php echo $v['enname']?>"  id="">
                                                        <?php $valuesArr = explode(',',$v['values']);foreach($valuesArr as $key=>$val):?>
                                                        <option <?php if($val == $v['value']): ?> selected="selected" <?php endif; ?> value="<?php echo $val?>"><?php echo $val?></option>
                                                        <?php endforeach;?>

                                                    </select>
                                                    <?php elseif($v['dt_type'] =='5'):?><!--文本框-->
                                                    <textarea  name="<?php echo $v['enname']?>"  class="form-control"><?php echo $v['value'];?></textarea>
                                                    <?php elseif($v['dt_type'] =='6'):?><!--附件类型-->
                                                    <input  id="username" placeholder="" name="<?php echo $v['enname']?>"  style="float: left;margin-top: 5px;" type="file" value="<?php echo $v['value'];?>" >
                                                    <?php if($v['value']):?>
                                                    <img height="30" src="__ADMIN__/uploads/<?php echo $v['value']?>" >
                                                    <?php else:?>
                                                    未上传
                                                    <?php endif;endif;?>
                                                </div>
                                                <p class="help-block col-sm-4 red">* 必填</p>
                                            </div>
                                            <?php endif;endforeach;?>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">保存信息</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--</div>-->
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

