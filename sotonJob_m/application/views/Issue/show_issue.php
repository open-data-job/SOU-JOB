<!DOCTYPE html>
<html>
<head>
	<title><?php echo $data[0]['title']; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link href="<?php echo base_url('public/issue/css/icono.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('public/issue/css/common.min.css') ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<style type="text/css">
body {background-color: #f4f8fb;
    padding: 0;}
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
    .done {display: inline; color:#3670D1}
    .undone {display: inline;color: #f45757;}
    .state {margin: 0px 0px 20px 0px; font-size: small;}
.head{
        width: 100%;
        font-size: 40px;
        text-align: center;
        padding: 10px 0;
        font-weight: bold;
        color: rgba(62, 57, 57, 0.92);
        
    }
#content {
    width: 100%;
    margin: 10px auto;
}

/* Posts */

#posts {
    float: left;
    width: 100%;
}

.post {
    margin-bottom: 20px;
    background: #fff ;text-align:center;
    float: left;
    width: 90%;
    margin-left: 5%;
    margin-top:15px;
    color: rgba(0,0,0,.87);
    padding: 20px;
    padding-bottom: 10px;
    /*background: #fff;*/
    border-style: solid;
    border-width: 1px;
    border-color: #3097d1;
    border-radius: 4px;
    box-shadow: 0 3px 3px rgba(0,0,0,.2);
}
.posta {
    margin-bottom: 20px;
    background: #6bbdb6 ;text-align:center;
    float: left;
    width: 94%;
    margin-left: 2%;
    margin-top:15px;
    color: rgba(0,0,0,.87);
    padding: 20px;
    padding-bottom: 10px;
    /*background: #fff;*/
    border-radius: 3px;
    box-shadow: 0 3px 3px rgba(0,0,0,.2);
}

.title {
    text-align:center;
    padding: 5px 20px;
    font-weight: bold;
}

.posted {
    padding: 0 0 0 20px;
    font-size: small;text-align:center;
    margin-bottom: 0px;
}

.story {
    padding: 20px;text-align:left;
}
.icono-checked{
    /*font-size: big;*/
    color: #3670D1;
}
</style>
<script type="text/javascript"
    src="https://maps.google.com/maps/api/js?key=AIzaSyDJW4jsPlNKgv6jFm3B5Edp5ywgdqLWdmc">//set_to_true_or_false
    // 注意使用的时候要加上key，有疑问找我要 byDeng
</script>
<script type="text/javascript">
function initialize() {
    var geocoder = new google.maps.Geocoder();
    // address就是需要填写获取的邮编的地址
    var address = "<?php echo $data[0]['postcode'];?>";
    var latitude, longitude;
    geocoder.geocode({ 'address': address }, function (results, status) {  
        if (status == google.maps.GeocoderStatus.OK) {  
            latitude = results[0].geometry.location.lat().toFixed(7);  
            longitude = results[0].geometry.location.lng().toFixed(7);  
            console.log("Latitude: " + latitude + "nLongitude: " + longitude);
            var latlng = new google.maps.LatLng(latitude, longitude);
            var myOptions = {
                zoom: 18,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP//ROADMAP SATELLITE HYBRID TERRAIN
            };
            var map = new google.maps.Map(document.getElementById("map_canvas"),
                myOptions);
            var marker=new google.maps.Marker({
                position: latlng,
            });
            marker.setMap(map);


        }else {  
            // console.log("Request failed.") 
    		var address = 'SO17 1BJ';
    		var latitude, longitude;
            geocoder.geocode({ 'address': address }, function (results, status) {  
            latitude = results[0].geometry.location.lat().toFixed(7);  
            longitude = results[0].geometry.location.lng().toFixed(7);  
            console.log("Latitude: " + latitude + "nLongitude: " + longitude);
            var latlng = new google.maps.LatLng(latitude, longitude);
            var myOptions = {
                zoom: 18,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP//ROADMAP SATELLITE HYBRID TERRAIN
            };
            var map = new google.maps.Map(document.getElementById("map_canvas"),
                myOptions);
            var marker=new google.maps.Marker({
                position: latlng,
            });
            marker.setMap(map);
        	})
        }  
    }); 
}

</script>

<body onload="initialize()">
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
        Issues Details 
    </div>
<header id="show_header">
	<a href="<?php echo base_url(('issue')) ?>">
		<div class="first_line">
			<span class="icono-caretLeftCircle"></span>
		</div>
	</a>
</header>
<div id="content">
        <div class="post">
            <h3 class="title"><?php echo $data[0]['title']; ?></h3>
            <h5 class="posted"><span style="font-weight: bold;">Submit Time: </span><?php echo date("Y-m-d",$data[0]['submitTime']) ?></h5>
            <!-- 状态 -->
            <h5 class="state"><span style="font-weight: bold;">Verification State: </span>
                <?php
                if ($data[0]['checked']==1){?>
                <span class="icono-checked" ></span><span class="done">Checked</span>
            <?php }else{?>                
                <span class="undone">Not Checked</span>
            <?php }?>
            </h5>
            <!-- 状态 -->
        <!-- 地图 -->
        <div id="map_canvas" style="width:80%; height:300px; margin: 0 auto"></div>
        <!-- 地图 -->
            <div class="story">
            <h4 style="font-weight: bold;">Description:</h4>
                <p><?php echo $data[0]['content'];?></p>
            <h4 style="font-weight: bold;">Organisation homepage you might interest:</h4>
                <?php 
                    for ($i=0; $i < count($org); $i++) { 
                        $pieces = explode("&", $org[$i]['title']);
                        for ($j=0; $j < count($pieces); $j++) { 
                            // $pieces = explode("&", $org[10]['title']);
                            $p = '/'.$pieces[$j].'/';
                            $str = $data[0]['content'];
                            if (preg_match($p, $str) and $pieces[$j]!= 'Research') {
                                echo "<p style='font-weight: bold;'><a href = ".$org[$i]['homepage'].">".$pieces[$j]."</a></p>";
                        }}}
                    ?>
            </div>
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