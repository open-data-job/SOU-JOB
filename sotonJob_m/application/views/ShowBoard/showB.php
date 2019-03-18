
<!DOCTYPE html>
<html>
<head>
	<title>Soton Job</title>
	<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
      <link rel="stylesheet" href="http://icono-49d6.kxcdn.com/icono.min.css">
	<style type="text/css">
	*{
		padding: 0;
		margin: 0;
	}
	.head{
		width: 100%;
	    font-size: 40px;
	    text-align: center;
	    padding: 10px 0;
	    font-weight: bold;
	    color: rgba(62, 57, 57, 0.92);
	    
	}
	.classify{
		/*background-color: rgba(210, 208, 208, 0.25);*/
		font-size: 27px;
	    height: 40px;
	    color: #000000;
	    border-radius: 5px;
	    line-height: 40px;
	    font-weight: bold;
	    background-color:  #fff;
	    text-align:center;
	}
	.page{
		display: flex;
		flex-wrap: wrap;
		justify-content: flex-start;
		align-content: space-between;
		background-color: rgba(210, 208, 208, 0.25);
	}
	.item1{
	    border-right: 2px solid #ddd;
	    border-bottom: 2px solid #ddd;
	    flex: 0 0 50%;
	    width: 50%;
	    height: 50vw; 
	    box-sizing:border-box;
	    background-color: rgba(71, 119, 156, 0.9);
	    
	    display: flex;
	    justify-content: center;
	    align-items: center;
	    border-radius: 5px;
	    cursor: pointer;
	    padding: 0 10px;
	}
	.itmeSmall{
	    border-right: 2px solid #ddd;
	    border-bottom: 2px solid #ddd;
	    flex: 0 0 33%;
	    width: 33%;
	    height: 33vw; 
	    box-sizing:border-box;
	    background-color: rgba(66, 72, 126, 0.9);
	    
	    display: flex;
	    justify-content: center;
	    align-items: center;
	    border-radius: 5px;
	    cursor: pointer;
	    padding: 0 10px;
	}
	a{
		text-decoration: none;
	    color: #fff;
	}
	.right{
	    border-right: 0;
	}
	.text{
		color: #fff;
		font-size: 15px;
	}
	.fa{
		margin-right: 5px;
		color: #fff;
		position: relative;
		top: 2px;

	}
	footer{
			text-align: center;
			color: #999;
			font-size: 12px;
			padding-top: 15px;
		}
	</style>
</head>
<body>


<div class="wrap">
	<div class="head">
		Southampton Job 
	</div>
	<div class="classify">Jobs</div>
	<div class="page">						
		<div class="item1"><i class="icono-disqus"></i><a href="<?php echo base_url('issue') ?>">Looking for jobs?</a></div>
		<!-- <div class="item"><i class="icono-exclamationCircle"></i><a href="<?php echo base_url('complaint') ?>">I want to sent jobs</a></div> -->
		<div class="item1"><i class="icono-exclamationCircle"></i><a href="<?php echo base_url('issue/add') ?>">I want to sent jobs</a></div>
	</div>
	<div class="classify">System Operation</div>
	<div class="page">
		<div class="itmeSmall"><i class="icono-user"></i><a href="<?php echo base_url('bind') ?>">Log in</a></div>
		<div class="itmeSmall"><i class="icono-power"></i><a href="<?php echo base_url('Bind/logout') ?>">Log out</a></div>
		<div class="itmeSmall"><i class="icono-sitemap"></i><a href="<?php echo base_url('admin/bkmain') ?>">Webmaster</a></div>		
	</div>		
</div>
	

</body>
</html>