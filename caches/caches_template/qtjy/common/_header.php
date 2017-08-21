<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<meta http-equiv="X-UA-Compatible" content="IE=11"/>
	<meta http-equiv="Cache-Control" content="no-siteapp"/>
	<meta http-equiv="Cache-Control" content="no-transform"/>
	<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
	<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
	<meta name="description" content="<?php echo $SEO['description'];?>">
	<link href="<?php echo CSS_PATH;?>1/style/index.css" rel="stylesheet" type="text/css">
	<script language="javascript" src="<?php echo CSS_PATH;?>1/js/studyems.js"></script>
	<script language="javascript" src="<?php echo CSS_PATH;?>1/js/jquery-1.11.3.min.js"></script>
</head>
<body>

<div class="main">
	<div class="studyems001">
		<div class="studyems002">
			<p class="studyems003">贵州黔通职业培训是国内领先的B2M2C教育培训网上信息平台！</p>
			<p class="studyems004">【<a href="#"><font color="#FF0000"><strong>会员登录/免费注册</strong></font></a>】</p>
			<div class="studyems005">
				<a href="#" target="_blank">课程发布</a> |
				<a href="#" target="_blank">网站地图</a> 
			</div>
			<div class="studyems006">
				<?php include template("common","_top_share"); ?>
			</div>
		</div>
	</div>
	<div class="studyems007">
		<?php include template("common","_header_search"); ?>
	</div>
</div>

<?php include template("common","_nav"); ?>