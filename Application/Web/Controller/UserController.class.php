<?php

namespace Web\Controller;

class UserController extends \Think\Controller {

	/**
	 * 用户登录
	 * 参数类型：POST
	 * 参数列表:
	 * userName  		string,用户名
	 * password  		string,密码明文
	 * 
	 * @return 
	 * 若成功，则
	 * {result：{
	 * 		success：1, 
	 * 	 	userId:?, //用户编号
	 * 	} 
	 * }
	 * 若失败，则
	 * {result:{success：0,errorMsg:""}}
	 */
	public function login () {

	}

	/**
	 * 用户注册
	 * 参数类型：POST
	 * 参数列表:
	 * nickname  		string,昵称
	 * password  		string,明文密码
	 * mailbox  		string,邮箱
	 * @return 
	 * 若成功，则
	 * {result：{
	 * 		success：1, 
	 * 	 	profile:{
	 * 	 		id:1, //用户编号
	 * 	 		name:'', //用户昵称
	 * 	 		mailbox:'', //用户邮箱
	 * 	 	}
	 * 	} 
	 * }
	 * 若失败，则
	 * {result:{success：0,errorMsg:""}}
	 */
	public function register () {

	}

	/**
	 * 重置密码
	 * 参数类型：POST
	 * 参数列表:
	 * oldPassword      string,旧密码
	 * newPassword      string,新密码
	 * @return 
	 * 若成功，则
	 * {result：{success：1} }
	 * 若失败，则
	 * {result:{success：0,errorMsg:""}}
	 * status:[401(未登录)|200(其它错误，通过errorMsg说明)]
	 */
	public function resetPassword () {

	}

	/**
	 * 获得用户的个人信息
	 * @return 
	 * 若成功，则
	 * {result：{
	 * 		success：1, 
	 * 	 	profile:{
	 * 	 		id:1, //用户编号
	 * 	 		name:'', //用户昵称
	 * 	 		mailbox:'', //用户邮箱
	 * 	 	}
	 * 	} 
	 * }
	 * 若失败，则
	 * {result:{success：0,errorMsg:""}}
	 * status:[401(未登录)|200(其它错误，通过errorMsg说明)]
	 */
	public function getProfile () {

	}

}