<?php
namespace app\index\controller;
use think\Controller;

class Cases extends Base
{
    public function index ()
    {
        $cases = M('cases')->select();
        foreach ($cases as &$p) {
            $p['file'] =  explode('||', $p['file'])[0];
        }
        $this->ajaxReturn($cases);
    }
}
