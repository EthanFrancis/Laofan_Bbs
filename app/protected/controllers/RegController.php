<?php
/**
 * @Author: Fang
 * @Date:   2015-12-29 16:37:54
 * @Last Modified by:   Fang
 * @Last Modified time: 2016-01-01 21:32:33
 */
/**
 *  注册页面控制器
 */
class RegController extends Controller {

	public function actionIndex() {
		$this->pageTitle = '会员注册';
		$this->render('index');
	}
	/**
	 * 注册类注册方法
	 */
	public function actionReg() {
		// 判断密码和确认密码是否一致,也可用javascript做表单验证
		$password = $_POST['password'];
		$checkPwd = $_POST['checkPwd'];
		if ($password != $checkPwd) {
			// 确认密码不一致跳转
			$this->redirect('index.php?r=reaction/index/act/check/rst/0');
		}
		// 实例化useInfo表用于保存
		$model           = UserInfo::model();
		$model->userName = $_POST['userName'];
		$model->password = md5($_POST['password']);
		$model->mailBox  = $_POST['mailBox'];
		$model->sex      = $_POST['sex'];
		$model->tel      = $_POST['tel'];
		$model->address  = $_POST['address'];
		$model->qq       = $_POST['qq'];
		$model->signWord = $_POST['signWord'];
		$result          = $model->save();
		// 跳转
		$this->redirect('index.php?r=reaction/index/act/reg/rst/' . $result);
	}
}
