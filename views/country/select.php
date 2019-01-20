<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h3>详情：</h3>
<div>
    <label>书名：</label><?= Html::encode($model['book_name'])?><br>
    <label>作者：</label><?= Html::encode($model['author'])?><br>
</div>
<div><?php echo Html::a('点击',['index'])?>返回</div>