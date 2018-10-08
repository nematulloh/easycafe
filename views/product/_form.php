<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options'=>['multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->fileInput(['maxlength' => true, 'multiple' => true, 'accept' => 'image/*']) ?>

    <?= $form->field($model, 'categoty_id')->dropDownList([
            ArrayHelper::map(\app\models\Product_category::find()->all(),'id','name'),
    ],
        [
                'prompt'=>'Kategoriyani tanlang'
        ]); ?>

    <?= $form->field($model, 'price')->textInput() ?>
    <?=$form->field($model,'status')->dropDownList([
        'active'=>'Active',
        'inactive'=>"Inactive"
    ],
        [
            'prompt' => 'Statusni tanlang...'
        ]
    );?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
