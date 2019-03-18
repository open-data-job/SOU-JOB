<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <title>绑定</title>
<script language="javascript" src="<?php echo base_url('public/static/jquery-1.8.2.min.js') ?>"></script>
    <style>
        .bg {
            background-color:#999 /*此处更换为所需的颜色代码*/
        }
    </style>
</head>
<body>
<div class="bg">
<div class="container">
    <div style="width:90%; margin: 0 auto;padding: 10% 0;">
        <div class="panel panel-info">
            <div class="panel-heading" style="background-color:#42deb8">
                <div class="text-center">
                    <h3>请验证学生身份</h3>
                </div>
            </div>
            <div class="panel-body" >
                <form action="<?php echo base_url('bind/login') ?>" method="post">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1" >
                                <label for="name">学号：</label>
                                <input type="text" class="form-control" name="studentNo" placeholder="请输入用户名">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <label for="name">密码：</label>
                                <input width="100px" type="password" class="form-control" name="password" placeholder="请输入密码">
                            </div>
                        </div>
                        <div class="form-group" align="center">
                            <div class="col-md-10 col-md-offset-1">
                                
                                <img src="<?php echo base_url('bind/code');?>" alt="" onclick= this.src="<?php echo base_url('admin/login/code').'/'?>"+Math.random() style="cursor: pointer;" title="看不清？点击更换另一个验证码。"/>
                            </div>
                        </div>
                        <div class="form-group" align="center">
                            <div class="col-md-10 col-md-offset-1">
                                <label for="name">请输入验证码：</label>
                                <input type="text" name="captcha" class="capital" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div style="text-align:center">
                                <input id="search" type="submit" value="登陆" class="btn btn-primary"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>  
 </div>
</body>
</html>