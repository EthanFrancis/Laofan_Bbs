<?php
/**
 * @Author: Fang
 * @Date:   2015-12-31 10:24:21
 * @Last Modified by:   Fang
 * @Last Modified time: 2016-01-01 21:46:16
 */
/**
 * bbstype表数据模型
 */
class BbsType extends CActiveRecord {
    // 使用静态方法实例化userinfo表类,
	public static function model() {
		return new BbsType();
	}
    // 返回表名
	public function tableName() {
		return 'bbstype';
	}
}
