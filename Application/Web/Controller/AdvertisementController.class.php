<?php

class AdvertisementController extends \Think\Controller {

	/**
	 * 添加一个广告
	 * 参数类型：POST
	 * description  		string,描述
	 * photoUrl  			string,广告的图片地址
	 * investor  			string,投资方
	 * detailUrl  			string,广告详情的链接
	 * priorty  			int, 优先级,0表示最高，1表示中等，2表示最低
	 * @return 
	 * 若成功添加，则
	 * {result：{success：1} }
	 * 若失败，则
	 * {result:{success：0,errorMsg:""}}
	 */
	public function add () {

	}

	/**
	 * 删除一个广告
	 * @param  int $advId 	 广告编号
	 * @return
	 * 若成功删除，则
	 * {result：{success：1} }
	 * 若失败，则
	 * {result:{success：0,errorMsg:""}}
	 */
	public function delete ($advId) {

	}

	/**
	 * 修改一个广告位
	 * 参数类型：POST
	 * advId  				int,广告编号
	 * description  		string,描述
	 * photoUrl  			string,广告的图片地址
	 * investor  			string,投资方
	 * detailUrl  			string,广告详情的链接
	 * priorty  			int, 0表示最高，1表示中等，2表示最低
	 * @return 
	 * 若成功添加，则
	 * {result：{success：1} }
	 * 若失败，则
	 * {result:{success：0,errorMsg:""}}
	 */
	public function modify () {

	}

	/**
	 * 获得一个广告的详情
	 * @param  int $advId 广告编号
	 * @return 
	 * [
	 * 		result : [
	 * 			detail : [
	 * 					id : ,//广告编号
	 * 					description : '',//广告描述
	 * 					investor : '', //广告投资方
	 * 					priorty : , //优先级
	 * 					photoUrl : '', //广告图片地址
	 * 					detailUrl : '', //广告详情地址
	 * 					investor : '', //投资方
	 * 					priorty : , //优先级
	 * 			]
	 * 		]
	 * ]
	 */
	public function getDetail ($advId) {

	}

	/**
	 * 按优先级获取一系列的广告
	 * @param  int  $priorty  优先级,0表示最高，1表示中等，2表示最低
	 * @param  integer $page    页码, 默认0
	 * @param  integer $num     该页数量，默认10
	 * @return 
	 * [
	 * 		result : [
	 * 			adverts : [
	 * 				[
	 * 					id : ,//广告编号
	 * 					description : '',//广告描述
	 * 					investor : '', //广告投资方
	 * 					priorty : , //优先级
	 * 				],
	 * 				[],...,[]
	 * 			],
	 * 		]
	 * ]
	 */
	public function getList ($priorty, $page=0, $num=10) {

	}

}