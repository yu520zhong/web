<?php
namespace Home\Controller;
//历史的今天
class HistoryController extends CommonController {




    //************1.事件列表************
    public function index() {
        $url = "http://api.juheapi.com/japi/toh";
        $params = array(
              "key" => '304c8bf27bad60485c160d2f725d4252',//应用APPKEY(应用详细页查询)
              "v" => "1.0",//版本，当前：1.0
              "month" => date('m'),//月份，如：10
              "day" => date('d'),//日，如：1
        );
        $paramstring = http_build_query($params);
        $content = juhecurl($url,$paramstring);
        $result = json_decode($content,true);
        if($result){
            if($result['error_code']=='0'){
                $data['history'] = $result[result];
            }else{
                echo $result['error_code'].":".$result['reason'];
            }
        }else{
            echo "请求失败";
        }

        //调用二维数组函数根据字段进行重排序
        $data['history'] = arraySequence($data['history'],'_id','SORT_DESC');
        $this->assign('history',$data['history']);
        $this->display();

    }

    //返回数据给前台ajax调用,为了SEO，暂时注释
    /*
    public function index() {
        $this->display();
    }

    public function history() {
        $url = "http://api.juheapi.com/japi/toh";
		$params = array(
		      "key" => '304c8bf27bad60485c160d2f725d4252',//应用APPKEY(应用详细页查询)
		      "v" => "1.0",//版本，当前：1.0
		      "month" => date('m'),//月份，如：10
		      "day" => date('d'),//日，如：1
		);
		$paramstring = http_build_query($params);
		$content = juhecurl($url,$paramstring);
		$result = json_decode($content,true);
		if($result){
		    if($result['error_code']=='0'){
		        $this->ajaxReturn($result,'JSON');
		    }else{
		        echo $result['error_code'].":".$result['reason'];
		    }
		}else{
		    echo "请求失败";
		}

    }*/
}