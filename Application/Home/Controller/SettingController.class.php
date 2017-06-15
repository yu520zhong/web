<?php
namespace Home\Controller;

class SettingController extends HomeController {
    public function index(){
		if ($this->login()) {
			$this->display();
		}
    }
}