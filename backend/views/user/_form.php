<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'type')->dropDownList([ 1 => '普通用户', 2 => '客服', 3 => '球馆', 4 => '员工', 5 => '财务', ]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 1 => '正常', 0 => '注销', ]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
