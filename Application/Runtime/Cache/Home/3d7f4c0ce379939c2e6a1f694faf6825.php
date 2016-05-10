<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>

	<body>
		<form action="<?php echo U('Upload/upload');?>" enctype="multipart/form-data" method="post">
			<input type='file'  name='photo[]'>
			<input type='file'  name='photo[]'>
			<input type='file'  name='photo[]'>
			<input type="submit" value="提交">
		</form>
	</body>

</html>