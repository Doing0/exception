<?php
/**
 * Created by PhpStorm
 * PROJECT: 异常处理类重写
 * User: Doing<vip.dulin@gmial.com>
 * Date: 2018/7/1/
 * Desc:服务器维护
 */

namespace exception;

class SerEditEx extends BaseException
{
    //HTTP 状态码：400，200，500...
    public $code = HttpCode::SER_EDIT;
    //错误具体信息：最好用英文
    public $msg = ErrMsg::SER_EDIT;
    //自定义的错误码
    public $errorCode = ErrorCode::SER;
    
}//class