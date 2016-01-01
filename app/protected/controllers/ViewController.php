<?php
/**
 * @Author: Fang
 * @Date:   2015-12-31 16:34:11
 * @Last Modified by:   Fang
 * @Last Modified time: 2016-01-01 21:44:03
 */
/**
 * 内容显示类
 */
class ViewController extends Controller {
	/**
	 * 通过帖子id进过多表联查获取view页面的数据
	 * 帖子内容查询bbsInfo表,评论内容查询reviews表
	 */
	function actionIndex($bbsId) {
		$this->pageTitle = "查看文章";
		$db = Yii::app()->db;
		$stmtContent = $db->createCommand("SELECT * FROM userInfo AS a,bbsInfo AS b WHERE bbsId='$bbsId' AND a.userId=b.userId");
		$stmtReview = $db->createCommand("SELECT * FROM userInfo AS a,reviews AS b  WHERE bbsId='$bbsId' AND a.userId=b.userId");
		$viewInfo = $stmtContent->queryRow();
		$revInfo = $stmtReview->queryAll();
		$revCount = Reviews::model()->count("bbsId='$bbsId'");
		$data = array(
			'viewInfo' => $viewInfo,
			'revInfo' => $revInfo,
			'revCount' => $revCount,
		);
		$this->render('index', $data);
	}
	/**
	 * 发帖人编辑
	 * @param  int $bbsId 帖子ID
	 */
	public function actionEdit($bbsId) {
		$this->pageTitle = "新闻编辑";
		$sql = "SELECT * FROM bbsInfo AS a,bbsType AS b WHERE bbsId='$bbsId' AND a.typeId=b.typeId";
		$db  = Yii::app()->db;
		$stmt   = $db->createCommand($sql);
		$result = $stmt->queryRow();
		$data   = array('artInfo' => $result);
		$this->render('edit', $data);
	}
	/**
	 * 通过获取的bbsId来删除话题,只有发帖人和超级管理员能删除
	 * @param  int $bbsId   论坛话题ID
	 */
	public function actionDelete($bbsId) {
		$result = BbsInfo::model()->deleteByPK("$bbsId");
		$this->redirect('index.php?r=reaction/index/act/delArtical/rst/' . $result . 'bbsId/' . $bbsId);
	}
	/**
	 * 添加评论方法,获取的bbsid是用于跳转时能回到评论帖子页面
	 * @param  int $bbsId   论坛帖子id
	 */
	public function actionAddReview($bbsId) {
		$model = Reviews::model();
		$model->bbsId   = $bbsId;
		$model->userId  = $_SESSION['userMsg']['userId'];
		$model->face    = $_POST['face'];
		$model->content = $_POST['content'];
		$result = $model->save();
		$this->redirect("index.php?r=reaction/index/act/addReview/rst/{$result}/bbsId/{$bbsId}");
	}
	/**
	 * 删除评论,此评论只有超级管理员能删除
	 * @param  [int] $reId  [评论Id]
	 * @param  [int] $bbsId [论坛话题ID]
	 */
	public function actiondelReview($reId, $bbsId) {
		$result = Reviews::model()->deleteByPK("$reId");
		$this->redirect("index.php?r=reaction/index/act/delReview/rst/{$result}/bbsId/{$bbsId}");
	}
}
