<!DOCTYPE html>
<html>
<head>
	<title><?php echo $data[0]['title']; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link href="<?php echo base_url('public/issue/css/icono.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('public/issue/css/common.min.css') ?>" rel="stylesheet">
</head>
<style type="text/css">

body {
    margin: 10px;
    padding: 0;
    background: #f0f0f0 
}.head{
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
    background: #82d895 ;text-align:center;
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
}

.posted {
    padding: 0 0 0 20px;
    font-size: small;text-align:center;
}

.story {
    padding: 20px;text-align:center;
}
.icono-checked{
    /*font-size: big;*/
    color: red;
    font-size: 30px;
}
</style>
<script type="text/javascript"
    src="https://maps.google.com/maps/api/js?key=">//set_to_true_or_false
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
        	<!-- <?php var_dump($data); ?> -->
	<?php var_dump( $data[0]['postcode']);?>


            <h5 class="title"><?php echo $data[0]['title']; ?></h5>
            <h8 class="posted">Submit Time: <?php echo date("Y-m-d",$data[0]['submitTime']) ?></h8>
            <div class="story">
                <p><?php echo $data[0]['content'];?></p>
            </div>
        </div>
        <!-- 地图 -->

        <div id="map_canvas" style="width:400px; height:300px; margin: 0 auto"></div>

        <!-- 地图 -->
        <div class="posta" >

            <h1 >Verification State</h1>
            <div class="posted">

            <?php
                if ($data[0]['checked']==1){?>
                <p>
                Checked</p>
                <div class="icono-checked" ></div>
            <?php }else{?>
                <p>
                Not Checked</p>
                <!-- <div class="icono-checked" ></div> -->
            <?php }?>
            </div>
        </div>

    </div>
	

	
</body>
</html>