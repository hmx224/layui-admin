<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
        'nick_name',
        'user_name',
        'avatar_url',
        'city',
        'blood_type',
        'birthday',
        'sex',
        'points',
        'classify',
        'wealth',
        'sign',
        'mobile',
        'telephone',
        'weixin',
        'qq',
        'sina_weibo',
        'intro',
        'is_hidden'
    ];
    //性别
    const SEX_NONE = 1;
    const SEX_MALE = 2;
    const SEX_FEMALE = 3;
    //血型
    const BLOOD_TYPE_A = 1;
    const BLOOD_TYPE_B = 2;
    const BLOOD_TYPE_AB = 3;
    const BLOOD_TYPE_O = 4;
    //情感状况
    const EMOTION_NONE = 1;
    const EMOTION_UNMARRIED = 2;
    const EMOTION_MARRIED = 3;

    const SEX_NAME = [
        1 => '未知',
        2 => '男',
        3 => '女'
    ];

    const BLOOD_TYPE_NAME = [
        1 => 'A',
        2 => 'B',
        3 => 'AB',
        4 => 'O'
    ];

    const EMOTION_STATE_NAME = [
        1 => '未知',
        2 => '未婚',
        3 => '已婚'
    ];

    public function getSexName()
    {
        return array_key_exists($this->sex, self::SEX_NAME) ? self::SEX_NAME[$this->sex] : '';
    }

    public function getBloodTypeName()
    {
        return array_key_exists($this->blood_type, self::BLOOD_TYPE_NAME) ? self::BLOOD_TYPE_NAME[$this->blood_type] : '';
    }

    public function getEmotionState()
    {
        return array_key_exists($this->emotion, self::EMOTION_STATE_NAME) ? self::EMOTION_STATE_NAME[$this->emotion] : '';
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function scopeOwn($query)
    {
        return $query->where('is_hidden', 'F');
    }


}
