<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserProduct */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            //'foto',
            [
                    'label'=>'Foto',
                    'attribute'=>'foto',
                    'format'=>'raw',
                    'value'=>function($model)
                    {
                        if($model->foto)
                            return  '<image src="image/'.$model->foto.'" style="width:150px;">';
                            return "";
                    }
            ],
            //'categoty_id',
            [
                    'label'=>'Category',
                    'attribute'=>'categoty_id',
                    'filter'=> ArrayHelper::map($category,'id','name'),
                    'value'=>'product_category.name',
            ],
            'price',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
