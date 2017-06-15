<?php
namespace Home\Model;
use Think\Model;
class NavsModel extends Model {

	/**
	 * 查询栏目、导航，并把导航内容放入相对应的栏目
	 * @param array|int $id 分类ID
	 * @param $where 查询条件参数
	 * @return $result 查询结果
	 */

    public function getByWhere($where) {
        $Categorynavs = M('Categorynavs');
        $field = 'id,name';
        $result = $Categorynavs->field($field)->where($where)->select();
        foreach($result as $v=> $val){
            $result[$v]['navs'] = $this->where('category_id=\''.$val['id'].'\'')->select();
        }
        return $result;
    }

}