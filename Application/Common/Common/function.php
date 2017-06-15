<?php

/**
 * 商品列表过滤项的URL生成
 * @param $type 生成的URL类型（cid, price, order)
 * @parma $data 相应的数据当前的值（为空表示清除该参数）
 * @return string 生成好的携带正确参数的URL
 */
function mkFilterURL($type, $data='') {
	$params = I('get.');
	unset($params['p']);  //先清除分页
	if($type=='cid') unset($params['price']); //切换分类时清除价格
	if($data){   //添加到参数
		$params[$type] = $data;
	}else{       //$data为空时清除参数
		unset($params[$type]);
	}
	return U('Goods/index',$params);
}
function blogmkFilterURL($type, $data='') {
	$params = I('get.');
	unset($params['p']);  //先清除分页
	if($type=='cid') unset($params['price']); //切换分类时清除价格
	if($data){   //添加到参数
		$params[$type] = $data;
	}else{       //$data为空时清除参数
		unset($params[$type]);
	}
	return U('Blog/index',$params);
}
function indexFilterURL($type, $data='') {
	$params = I('get.');
	unset($params['p']);  //先清除分页
	if($type=='cid') unset($params['price']); //切换分类时清除价格
	if($data){   //添加到参数
		$params[$type] = $data;
	}else{       //$data为空时清除参数
		unset($params[$type]);
	}
	return U('Index/index',$params);
}

function downmkFilterURL($type, $data='') {
    $params = I('get.');
    unset($params['p']);  //先清除分页
    if($type=='cid') unset($params['price']); //切换分类时清除价格
    if($data){   //添加到参数
        $params[$type] = $data;
    }else{       //$data为空时清除参数
        unset($params[$type]);
    }
    return U('Down/index',$params);
}

function documentFilterURL($type, $data='') {
    $params = I('get.');
    unset($params['p']);  //先清除分页
    if($type=='cid') unset($params['price']); //切换分类时清除价格
    if($data){   //添加到参数
        $params[$type] = $data;
    }else{       //$data为空时清除参数
        unset($params[$type]);
    }
    return U('Document/index',$params);
}

function notemkFilterURL($type, $data='') {
	$params = I('get.');
	unset($params['p']);  //先清除分页
	if($type=='cid') unset($params['price']); //切换分类时清除价格
	if($data){   //添加到参数
		$params[$type] = $data;
	}else{       //$data为空时清除参数
		unset($params[$type]);
	}
	return U('Notes/index',$params);
}

function essaymkFilterURL($type, $data='') {
	$params = I('get.');
	unset($params['p']);  //先清除分页
	if($type=='cid') unset($params['price']); //切换分类时清除价格
	if($data){   //添加到参数
		$params[$type] = $data;
	}else{       //$data为空时清除参数
		unset($params[$type]);
	}
	return U('Essay/index',$params);
}

function newsmkFilterURL($type, $data='') {
	$params = I('get.');
	unset($params['p']);  //先清除分页
	if($type=='cid') unset($params['price']); //切换分类时清除价格
	if($data){   //添加到参数
		$params[$type] = $data;
	}else{       //$data为空时清除参数
		unset($params[$type]);
	}
	return U('News/index',$params);
}


//通过开源组件 HTML Purifier 过滤富文本
//该函数用于在后台编辑商品详情时过滤富文本，过滤后保存到数据库中。
function htmlpurifier($html){
	static $Purifier;
	if(empty($Purifier)){
		//载入第三方类库
		if(!Vendor('htmlpurifier.HTMLPurifier','','.standalone.php')){
			die('载入 HTMLPurifier 类库失败！');
		}
		$Purifier = new HTMLPurifier($html);
	}
	return $Purifier->purify($html);
}

//---------分类处理函数

//获取一维数组分类列表
function category_list($data,&$rst,$pid=0,$level=0){
	foreach($data as $v){
		if($v['pid'] == $pid){
			$v['level'] = $level; //保存分类级别
			$rst[] = $v;          //保存符合条件的元素
			category_list($data,$rst,$v['id'],$level+1); //递归
		}
	}
}

//根据任意分类ID查找子孙分类ID
function category_child($data,&$rst,$id=0){
	foreach($data as $v){
		if($v['pid'] == $id){
			$rst[] = (int)$v['id'];
			category_child($data,$rst,$v['id']);
		}
	}
}

//按父子关系转换分类为多维数组
function category_tree($data,$pid=0,$level=0){
	$temp = $rst = array();
	foreach($data as $v) $temp[$v['id']] = $v;
	foreach($temp as $v){
		if(isset($temp[$v['pid']])){
			$temp[$v['pid']]['child'][] = &$temp[$v['id']];
		}else{
			$rst[] = &$temp[$v['id']];
		}
	}
    return $rst;
}

//查找分类的家谱
function category_family($data,$id){
	$rst = category_parent($data,$id);
	foreach(array_reverse($rst['pids']) as $v){
		foreach($data as $vv){
			($vv['pid']==$v) && $rst['parent'][$v][] = $vv;
		}
	}
	return $rst;
}

//根据任意分类ID查找父分类（包括自己）
function category_parent($data,$id=0){
	$rst = array('pcat'=>array(),'pids'=>array($id));
	for($i=0;$id && $i<10;++$i){  //最多10层，防止意外死循环
		foreach($data as $v){
			if($v['id']==$id){
				$rst['pcat'][] = $v;  //父分类
				$rst['pids'][] = $id = $v['pid']; //父分类ID
			}
		}
	}
	return $rst;
}
function Qiniu_Encode($str) // URLSafeBase64Encode
{
    $find = array('+', '/');
    $replace = array('-', '_');
    return str_replace($find, $replace, base64_encode($str));
}


function Qiniu_Sign($url) {//$info里面的url
    $setting = C ( 'UPLOAD_SITEIMG_QINIU' );
    $duetime = NOW_TIME + 86400;//下载凭证有效时间
    $DownloadUrl = $url . '?e=' . $duetime;
    $Sign = hash_hmac ( 'sha1', $DownloadUrl, $setting ["driverConfig"] ["secrectKey"], true );
    $EncodedSign = Qiniu_Encode ( $Sign );
    $Token = $setting ["driverConfig"] ["accessKey"] . ':' . $EncodedSign;
    $RealDownloadUrl = $DownloadUrl . '&token=' . $Token;
    return $RealDownloadUrl;
}

//字符串截断+省略号
function subtext($text, $length) {
    if(mb_strlen($text, 'utf8') > $length)
    return mb_substr($text, 0, $length, 'utf8').'...';
    return $text;
}

function truncate_cn($string,$length=0,$ellipsis='…',$start=0){
    $string=strip_tags($string);
    $string=preg_replace('/\n/is','',$string);
    //$string=preg_replace('/ |　/is','',$string);//清除字符串中的空格
    $string=preg_replace('/ /is','',$string);
    preg_match_all("/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/",$string,$string);
    if(is_array($string)&&!empty($string[0])){
        $string=implode('',$string[0]);
        if(strlen($string)<$start+1){
            return '';
        }
        preg_match_all("/./su",$string,$ar);
        $string2='';
        $tstr='';
        //www.phpernote.com
        for($i=0;isset($ar[0][$i]);$i++){
            if(strlen($tstr)<$start){
                $tstr.=$ar[0][$i];
            }else{
                if(strlen($string2)<$length+strlen($ar[0][$i])){
                    $string2.=$ar[0][$i];
                }else{
                    break;
                }
            }
        }
        return $string==$string2?$string2:$string2.$ellipsis;
    }else{
        $string='';
    }
    return $string;
}