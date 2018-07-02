<?php
/**
 * Created by PhpStorm
 * PROJECT: 异常处理类重写
 * User: Doing<vip.dulin@gmial.com>
 * Date: 2018/7/1/
 * Desc:重写TP5的Hander类（异常处理类）
 * 'exception_handle'       => '\extend\exception\ExceptionHandler',
 */


namespace exception;

use think\exception\Handle;
use think\Log;

class ExceptionHandler extends Handle
{
    //httpCode
    private $code;
    //错误信息提示
    private $msg;
    //自定义错误码
    private $errorCode;
    
    /**
     * Date: 2018-07-01 20:45
     * Author: Doing<vip.dulin@gmial.com>
     * @param \Exception $e
     * @return \think\Response|\think\response\Json
     * Desc:覆盖Handle里面的render方法
     */
    public function render(\Exception $e)
    {
        if($e instanceof BaseException)
        {
            $this->userError($e);
        }
        else
        {
            $this->serError($e);
        }//else
        return $this->getResData(true);
        
    }//pf
    
    /**
     * Date: 2018-07-01 21:07
     * Author: Doing<vip.dulin@gmial.com>
     * @param $e
     * @return mixed
     * Desc:客户端异常
     */
    private function userError($e)
    {
        //自定义的异常
        $this->code      = $e->code;
        $this->msg       = $e->msg;
        $this->errorCode = $e->errorCode;
        return $e;
    }//pf
    
    /**
     * Date: 2018-07-01 21:01
     * Author: Doing<vip.dulin@gmial.com>
     * @param $e
     * @return \think\Response
     * Desc:服务器自己的错误
     */
    private function serError($e)
    {
        //默认render 页面呈现(debug模式)
        if(config('app_debug')) return parent::render($e);
        $this->code      = HttpCode::SER;
        $this->msg       = ErrMsg::SER;
        $this->errorCode = ErrorCode::SER;
        $this->recordErrorLog($e);
        return $e;
        
    }//pf
    
    /**
     * Date: 2018-07-01 20:44
     * Author: Doing<vip.dulin@gmial.com>
     * @param \Exception $e
     * Desc:将异常写入日志
     */
    private function recordErrorLog(\Exception $e)
    {
        //初始化Log
        Log::init(['type' => 'File', 'path' => LOG_PATH, 'level' => ['error']]);
        //        Log::record($e->getTraceAsString());
        //写入日志
        Log::record($e->getMessage(), 'error');
    }
    
    /**
     * Date: 2018-07-01 20:57
     * Author: Doing<vip.dulin@gmial.com>
     * @param bool $isUrl 是否返回url
     * @return \think\response\Json
     * Desc:取返回数据
     */
    private function getResData($isUrl = true)
    {
        $res['msg']        = $this->msg;
        $res['error_code'] = $this->errorCode;
        if($isUrl == true)
        {
            $res['request_url'] = request()->url();
        }
        //需要返回客户端当前请求的URL路径
        return json($res, $this->code);
    }//pf
}//class