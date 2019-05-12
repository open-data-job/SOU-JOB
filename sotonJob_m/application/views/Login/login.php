<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <title>Backstage</title>
<script language="javascript" src="<?php echo base_url('public/static/jquery-1.8.2.min.js') ?>"></script>
    <style>
        body {
            background-color: #f4f8fb; 
            color: #2a3b45;
        }
        .panel {
            padding: 0px;
            color: #2a3b45;
        }
        .vertical-center {
            min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
            min-height: 100vh; /* These two lines are counted as one :-)       */

            display: flex;
            align-items: center;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="row  vertical-center">
        <div class="panel panel-primary col-lg-4 col-md-4 col-sm-10 col-xs-10 col-lg-offset-4 col-md-offset-4 col-sm-offset-1 col-xs-offset-1">
            <div class="panel-heading">
                    <h3 class="text-center">Manager Login</h3>
            </div>
            <div class="panel-body" >
                <form role = "form" action="<?php echo base_url('admin/Login/login'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1" >
                                <label for="name">Manager Num: </label>
                                <input type="text" class="form-control" name="username" placeholder="Input Manager Num">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                 <label for="name">Password: </label>
                                 <input width="100px" type="password" class="form-control" name="password" placeholder="Input Password">
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
                                <input id="search" type="submit" value="Login" class="btn btn-primary"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>  
</body>
</html>