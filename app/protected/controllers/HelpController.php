<?php
/**
 * @Author: Fang
 * @Date:   2015-12-31 13:24:56
 * @Last Modified by:   Fang
 * @Last Modified time: 2016-01-01 21:19:40
 */
/**
 * 论坛说明类
 */
class HelpController extends Controller {

	function actionIndex() {
		$this->pageTitle = '网站说明';
		$this->render('index');
	}
}
