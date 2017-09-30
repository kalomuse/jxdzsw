<?php
namespace app\index\controller;
use think\Controller;

class Product extends Base
{
    public function index ()
    {
        $query = array(
            'type' => I('type', ''),
            'deleted' => 0
        );
        if($query['type'])
            $product = M('product')->where($query)->select();
        else
            $product = M('product')->select();

        foreach ($product as &$p) {
            $p['first_img'] =  explode('||', $p['first_img'])[0];
        }
        $category = M('product_category')->select();
        $return = array(
            'category' => $category,
            'product' => $product
        );
        $this->ajaxReturn($return);
    }
    public function detail() {
        $id = I('id', 0);
        if(!$id)
            return false;
        $query = array(
            'id' => $id
        );
        $product = M('product')->where($query)->find();
        $detail_imgs =  explode(',', $product['detail']);
        $imgs = array();
        foreach ($detail_imgs as $d) {
            $imgs[] = explode('||', $d)[0];
        }
        $product['detail'] = $imgs;
        $product['first_img'] =  explode('||', $product['first_img'])[0];
        $this->ajaxReturn($product);
    }
}
