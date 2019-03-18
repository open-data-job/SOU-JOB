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
<body>
<div class="head">
        学生事务详情
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
            <h5 class="title"><?php echo $data[0]['title']; ?></h5>
            <h8 class="posted">Submit Time: <?php echo date("Y-m-d",$data[0]['submitTime']) ?></h8>
            <div class="story">
                <p><?php echo $data[0]['content'];?></p>
            </div>
        </div>
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