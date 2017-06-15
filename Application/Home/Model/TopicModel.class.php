<?php
namespace Home\Model;
use Think\Model;

class TopicModel extends Model{

	//微博表自动验证
	protected $_validate = array(
		//注册时验证
		array('content','1,280','微博内容位数不合法（1~280位）',self::MUST_VALIDATE,'length',self::MODEL_INSERT),

	);


	//发布微博
	public function publish($content, $user_id, $images) {
		$data = array(
			'content'=>$content,
			'user_id'=>$user_id,
			'thumb'=>$images,
			'add_time'=>time(),
		);
		if ($this->create($data)) {
			$id = $this->add();
			$news = $this->table('__TOPIC__ a, __USER__ b')
					->field('a.id,a.content,a.add_time,a.user_id,a.thumb,b.id,b.username')
					->where(array('a.id' =>  $id,'b.id' => $user_id))->select();
					// $news[0]['add_time'] = date('Y-m-d H:i:s',$news[0]['add_time']);
					return $news;
		} else {
            $this->error('非法访问！');
        }
	}
	
	
	//获取微博列表
	public function getList($first, $total) {
		return $this->format($this->table('__TOPIC__ a, __USER__ b')
					->field('a.id,a.content,a.add_time,a.user_id,a.thumb,b.username')    //双表联查，两个之间有user_id关联
					->limit($first, $total)->order('add_time DESC')
					->where('a.user_id=b.id')->select());
	}
	
	//创建format方法，处理时间和表情，然后返回给getList()调用
	public function format($list) {
		foreach ($list as $key=>$value) {
			///帖子发表于**前 (时间戳与日期换算的应用)
			$time = time() - $list[$key]['add_time'];
			if ($time < 60) {
				$list[$key]['time'] = '刚刚发布';
			} else if ($time < 3600) {
				$list[$key]['time'] = floor($time / 60).'分钟之前';
			} else if (date('Y-m-d') == date('Y-m-d', $list[$key]['add_time'])) {
				$list[$key]['time'] = '今天'.date('H:i', $list[$key]['add_time']);
			} else if (date("Y-m-d",strtotime("-1 day")) == date('Y-m-d',$list[$key]['add_time'])) {
				$list[$key]['time'] = '昨天'.date('H:i', $list[$key]['add_time']);
			} else if ($time < 60 * 60 * 365) {
				$list[$key]['time'] = date('m月d日 H:i', $list[$key]['add_time']);
			} else {
				$list[$key]['time'] = date('Y年m月d日 H:i', $list[$key]['add_time']);
			} 
			//表情解析
			$list[$key]['content'] = preg_replace('/\[(a|b|c|d)_([0-9]+)\]/i', '<img src="'.__ROOT__.'/Public/'.MODULE_NAME.'/face/$1/$2.gif" style="border:none" >', $list[$key]['content']);
		}
		return $list;
	}
	
	
	
	
	
}