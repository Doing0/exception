<?php

/**
 * Created by PhpStorm
 * PROJECT: 异常插件
 * User: Doing<vip.dulin@gmial.com>
 * Date: 2018/5/25/14:08
 * Desc:自定义错误码枚举
 */

namespace exception;

class ErrorCode
{
    #201
    //添加成功-通用000(可扩展)ADD_XX
    const ADD = 201000;
    //操作成功-del/put 000通用(可扩展)OK_XX
    const OK = 204000;
    #400
    //客户端参数错误000通用(可扩展)PARAM_XX
    const PARAM = 400000;
    //登陆验证-下一步就是登陆操作(不可扩展)
    const TOKEN = 401000;
    //无操作权限或数据冻结等000通用(可扩展)AUTH_XX
    const AUTH = 403000;
    //无满足条件的资源(筛选条件不满足)000通用(可扩展)NULL_XX
    const NULL = 404000;
    //请求资源已被删除000通用(可扩展)DEL_XX
    const DEL = 410000;
    //请求方式不正确(不可扩展)
    const METHOD = 405000;
    //数据已存在(如手机号已存在)/频繁提交000通用(可扩展)HAVE_XX
    const HAVE = 409000;
    //文件过大或格式不正确000通用(可扩展)FILE_XXX
    const FILE = 413000;
    //服务器自身问题(不可扩展)999是不想告诉客户端原因专用
    const SER = 999;
    //服务器维护(不可扩展)
    const SER_EDIT = 503000;
    #第三方异常 可扩展 自定义开头码决定机构,尾码决定逻辑
    //第三方异常000通用
    const SER_OTHER = 60000;
    //第三方异常 支付宝-可扩展10x ALIPAY_XX
    const ALIPAY = 600100;
    //第三方异常 微信-可扩展20x WECHAT_XX
    const WECHAT = 600200;
    
    
}//class