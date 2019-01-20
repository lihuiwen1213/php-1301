<?php
use yii\helpers\HTML;
?>
<p>输出：</p>
<ul>
    <li><label for="">Name:</label><?= Html::encode($model->name)?></li>
    <li><label for="">Email:</label><?= Html::encode($model->email)?></li>
</ul>