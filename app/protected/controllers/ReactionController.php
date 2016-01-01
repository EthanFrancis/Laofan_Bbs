<?php
/**
 * @Author: Fang
 * @Date:   2015-12-29 11:37:54
 * @Last Modified by:   Fang
 * @Last Modified time: 2016-01-01 21:28:58
 */
/**
 * 整个论坛的操作提示类
 */
class ReactionController extends Controller {
	public function actionIndex() {
		$this->pageTitle = "系统提示";
		// 通过获取传参判断操作类型和操作结果
		$act = $_GET['act'];
		$rst = $_GET['rst'];
		$message = '';
		$jumpUrl = '';
		// switch效率高
		switch ($act) {
			case 'reg':
				if ($rst > 0) {
					$message = "注册成功";
					$jumpUrl = "index.php?r=index/index";
				} else {
					$message = "注册失败";
					$jumpUrl = "index.php?r=reg/index";
				}
				break;
			case 'check':
				if ($rst == 0) {
					$message = "两次密码不一样";
					$jumpUrl = "index.php?r=reg/index";
				}
				break;
			case 'login':
				if ($rst == 1) {
					$message = "登录成功";
					$jumpUrl = "index.php?r=index/index";
				} else {
					$message = "登录失败";
					$jumpUrl = "index.php?r=login/index";
				}
				break;
			case 'logout':
				if ($rst == 0) {
					session_destroy();
					$message = "注销成功";
					$jumpUrl = "index.php?r=index/index";
				}
				break;
			case 'update':
				if ($rst > 0) {
					$message = "修改资料成功";
					$jumpUrl = "index.php?r=user/index";
				} else {
					$message = "修改资料失败";
					$jumpUrl = "index.php?r=user/index";
				}
				break;
			case 'addBbs':
				if ($rst == TRUE) {
					$message = "发表成功";
					$jumpUrl = "index.php?r=post/index";
				} else {
					$message = "发表失败";
					$jumpUrl = "index.php?r=post/index";
				}
				break;
			case 'delArtical':
				if ($rst > 0) {
					$message = "删除话题成功";
					$jumpUrl = "index.php?r=topic/index";
				} else {
					$bbsId = $_GET['bbsId'];
					$message = "删除话题失败";
					$jumpUrl = "index.php?r=view/index/bbsId/{$bbsId}";
				}
				break;
			case 'addReview':
				$bbsId = $_GET['bbsId'];
				if ($rst > 0) {
					$message = "发表评论成功";
					$jumpUrl = "index.php?r=view/index/bbsId/{$bbsId}";
				} else {
					$message = "发表评论失败";
					$jumpUrl = "index.php?r=view/index/bbsId/{$bbsId}";
				}
				break;
			case 'delReview':
				$bbsId = $_GET['bbsId'];
				if ($rst > 0) {
					$message = "删除评论成功";
					$jumpUrl = "index.php?r=view/index/bbsId/{$bbsId}";
				} else {
					$message = "删除评论失败";
					$jumpUrl = "index.php?r=view/index/bbsId/{$bbsId}";
				}
				break;
		}
		// 传递数据到页面中
		$data = array(
			'message' => $message,
			'jumpUrl' => $jumpUrl,
		);
		$this->render("index", $data);
	}
}
