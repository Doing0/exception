<?php
/**
 * Created by PhpStorm
 * PROJECT: 异常处理类重写
 * User: Doing<vip.dulin@gmial.com>
 * Date: 2018/7/1/
 * Desc:角色导致权限不足(数据冻结等也算)
 */

namespace exception;

class AuthEx extends BaseException
{
    //HTTP 状态码：400，200，500...
    public $code = HttpCode::AUTH;
    //错误具体信息：最好用英文
    public $msg = ErrMsg::AUTH;
    //自定义的错误码
    public $errorCode = ErrorCode::AUTH;
    
}//class