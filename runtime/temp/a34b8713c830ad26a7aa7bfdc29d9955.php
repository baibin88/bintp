<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"/Users/yinbin/Code/bintp/public/../application/admin/view/conf/lst.htm";i:1498365951;s:75:"/Users/yinbin/Code/bintp/public/../application/admin/view/common/header.htm";i:1498214292;s:73:"/Users/yinbin/Code/bintp/public/../application/admin/view/common/left.htm";i:1503389303;}*/ ?>
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
                    <li class="active">配置管理</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <button type="button" tooltip="添加配置" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('conf/add'); ?>'">
                    <i class="fa fa-plus"></i> 添加配置
                </button>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-body">
                                <div class="flip-scroll">
                                    <table class="table table-bordered table-hover">
                                        <thead class="">
                                        <tr>
                                            <th class="text-center" width="6%">ID</th>
                                            <th class="text-center">中文名称</th>
                                            <th class="text-center">英文名称</th>
                                            <th class="text-center">默认值</th>
                                            <th class="text-center">可选值</th>
                                            <th class="text-center">操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(is_array($confRes) || $confRes instanceof \think\Collection || $confRes instanceof \think\Paginator): $i = 0; $__LIST__ = $confRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$conf): $mod = ($i % 2 );++$i;?>
                                        <tr>
                                            <td align="center"><?php echo $conf['id']; ?></td>
                                            <td align="center"><?php echo $conf['cnname']; ?></td>
                                            <td align="center"><?php echo $conf['enname']; ?></td>
                                            <td align="center"><?php if($conf['value'] != ''): ?> <?php echo $conf['value']; else: ?> 未定义 <?php endif; ?></td>
                                            <td align="center"><?php if($conf['values'] != ''): ?> <?php echo $conf['values']; else: ?>未定义<?php endif; ?></td>
                                            <td align="center">
                                                <a href="<?php echo url('edit',array('id'=>$conf['id'])); ?>" class="btn btn-primary btn-sm shiny">
                                                    <i class="fa fa-edit"></i> 编辑
                                                </a>
                                                <a href="#" onClick="warning('确实要删除吗', '<?php echo url('del',array('id'=>$conf['id'])); ?>')" class="btn btn-danger btn-sm shiny">
                                                    <i class="fa fa-trash-o"></i> 删除
                                                </a>
                                            </td>
                                        </tr>
                                     <?php endforeach; endif; else: echo "" ;endif; ?>

                                        </tbody>
                                    </table>

                                </div>
                                <div class="">
                                    <?php echo $confRes->render(); ?>
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