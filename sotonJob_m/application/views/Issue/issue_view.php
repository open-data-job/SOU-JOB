<!--Code By SamWong 2017.08.20-->
<!DOCTYPE html>
<html>
<head>
	<title>Issues</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link href="<?php echo base_url('public/Issue/css/icono.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('public/Issue/css/common.min.css') ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<style>
html,body{
    background: rgb(240,240,240);
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
    display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;

    font-size: 16px;
    line-height: 22px;
    font-weight: 400;
        color: #fff
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
    color: #fff;
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
    }
    .head{
        width: 100%;
        font-size: 40px;
        text-align: center;
        padding: 10px 0;
        font-weight: bold;
        color: rgba(62, 57, 57, 0.92);
        
    }
</style>

</head>

<body>
    <div class="head">
        SoJ Issue
    </div>
    <div class="container"><div class="panel-body" >
        <div class="panel-body" >
            <form action="<?php echo base_url('Issue/search') ?>" method="post">
                <div class="form-horizontal">
                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-1">
                            <input class="form-control" type="text" name="searchFor">
                            </div>
                        </div>
                    </div> 
                <div class="form-group">
                        <div style="text-align:center">
                            <input id="search" type="submit" value="Search Issue" class="btn btn-primary" 
                            />
                        </div> 
                </div>
            </form>
        </div>
    </div>
    <a href="<?php echo base_url('Issue/my_Issue') ?>" class="sc"><span class="icono-user"></span></a>
	<a href="<?php echo base_url('Issue/add') ?>"><span class="icono-plus"></span></a>
	<div class="page">
			<?php for ($i=0; $i <count($data) ; $i++) {  ?>
				<div class="item">
					<a href=<?php echo base_url('Issue/show/') . $data[$i]['id']; ?>>
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
    <div><?php echo $this->pagination->create_links();  ?></div>
</body>
</html>