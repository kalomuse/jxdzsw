<?php
namespace app\index\controller;
use think\Controller;

class Index extends Base
{
    public function index ()
    {
        $banner = require(APP_PATH . '/admin/conf/banner.php');
        $cases = M('cases')->limit(6)->select();
        $product = M('product')->limit(6)->select();
        foreach ($product as &$p) {
            $p['first_img'] =  explode('||', $p['first_img'])[0];
        }
        foreach ($cases as &$b) {
            $b['file'] =  explode('||', $b['file'])[0];
        }
        $d_case = M('cases_category')->field('alias')->find();
        $d_product = M('product_category')->field('alias')->find();
        $return = array(
            'd_product' => isset($d_product)?$d_product['alias']: '',
            'd_case' => isset($d_case)?$d_case['alias']: '',
            'banner' => $banner,
            'cases' => $cases,
            'product' => $product
        );
        $this->ajaxReturn($return);
    }
}
