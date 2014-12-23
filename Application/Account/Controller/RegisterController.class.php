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
            
            try{
                $User = M('User');
            }catch(Exception $e){
                echo 'Caught exception: ', $e->getMessage(), "\n";
            }
            
            $this->success($User.$email);
        } else {
            $this->error('非法请求');
        }
    }
}
?>