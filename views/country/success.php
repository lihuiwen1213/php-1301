<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h3>书名：</h3>
<ul>
    <li><label for="">Name:</label><?= Html::encode($model->name)?></li>
    <li><label for="">Author:</label><?= Html::encode($model->author)?></li>
</ul>
<div>操作成功，返回<?php echo Html::a('首页',['index'])?></div>