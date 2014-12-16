<?php
namespace Account\Controller;
use Think\Controller;
class RegisterController extends Controller {
    public function index(){
        if (IS_GET) {
            $this->display();
        } else if (IS_POST){
            $email = I('email/s', '', 'email');
            $password = I('password/s');
            
            $User = M('User');
            
            $this->success('注册成功');
        } else {
            $this->error('非法请求');
        }
    }
}
?>