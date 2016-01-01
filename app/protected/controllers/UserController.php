<?php
/**
 * @Author: Fang
 * @Date:   2015-12-31 14:14:27
 * @Last Modified by:   Fang
 * @Last Modified time: 2016-01-01 21:39:57
 */
/**
 * 个人资料类
 */
class UserController extends Controller {

	function actionIndex() {
		$this->pageTitle = '会员个人资料';
		$userName = $_SESSION['userMsg']['userName'];
		$userInfo = UserInfo::model()->find("userName='$userName'");
		$data     = array(
			'userInfo' => $userInfo,
		);
		$this->render('index', $data);
	}
	/**
	 * 用户更新资料方法
	 * @param  int $userId  用户的ID
	 */
	public function actionUpdate($userId) {
		// 实例化userInfo表的操作模型,调用updateByPK方法,很好用
		$result              = UserInfo::model()->updateByPk($userId, $_POST);
		$arr                 = $_POST;
		$arr['userId']       = $userId;
		// 将更新的数据再次赋给session
		$_SESSION['userMsg'] = $arr;
		// 跳转
		$this->redirect("index.php?r=reaction/index/act/update/rst/{$result}");
	}
}
