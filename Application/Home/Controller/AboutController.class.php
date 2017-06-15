<?php
namespace Home\Controller;
class AboutController extends CommonController {


    //关于我
    public function index() {
        //查询文章数据
        $sum['list1'] = M ('Notes')->count();
        $sum['list2'] = M ('Essay')->count();
        $sum['list3'] = M ('Down')->count();
        $sum['list4'] = M ('Articles')->count();
        $this->assign($sum);
        $this->display();

    }


}




