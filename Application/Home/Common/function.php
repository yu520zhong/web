<?php

function getArrayField($id, $arr, $field = 'name') {
    if ($id > 0) {
        if ($field != '') {
            foreach ($arr as $v) {
                if ($v['id'] == $id) {
                    return $v[$field];
                    break;
                }
            }
        } else {
            return $arr[$id];
        }
    }
}

function getArrayOne($id, $arr) {
    if ($id > 0) {
        foreach ($arr as $k => $v) {
            if ($k == $id) {
                return $v;
                break;
            }
        }
    }
}

function getUrlJson($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    $lists = json_decode($output, true);
    return $lists;
}

function getCodeJson($data, $func, $site_code = "rebatesme", $mtype = "") {
    $site_code = $site_code ? $site_code : "rebatesme";
    $key = getSiteKey($site_code);

    $data_json = json_encode($data, JSON_UNESCAPED_SLASHES);
    $beforeCheck = $site_code . $data_json . $key;
    $check_code = md5($beforeCheck);
    if ($mtype == 1) {
        $url_func = "customer";
    } else if ($mtype == 10) {
        $url_func = "lottery";
    } else {
        $url_func = "coupon";
    }
    $url = C("url_service") . $url_func . "/" . $func . "?siteCode=" . $site_code . "&data=" . urlencode($data_json) . "&checkCode=" . $check_code . "";
    if ($func == 'getRewardInfo') {
//      echo $url;exit;
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    $lists = json_decode($output, true);
    return $lists;
}

function getSiteKey($site_code) {
    $site_key = "950eb1c9c6395a1a24cf7032dc8dec3d";
    switch ($site_code) {
        case "zhuanyun":
            $site_key = "2451589652WDESRFTG25GTFR562356ED";
            break;
    }
    return $site_key;
}

function sendPhoneCode($phone) {
    $data = array('slug' => 'test', 'uniqueUserId' => '1', 'phone' => $phone, 'type' => 'DynamicDigital');
    $arr = getCodeJson2($data, 'sendMessage', "rebatesme", 3);
    return $arr;
}

function getCodeJson2($data, $func, $site_code = "rebatesme", $mtype = "") {
    $site_code = $site_code ? $site_code : "rebatesme";
    $key = getSiteKey($site_code);

    $data_json = json_encode($data, JSON_UNESCAPED_SLASHES);
    $beforeCheck = $site_code . $data_json . $key;
    $check_code = md5($beforeCheck);
    if ($mtype == 2) {
        $url_func = "user";
    } elseif ($mtype == 3) {
        $url_func = "msg";
    } elseif ($mtype == 4) {//URL跟踪数据提交
        $url_func = "advTracking";
    } elseif ($mtype == 5) {//URL跟踪数据提交
        $url_func = "specialTopic";
    } else {
        $url_func = "coupon";
    }
    $url = "http://service.mtgdfs.com/mtgservice/rest/" . $url_func . "/" . $func . "?siteCode=" . $site_code . "&data=" . urlencode($data_json) . "&checkCode=" . $check_code . "";
    if ($func == 'sendMessage') {
        //echo $url;exit;
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    $lists = json_decode($output, true);
    return $lists;
}

function hideStar($str) { //支付宝、邮箱、手机账号中间字符串以*隐藏
    if (strpos($str, '@')) {
        $email_array = explode("@", $str);
        $prevfix = (strlen($email_array[0]) < 4) ? "" : substr($str, 0, 3); //邮箱前缀
        $count = 0;
        $str = preg_replace('/([\d\w+_-]{0,100})@/', '***@', $str, -1, $count);
        $rs = $prevfix . $str;
    } else {
        $pattern = '/(1[3458]{1}[0-9])[0-9]{4}([0-9]{4})/i';
        if (preg_match($pattern, $str)) {
            $rs = preg_replace($pattern, '$1****$2', $str); // substr_replace($name,'****',3,4);
        } else {
            $rs = substr($str, 0, 3) . "***" . substr($str, -1);
        }
    }
    return $rs;
}

/**
 * 请求接口返回内容
 * @param  string $url [请求的URL地址]
 * @param  string $params [请求的参数]
 * @param  int $ipost [是否采用POST形式]
 * @return  string
 */
function juhecurl($url,$params=false,$ispost=0){
    $httpInfo = array();
    $ch = curl_init();

    curl_setopt( $ch, CURLOPT_HTTP_VERSION , CURL_HTTP_VERSION_1_1 );
    curl_setopt( $ch, CURLOPT_USERAGENT , 'JuheData' );
    curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT , 60 );
    curl_setopt( $ch, CURLOPT_TIMEOUT , 60);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER , true );
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    if( $ispost )
    {
        curl_setopt( $ch , CURLOPT_POST , true );
        curl_setopt( $ch , CURLOPT_POSTFIELDS , $params );
        curl_setopt( $ch , CURLOPT_URL , $url );
    }
    else
    {
        if($params){
            curl_setopt( $ch , CURLOPT_URL , $url.'?'.$params );
        }else{
            curl_setopt( $ch , CURLOPT_URL , $url);
        }
    }
    $response = curl_exec( $ch );
    if ($response === FALSE) {
        //echo "cURL Error: " . curl_error($ch);
        return false;
    }
    $httpCode = curl_getinfo( $ch , CURLINFO_HTTP_CODE );
    $httpInfo = array_merge( $httpInfo , curl_getinfo( $ch ) );
    curl_close( $ch );
    return $response;
}

/**
 * 二维数组根据字段进行排序
 * @params array $array 需要排序的数组
 * @params string $field 排序的字段
 * @params string $sort 排序顺序标志 SORT_DESC 降序；SORT_ASC 升序
 */
 function arraySequence($array, $field, $sort = 'SORT_DESC')
{
    $arrSort = array();
    foreach ($array as $uniqid => $row) {
        foreach ($row as $key => $value) {
            $arrSort[$key][$uniqid] = $value;
        }
    }
    array_multisort($arrSort[$field], constant($sort), $array);
    return $array;
}
