<?php
/**
 * Created by PhpStorm.
 * User: zsgy
 * Date: 2018/1/25
 * Time: 14:09
 */

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function getAllData($offset, $limit)
    {
        return User::own()
            ->skip($offset)
            ->limit($limit)
            ->get();
    }

    //用户的总数
    public function userCount()
    {
        return User::own()->get()->count();
    }



}