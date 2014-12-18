<?php
namespace Debug\Controller;
use Think\Controller;
class PhpInfoController extends Controller {
    public function index(){
        if (IS_GET){
            phpinfo();
        }else {
            $this->error('非法请求');
        }
    }
}
?>