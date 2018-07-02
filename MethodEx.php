<?php
/**
 * Created by PhpStorm
 * PROJECT: 异常处理类重写
 * User: Doing<vip.dulin@gmial.com>
 * Date: 2018/7/1/
 * Desc:请求方式不正确
 */

namespace exception;

class MethodEx extends BaseException
{
    //HTTP 状态码：400，200，500...
    public $code = HttpCode::METHOD;
    //错误具体信息：最好用英文
    public $msg = ErrMsg::METHOD;
    //自定义的错误码
    public $errorCode = ErrorCode::METHOD;
    
}//class