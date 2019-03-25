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
    background: rgb(240,240,240);
    font-size: 14px;
    line-height: 1.6;
    word-wrap: break-word;
    -webkit-font-smoothing: antialiased;
}

</style>
</head>
<?php 
    {$showPhone = "Please input your phone number ";}?>
<?php {$showPostcode = "Please input the address(Postcode)";}?>
<body>
    <div class="head">
        Submit Issue
    </div>

<div class="container">
    <div class="panel-body" >
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



</body>
</html>
