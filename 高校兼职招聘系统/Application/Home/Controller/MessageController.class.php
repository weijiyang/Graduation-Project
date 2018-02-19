<?php
namespace Home\Controller;
use Think\Controller;
class MessageController extends Controller {
	public function personal(){
		$this->show();
	}
	public function postoffice(){
		$this->show();
	}
}