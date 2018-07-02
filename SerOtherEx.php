<?php
/**
 * Created by PhpStorm
 * PROJECT: 异常处理类重写
 * User: Doing<vip.dulin@gmial.com>
 * Date: 2018/7/1/
 * Desc:第三方异常
 */

namespace exception;

class SerOtherEx extends BaseException
{
    //HTTP 状态码：400，200，500...
    public $code = HttpCode::SER_OTHER;
    //错误具体信息：最好用英文
    public $msg = ErrMsg::SER;
    //自定义的错误码
    public $errorCode = ErrorCode::SER_OTHER;
    
}//class