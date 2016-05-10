<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- viewport meta to reset iPhone inital scale -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Demo: Responsive Design in 3 Steps</title>
		<!-- css3-mediaqueries.js for IE8 or older -->
		<!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
		<style type="text/css">
			body {
			font: 1rem/150% Arial, Helvetica, sans-serif;
			}
			a {
			color: #669;
			text-decoration: none;
			}
			a:hover {
			text-decoration: underline;
			}
			h1 {
			font: bold 36px/100% Arial, Helvetica, sans-serif;
			}
			/************************************************************************************
			STRUCTURE
			*************************************************************************************/
			#pagewrap {
			padding: 5px;
			width: 960px;
			margin: 20px auto;
			}
			#header {
			height: 180px;
			}
			#content {
			width: 600px;
			float: left;
			}
			#sidebar {
			width: 300px;
			float: right;
			}
			#footer {
			clear: both;
			}
			/************************************************************************************
			MEDIA QUERIES
			*************************************************************************************/
			/* for 980px or less */
			@media screen and (max-width: 980px) {
			#pagewrap {
			width: 94%;
			}
			#content {
			width: 65%;
			}
			#sidebar {
			width: 30%;
			}
			}
			/* for 700px or less */
			@media screen and (max-width: 700px) {
			#content {
			width: auto;
			float: none;
			}
			#sidebar {
			width: auto;
			float: none;
			}
			}
			/* for 480px or less */
			@media screen and (max-width: 480px) {
			#header {
			height: auto;
			}
			h1 {
			font-size: 24px;
			}
			#sidebar {
			display: none;
			}
			}
			/* border & guideline (you can ignore these) */
			#content {
			background: #f8f8f8;
			}
			#sidebar {
			background: #f0efef;
			}
			#header, #content, #sidebar {
			margin-bottom: 5px;
			}
			#pagewrap, #header, #content, #sidebar, #footer {
			border: solid 1px #ccc;
			}
.Pagination a:hover,.current{background-color: #f54281;border: 1px solid #f54281;color: #ffffff; }
.Pagination{float: right;height: auto;_height: 45px; line-height: 20px;margin-right: 15px;_margin-right: 5px; color:#565656;margin-top: 10px;_margin-top: 20px; clear:both;}
.Pagination a,.Pagination span{ font-size: 14px;text-decoration: none;display: block;float: left;color: #565656;border: 1px solid #ccc;height: 34px;line-height: 34px;margin: 0 2px;width: 34px;text-align: center;}
		</style>
	</head>

	<body>
		<div id="pagewrap">
			<div id="header">
				<h1>Header</h1>
				<p>Tutorial by <a href="http://webdesignerwall.com">Web Designer Wall</a> (read <a href="http://webdesignerwall.com/tutorials/responsive-design-in-3-steps">related article</a>)</p>
			</div>
			<div id="content">
				<h2>Content</h2>
				
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p><?php echo ($vo["member_id"]); ?>:<?php echo ($vo["member_name"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
				
			</div>
			<div id="sidebar">
				<h3>Sidebar</h3>
				<p>textg</p>
				<p>fgs</p>
				<p>fgsg</p>
				<p>dg</p>
				<p>dfgfd</p>
				<p>是否感到反感</p>
				<p>sgrtg</p>
				<p>分公司</p>
				<p>sgf</p>
				<p><?php echo ($list['member_sex']); ?></p>
			</div>
			<div id="footer">
				<h4>Footer</h4>
			</div>
			<div class="Pagination"><?php echo ($page); ?></div>
		</div>
	</body>

</html>