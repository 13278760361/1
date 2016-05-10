<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>登录页面</title>
		<style>
			*{margin: 0;padding: 0;}
		</style>
	</head>
	<body>
		<div>
			<h1>这里事登录</h1>
			<form method="post" action="<?php echo U('Index/dataLogin');?>" class="getInfo">
				<ul>
					<li>
						<span>用户名：</span>
						<input name="username" type="text" />
					</li>
					<li>
						<span>密码：</span>
						<input name="password" type="password" />
					</li>
					<li>
					<input type="text" value="" name="code" />	<img  src="<?php echo U('Index/verity');?>" id="codeimage"/><a href="javascript:;" onclick=""></a>
					</li>
					<li>
						<input type="submit" value="登录" />
					</li>
				</ul>
				
			</form>
		</div>
		<script src="/Public/js/jquery.js"></script>
		<script type="text/javascript">
		
		$(function(){
			var Url = 'http://ob.tp323.com/Home/Index/login';
			var data = {}
			
			var err=$('.err');
			$('#btnSubmit').click(function(){
				var title=$('#nokong').val();
				data['username'] = title;
				 $.ajax({
				 	type:"post",
				 	url: Url,
				 	data:{data:data},
				 	dataType:'json',
				 	async:true,
				 	success:function(data){
				 		alert(JSON.stringify(data.name));
				 	}
				 });
				})
			})
		</script>
	</body>
</html>