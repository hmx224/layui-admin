<?php
/**
 * Created by PhpStorm.
 * UserController: ifanatic
 * Date: 2018/1/25
 * Time: 13:41
 */

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Request;
use Response;

class UserController extends Controller
{

    protected $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    public function dashboard()
    {
        return view('admin.user.index');
    }

    public function show()
    {
        return view('admin.user.index');
    }

    public function table()
    {
        $page = Request::get('page') ? Request::get('page') : 0;
        $limit = Request::get('limit') ? Request::get('limit') : 30;

        //前端传递的是page,第二页就让offset设置为0
        if ($page == 1) {
            $offset = 0;
        } else {
            $offset = $limit;
        }

        //返回列表接口
        $users = $this->user->getAllData($offset, $limit);

        $total = $this->user->userCount();

        $users->transform(function ($user) {
            $attributes = $user->getAttributes();
            foreach ($user->getDates() as $date) {
                $attributes[$date] = empty($user->$date) ? '' : $user->$date->toDateTimeString();
            }
            $attributes['sex'] = $user->getSexName();
            $attributes['blood_type'] = $user->getBloodTypeName();
            $attributes['emotion'] = $user->getEmotionState();
            $attributes['birthday'] = substr($user->birthday,0,10);
            $attributes['created_at'] = empty($user->created_at) ? '' : $user->created_at->toDateTimeString();
            $attributes['updated_at'] = empty($user->updated_at) ? '' : $user->updated_at->toDateTimeString();
            return $attributes;
        });

        return Response::json([
            'code' => 0,
            'msg' => '数据正常返回',
            'count' => $total,
            'data' => $users,
        ]);
    }
}