<?php

namespace Web\Controller;

class CommodityController extends \Think\Controller {
	
	/**
	 * 增加商品信息
	 * 参数类型:POST
	 * 参数列表:
	 * name         string,商品名称
	 * platform		int,商品所在平台(具体参考数据库设计)
	 * url    		string,商品指向链接
	 * type    		int,店铺类型(如，"自营","第三方")
	 * price    	double,商品当前价格
	 * thirdId		int,商品所在平台的平台编号(//TODO)
	 * saleNum      int,月销量
	 * score    	double,商品当前评分
	 * description  string,商品描述
	 * category     string,商品分类(//TODO,或者int)
	 * brand        string,品牌(//TODO,或者int)
	 * token        string,密令，默认为null,此时必须是管理员登录;爬虫逻辑可以通过密令增加商品信息
	 * @return 
	 * 若成功添加，则
	 * {result：{success：1} }
	 * status:200
	 * 若添加失败，则
	 * {result:{success：0,errorMsg:""}}
	 * status:[401(未登陆)|403(没有权限)|200(其它错误，通过errorMsg说明)]
	 */
	public function add () {
		
	}

	/**
	 * 修改商品数据
	 * 参数类型:POST
	 * 参数列表:
	 * json格式：
	 * {
	 * commodityId:1,
	 * newInfo:{
	 * 		name:"",
	 * 		platform:0,
	 * 		url:"",
	 * 		type:1,
	 * 		price:0.0,
	 * 		thirdId:1,
	 * 		score:0.0,
	 * 		description:""
	 * 	},
	 * }
	 * @return 
	 * 若成功修改，则
	 * {result：{success：1} }
	 * status:200
	 * 若修改失败，则
	 * {result:{success：0,errorMsg:""}}
	 * status:[401(未登陆)|403(没有权限)|200(其它错误，通过errorMsg说明)]
	 */
	public function modify () {
		
	}
	/**
	 * 删除一条商品数据及相关数据
	 * 参数类型:POST
	 * 参数列表:
	 * commodityId        int,商品编号
	 * @return 
	 * 若成功删除，则
	 * {result：{success：1} }
	 * status:200
	 * 若删除失败，则
	 * {result:{success：0,errorMsg:""}}
	 * status:[401(未登陆)|403(没有权限)|200(其它错误，通过errorMsg说明)]
	 */
	public function delete () {

	}

	/**
	 * 搜索商品信息
	 * 参数类型:GET
	 * 参数列表:
	 * type         int,搜索类型,0表示综合，1表示价格，2表示销量, 3表示评分，默认0
	 * keyword  	string,搜索关键词
	 * order  		int,排序方式，0表示降序，1表示升序，默认0
	 * category     string,商品分类, 默认为''表示全部
	 * brand        string,商品品牌, 默认为''表示全部
	 * priceRange   string, 格式为'0.0-0.2',其中0.0是开始价格，0.2是结束价格,默认为''
	 * @return 
	 * json类型
	 * [
	 * 		result:[
	 * 			'commodityList' : [
	 * 				['id':   , //商品编号
	 * 			 	'name':  '', //商品名称
	 * 			  	'price': 0.0, //商品价格
	 * 			   	'platform': 1, //所在平台
	 * 			   	'url': "", //第三方链接
	 * 			   	'type': 1, //店铺类型
	 * 			   	],
	 * 			   	[],...,[]
	 * 			],
	 * 			
	 * 		]
	 * ]
	 */
	public function search ($keyword, $brand="", $category="",$type=0, $order=0, $priceRange="") {

	}



}