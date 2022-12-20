<?php
namespace app\controller;

use app\BaseController;

class Demo extends BaseController
{
    public function show()
    {
        $arr = [
            'code' => 200,
            'msg' => '',
            'data' => [
                ['id' => 1, 'name' => 'joe', 'age' => 20],
                ['id' => 2, 'name' => 'jack', 'age' => 22]
            ]
        ];
        $herder = [
            'Token' => md5(time())
        ];
        return json($arr, 200, $herder);
    }

    public function request() {
        // 获取参数的方式： 第一种
        dump($this->request->get('a', 2, 'md5'));
    }
}
