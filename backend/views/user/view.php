<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = $model->nickname;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
//            'mobile',
//            'credential',
//            'from',
            [
                'label'=>'用户类型',
                'attribute'=>'type',
//                'filter'=>['1'=>'普通用户','2'=>'客服','3'=>'球馆','4'=>'员工','5'=>'财务'],
                'value'=>function($model){
                    $typeList=[
                        '1'=>'普通用户',
                        '2'=>'客服',
                        '3'=>'球馆',
                        '4'=>'员工',
                        '5'=>'财务',
                    ];
                    return $typeList[$model->type];
//                    return($model->type ==1)?'普通用户':"非用户";
//                    return $model->title;
                },
                ],
            [
                'label'=>'用户状态',
                'attribute'=>'status',
                'value'=>function($model){
                    $typeList=[
                        '1'=>'正常',
                        '0'=>'注销',
                    ];
                    return $typeList[$model->status];
//                    return($model->type ==1)?'普通用户':"非用户";
//                    return $model->title;
                },
            ],
//            'provide_type',
//            'provide_id',
//            'last_time',
//            'last_wechat_time',
//            'identify',
//            'access_token',
//            'identify_expTime:datetime',
            'nickname',
//            'age',
//            'gender',
//            'portrait',
//            'is_follow',
//            'follow_time',
//            'trade',
//            'location',
//            'create_time',
//            'coupon',
//            'user_money',
//            'update_time',
//            'pay_money',
//            'red_money',
//            'username',
//            'password_reset_token',
//            'auth_key',
//            'password_hash',
//            'admin_statis',
        ],
    ]) ?>

</div>
