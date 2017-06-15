$(function () {
	$('#error').dialog({
		width : 500,
		height : 160,
		closeOnEscape : false,
		modal : true,
		title : '提示',
		resizable : false,
		draggable : false,
		autoOpen : false,
	})
    //微博内容AJAX提交
   /*  $("#discuz").validate({
        submitHandler: function(form) {

            $(form).ajaxSubmit({
                url : ThinkPHP['MODULE'] + '/Topic/publish',
                type : 'POST',
                clearForm:true,　//提交成功后清空表单中的字段值
            });
			var img = [];
			var images = $('input[name=images]');
			var len = image.length;
			for (var i = 0; i < len; i ++) {
				img[i] = images.eq(i).val();
				alert(img[i]);
			}
            alert("亲，您已提交成功，谢谢您的分享!");
        },
        rules : {
            content : {
                required : true,
                minlength : 2,
                maxlength : 280,
            },
        },
        messages : {
            content : {
                required : '亲，微博内容分享不能为空！',
                minlength : $.format('微博内容分享不能小于{0}位！'),
                maxlength : $.format('微博内容分享不能大于{0}位！'),
            },
        },


    }); */
	$('#Submit').click(function(){
		CheckLogin();  //base.js里面引入
	});
	$('.discuz_btn').button().click(function (e) {
		if ($('.discuz_text').val().length == 0) {
			alert("请输入微博内容");
			$('#error').html('请输入微博内容...').dialog('open');
			setTimeout(function () {
				$('#error').html('...').dialog('close');
				$('.discuz_text').focus();
			}, 1000);
		} else {
			if (weibo_num()) {
				$.ajax({
					url : ThinkPHP['MODULE'] + '/Topic/publish',
					type : 'POST',
					data : {
						content : $('.discuz_text').val(),
						images : $('.images').val()
					},
					beforeSend : function () {
						$('#error').html('微博发布中...').dialog('open');
					},
					success : function (data, response, status) {
						if (data.status == 200) {
							data = data.text[0];
							$('#error').html('微博发布成功...');
							$('.weibo_pic_content,input[name="images"]').remove();
							$('#pic_box').hide();
							$('.weibo_pic_total').text(0);
							$('.weibo_pic_limit').text(1); //发布成功后，图片数目恢复初始值
							window.uploadCount.clear();
							var html = '';
							if(status.status){
								//判断是否有图片
								if(data.thumb.length  > 0) {
									var imgStr = '<img src="'+IMG_URL+data.thumb+IMG_THUMB+'" >';
								}else{
									var imgStr ='';
								}

										html = '<div class="weibo_content_data clearfix">'+
											'<div class="col-xs-3 col-sm-2">' +
												'<a href="#"><img src="/shop/public/Home/img/small_face.jpg" border="0" alt="" class="face_pic"></a>'+
											'</div>'+
											'<div class="col-xs-9 col-sm-10">'+
												'<a class="title" href="#">' + data.username + '</a><span class="time">' + data.time + '</span>'+
												'<p>' + data.content + '</p>'+
												'<div class="img" style="display:block;">'+ imgStr +'</div>'+
													'<div class="wb_handle">'+
														'<span class="handler">赞(0) | <a href="javascript:void(0)" class="re">转播(0)</a> | <a href="javascript:void(0)" class="comment">评论</a> | 收藏</span>'+
														'<div class="re_box re_com_box" style="display:none;">'+
															'<p>表情、字数限制自行完成</p>'+
															'<textarea class="re_text re_com_text" name="commend"></textarea>'+
															'<input type="hidden" name="reid" value="204">'+
															'<input class="re_button ui-button ui-widget ui-state-default ui-corner-all" type="button" value="转播" role="button" aria-disabled="false">'+
														'</div>'+
														'<div class="com_box re_com_box" style="display:none;">'+
															'<p>表情、字数限制自行完成</p>'+
															'<textarea class="com_text re_com_text" name="commend"></textarea>'+
															'<input type="hidden" name="tid" value="204">'+
															'<input class="com_button ui-button ui-widget ui-state-default ui-corner-all" type="button" value="评论" role="button" aria-disabled="false">'+
														'<div class="comment_content">'+
														'</div>'+
													'</div>	'+
												'</div>'+
											'</div>'+
										'</div>';



							//JS 端表情解析
							html = html.replace(/\[(a|b|c|d)_([0-9]+)\]/g, '<img src="' + ThinkPHP['FACE'] + '/$1/$2.gif" style="border: none">');
								setTimeout(function () {
									$('.discuz_text').val('');
									$('#error').html('...').dialog('close');
									$('.discuz_content').prepend(html);
								}, 500);
							}
						}
					},
				});
			}
		}
	});


	//微博输入内容计算字个数
	$('.discuz_text').on('keyup', weibo_num);
	//微博输入内容得到交单计算字个数
	$('.discuz_text').on('focus', function () {
		setTimeout(function () {
			weibo_num();
		}, 50);
	});

	//140字检测
	function weibo_num() {
		var total = 280;
		var len = $('.discuz_text').val().length;
		var temp = 0;
		if (len > 0) {
			for (var i = 0; i < len; i++) {
				if ($('.discuz_text').val().charCodeAt(i) > 255) {
					temp += 2;
				} else {
					temp ++;
				}
			}
			var result = parseInt((total - temp)/2 - 0.5);
			if (result >= 0) {
				$('.weibo_num').html('您还可以输入<strong>' + result + '</strong>个字');
				return true;
			} else {
				$('.weibo_num').html('已经超过了<strong class="red">' + result + '</strong>个字');
				return false;
			}
		}
	}

	$.ajax({
		url : ThinkPHP['MODULE'] + '/Topic/ajaxCount',
		type : 'POST',
		success : function (data, response, status) {
				window.count = parseInt(data);  //topic模板传递过来的总页数
			},

	});
	//$(document).scrollTop() ： 浏览器当前窗口文档body的滚动高度
	//offset().top ： 是指元素与document的上边的距离，而不是浏览器当前窗体的上边缘
	//outerHeight : 用于获得包括内边界(padding)和边框(border)的元素宽度，如果outerWidth()方法的参数为true则外边界(margin)也会被包括进
	//$(window).height();        //浏览器当前窗口可视区域高度
	//  $('#loadmore').offset().top + $('#loadmore').outerHeight() - $(window).height()) ： #loadmore元素在文档body中位置的高度公式
	//ajax 滚动条拖动
	window.scrollFlag = true;  //避免多次滚动载入
	window.first = 10;
	window.page = 1;  //滚动的页数
	/* $(window).scroll(function () {
		if (window.scrollFlag) {
			if (window.page < window.count ) {
				if ($(document).scrollTop() >= ($('#loadmore').offset().top + $('#loadmore').outerHeight() - $(window).height() - 20 )){
					setTimeout(function(){
						$.ajax({
							url : ThinkPHP['MODULE'] + '/Topic/ajaxList',
							type : 'get',
							contentType: "application/json; charset=utf-8",
							data : {
								first : window.first,
							},
							success : function (data, response, status) {
								console.info(data);
								var list_html = '';
								$.each(data,function(index, val) {
									list_html += '<dl class="weibo_content_data">'+
													'<dt>'+
														'<a href="javascript:void(0)">'+
														'</a><a href="#"><img src="PUBLIC/Home/img/small_face.jpg" border="0" alt=""></a>'+
													'</dt>'+
													'<dd>'+
														'<h4>'+
															'<a href="#">'+val.username+'</a>'+
														'</h4>'+
														'<p>'+val.content+'</p>'+
														'<div class="img" style="display:block;">'+
															'<img src="'+val.thumb+'" ></if>'+
														'</div>'+
															'<div class="wb_handle">'+
																'<span class="time">'+val.time+'</span>'+
																'<span class="handler">赞(0) | <a href="javascript:void(0)" class="re">转播(0)</a> | <a href="javascript:void(0)" class="comment">评论</a> | 收藏</span>'+
																'<div class="re_box re_com_box" style="display:none;">'+
																	'<p>表情、字数限制自行完成</p>'+
																	'<textarea class="re_text re_com_text" name="commend"></textarea>'+
																	'<input type="hidden" name="reid" value="204">'+
																	'<input class="re_button ui-button ui-widget ui-state-default ui-corner-all" type="button" value="转播" role="button" aria-disabled="false">'+
																'</div>'+
																'<div class="com_box re_com_box" style="display:none;">'+
																	'<p>表情、字数限制自行完成</p>'+
																	'<textarea class="com_text re_com_text" name="commend"></textarea>'+
																	'<input type="hidden" name="tid" value="204">'+
																	'<input class="com_button ui-button ui-widget ui-state-default ui-corner-all" type="button" value="评论" role="button" aria-disabled="false">'+
																'<div class="comment_content">	'+
																'</div>'+
															'</div>'+
														'</div>'+
													'</dd>'+
												'</dl>';

								});
								$('#loadmore').before(list_html);
								window.first += 10;
								window.page += 1;
								window.scrollFlag = true;
							},
						});
					},500)
					window.scrollFlag = false;
				};
			} else {
				$('#loadmore').html("亲，已经到头啦！");
			}
		}
	}) */

	$('#loadmore').on('click', function() {
		if (window.scrollFlag) {
			if (window.page < window.count ) {
					setTimeout(function(){
						$.ajax({
							url : ThinkPHP['MODULE'] + '/Topic/ajaxList',
							type : 'get',
							contentType: "application/json; charset=utf-8",
							data : {
								first : window.first,
							},
							success : function (data, response, status) {
								//console.info(data);
								var list_html = '';
								$.each(data,function(index, val) {
									//判断是否有图片
									if(val.thumb.length  > 0) {
										var imgStr = '<img src="'+IMG_URL+val.thumb+IMG_THUMB+'" >';
									}else{
										var imgStr ='';
									}
									list_html += '<div class="weibo_content_data clearfix">'+
											'<div class="col-xs-3 col-sm-2">' +
												'<a href="#"><img src="/shop/public/Home/img/small_face.jpg" border="0" alt="" class="face_pic"></a>'+
											'</div>'+
											'<div class="col-xs-9 col-sm-10">'+
												'<a class="title" href="#">' + val.username + '</a><span class="time">' + val.time + '</span>'+
												'<p>' + val.content + '</p>'+
												'<div class="img" style="display:block;">'+ imgStr +'</div>'+
													'<div class="wb_handle">'+
														'<span class="handler">赞(0) | <a href="javascript:void(0)" class="re">转播(0)</a> | <a href="javascript:void(0)" class="comment">评论</a> | 收藏</span>'+
														'<div class="re_box re_com_box" style="display:none;">'+
															'<p>表情、字数限制自行完成</p>'+
															'<textarea class="re_text re_com_text" name="commend"></textarea>'+
															'<input type="hidden" name="reid" value="204">'+
															'<input class="re_button ui-button ui-widget ui-state-default ui-corner-all" type="button" value="转播" role="button" aria-disabled="false">'+
														'</div>'+
														'<div class="com_box re_com_box" style="display:none;">'+
															'<p>表情、字数限制自行完成</p>'+
															'<textarea class="com_text re_com_text" name="commend"></textarea>'+
															'<input type="hidden" name="tid" value="204">'+
															'<input class="com_button ui-button ui-widget ui-state-default ui-corner-all" type="button" value="评论" role="button" aria-disabled="false">'+
														'<div class="comment_content">'+
														'</div>'+
													'</div>	'+
												'</div>'+
											'</div>'+
										'</div>';

								});
								$('#loadmore').before(list_html);
								window.first += 10;
								window.page += 1;
								window.scrollFlag = true;
							},
						});
					},50)
					window.scrollFlag = false;
			} else {
				$('#loadmore').html("亲，已经到头啦！");
			}
		}
	})




    /* //图片上传
    $("#file_upload").uploadify({
        swf : ThinkPHP['UPLOADIFY'] + '/uploadify.swf',
        uploader : ThinkPHP['UPLOADER'],
		width : 85,
		height: 32,
        fileTypeDesc : '图片类型',
		buttonCursor: 'pointer',
		buttonText: '上传图片',
        fileTypeExts : '*.jpeg; *.jpg; *.png; *.gif',
        onUploadSuccess : function (file, data, response) {
            alert(data);
        }
    }); notes:移动到lee_pic.js里面了,当点击图片上传时才出现 */



})