<!--Code By SamWong 2017.08.20-->
<!DOCTYPE html>
<html>
<head>
    <title>Issue Results</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="<?php echo base_url('public/issue/css/icono.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('public/issue/css/common.min.css') ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<style>
html,body{
    font-size: 14px;
    line-height: 1.6;
    word-wrap: break-word;
    -webkit-font-smoothing: antialiased;
}
.mainheader{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 50px;
    color: #fff;
    background-color: #607d8b;
}
.mainheader h1,.addheader h1{
    padding-left: 15px;
    font-size: 20px;
    line-height: 50px;
    font-weight:400;
    display: inline-block;
}
.mainheader .icono-search{
    zoom:0.8;
    position: absolute;
    right:15px;
    top:15px;
}
.mainheader .icono-caretLeftCircle,.addheader .icono-caretLeftCircle{
   left:10px;
    top: -2px;
    display: inline-block;
}
.icono-plus{
    position: fixed;
    right: 20px;
    bottom: 20px;
    width: 60px;
    height: 60px;
    color: #fff;
    font-size: 30px;
    line-height: 60px;
    text-align: center;
    border-radius: 50%;
    background: #f44336;
    box-shadow: 0 3px 2px rgba(0,0,0,.2);
    -webkit-transition: all 50ms;
    transition: all 50ms;
    cursor: pointer;
}
.icono-user{
    zoom:1;
    top:-3px;
}.icono-search{
    zoom:1;
    top:-3px;
}
.sc {
    position: fixed;
    right: 20px;
    bottom: 120px;
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
}.ss {
    position: fixed;
    left: 20px;
    top: 120px;
    width: 60px;
    height: 60px;
    color: #fff;
    font-size: 30px;
    line-height: 60px;
    text-align: center;
    border-radius: 50%;
    background: #ff9800;
    box-shadow: 0 3px 2px rgba(0,0,0,.2);
    -webkit-transition: all 50ms;
    transition: all 50ms;
    cursor: pointer;
}


.title{
    display: inline-block;
   padding-left:5px;

    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;

    font-size: 14px;
    line-height: 18px;
    font-weight: 400;
    color: #50868A;
}
.box{
        display: inline-block;
   padding-left:5px;

    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;

    font-size: 16px;
    line-height: 22px;
    font-weight: 400;
        color: #fff
}.time{
    padding-left:5px
    margin-top: 5px;
    font-size: 13px;
    line-height: 20px;
    color: #fff;
    float: right;
}


.done{
    color: #3670D1;
}
.undone{
    color: #f45757;
}

.item{
    border-right: 2px solid #ddd;
        border-bottom: 2px solid #ddd;
        flex: 0 0 33.33%;
        width: 37%;
        height: 37vw; 
        box-sizing:border-box;
        background-color: #fff;
        
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 5px;
        cursor: pointer;
        padding: 0 10px;
        border: 1px solid #ddd;
        line-height: 1.4;
    }.page{
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
        align-content: space-between;
        background-color: rgba(210, 208, 208, 0.25);
    }
    .head{
        width: 100%;
        font-size: 40px;
        text-align: center;
        padding: 10px 0;
        font-weight: bold;
        color: rgba(62, 57, 57, 0.92);   
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

    <input class="keyword" type="hidden" id='url' value="<?php echo base_url('issue/api_GetList') ?>"/>
    <div class="head">
        Search Issues
    </div>
    <div class="container">
    </div>
    
    <div class="page">
            <?php for ($i=0; $i <count($data) ; $i++) {  ?>
                <div class="item">
                    <a href=<?php echo base_url('issue/show/') . $data[$i]['id']; ?>>
                        <i class="icono-mail" ></i><p class="title"><?php echo $data[$i]['title']; ?></p>
                    <p class="title">
                        <?php
                            if ($data[$i]['checked']==1)
                                echo "<span class=\"done\">Checked</span>";
                                    else
                                echo "<span class=\"undone\">Unchecked</span>";
                            // echo $data[$i]['content'];
                            echo "<p class=\"title\" >". $data[$i]['submitTime']."</p>";
                        ?>
                    </p></a>
                </div>
                <?php } ?>

    </div>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        var page=1;
        var url = $("#url").val();
        $(window).scroll(function () {
            //$(document).scrollTop() 获取垂直滚动的距离
            //$(document).scrollLeft() 这是获取水平滚动条的距离
            if ($(document).scrollTop() >= $(document).height() - $(window).height()) {
                if(page<50) {

                    $.getJSON(url, {page: ++page}, function (result) {

                        var str_html = "";
                        for (var i = 0; i < result.length; i++) {
                            str_html += "<div class='msg_container'><a href='<?php echo base_url('issue/show/') ?>" + result[i]['id'] + "'><span class='title'>" + result[i]['title'] + "</span><p class='box'>";
                            if (result[i]['checked'] == 1)
                                str_html += "<span class='done'>Checked</span>";
                            else
                                str_html += "<span class='undone'>Uncheck</span>";
                            str_html += result[i]['content'] + "<span class='time'>" + result[i]['submitTime'] + "</span>   </p></a></div>";
                        }
                        $("#container").append(str_html);
                    });
                }
                else{
                    alert("It is too far!");
                }
            }
        });
    });
</script>

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