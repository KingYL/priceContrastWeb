<?php

class SearchController extends \Think\Controller {

	/**
	 * 拆分一个关键词，并按优先级排序拆分结果
	 * @param  string $keyword 关键词
	 * @return array          
	 * [
	 * 		result:[
	 * 			'newWord':["","","",...,""],
	 * 		]
	 * ]
	 */
	public function apart ($keyword) {

	}

	/**
	 * 获取一个关键词的所有同义词
	 * @param  string $keyword 关键词
	 * @return 
	 * [
	 * 		result: [
	 * 			'synonyms':['','',...,''],
	 * 			
	 * 		]
	 * ]
	 */
	public function synonyms ($keyword) {

	}

	/**
	 * 获取一个关键词下的所有商品分类
	 * @param  [type] $keyword [description]
	 * @return 
	 * [
	 * 		'result':[
	 * 			'categories':['','',...,''],
	 * 		]
	 * ]
	 */
	public function categoriesOf ($keyword) {

	}

	/**
	 * 获取一个关键词下的所有品牌
	 * @param  [type] $keyword [description]
	 * @return 
	 * [
	 * 		'result':[
	 * 			'brands':['','',...,''],
	 * 		]
	 * ]
	 */
	public function brandsOf ($keyword) {

	}

	/**
	 * 获取热门关键词
	 * @param  integer $num 数量
	 * @return 
	 * [
	 * 		'result':[
	 * 			'keywords':['','',...,''],
	 * 		]
	 * ]
	 */
	public function getHottestKeyword ($num=10) {

	}

	/**
	 * 获取热门品牌
	 * @param  integer $num 数量
	 * @return 
	 * [
	 * 		'result':[
	 * 			'brands':['','',...,''],
	 * 		]
	 * ]
	 */
	public function getHottestBrand ($num=10) {

	}

	/**
	 * 获取热门分类
	 * @param  integer $num 数量
	 * @return 
	 * [
	 * 		'result':[
	 * 			'categories':['','',...,''],
	 * 		]
	 * ]
	 */
	public function getHottestCategory ($num=10) {

	}

}