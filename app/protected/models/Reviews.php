<?php
/**
 * @Author: Fang
 * @Date:   2015-12-31 10:24:53
 * @Last Modified by:   Fang
 * @Last Modified time: 2016-01-01 21:47:22
 */
/**
 * reviews表数据模型
 */
class Reviews extends CActiveRecord {
    // 使用静态方法实例化reviews表类,
	public static function model() {
		return new Reviews();
	}
    // 返回表名
	public function tableName() {
		return 'reviews';
	}
}
