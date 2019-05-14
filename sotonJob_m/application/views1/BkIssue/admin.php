<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Control Panel</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/complaint/Css/identify.css') ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/complaint/Css/layout.css') ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/complaint/Css/account.css') ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/complaint/Css/style.css') ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/complaint/Css/control_index.css') ?>" />
		<script type="text/javascript" src="<?php echo base_url('public/complaint/Js/jquery-1.7.2.min.js') ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('public/complaint/Js/layer/layer.js') ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('public/complaint/Js/haidao.offcial.general.js') ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('public/complaint/Js/select.js') ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('public/complaint/Js/haidao.validate.js') ?>"></script>
	</head>
	
	<body>
		<div class="view-topbar">
			<div class="topbar-console">
				<div class="tobar-head fl">
					<a href="#" class="topbar-logo fl">
					<span><img src="<?php echo base_url('public/complaint/Images/logo.png') ?>" width="20" height="20"/></span>
					</a>
					<a href="index.html" class="topbar-home-link topbar-btn text-center fl"><span>Manage Panel</span></a>
				</div>
			</div>
			<div class="topbar-info">
				
			</div>
		</div>
		<div class="view-body">
			<div class="view-sidebar">
				<div class="sidebar-content">
					<div class="sidebar-nav">
					</div>
					<div class="sidebar-nav">
						<ul class="sidebar-trans">
							<li>
								<a href="<?php echo base_url('admin/BkMain')?>">
									<b class="sidebar-icon"><img src="<?php echo base_url('public/complaint/Images/icon_news.png') ?>" width="16" height="16" /></b>
									<span class="text-normal">SoJ Center</span>
								</a>
							</li>							<li>
								<a href="<?php echo base_url('admin/BkMain/logout')?>">
									<b class="sidebar-icon"><img src="<?php echo base_url('public/complaint/Images/icon_news.png') ?>" width="16" height="16" /></b>
									<span class="text-normal">Log Out</span>
								</a>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
			<div class="view-product">
				<div class="info-center">
					<div class="manage-head">
						<h6 class=" padding-left manage-head-con ">SoJ Center</h6>
					</div>
					<div class="info-center-con">
						<div class=" info-center-title h5 margin-big-top clearfix">
							<span class="fl padding-large-right manage-title">
							<a href="<?php echo base_url('admin/bkmain/')?>">All Message</a></span>
							<span class="fl padding-large-right manage-title">
							<a href="<?php echo base_url('admin/bkmain/unreply_issue/')?>">Unchecked Message</a></span>
						</div>
						<p style="width: 56px; left: 20px;" class="solid-slider">
						</p>
					</div>
					<div class="offcial-table input-table table-margin clearfix">
						<div class="tr-th clearfix">
							<div class="th w5 text-center">
							</div>
							<div class="padding-left-15 th w45">
								Content
							</div>
							<div class="th w35">
								Summit Time
							</div>
							<div class="th w15">
								Checked?
							</div>
						</div>
					</div>
					<!-- <?php var_dump($query); ?> -->
					<div class="offcial-table input-table table-margin clearfix">
					<?php for ($i=0; $i <count($query) ; $i++) {  ?>

						<div class="tr-th clearfix">
							<div class="th w5 text-center">
							</div>
							<div class="padding-left-15 th w45">
								<a href=<?php echo base_url('admin/bkmain/show_issue/') . $query[$i]['id']; ?>>
									<span class="title"><?php echo $query[$i]['title']; ?></span>
								</a>
								
							</div>
							<div class="th w35">
								<?php echo  date('Y-m-d',$query[$i]['submitTime']); ?>
							</div>
							<div class="th w15">
								<?php if($query[$i]['checked'])
									{echo "Checked";}
									else{echo'Unchecked';} ?>
							</div>
						</div>
					<?php } ?>
					</div>
					<ul class="tr-float">
					</ul>
				</div>
				<div class="show-page padding-top-0 layout ">
					<ul class="tr-float">
					<li><?php echo $this->pagination->create_links(); ?></li>
					<!-- 分页 -->
					</ul>
				</div>
			</div>
		</div>

		<script>
			$(".sidebar-title").live('click', function() {
				if ($(this).parent(".sidebar-nav").hasClass("sidebar-nav-fold")) {
					$(this).next().slideDown(200);
					$(this).parent(".sidebar-nav").removeClass("sidebar-nav-fold");
				} else {
					$(this).next().slideUp(200);
					$(this).parent(".sidebar-nav").addClass("sidebar-nav-fold");
				}
			});
		</script>
	</body>
<footer>
</footer>
</html>