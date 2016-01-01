<?php
/**
 * @Author: Fang
 * @Date:   2015-12-31 16:34:11
 * @Last Modified by:   Fang
 * @Last Modified time: 2016-01-01 21:29:29
 */
/**
 *  首页控制器
 */
class IndexController extends Controller {
	public function actionIndex() {
		$this->pageTitle = "论坛首页";
		// 论坛公告
		$notices = Notices::model()->find();
		// 讨论区类别
		$bbsType = BbsType::model()->findAll();
		// 话题计数
		$bbsCount = BbsInfo::model()->count();
		// 回帖计数
		$revCount = Reviews::model()->count();
		// 用户计数
		$userCount = UserInfo::model()->count();
		// 绑定数据
		$data = array(
			'notices' => $notices,
			'bbsType' => $bbsType,
			'bbsCount' => $bbsCount,
			'revCount' => $revCount,
			'userCount' => $userCount,
		);
		$this->render('index', $data);
	}

}
