<?php
namespace app\index\controller;

use think\Controller;
use think\Session;
use think\exception\HttpException;
use think\Db;

class Base extends Controller
{

    public function _initialize()
    {
        Session::start();
        header("Cache-control: private");  // history.back返回后输入框值丢失问题 参考文章 http://www.tp-shop.cn/article_id_1465.html  http://blog.csdn.net/qinchaoguang123456/article/details/29852881
        $this->session_id = session_id(); // 当前的 session_id
        define('SESSION_ID', $this->session_id); //将当前的session_id保存为常量，供其它方法调用
        if (strstr($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger')) {
            //分页
            /*$limit = 20;
            $list = Db::name('question')->paginate($limit);
            $cur = $list->currentPage();

            //数据
            $query = Db::table('question')->limit(($cur - 1) * $limit, $limit)->select();*/
        }
    }
    public function ajaxReturn($data){
        Header('Content-type:application/json; charset=UTF-8');
        if(is_string($data)) {
            $data = array(
                'msg'=> $data,
            );
        }
        exit(json_encode($data));
    }

}
