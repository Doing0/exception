<?php
/**
 * Created by PhpStorm
 * PROJECT: 异常处理类重写
 * User: Doing<vip.dulin@gmial.com>
 * Date: 2018/7/1/
 * Desc:身份验证(下一步就是登陆操作)
 */

namespace exception;

class TokenEx extends BaseException
{
    //HTTP 状态码：400，200，500...
    public $code = HttpCode::TOKEN;
    //错误具体信息：最好用英文
    public $msg = ErrMsg::TOKEN;
    //自定义的错误码
    public $errorCode = ErrorCode::TOKEN;
    
}//class