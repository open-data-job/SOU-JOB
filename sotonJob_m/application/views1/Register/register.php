<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <title>Register for SotonJob</title>
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
                    <h3>Register</h3>
                </div>
            </div>
            <div class="panel-body" >
                <form action="<?php echo base_url('register/register') ?>" method="post">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1" >
                                <label for="name">User No: </label>
                                <input type="text" class="form-control" name="studentNo" placeholder="Input User No">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <label for="name">User name: </label>
                                <input width="100px" type="text" class="form-control" name="studentName" placeholder="Input User Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <label for="name">Password: </label>
                                <input width="100px" type="password" class="form-control" name="password" placeholder="Input Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <label for="name">Password: </label>
                                <input width="100px" type="password" class="form-control" name="re_password" placeholder="Input Password Again">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <label for="name">Phone: </label>
                                <input width="100px" type="password" class="form-control" name="phone" placeholder="Input Phone Number">
                            </div>
                        </div>
                        <div class="form-group" align="center">
                            <div class="col-md-10 col-md-offset-1">
                                
                                <img src="<?php echo base_url('bind/code');?>" alt="" onclick= this.src="<?php echo base_url('admin/login/code').'/'?>"+Math.random() style="cursor: pointer;" title="Click here to change verification code"/>
                            </div>
                        </div>
                        <div class="form-group" align="center">
                            <div class="col-md-10 col-md-offset-1">
                                <label for="name">Input Verification Code</label>
                                <input type="text" name="captcha" class="capital" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div style="text-align:center">
                                <input id="search" type="submit" value="Confirm" class="btn btn-primary"/>
                                <!-- <a href="<?php echo base_url('bind/') ?>">Register</a> -->


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