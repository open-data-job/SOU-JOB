<!DOCTYPE html>
<html>
<head>
	<title>My Issue</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link href="<?php echo base_url('public/Issue/css/icono.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('public/Issue/css/common.min.css') ?>" rel="stylesheet">
	<style >
	#container{
    padding-top:50px;
    width:100%;
    background: #e6e6e6;
}
.mainheader{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 50px;
    color: #fff;
    background-color: #408ec0;
}
.msg_container{
    padding: 15px 15px 13px;
    background: #fff;
    border-bottom: 1px solid #ddd;
}
.msg_container .title{
    display: inline-block;
   padding-left:5px;

    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;

    font-size: 16px;
    line-height: 22px;
    font-weight: 400;
}
  .se {
    position: fixed;
    right: 20px;
    bottom: 50px;
    width: 60px;
    height: 60px;
    color: #fff;
    font-size: 30px;
    line-height: 60px;
    text-align: center;
    border-radius: 50%;
    background: #408ec0;
    box-shadow: 0 3px 2px rgba(0,0,0,.2);
    -webkit-transition: all 50ms;
    transition: all 50ms;
    cursor: pointer;
}.box{
    margin-top: 5px;
    font-size: 13px;
    line-height: 20px;
    color: rgba(0,0,0,.26);
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
}.item{
        border-right: 2px solid #ddd;
        border-bottom: 2px solid #ddd;
        flex: 0 0 33.33%;
        width: 30%;
        height: 30vw; 
        box-sizing:border-box;
        background-color: #fff;
        border-style: solid;
    border-width: 1px;
    border-color: #3097d1;
        
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 5px;
        cursor: pointer;
        padding: 0 10px;
    }.page{
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
        align-content: space-between;
        background-color: rgba(210, 208, 208, 0.25);
    }
    .title{
    display: inline-block;
   padding-left:5px;

    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;

    line-height: 22px;
    font-weight: 400;
        color: #657985;
}
.title2{
    display: inline-block;
   padding-left:5px;

    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;

    line-height: 22px;
    font-weight: 400;
        color: #657985;
    font-size: small;
}
.box{
    margin-top: 5px;
    font-size: 13px;
    line-height: 20px;
    color: #fff;
}
.time{
    margin-top: 5px;
    font-size: 13px;
    line-height: 20px;
    color: #fff;
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
        .done {display: inline; color:#3670D1;}
    .undone {display: inline;color: #f45757;}
    .icono-mail {color:#3097d1;}
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

<div class="head">
        My Issue
    </div>
	   <div class="page">
            <?php for ($i=0; $i <count($data) ; $i++) {  ?>
                <div class="item">
                    <a href=<?php echo base_url('Issue/show/') . $data[$i]['id']; ?>>
                        <i class="icono-mail" ></i><h3 class="title"><?php echo $data[$i]['title']; ?></h3>
                    <p class="title2">
                        <?php
                            if ($data[$i]['checked']==1)
                                echo "<span class=\"done\">Checked</span>";
                                    else
                                echo "<span class=\"undone\">Unchecked</span>";
                            // echo $data[$i]['content'];
                            echo "<p class=\"title2\" >". $data[$i]['submitTime']."</p>";
                        ?>
                    </p></a>
                </div>
                <?php } ?>

    </div>


	<?php if(count($data)==0) {?>
		<div class="msg_container">
				<span class="title">No Issue</span>
		</div>
	<?php } ?>

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