<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'offitsiant_id')->dropDownList([
        ArrayHelper::map(\app\models\Offitsiant::find()->all(),'id','name'),
    ],
        [
            'prompt'=>'Offitsiantni tanlang'
        ]); ?>

    <?= $form->field($model, 'field_id')->dropDownList([
        ArrayHelper::map(\app\models\Field::find()->all(),'id','name'),
    ],
        [
            'prompt'=>'Stolni tanlang'
        ]); ?>

    <?= $form->field($model, 'start_time')->textInput() ?>

    <?= $form->field($model, 'stop_time')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([
        ArrayHelper::map(\app\models\Status::find()->all(),'id','name'),
    ],
        [
            'prompt'=>'Statusni tanlang'
        ]
    );?>

    <?= $form->field($model, 'tarif_id')->dropDownList([
        ArrayHelper::map(\app\models\Tarif::find()->all(),'id','name'),
    ],
        [
            'prompt'=>'Tarifni tanlang'
        ]
        );?>

    <?= $form->field($model, 'total_summa')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
