<?php

namespace App\Repositories;

class ErrorCodesRepositoryEloquent
{
    const ERROR_CODE_OK = 1;

    const ERROR_CODE_UNAUTHORIZED = 40001;
    const ERROR_CODE_FORBIDDEN = 40003;
    const ERROR_CODE_NOT_FOUND = 40004;
    const ERROR_CODE_INVALID_PARAM = 40011;
    const ERROR_CODE_EXISTS_DATA = 40012;

    const ERROR_CODE_SYSTEM_ERROR = 50000;

    const ERROR_CODE_LOGIN_FAIL = 90014;
    public static array $errMsg = [
        self::ERROR_CODE_OK => 'success',
        self::ERROR_CODE_LOGIN_FAIL => '登录失败，账号或密码错误',
        self::ERROR_CODE_UNAUTHORIZED => '用户鉴权失败',
        self::ERROR_CODE_FORBIDDEN => '无访问权限',
        self::ERROR_CODE_NOT_FOUND => '请求资源不存在',
        self::ERROR_CODE_INVALID_PARAM => '参数错误',
        self::ERROR_CODE_EXISTS_DATA => '数据已存在',
        self::ERROR_CODE_SYSTEM_ERROR => '服务器出错'
    ];

    public static function getErrMsg($errCode = 1)
    {
        return self::$errMsg[$errCode] ?? 'invalid errCode';
    }
}
