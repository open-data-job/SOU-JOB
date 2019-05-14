<!DOCTYPE html>
<html>
<head>
	<title>Issue Content</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<style>
#input_text{
    width: 96%;
    margin-left:2%;
    height: 200px;
    padding: 10px;
    color: #222;
    font-size: 14px;
    border: 1px solid #ddd;
    border-radius: 3px;
    resize: none;
    -webkit-transition: border .4s ease;
    transition: border .4s ease;
    margin-top: 20px;
}
.box{
    margin-top: 5px;
    font-size: 13px;
    line-height: 20px;
    color: #408ec0;
}</style>
</head>
<body>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Panel</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/complaint/Css/identify.css') ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/complaint/Css/layout.css') ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/complaint/Css/account.css') ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/complaint/Css/style.css') ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/complaint/Css/control_index.css') ?>" />
        <script type="text/javascript" src="<?php echo base_url('public/complaint/Js/jquery-1.7.2.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/complaint/Js/layer/layer.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/complaint/Js/haidao.offcial.general.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/complaint/Js/select.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/complaint/Js/haidao.validate.js') ?>"></script>
    </head>

    <body>
        <div class="view-topbar">
            <div class="topbar-console">
                <div class="tobar-head fl">
                    <a href="#" class="topbar-logo fl">
                    <span><img src="<?php echo base_url('public/complaint/Images/logo.png') ?>" width="20" height="20"/></span>
                    </a>
                    <a href="index.html" class="topbar-home-link topbar-btn text-center fl"><span>Manage Panel</span></a>
                </div>
            </div>
            <div class="topbar-info">
                
            </div>
        </div>
        <div class="view-body">
            <div class="view-sidebar">
                <div class="sidebar-content">
                    <div class="sidebar-nav">
                    </div>
                    <div class="sidebar-nav">
                        <ul class="sidebar-trans">
                            <li>
                                <a href="<?php echo base_url('admin/BkMain')?>">
                                    <b class="sidebar-icon"><img src="<?php echo base_url('public/complaint/Images/icon_news.png') ?>" width="16" height="16" /></b>
                                    <span class="text-normal">SoJ Center</span>
                                </a>
                            </li>                           <li>
                                <a href="<?php echo base_url('admin/BkMain/logout')?>">
                                    <b class="sidebar-icon"><img src="<?php echo base_url('public/complaint/Images/icon_news.png') ?>" width="16" height="16" /></b>
                                    <span class="text-normal">Log Out</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="view-product">
                <div class="info-center">
                    <div class="manage-head">
                        <h6 class=" padding-left manage-head-con ">SoJ Center</h6>
                    </div>
                    
                    <div class="offcial-table input-table table-margin clearfix">
                        <div class="tr-th clearfix" >
                            <div class="panel-body"  >
                                <h1>Title: <?php echo $data[0]['title']; ?></h1>
                                <h2>Content: <?php echo $data[0]['content']; ?></h2>
                                <p class="box">
                                    <?php
                                        if ($data[0]['checked']==1)
                                            echo "<span class=\"done\">Checked</span>";
                                                else
                                            echo "<span class=\"undone\">Not Checked</span>";
                                    ?>
                                 </p>
                                    
                                </div>
                            </div>
                        <div class="tr-th clearfix">
                            <div class="panel-body" >
                                <?php
                                        if ($data[0]['checked']==1) {?>
                                <p class="box">
                                    <?php echo $data[0]['reply'];?>
                                </p>
                                    </div>
                                    </div>
                                </div>
                                <?php }else{?>
                            <div class="panel-body" >
                                <form action="<?php echo base_url('admin/bkMain/addreply') ?>" method="post">
                                <input type="hidden"  name="id" value="<?php echo $data[0]['id']; ?>">
                                <div class="form-horizontal">
                                    <div class="form-group"  style="text-align:center">
                                        <textarea placeholder="Reply" id="input_text" name="content"></textarea> 
                                    </div>
                                    <div style="text-align:center">
                                        <input id="search" type="submit" value="Submit" class="btn btn-primary" />
                                    </div>
                                </div>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(".sidebar-title").live('click', function() {
                if ($(this).parent(".sidebar-nav").hasClass("sidebar-nav-fold")) {
                    $(this).next().slideDown(200);
                    $(this).parent(".sidebar-nav").removeClass("sidebar-nav-fold");
                } else {
                    $(this).next().slideUp(200);
                    $(this).parent(".sidebar-nav").addClass("sidebar-nav-fold");
                }
            });
        </script>
    </body>
<footer>
</footer>
</html>

</body>
</html>