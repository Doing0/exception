<?php
/**
 * Created by PhpStorm
 * PROJECT: 异常处理类重写
 * User: Doing<vip.dulin@gmial.com>
 * Date: 2018/7/1/
 * Desc:服务器自身问题
 */
namespace exception;

class SerEx extends BaseException
{
    //HTTP 状态码：400，200，500...
    public $code = HttpCode::SER;
    //错误具体信息：最好用英文
    public $msg = ErrMsg::SER;
    //自定义的错误码
    public $errorCode = ErrorCode::SER;
    
}//class