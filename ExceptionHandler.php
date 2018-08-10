<?php
/**
 * Created by PhpStorm
 * PROJECT: zerg
 * Author: Doing<vip.dulin@gmial.com>
 * Date: 2018-07-28 14:56
 * Module:异常类
 * Desc:重写框架的Handler
 *config    'exception_handle'       => 'exception\ExceptionHandler',
 */

namespace exception;


use Exception;
use think\exception\Handle;
use think\Log;

class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorCode;
    
    /**重写框架全局异常处理类
     * Date: 2018-07-28 15:07
     * Author: Doing<vip.dulin@gmial.com>
     * @param Exception $e
     * @return \think\Response|\think\response\Json
     * Desc:
     */
    public function render(Exception $e)
    {
        if($e instanceof BaseException)
        {
            $this->setBaseExceptionAttr($e);
        }
        else
        {
            //调试模式
            if(config('app_debug')) return parent::render($e);
            $this->setServiceExceptionAttr();
            //记录日志
            $this->recordErrorLog($e);
        }
        return json($this->getResult(), $this->code);
    }//pub
    
    /**
     * Date: 2018-07-28 16:15
     * Author: Doing<vip.dulin@gmial.com>
     * @return array
     * Desc:获取返回数据
     */
    private function getResult()
    {
        $url    = request()->url();
        $method = request()->method();
        $result = [
            'msg'        => $this->msg,
            'errorCode'  => $this->errorCode,
            'requestUrl' => $method . '   ' . $url
        ];
        return $result;
    }//pf
    
    /**
     * Date: 2018-07-28 16:51
     * Author: Doing<vip.dulin@gmial.com>
     * @param $e
     * @return bool
     * Desc:设置自定义异常信息
     */
    private function setBaseExceptionAttr($e)
    {
        $this->code      = $e->code;
        $this->msg       = $e->msg;
        $this->errorCode = $e->errorCode;
        return true;
    }//pf
    
    /**
     * Date: 2018-07-28 16:51
     * Author: Doing<vip.dulin@gmial.com>
     * @return bool
     * Desc:设置服务器异常信息
     */
    private function setServiceExceptionAttr()
    {
        $this->code      = 500;
        $this->msg       = "I'm sorry, I seem to be sick";
        $this->errorCode = '999';
        return true;
    }//pf
    
    /**
     * Date: 2018-07-28 21:02
     * Author: Doing<vip.dulin@gmial.com>
     * @param Exception $e
     * Desc:服务器错误时写日志
     */
    private function recordErrorLog(Exception $e)
    {
        $this->initLog();
        Log::record($e->getMessage(), 'error');
    }
    
    /**初始化写日志
     * Date: 2018-07-28 21:21
     * Author: Doing<vip.dulin@gmial.com>
     * @param string $type
     * @param array $level
     * Desc:【这里的LOG_PATH是在入口文件重新定义了的】
     */
    private function initLog($type = "File", $level = ['error'])
    {
        Log::init([
            'type'  => $type,
            'path'  => LOG_PATH,
            'level' => $level
        ]);
    }//pf
    
    
}//class