$(function() {
	// 配置图像占位符高度
	$('.avatar-placeholder').css('height', $('.avatar-placeholder').css('width'));
	$('.avatar-placeholder').css('line-height', $('.avatar-placeholder').css('width'));

	// 图片选择
	$('.avatar-selector').on('click', function() {
		$('input[name=avatar-uploader]').trigger('click');
	});
});