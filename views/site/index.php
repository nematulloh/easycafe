<?php

/* @var $this yii\web\View */

$this->title = 'Easycafe';
?>
<div class="site-index">
    <div class="row">
    <?php
    //echo "<pre>";print_r($ne);echo "</pre>";
        foreach ($ne as $pr):?>
            <div class="col-md-3">
            <h3><?=$pr->name;?></h3>
          <img style="width: 200px;" src="<?='image/'.$pr->foto;?>">
            <p>Narxi: <?=$pr->price;?> so'm</p>
            </div>
        <?php endforeach;?>
    </div>
</div>
