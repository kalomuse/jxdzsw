<?php
namespace app\index\controller;
use think\Controller;

class Message extends Base
{
    public function index ()
    {
        $mobile = I('mobile', '');
        $email = I('email', '');
        $content = I('content', '');
        if(!$mobile && !$email)
            $this->ajaxReturn(array('status'=>'err', 'msg'=>'请输入联系方式'));
        if(!$content)
            $this->ajaxReturn(array('status'=>'err', 'msg'=>'请输入内容'));

        $set = array(
            'email' => $email,
            'mobile' => $mobile,
            'content' => $content,
        );
        M('message')->insert($set);
        $this->ajaxReturn(array('status'=>'ok', 'msg'=>'插入成功'));
    }
}
