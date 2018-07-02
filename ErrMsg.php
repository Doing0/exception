<?php

/**
 * Created by PhpStorm
 * PROJECT: 异常插件
 * User: Doing<vip.dulin@gmial.com>
 * Date: 2018/5/25/14:08
 * Desc:错误提示信息枚举
 */

namespace exception;

class ErrMsg
{
    #200
	//添加成功通用 可扩展ADD_XX
	const ADD = '添加成功';
	//操作成功:del/put 可扩展OK_XX
	const OK = '操作成功';
	#4xx
    //客户端参数错误 PARAM_XX(扩展格式)
    const PARAM = '客户端参数错误';
    //登陆错误
    const LOGIN = '账号或密码错误';
    
    //登陆验证-下一步就是登陆操作
    const TOKEN = 'token过期或无效';
    //无操作权限/数据冻结等 可扩展AUTH_XX
    const AUTH = '无操作权限';
    //无满足条件的资源(筛选条件不满足) 可扩展NULL_XX
    const NULL = '请求资源不存在';
    //请求资源已被删除 DEL_XX可扩展
    const DEL = '请求资源不存在';
    //请求方式不正确(不可扩展)
    const METHOD = '非法操作';
    //数据已存在(如手机号已存在)/频繁提交 HAVE_XX可扩展
    const HAVE = '数据已存在,请勿频繁操作';
    //文件过大或格式不正确
    const FILE = '文件大小或格式不正确';
    #5xx服务器自身
    //服务器自身问题
    const SER = '服务器内部错误,不想告诉你';
    //服务器维护
    const SER_EDIT = '维护升级中...';
    //6xx第三方异常(可扩展) 格式ALIPAY_XX
    const ALIPAY_FAIL = '支付宝支付失败';
    
    
}//class