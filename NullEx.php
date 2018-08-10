<?php
/**
 * Created by PhpStorm
 * PROJECT: 异常处理类重写
 * User: Doing<vip.dulin@gmial.com>
 * Date: 2018/7/1/
 * Desc:用户请求的资源不存在(筛选条件不满足)
 */

namespace exception;



class NullEx extends BaseException
{
    //HTTP 状态码：400，200，500...
    public $code = HttpCode::NULL;
    //错误具体信息：最好用英文
    public $msg = ErrMsg::NULL;
    //自定义的错误码
    public $errorCode = ErrorCode::NULL;
    
}//class