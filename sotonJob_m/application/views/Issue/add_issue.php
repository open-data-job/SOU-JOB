<!DOCTYPE html>
<html>
<head>
	<title>Add Issue</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<!-- <link href="<?php echo base_url('public/Issue/css/icono.min.css') ?>" rel="stylesheet"> -->
	<link href="<?php echo base_url('public/Issue/css/common.min.css') ?>" rel="stylesheet">
	<style type="text/css">
    .addheader{
    float:left;
    top: 0;
    left: 0;
    width: 100%;
    height: 100px;
    color: #fff;
    background-color: #66e296;
}
#input_title{
    width: 96%;
    margin-left:2%;
    line-height: 20px;
    height:40px;
    font-size: 27px;
    color: #333;
    border-bottom: 1px solid #ddd;
    -webkit-transition: border .4s ease;
    transition: border .4s ease;
}
#input_phone{
    margin-top: 14px;
    width: 96%;
    margin-left:2%;
    line-height: 20px;
    height:40px;
    font-size: 17px;
    color: #333;
    border-bottom: 1px solid #ddd;
    -webkit-transition: border .4s ease;
    transition: border .4s ease;
}
#input_postcode{
    margin-top: 14px;
    width: 96%;
    margin-left:2%;
    line-height: 20px;
    height:40px;
    font-size: 17px;
    color: #333;
    border-bottom: 1px solid #ddd;
    -webkit-transition: border .4s ease;
    transition: border .4s ease;
}
#input_text{
    width: 96%;
    margin-left:2%;
    height: 200px;
    padding: 10px;
    color: #222;
    font-size: 17px;
    border: 1px solid #ddd;
    border-radius: 3px;
    resize: none;
    -webkit-transition: border .4s ease;
    transition: border .4s ease;
    margin-top: 20px;
}.head{
        width: 100%;
        font-size: 40px;
        text-align: center;
        padding: 10px 0;
        font-weight: bold;
        color: rgba(62, 57, 57, 0.92);
        
    }html,body{
    font-size: 14px;
    line-height: 1.6;
    word-wrap: break-word;
    -webkit-font-smoothing: antialiased;
}
body {background-color: #f4f8fb;}
	.navbar-soujob {
		background-color:#3097d1;
	}
	.navbar-soujob
 .navbar-toggle:hover
 {
 	background-color: #ffe184;
 }
 
 .navbar-soujob
 .navbar-toggle
 {
 	border-color:#ffffff;
 }
 
 .navbar-soujob .navbar-nav>li>a {
    color: #fff;
}

.index-navbar-nav>li>a 
{
	padding:15px 20px 15px 20px;
    margin:0 5px 0 5px;
}

.navbar-right>ul>li>.active
{
	color: #ffe184;
}

	.navbar-fixed-top
{
	border-width: 0;
}
	.vertical-center {
            min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
            min-height: 100vh; /* These two lines are counted as one :-)       */

            display: flex;
            align-items: center;
		}
	.navbar .nav > li {margin-top: 15px; font-size: 15px;}
	.navbar .nav > li > .loginBtn {padding-right: 0px;}
	.navbar .nav > li > .signupBtn {padding-left: 0px;padding-right: 0px;}
	.navbar .nav > li > .adminBtn {padding-left: 20px; font-size:12px}
	.navbar .nav > li > .slash {padding-left: 2px; padding-right: 2px; padding-top: 15px; padding-bottom: 15px;}
	footer{
			text-align: center;
			color: #999;
			font-size: 12px;
			padding-top: 15px;
		}
        .addissue {
            border-style: solid;
    border-width: 1px;
    border-color: #3097d1;
    border-radius: 4px;
    box-shadow: 3px 3px 5px rgba(0,0,0,.1);
    background-color: #fff;
    margin-bottom: 20px;
        }
</style>
</head>
<?php 
    {$showPhone = "Please input your phone number ";}?>
<?php {$showPostcode = "Please input the address(Postcode)";}?>
<body>
    <!--Navigation Bar-->
<nav class="navbar navbar-default navbar-soujob">
        <div class="container-fluid">
            <div class="navbar-header">
            <!--Collapsing Menu Button-->
            <!--Navigation Bar Logo-->
            <span class="navbar-brand" style="color: #fff">Southampton Jobs</span>  
        </div>
            <!--Navigation Bar Items-->
            
                    <div class="navbar-right">
                            <ul class="nav navbar-nav">
                                    <li>
										<a class="loginBtn" href="<?php echo base_url('bind') ?>" style="display: inline;">Login</a>
										<a class="slash" style="display: inline;">/</a>
										<a class="signupBtn" a href="<?php echo base_url('Bind/logout') ?>" style="display: inline;">Logout</a>
										<a class="adminBtn" href="<?php echo base_url('admin/bkmain') ?>" style="display: inline;"><span class="glyphicon glyphicon-user"></span> Admin Login</a>
									</li>
                            </ul>
                    </div>
            
        </div>
</nav><!--Navigation Bar-->

    <div class="head">
        Submit Issue
    </div>

<div class="container">
    <div class="panel-body addissue" >
                <form action="<?php echo base_url('Issue/add_Issue') ?>" method="post">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input type="text" id="input_title"  name="title" placeholder="Title"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input type="text" id="input_phone" name="phone" placeholder="<?php echo $showPhone?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input type="text" id="input_postcode" name="postcode" placeholder="<?php echo $showPostcode?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <textarea placeholder="Issue Content" id="input_text" name="content"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1" >
                                  <select name="type" class="form-control">
                                    <option>Not Anonymous
                                    <option>Anonymous
                                  </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div style="text-align:center">
                                <input id="search" type="submit" value="Submit Issue" class="btn btn-primary" 
                            />
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <footer class="nav navbar-default">
        <div class="container">
            <div class="footerContent">
            <p>COMP6214 - Open Data Innovation</p>
            <p>Team 10 2018/19</p>
            </div>
        </div>
    </footer>
</body>
</html>
