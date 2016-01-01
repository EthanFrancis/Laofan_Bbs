<?php
/**
 * @Author: Fang
 * @Date:   2015-12-31 10:25:25
 * @Last Modified by:   Fang
 * @Last Modified time: 2016-01-01 21:47:22
 */
/**
 * notices表数据模型
 */
class Notices extends CActiveRecord {
    // 使用静态方法实例化notices表类,
	public static function model() {
		return new Notices();
	}
    // 返回表名
	public function tableName() {
		return 'notices';
	}
}
