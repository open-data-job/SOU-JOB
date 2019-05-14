
<!DOCTYPE html>
<html>
<head>
	<title>Soton Job</title>
	  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
      <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
	  <link rel="stylesheet" href="http://icono-49d6.kxcdn.com/icono.min.css">
	  <script
  src="https://code.jquery.com/jquery-1.8.2.min.js"
  integrity="sha256-9VTS8JJyxvcUR+v+RTLTsd0ZWbzmafmlzMmeZO9RFyk="
  crossorigin="anonymous"></script>
	<style type="text/css">
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
	.jobBtn {text-align:center;margin: auto; padding-top: 30px;color: #fff;}
	.lfJob {background-color:#3670D1;padding-left: 15px; padding-right: 15px;width:60%;height:150px;border-radius: 10px;margin: auto;}
	.ofJob {Margin-top: 30px;}
	</style>
</head>
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

<div class="container">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-2 col-md-offset-2 col-sm-offset-2" style="margin-top: 30px;">
			<div class="lfJob">
			<a href="<?php echo base_url('issue') ?>">
			<div class="jobBtn">
				<p><span class="glyphicon glyphicon-briefcase" style="font-size: 60px"></span></p>
				<p>Looking for jobs.</p>
			</div>
			</a>
			</div>			
		</div>
		
		<div class="col-lg-4 col-md-4 col-sm-4 ofJob">
		<div class="lfJob" style="background-color: #FF931E">
			<a href="<?php echo base_url('issue/add') ?>">
			<div class="jobBtn">
				<p><span class="glyphicon glyphicon-calendar" style="font-size: 60px"></span></p>
				<p>Offering Jobs.</p>
			</div>
			</a>
			</div>
	    </div>
</div>
<!--<div class="wrap">
	<div class="classify">Jobs</div>
	<div class="page">						
		<div class="item1"><i class="icono-disqus"></i><a href="<?php echo base_url('issue') ?>">Looking for jobs?</a></div>
		 <div class="item"><i class="icono-exclamationCircle"></i><a href="<?php echo base_url('complaint') ?>">I want to sent jobs</a></div>
		<div class="item1"><i class="icono-exclamationCircle"></i><a href="<?php echo base_url('issue/add') ?>">I want to sent jobs</a></div>
	</div>
	<!--<div class="classify">System Operation</div>
	<div class="page">
		<div class="itmeSmall"><i class="icono-user"></i><a href="<?php echo base_url('bind') ?>">Log in</a></div>
		<div class="itmeSmall"><i class="icono-power"></i><a href="<?php echo base_url('Bind/logout') ?>">Log out</a></div>
		<div class="itmeSmall"><i class="icono-sitemap"></i><a href="<?php echo base_url('admin/bkmain') ?>">Webmaster</a></div>		
	</div>		
</div>-->
	
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