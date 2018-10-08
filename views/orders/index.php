<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Orders');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Orders'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'label'=>'Offitisiant',
                'attribute'=>'offitsiant_id',
                //'filter'=> ArrayHelper::map($offitsiant,'id','name'),
                'value'=>'offitsiant.name',
            ],
            'field_id',
            'start_time',
            'stop_time',
            'status',
            [
                'label'=>'tarif',
                'attribute'=>'tarif_id',
                //'filter'=> ArrayHelper::map($field,'name','category'),
                'value'=>'field.category',
            ],
            'total_summa',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
