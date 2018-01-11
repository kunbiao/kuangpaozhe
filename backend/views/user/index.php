<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '会员列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'nickname',
//            'id',
//            'mobile',
//            'credential',
//            'from',
            [
                'label'=>'用户类型',
                'attribute'=>'type',
                'filter'=>['1'=>'普通用户','2'=>'客服','3'=>'球馆','4'=>'员工','5'=>'财务'],
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
                'filter'=>['1'=>'正常','0'=>'注销'],
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
            //'provide_type',
            //'provide_id',
            //'last_time',
            //'last_wechat_time',
            //'identify',
            //'access_token',
            //'identify_expTime:datetime',

            //'age',
            //'gender',
            //'portrait',
            //'is_follow',
            //'follow_time',
            //'trade',
            //'location',
            //'create_time',
            //'coupon',
            //'user_money',
            //'update_time',
            //'pay_money',
            //'red_money',
            //'username',
            //'password_reset_token',
            //'auth_key',
            //'password_hash',
            //'admin_statis',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
