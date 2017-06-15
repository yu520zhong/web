/* ===== Tooltips ===== */

$('#tooltip').tooltip();
$(function() {
	$('#order').click(function(){
		CheckLogin();  //base.js里面引入
	});

	// js跳转到搜索结果页面
	$('#Go').click(function() {
		location.href = ThinkPHP['MODULE'] + '/other/search?keywords=' + $('#keywords').val();
	});
	$('#serch').click(function() {
		location.href = ThinkPHP['MODULE'] + '/other/search?keywords=' + $('#keys').val();
	});
	//搜索框回车跳转
	$('#keywords').bind('keypress',function(event) {
        if (event.keyCode == "13") {
            location.href = ThinkPHP['MODULE'] + '/other/search?keywords=' + $('#keywords').val();
        }
    });
    $('#keys').bind('keypress',function(event) {
        if (event.keyCode == "13") {
            location.href = ThinkPHP['MODULE'] + '/other/search?keywords=' + $('#keys').val();
        }
    });

	//点击资讯随机切换
	$('#ChangBtn').click(function(){
		$.ajax({
			url : ThinkPHP['MODULE'] + '/Index/ajaxList',
			type : 'get',
			contentType: "application/json; charset=utf-8",
			success : function (data, response, status) {
				console.info(data);
				var list_html = '';
				$.each(data,function(index, val) {
					list_html += 	'<li>'+
										'<a href="/shop/Index/articles/id/'+val.id+'.html">'+ val.name+'</a>'+
									'</li>';

					/* '<dl class="weibo_content_data">'+
									'<dt>'+
										'<a href="javascript:void(0)">'+
										'</a><a href="#"><img src="PUBLIC/Home/img/small_face.jpg" border="0" alt=""></a>'+
									'</dt>'+
									'<dd>'+
										'<h4>'+
											'<a href="#">'+val.username+'</a>'+
										'</h4>'+
										'<p>'+val.content+'</p>'+
										'<div class="img" style="display:block;">'+imgStr+'</div>'+
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
								'</dl>'; */

				});
				$('.ex_menu').html(list_html);
				window.first += 10;
				window.page += 1;
				window.scrollFlag = true;
			},
		});
	});
} )