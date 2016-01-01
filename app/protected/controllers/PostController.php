<?php
/**
 * @Author: Fang
 * @Date:   2015-12-31 14:53:48
 * @Last Modified by:   Fang
 * @Last Modified time: 2016-01-01 21:29:19
 */
/**
 *  发表话题类
 */
class PostController extends Controller {
	// 显示页面方法,并将数据传到页面中
	function actionIndex() {
		$this->pageTitle = '发表话题';
		$type = BbsType::model()->findAll();
		$data = array(
			'type' => $type,
		);
		$this->render('index', $data);
	}
	// 发表话题方法
	public function actionAdd() {
		$model          = BbsInfo::model();
		// 使用$model->$var来绑定数据
		$model->title   = $_POST['title'];
		$model->userId  = $_SESSION['userMsg']['userId'];
		$model->typeId  = $_POST['typeId'];
		$model->face    = $_POST['face'];
		$model->content = $_POST['content'];
		// save保存方法保存数据
		$result         = $model->save();
		// 跳转
		$this->redirect("index.php?r=reaction/index/act/addBbs/rst/{$result}");
	}
}
