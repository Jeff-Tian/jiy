<?php
namespace Debug\Controller;
use Think\Controller;
class MySqlController extends Controller {
    public function index(){
        if (IS_GET){
            $this->display();
        }else{
            $this->error('非法请求');
        }
    }
}