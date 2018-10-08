<?php
/**
 * Created by PhpStorm.
 * User: Nematulloh
 * Date: 12.09.2018
 * Time: 14:57
 */

use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'Admin';
$this->params['breadcrumbs'][] = $this->title;
?>
    <h1><?= Html::encode($this->title) ?></h1>
    <h1 class="btn btn-info" style=""><a href="<?=Url::to(['product/index']);?>">Products</a></h1>
    <h1 class="btn btn-info"><a href="<?=Url::to(['product_category/index']);?>">Product categories</a></h1>
    <h1 class="btn btn-info"><a href="<?=Url::to(['field/index']);?>">Field</a></h1>
    <h1 class="btn btn-info"><a href="<?=Url::to(['orders/index']);?>">Orders</a></h1>
    <h1 class="btn btn-info"><a href="<?=Url::to(['sub-orders/index']);?>">SubOrders</a></h1>
    <h1 class="btn btn-info"><a href="<?=Url::to(['offitsiant/index']);?>">Offitsiant</a></h1>
    <h1 class="btn btn-info"><a href="<?=Url::to(['status/index']);?>">Status</a></h1>
    <h1 class="btn btn-info"><a href="<?=Url::to(['tarif/index']);?>">Tarif</a></h1>



