var IMG_URL = 'http://7xsqlc.com1.z0.glb.clouddn.com/';
var IMG_THUMB = '?imageView2/1/w/100/h/100';
var IMG_BIG_W = '?imageView2/2/w/840';
var IMG_BIG_H = '?imageView2/2/h/300';
var IMG_BIG_WI = '?imageView2/2/w/840/interlace/1';
var IMG_BIG_HI = '?imageView2/2/h/300/interlace/1';
/* 七牛图片处理方式	 */
/*裁剪正中部分，等比缩小生成200x200缩略图：
http://78re52.com1.z0.glb.clouddn.com/resource/gogopher.jpg?imageView2/1/w/200/h/200;
宽度固定为200px，高度等比缩小，生成200x133缩略图：
http://78re52.com1.z0.glb.clouddn.com/resource/gogopher.jpg?imageView2/2/w/200;
高度固定为200px，宽度等比缩小，生成300x200缩略图：
http://78re52.com1.z0.glb.clouddn.com/resource/gogopher.jpg?imageView2/2/h/200
渐进显示图片：
http://78re52.com1.z0.glb.clouddn.com/resource/gogopher.jpg?imageView2/1/w/200/h/200/interlace/1 */
	
function CheckLogin() {
	$.ajax({
		url: ThinkPHP['MODULE'] + '/Session/session',
		type : 'POST',
		success :  function (data) {
			console.log(data);
			if (data.status == 404) {
				$('#error').html(data.message).dialog('open');
			}
		}
	});
}

$(function() {
	// js跳转到搜索结果页面
	$('.go').click(function() {
		location.href = ThinkPHP['MODULE'] + '/other/search?keywords=' + $('.search').val();
	});
	//点击关键词跳转
	$('.keywords').click(function() {
		location.href = ThinkPHP['MODULE'] + '/other/search?keywords=' + $('.keywords').text();
	});
	//搜索框回车跳转
	$('.search').bind('keypress',function(event) {
        if (event.keyCode == "13") {
            location.href = ThinkPHP['MODULE'] + '/other/search?keywords=' + $('.search').val();
        }
    });
})
