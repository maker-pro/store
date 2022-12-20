<?php

namespace app\controller;

use app\Request;
use think\facade\Request as FacadeRequest;

class Learn
{
    public function index(Request $request)
    {
        // 获取参数的方式： 第二种
        dump($request->param('a', 2, 'intval'));

        // 获取参数的方式： 第三种
        dump(input('a', 2, 'md5'));

        // 获取参数的方式： 第四种
        dump(request()->param('a', 2, 'md5'));

        // 获取参数的方式： 第五种
        dump(FacadeRequest::param('a', 2, 'md5'));

        dump($request->isGet());
        dump($request->isPost());
    }
}
