<?php
namespace Home\Controller;
    $cache = new \Think\Cache;
$cache->getInstance()->clear();

//前台主页控制器
class IndexController extends CommonController {
    //首页
    //
	public function index(){
		//获取参数
		$p = I('get.p/d',0);     //当前页码
		$cid = I('get.cid/d',-1); //分类ID
		//实例化模型
		$Articles = D('Articles');
		$Categoryart = D('Categoryart');
		$Down = D('Down');
		$Essay = D('Essay');
		$Notes = D('Notes');
		$News = D('News');


		//如果分类ID大于0，则取出所有子分类ID
		$cids = ($cid>0) ? $Categoryart->getSubIds($cid) : $cid;
		//获取文章列表
        $data['articles'] = $Articles->indexList($cids,$p);  //获取文摘列表
        $data['tops'] = $Articles->getTops();  //获取推荐列表
		$data['down'] = $Down->getRecommend();
		$data['news'] = $News->getRecommend();
		$data['essay'] = $Essay->getRecommend(2);
		$data['notes'] = $Notes->getRecommend();
		$data['list'] = $Articles->field('id,name')->order('add_time asc')->limit(4)->select();
		//查询分类列表
		$data['categoryart'] = $Categoryart->getFamily($cid);
		$data['cid'] = $cid;
		$data['p'] = $p;
		$data['result'] = $this->joke();
		$this->assign($data);
		$this->display();
	}

	//joke 每日一笑
	public function joke() {
		$url = "http://japi.juhe.cn/joke/img/text.from";
		$params = array(
		      "sort" => "desc",//类型，desc:指定时间之前发布的，asc:指定时间之后发布的
		      "page" => "2",//当前页数,默认1
		      "pagesize" => "6",//每次返回条数,默认1,最大20
		      "time" => NOW_TIME,//时间戳（10位），如：1418816972
		      "key" => "e15b07f065f904c18673c0504d77a9f1",//您申请的key
		);
		$paramstring = http_build_query($params);
		$content = juhecurl($url,$paramstring);
		$result = json_decode($content,true);
		if($result){
		    if($result['error_code']=='0'){
		        return $data['result'] =  $result[result];
		    }else{
		        echo "";
		    }
		}else{
		    echo "";
		}
	}

	//Ajax获取文章列表
	public function ajaxList(){
		if (IS_AJAX) {
			$Articles = D('Articles');
			$count=$Articles->count();
			$rand=mt_rand(0,$count-1); //产生随机数。
			$limit=$rand.','.'4';
			$data = $Articles->order('add_time asc')->limit($limit)->select();
			$this->ajaxReturn($data,'JSON');
		} else {
            $this->error('非法访问！');
        }
    }

	//文章搜索页
	public function search() {
		//获取参数
		$p = I('get.p/d',0);    //当前页码
		$cid = I('get.cid/0',0);  //分类ID
		//实例化模型
		$Articles = D('Articles');
		$Categoryart = D('Categoryart');
	}

}
