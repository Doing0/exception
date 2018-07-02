<?php

/**
 * Created by PhpStorm
 * PROJECT: 异常插件
 * User: Doing<vip.dulin@gmial.com>
 * Date: 2018/5/25/14:08
 * Desc:Http错误码枚举
 */

namespace exception;

class HttpCode
{
    #2xx
    //添加成功-仅用于添加post
    const ADD = 201;
    //操作成功del/put
    const OK = 204;
    #4xx
    //客户端参数错误
    const PARAM = 400;
    //token(登陆验证)
    const TOKEN = 401;
    //无权限或数据冻结等
    const AUTH = 403;
    //无满足条件的资源(筛选条件不满足)
    const NULL = 404;
    //请求资源已被删除
    const DEL = 410;
    //请求方式不正确
    const METHOD = 405;
    //数据已存在(如手机号已存在)/频繁提交
    const HAVE = 409;
    //文件过大或格式不正确
    const FILE = 413;
    #5xx
    //服务器自身问题
    const SER = 500;
    //服务器维护
    const SER_EDIT = 503;
    #6xx第三方异常
    const SER_OTHER = 600;
    
    
}//class