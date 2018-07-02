<?php
/**
 * Created by PhpStorm
 * PROJECT: 异常处理类重写
 * User: Doing<vip.dulin@gmial.com>
 * Date: 2018/7/1/
 * Desc:数据已存在/频繁操作
 */

namespace exception;

class HaveEx extends BaseException
{
    //HTTP 状态码：400，200，500...
    public $code = HttpCode::HAVE;
    //错误具体信息：最好用英文
    public $msg = ErrMsg::HAVE;
    //自定义的错误码
    public $errorCode = ErrorCode::HAVE;
    
}//class