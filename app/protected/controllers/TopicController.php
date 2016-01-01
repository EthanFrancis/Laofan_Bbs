<?php
/**
 * @Author: Fang
 * @Date:   2015-12-31 13:21:06
 * @Last Modified by:   Fang
 * @Last Modified time: 2016-01-01 21:37:15
 */
/**
 * 话题类
 */
class TopicController extends Controller {
	/**
	 * 通过Yii框架提供的数据库操作类进行多表联查,
	 * 主要查询的是bbsInfo表,bbsType表,userIndo表
	 */
	function actionIndex() {
		$this->pageTitle = '最新话题';
		$db     = Yii::app()->db;
		$stmt   = $db->createCommand("SELECT * FROM bbsinfo AS a,bbsType AS b,userInfo AS c WHERE a.typeId=b.typeId AND a.userId=c.userId");
		// 通过queryAll获取所有记录
		$result = $stmt->queryAll();
		$data   = array(
			'result' => $result,
		);
		$this->render('index', $data);
	}
}
