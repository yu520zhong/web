/*
* 微博配图上传JS插件
**/

$(function () {
	var lee_pic = {
		uploadTotal : 0,
		uploadLimit : 4,
		uploadify : function () {
			//文件上传测试
			$('#file_upload').uploadify({
				swf : ThinkPHP['UPLOADIFY'] + '/uploadify.swf',
				uploader : ThinkPHP['UPLOADER'],
				width : 120,
				height : 35,
				multi: false,
				fileTypeDesc : '图片类型',
				buttonCursor : 'pointer',
				buttonText : '上传图片',
				fileTypeExts : '*.jpeg; *.jpg; *.png; *.gif',
				fileSizeLimit : '1MB',
				overrideEvents : ['onSelectError','onSelect','onDialogClose'],  //自定义覆盖
				onSelectError: function(file, errorCode, errorMsg){ 
					switch(errorCode) {
						case -110: 
							$('#error').dialog('open').html('亲，您上传的图片请不要超过1M!');
							setTimeout(function() {
								$('#error').dialog('close').html('...');
							},1000);
							break;
					}
				},
				//限制上传数
				onUploadStart : function(){
					if (lee_pic.uploadTotal == 4) {
						$('#file_upload').uploadify('stop');
						$('#file_upload').uploadify('cancel');
						$('#error').dialog('open').html('站长比较抠，只允许上传1张图!');
						setTimeout(function() {
							$('#error').dialog('close').html('...');
						},1000);
					} else {
						$('.weibo_pic_list').append('<div class="weibo_pic_content"><span class="remove"></span><span class="text">删除</span><img src="' + ThinkPHP['IMG'] + '/loading.gif" class="weibo_pic_img" > </div>');
					}
				},
				onUploadSuccess : function (file, data, response) {
					$('.weibo_pic_list').append('<input type="hidden" class="images" name="images" value=' + data + '>');
					lee_pic.thumb(data);
					lee_pic.hover();
					lee_pic.remove();
					lee_pic.uploadTotal ++;
					lee_pic.uploadLimit --;
					$('.weibo_pic_total').text(lee_pic.uploadTotal);
					$('.weibo_pic_limit').text(lee_pic.uploadLimit);
				}
			});
		},
		thumb : function (src) {
			var img = $('.weibo_pic_img');
			var len = img.length;
			$(img[len - 1]).attr('src',IMG_URL+src+IMG_THUMB).fadeIn();
		},
		hover : function () {
			var content = $('.weibo_pic_content');
			var len = content.length;
			$(content[len - 1]).hover(function() {
				$(this).find('.remove').show();
				$(this).find('.text').show();
			},function() {
				$(this).find('.remove').hide();
				$(this).find('.text').hide();
			});
		},
		remove : function () {
			var remove = $('.weibo_pic_content .text');
			var len = remove.length;
			$(remove[len - 1]).on('click', function(){
				$(this).parent().next('input[name="images"]').remove();
				$(this).parent().remove();
				lee_pic.uploadTotal --;
				lee_pic.uploadLimit ++;
				$('.weibo_pic_total').text(lee_pic.uploadTotal);
				$('.weibo_pic_limit').text(lee_pic.uploadLimit);
			});
		},
		init : function () {
			$('#pic_btn').on('click', function() {
				var w = $(this).position();
				$('#pic_box').css({left:w.left-42,top:w.top+30}).show();
				lee_pic.uploadify();
			});
			/*绑定关闭按钮*/
			$('#pic_box a.close').bind('click',function(){
				$('#pic_box').hide();
			});
			// 点击其他位置，隐藏上传区域框
			$(document).on('click',function(e){
				var target = $(e.target);
				if( target.closest("#pic_btn").length == 1 || target.closest(".weibo_pic_content .text").length  == 1 )
					return;
				if( target.closest("#pic_box").length == 0 ){
					setTimeout(function(){
						$('#pic_box').hide();
					},100)
					
				}
			});

		},
	};
	lee_pic.init();
	//内部JS，外部无法访问，添加一个对外公共接口（window），用于外部访问
	window.uploadCount = {
		clear : function(){
			lee_pic.uploadTotal = 0;
			lee_pic.uploadLimit = 1;
		}
	}
	
	
	
	
	
	
	
	
})