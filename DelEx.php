<?php
/**
 * Created by PhpStorm
 * PROJECT: 异常处理类重写
 * User: Doing<vip.dulin@gmial.com>
 * Date: 2018/7/1/
 * Desc:请求资源已被删除
 */

namespace exception;

class DelEx extends BaseException
{
    //HTTP 状态码：400，200，500...
    public $code = HttpCode::DEL;
    //错误具体信息：最好用英文
    public $msg = ErrMsg::DEL;
    //自定义的错误码
    public $errorCode = ErrorCode::DEL;
    
}//class