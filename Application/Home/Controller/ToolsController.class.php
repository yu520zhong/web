<?php
namespace Home\Controller;
class ToolsController extends CommonController {

	public function tools(){
        $Essay = D('Essay');
        $data['latest'] = $Essay->getLatest();
		$this->assign('title','我的工具箱');
        $this->assign($data);
		$this->display();
	}

	public function nav(){
        //实例化模型
        $Navs = D('Navs');

        $data['navs'] = $Navs->getByWhere('id IN(1,2,3,4,6,7,8,9,10)');
        $data['blog'] = $Navs->getByWhere('id=11');
        $data['tools'] = $Navs->getByWhere('id=5');

        $this->assign($data);
        $this->assign('title','工具库');
		$this->display();
	}

    public function readers(){
        $this->assign('title','读者墙');
        $this->display();
    }

    public function cssformat(){
        $this->assign('title','cssformat');
        $this->display();
    }

    public function jsformat(){
        $this->assign('title','JS/HTML格式化工具');
        $this->display();
    }

    public function showcode(){
        $this->assign('title','代码演示工具');
        $this->display();
    }

    public function mergely(){
        $this->assign('title','代码对比工具');
        $this->display();
    }


}




