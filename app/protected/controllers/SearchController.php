<?php
/**
 * @Author: Fang
 * @Date:   2015-12-31 13:23:20
 * @Last Modified by:   Fang
 * @Last Modified time: 2016-01-01 21:34:59
 */
/**
 * 搜索类
 */
class SearchController extends Controller {

	function actionIndex() {
		$this->pageTitle = '搜索';
		$this->render('index');
	}
	/**
	 * 搜索类搜索方法
	 */
	public function actionSearch() {
		// 获取搜索类型和搜索关键字,通过sql中的LIKE来进行匹配
		$searchType = $_POST['searchType'];
		$keyWord    = $_POST['keyword'];
		$sql        = "SELECT * FROM bbsinfo AS a,bbsType AS b,userInfo AS c WHERE a.typeId=b.typeId AND a.userId=c.userId AND {$searchType} LIKE '%{$keyWord}%'";
		// Yii框架提供的db操作类
		$db         = Yii::app()->db;
		$stmt       = $db->createCommand($sql);
		$result     = $stmt->queryRow();
		$data       = array(
			'result' => $result,
		);
		$this->render('index', $data);
	}
}
