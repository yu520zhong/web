var IMG_URL = 'http://7xsqlc.com1.z0.glb.clouddn.com/';
var IMG_THUMB = '?imageView2/1/w/100/h/100';
var IMG_BIG_W = '?imageView2/2/w/840';
var IMG_BIG_H = '?imageView2/2/h/300';
var IMG_BIG_WI = '?imageView2/2/w/840/interlace/1';
var IMG_BIG_HI = '?imageView2/2/h/300/interlace/1';
/* ��ţͼƬ����ʽ	 */
/*�ü����в��֣��ȱ���С����200x200����ͼ��
http://78re52.com1.z0.glb.clouddn.com/resource/gogopher.jpg?imageView2/1/w/200/h/200;
��ȹ̶�Ϊ200px���߶ȵȱ���С������200x133����ͼ��
http://78re52.com1.z0.glb.clouddn.com/resource/gogopher.jpg?imageView2/2/w/200;
�߶ȹ̶�Ϊ200px����ȵȱ���С������300x200����ͼ��
http://78re52.com1.z0.glb.clouddn.com/resource/gogopher.jpg?imageView2/2/h/200
������ʾͼƬ��
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
	// js��ת���������ҳ��
	$('.go').click(function() {
		location.href = ThinkPHP['MODULE'] + '/other/search?keywords=' + $('.search').val();
	});
	//����ؼ�����ת
	$('.keywords').click(function() {
		location.href = ThinkPHP['MODULE'] + '/other/search?keywords=' + $('.keywords').text();
	});
	//������س���ת
	$('.search').bind('keypress',function(event) {
        if (event.keyCode == "13") {
            location.href = ThinkPHP['MODULE'] + '/other/search?keywords=' + $('.search').val();
        }
    });
})
