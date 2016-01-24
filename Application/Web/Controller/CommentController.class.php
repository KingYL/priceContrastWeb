<?php

namespace Web\Controller;

class CommentController extends \Think\Controller {

	/**
	 * 评论一项商品
	 * 参数类型：POST
	 * 参数：
	 * commodityId    int,商品编号
	 * content        string,评论内容
	 * @return 
	 * 若成功评论，则
	 * {result：{success：1} }
	 * status:200
	 * 若评论失败，则
	 * {result:{success：0,errorMsg:""}}
	 * status:[401(未登录)|403(未购买不可评论)|200(其它错误，通过errorMsg说明)]
	 */
	public function comment () {
		$commodityId = I('post.commodityId');//评论的商品的商品编号
		$content = I('post.content');//评论内容


	}

	/**
	 * 回复一条评论
	 * 参数类型：POST
	 * 参数：
	 * commentId      int,评论编号
	 * content        string,回复内容
	 * @return 
	 * 若成功回复，则
	 * {result：{success：1} }
	 * 若回复失败，则
	 * {result:{success：0,errorMsg:""}}
	 * status:[401(未登录)|403(未购买不可回复)|200(其它错误，通过errorMsg说明)]
	 */
	public function replyComment () {
		$commentId = I('post.commentId');//回复的评论编号
		$content = I('post.content');//回复的内容



	}

	/**
	 * 回复一条回复
	 * 参数类型：POST
	 * 参数：
	 * replyId    		int,被回复的回复编号
	 * content        	string,回复的内容
	 * @return 
	 * 若成功回复，则
	 * status:200
	 * {result：{success：1} }
	 * 若回复失败，则
	 * {result:{success：0,errorMsg:""}}
	 * status:[401(未登录)|403(未购买不可回复)|200(其它错误，通过errorMsg说明)]
	 */
	public function replyReply () {
		$replyId = I('post.replyId');//被回复的回复编号
		$content = I('post.content');//回复的内容


	}

	/**
	 * 获取最热的一组商品评论,计算方式为：评论底下的回复数量
	 * @param  int $num 需要的评论数量,默认10
	 * @return 
	 * 若成功获取，则
	 * {result：{success：1} }
	 * 若获取失败，则
	 * {result:{success：0,errorMsg:""}}
	 */
	public function getHottestComment ($num=10) {
		
	}

}