<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<script src="/Public/js/jquery.js"></script>
	<script type="text/javascript">
		var URL = /index.php/Home;
		
	</script>
	<body>
		<div>
			<ul>
				<?php if(is_array($list)): foreach($list as $key=>$v): ?><li>
						<?php echo ($v["member_name"]); ?>
						<a href="" data-href="/index.php/Home">测试</a>
					</li><?php endforeach; endif; ?>
			</ul>
		</div>
	</body>
</html>