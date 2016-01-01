<?php
/**
 * @Author: Fang
 * @Date:   2015-12-31 10:23:53
 * @Last Modified by:   Fang
 * @Last Modified time: 2016-01-01 21:46:15
 */
/**
 * bbsInfo表数据模型
 */
class BbsInfo extends CActiveRecord {
    // 使用静态方法实例化bbsinfo表类,
	public static function model() {
		return new BbsInfo();
	}
    // 返回表名
	public function tableName() {
		return 'bbsinfo';
	}
}
