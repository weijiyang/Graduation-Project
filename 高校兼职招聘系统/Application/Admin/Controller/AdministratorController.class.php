<?php
namespace Admin\Controller;
use Think\Controller;
class AdministratorController extends Controller {
    public function common(){
        $this->show();
    }
    public function userlist(){
        $this->show();
    }
    public function index(){
    	$this->show();
    }
    public function companylist(){
    	$this->show();
    }
}