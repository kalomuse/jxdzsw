<?php
namespace app\index\controller;
use think\Controller;

class Index extends Base
{
    public function index ()
    {
        $banner = require(APP_PATH . '/admin/conf/banner.php');
        $cases = M('cases')->select();
        $product = M('product')->limit(6)->select();
        foreach ($product as &$p) {
            $p['first_img'] =  explode('||', $p['first_img'])[0];
        }
        foreach ($cases as &$b) {
            $b['file'] =  explode('||', $b['file'])[0];
        }
        $return = array(
            'banner' => $banner,
            'cases' => $cases,
            'product' => $product
        );
        $this->ajaxReturn($return);
    }
}
