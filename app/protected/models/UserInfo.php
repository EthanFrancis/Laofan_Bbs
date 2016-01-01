<?php
/**
 * @Author: Fang
 * @Date:   2015-12-31 10:21:39
 * @Last Modified by:   Fang
 * @Last Modified time: 2016-01-01 21:45:38
 */
/**
 * userInfo表数据模型
 */
class UserInfo extends CActiveRecord {
    // 使用静态方法实例化userinfo表类,
	public static function model() {
		return new UserInfo();
	}
    // 返回表名
	public function tableName() {
		return 'userinfo';
	}
}
