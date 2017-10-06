<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"/Users/yinbin/Code/bintp/public/../application/admin/view/cate/index.htm";i:1506350824;s:75:"/Users/yinbin/Code/bintp/public/../application/admin/view/common/header.htm";i:1498214292;s:73:"/Users/yinbin/Code/bintp/public/../application/admin/view/common/left.htm";i:1503389303;}*/ ?>
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
    <style type="text/css">
        .open{
            border: 1px solid #ccc;
            padding: 0 3px 0 3px;
            cursor: pointer;
        }
    </style>
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
                        <li class="active"><a href="<?php echo url('Cate/index'); ?>">栏目管理</a></li>
                        <li class="active">栏目列表</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">

<button type="button" tooltip="添加栏目" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('Cate/add'); ?>'"> <i class="fa fa-plus"></i> 添加栏目
</button>
<button type="button" tooltip="批量删除" class="btn btn-danger btn-sm shiny" onClick="button_del()"> <i class="fa fa-trash-o"></i> 批量删除
</button>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                <th class="text-center" width="6%">伸缩</th>

                                <th class="text-center" width="5%">
                                    <label>
                                        <input id="checkall"  type="checkbox" class="colred-blue" data_id="">
                                        <span class="text"></span>
                                    </label>
                                </th>
                                <th class="text-center" width="8%">ID</th>
                                    <th class="text-center" >栏目</th>
                                <th class="text-center" width="10%">状态</th>
                                <th class="text-center" width="10%">属性</th>
                                <th class="text-center" width="10%">所属模型</th>
                                <th class="text-center" width="5%">排序</th>
                                <th class="text-center" width="18%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(is_array($cateRes) || $cateRes instanceof \think\Collection || $cateRes instanceof \think\Paginator): $i = 0; $__LIST__ = $cateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>

                             <tr id="<?php echo $cate['id']; ?>" pid="<?php echo $cate['pid']; ?>">
                                 <td align="center"><span class="open">+</span></td>
                                <td align="center">
                                    <label>
                                        <input name="itm[]" value="<?php echo $cate['id']; ?>" type="checkbox" class="colred-blue">
                                        <span class="text"></span>
                                    </label>
                                </td>

                                <td align="center"><?php echo $cate['id']; ?></td>
                                <td ><?php echo str_repeat('-',$cate['level']*4)?>
                                    <a href="javascript:;"><?php echo $cate['cate_name']; ?></a>
                                    <a href="<?php echo url('Cate/add',array('cate_id'=>$cate['id'])); ?>" style="float: right;" class="btn btn-sm btn-azure btn-addon">添加子栏目</a>
                                </td>
                                <td align="center"><a onclick="cate_ststus(this,'<?php echo $cate['id']; ?>')" <?php if($cate['status'] == 1): ?> class="btn btn-primary btn-sm shiny" <?php else: ?> class="btn btn-danger btn-sm shiny" <?php endif; ?> > <?php if($cate['status'] == 1): ?>显示<?php else: ?>隐藏<?php endif; ?></a></td>
                                <td align="center"><?php if($cate['cate_attr'] == 1): ?> 列表栏目<?php else: ?>频道封面<?php endif; ?></td>
                                <td align="center">test</td>
                                <td align="center" class="order" data-sort="<?php echo $cate['sort']; ?>" data-id="<?php echo $cate['id'];?>">
                                    <span class="sort"><?php echo $cate['sort'];?></span>
                                    <input class='txt_order' style='border:1px solid #ccc;text-align:center;display:none;width:40px;height:22px' type='text' value="<?php echo $cate['sort']; ?>"" />
                                </td>
                                <td align="center">
                                    <a href="<?php echo url('edit',array('cateid'=>$cate['id'])); ?>" class="btn btn-primary btn-sm shiny">
                                        <i class="fa fa-edit"></i> 编辑
                                    </a>
                                    <a href="javascript:;" onClick="cateDel('<?php echo $cate['id']; ?>')" class="btn btn-danger btn-sm shiny">
                                        <i class="fa fa-trash-o"></i> 删除
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>


                        </tbody>
                    </table>
                </div>
                <div>
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
<script src="__ADMIN__/dialog/layer.js"></script>
<script src="__ADMIN__/dialog.js"></script>
<script src="__ADMIN__/style/common.js"></script>
<!--Beyond Scripts-->
<script src="__ADMIN__/style/beyond.js"></script>
<script src="__ADMIN__/style/summernote.js"></script>

    <!--Beyond Scripts-->
    <script src="__ADMIN__/style/beyond.js"></script>
    <script>
    var SCOPE = {
        'status_url' : "<?php echo url('Cate/cateStatus'); ?>",
        'catesort_url' :"<?php echo url('Cate/cateSort'); ?>",
        'catedel_url' : "<?php echo url('Cate/cateDel'); ?>",
        'index_url' : "<?php echo url('Cate/index'); ?>"
      }

    $(function() {
        $('.order').click(function () {
            $('.txt_order').hide();
            $('.sort').show();
            var datasort = $(this).attr('data-sort');
            var sort = $(this).find('input').val();
            $(this).find('input').val('').show().focus().val(sort).select();
            $(this).find('span').hide();
        });
        $(document).on('blur', '.txt_order', function () {
            $('.txt_order').hide();
            var order = $(this);
            var dataid = $(this).parent().attr('data-id');
            var datasort = $(this).val();
            var url = SCOPE.catesort_url;
//            var data = {sort: sort, id: id};
            var data = {id:dataid,sort:datasort};
            $.post(url, data, function (data) {
                order.hide();
                order.prev().text(datasort).show();
            });
        });
    });
    $('tr[pid!=0]').hide();
    $('.open').click(function () {
        var id = $(this).parents('tr').attr('id');
        if($(this).text() =='+'){
            $(this).text('-');
            $('tr[pid='+id+']').show();
        }else{
            $(this).text('+');
//            $('tr[pid='+id+']').hide();
            var url ="<?php echo url('Cate/CateOpen'); ?>";
            var data = {id:id};
            $.post(url,data,function (data) {

                //遍历
                if(data.msg =='200'){
                    var ids = [];
                    var sortid = $('tr[pid!=0]');
                    sortid.each(function (k,v) {
                        ids.push($(this).attr('id'));
                    });

                    $.each(data.text,function (k,v) {
                        if($.inArray(v,ids)){
                            $('tr[id='+v+']').hide();
                        }
                    });
                }else{
                    dialog.error(data.text);
                }

            })
        }
    });

</script>


</body></html>