<?php

namespace App\Traits;

use App\Repositories\ErrorCodesRepositoryEloquent;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;

trait ApiResponse
{
    public function apiResponse($errCode = 1, $data = [], $meta = null, $errMsg = null): Response|Application|ResponseFactory
    {
        $resp = [
            'errCode' => $errCode,
            'errMsg'  => $errMsg ?? ErrorCodesRepositoryEloquent::getErrMsg($errCode),
            'data'    => $data
        ];
        if (!empty($meta)) {
            $resp = Arr::add($resp, 'meta', $meta);
        }
        return response($resp);
    }
}
