<?php
namespace Home\Controller;
class DocumentController extends CommonController {

	
    public function index() {
        $this->assign('title','学习文档');
        $this->display();
    }

    public function es6() {
        $this->assign('title','ES6学习文档');
        $this->display();
    }

    public function java() {
        $this->assign('title','JAVA学习文档');
        $this->display();
    }

    public function enumjava() {
        $this->assign('title','JAVA·枚举');
        $this->display();
    }

    public function js() {
        $this->assign('title','JS学习文档');
        $this->display();
    }

    public function css3() {
        $this->assign('title','css3学习文档');
        $this->display();
    }


}




