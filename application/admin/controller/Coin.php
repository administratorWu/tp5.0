<?php
namespace app\admin\controller;

use app\admin\model\User as Users;

class User
{
    public function test()
    {
        $list = Users::where(['id'=>1])->value('username');
        dump($list);
        exit;

        $str = '111';
        return view('admin/User/UserList',['title'=>'会员列表','str'=>$str]);
    }
}