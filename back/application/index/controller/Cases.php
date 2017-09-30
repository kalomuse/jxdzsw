<?php
namespace app\index\controller;
use think\Controller;

class Cases extends Base
{
    public function index ()
    {
        $query = array(
            'type' => I('type', ''),
            'deleted' => 0
        );
        if($query['type'])
            $cases = M('cases')->where($query)->select();
        else
            $cases = M('cases')->select();
        foreach ($cases as &$p) {
            $p['file'] =  explode('||', $p['file'])[0];
        }
        $category = M('cases_category')->select();
        $return = array(
            'category' => $category,
            'cases' => $cases
        );
        $this->ajaxReturn($return);
    }
}
