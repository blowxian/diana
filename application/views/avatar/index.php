<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>头像生成器 | Avatar Generator</title><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/avatar/base.css">
</head>
<body>
	<div class="container avatar-generator">
		<label class="avatar-placeholder" for="upload-file-4">
			请选择相片
		</label>
		<div class="avatar-uploader">
			<div class="input-group">
			    <input type="text" class="form-control" placeholder="点击此处选择图片" data-role="avatar-selector">
			    <span class="input-group-btn">
			        <button class="btn btn-default" type="button" data-role="avatar-processor">生成新头像</button>
			    </span>
		    </div>
			<div style="position:relative;">
				<label for="upload-file-4" class="upload-trigger" style="background:url('<?php echo base_url() ?>assets/img/icon/avatar-uploader-icon.jpg') no-repeat 0 0 scroll transparent;width: 79px;height: 36px;"></label>
				<input type="file" id="upload-file-4" class="upload-input" style="position:absolute; visibility:hidden; left:-99999em;" />
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
	<script src="/assets/js/avatar/base.js"></script>
</body>
</html>