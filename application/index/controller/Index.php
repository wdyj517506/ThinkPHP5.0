<?php
namespace app\index\controller;

use think\Db;

class Index
{
    public function index()
    {
//        return 'hello wold!';
        var_dump(Db::name('teacher')->find());
    }
}
