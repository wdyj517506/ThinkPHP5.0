<?php
namespace app\index\controller;
use think\Db;

class Teacher
{
    public function index()
    {
        $theachers = Db::name('teacher')->select();
//        return 'hello Teacher!';
        var_dump($theachers);
    }
}