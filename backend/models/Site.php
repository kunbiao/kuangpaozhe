<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "site".
 *
 * @property string $id
 * @property int $type 场馆类型，1：网球
 * @property string $name 场馆名称
 * @property string $address 场馆地址
 * @property string $phone_number 场馆电话
 * @property string $portrait 场馆头像
 * @property string $longitude 经度
 * @property string $latitude 纬度
 * @property int $ground_num 场地数
 * @property int $status 状态
 * @property string $discounts 优惠幅度
 * @property string $create_time
 * @property string $update_time
 * @property string $price 场馆单价（上限/下限）
 * @property string $scale 优惠比例
 * @property string $provide_id 场馆使用者的open_Id
 * @property int $number 场地次数
 * @property string $businesslicense 营业执照照片
 * @property int $accout_number 账号
 * @property string $realname 真实姓名
 * @property string $idcardjust 身份证正面照
 * @property string $idcardverso 身份证反面
 * @property string $accout_name 账号名称
 * @property string $bank 开户银行
 * @property int $audit_type 审核状态(1:审核成功 2:审核失败)
 */
class Site extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'ground_num', 'status', 'number', 'accout_number', 'audit_type'], 'integer'],
            [['longitude', 'latitude'], 'number'],
            [['create_time', 'update_time'], 'safe'],
            [['name'], 'string', 'max' => 64],
            [['address', 'discounts', 'scale', 'provide_id', 'businesslicense', 'realname', 'idcardjust', 'idcardverso', 'accout_name', 'bank'], 'string', 'max' => 255],
            [['phone_number'], 'string', 'max' => 20],
            [['portrait'], 'string', 'max' => 250],
            [['price'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'name' => 'Name',
            'address' => 'Address',
            'phone_number' => 'Phone Number',
            'portrait' => 'Portrait',
            'longitude' => 'Longitude',
            'latitude' => 'Latitude',
            'ground_num' => 'Ground Num',
            'status' => 'Status',
            'discounts' => 'Discounts',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'price' => 'Price',
            'scale' => 'Scale',
            'provide_id' => 'Provide ID',
            'number' => 'Number',
            'businesslicense' => 'Businesslicense',
            'accout_number' => 'Accout Number',
            'realname' => 'Realname',
            'idcardjust' => 'Idcardjust',
            'idcardverso' => 'Idcardverso',
            'accout_name' => 'Accout Name',
            'bank' => 'Bank',
            'audit_type' => 'Audit Type',
        ];
    }
}
