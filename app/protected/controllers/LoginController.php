<?php
/**
 * @Author: Fang
 * @Date:   2015-12-31 13:53:48
 * @Last Modified by:   Fang
 * @Last Modified time: 2016-01-01 21:25:28
 */
/**
 * 登录控制器
 */
class LoginController extends Controller {
	// 显示网页
	public function actionIndex() {
		$this->pageTitle = '会员登陆';
		$this->render('index');
	}
/**
 * 登录类登录方法
 */
	public function actionLogin() {
			$userName = $_POST['userName'];
			$password = md5($_POST['password']);
			// 实例化userinfo表并调用find方法
			$userInfo = UserInfo::model()->find("userName='{$userName}' AND password='{$password}'");
			// 登录失败跳转提醒
			if ($userInfo == NULL) {
				$result = 0;
				$this->redirect("index.php?r=reaction/index/act/login/rst/{$result}");
			} else {
				// 将从数据库中获取到的userinfo赋给变量,将session转化成一维数组
				$array = array(
					'userId'   => $userInfo['userId'],
					'userName' => $userInfo['userName'],
					'password' => $userInfo['password'],
					'mailBox'  => $userInfo['mailBox'],
					'sex'      => $userInfo['sex'],
					'address'  => $userInfo['address'],
					'qq'       => $userInfo['qq'],
					'tel'      => $userInfo['tel'],
					'headPic'  => $userInfo['headPic'],
					'signWord' => $userInfo['signWord'],
			);
			$_SESSION['userMsg'] = $array;
			// 登录成功跳转
			$this->redirect("index.php?r=reaction/index/act/login/rst/1");
		}

	}
}
