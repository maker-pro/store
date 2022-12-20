<?php
/**
 * Error.php
 * User: Joe
 * Date: 2022/12/20
 * Time: 16:53
 */

namespace app\controller;

class Error {
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        $result = [
            'status' => 0,
            'message' => '找不到该控制器',
            'result' => null
        ];
        return json($result, 400);
    }
}