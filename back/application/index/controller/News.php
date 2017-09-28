<?php
namespace app\index\controller;
use think\Controller;

class News extends Base
{
    public function index ()
    {
        $news = M('news')->select();
        $this->ajaxReturn($news);
    }

    public function detail ()
    {
        $id = I('id', 0);
        if(!$id)
            return false;
        $news = M('news')->where('id', $id)->find();
        $this->ajaxReturn($news);
    }
}