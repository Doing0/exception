<?php
/**
 * Created by PhpStorm
 * PROJECT: 异常处理类重写
 * User: Doing<vip.dulin@gmial.com>
 * Date: 2018/7/1/
 * Desc:操作成功异常:更新/删除等无数据返回的
 */

namespace exception;

class DoSuccessEx extends BaseException
{
    //HTTP 状态码：400，200，500...
    public $code = HttpCode::OK;
    //错误具体信息：最好用英文
    public $msg = ErrMsg::OK;
    //自定义的错误码
    public $errorCode = ErrorCode::OK;
    
}//class