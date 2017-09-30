<?php
namespace app\index\controller;

class Company extends Base
{
    public function index ()
    {
        $info = M('company')->field('name, value')->select();
        $top = require(APP_PATH . '/admin/conf/top.php');
        $return = array(
            'info' => $info,
            'top' => $top[0]['path']
        );
        $this->ajaxReturn($return);
    }
}
