<?php
/**
 * Created by PhpStorm
 * PROJECT: 异常处理类重写
 * User: Doing<vip.dulin@gmial.com>
 * Date: 2018/5/25/14:08
 * Desc:异常处理基类
 */

namespace exception;

use think\Exception;

class BaseException extends Exception
{
    //HTTP 状态码：400，200，500...
    public $code = '';
    //错误具体信息：最好用英文
    //    public $msg = 'invalid parameters';
    public $msg = 'error';
    //自定义的错误码
    public $errorCode = '';
    
    public function __construct($params = [])
    {
        if(!is_array($params)) return;
        //$params下的code是否存在
        if(array_key_exists('code', $params)) $this->code = $params['code'];
        if(array_key_exists('msg', $params)) $this->msg = $params['msg'];
        if(array_key_exists('errorCode', $params)) $this->errorCode = $params['errorCode'];
        
    }
}