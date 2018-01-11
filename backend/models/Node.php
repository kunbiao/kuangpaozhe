<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "node".
 *
 * @property string $id
 * @property string $name 权限名称
 * @property string $title 权限标题
 * @property int $status 状态（正常:1 禁用:0）
 * @property string $remark 备注
 * @property int $sort 排序
 * @property int $pid 父级权限ID
 * @property int $level 权限等级
 */
class Node extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'node';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'sort', 'pid', 'level'], 'integer'],
            [['name'], 'string', 'max' => 20],
            [['title'], 'string', 'max' => 50],
            [['remark'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'title' => 'Title',
            'status' => 'Status',
            'remark' => 'Remark',
            'sort' => 'Sort',
            'pid' => 'Pid',
            'level' => 'Level',
        ];
    }
}
