<!DOCTYPE html>
<html>
<head>
	<title>My Job</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link href="<?php echo base_url('public/Job/css/icono.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('public/Job/css/common.min.css') ?>" rel="stylesheet">
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
    background: rgb(240,240,240);
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
        background-color: #9e9e9e;
        
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
    }.title{
    display: inline-block;
   padding-left:5px;

    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;

    font-size: 16px;
    line-height: 22px;
    font-weight: 400;
        color: #fff
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

  </style>
</head>

<body><div class="head">
        My Job
    </div>
	   <div class="page">
            <?php for ($i=0; $i <count($data) ; $i++) {  ?>
                <div class="item">
                    <a href=<?php echo base_url('Job/show/') . $data[$i]['id']; ?>>
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


	<?php if(count($data)==0) {?>
		<div class="msg_container">
				<span class="title">No Job</span>
		</div>
	<?php } ?>


</body>
</html>