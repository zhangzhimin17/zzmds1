<?php
namespace app\user\controller;

use think\Db;

class Index{
    public function all(){
        $data = Db::table('users')->select();

        dump($data);
    }
}