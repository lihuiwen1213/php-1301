<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h3>修改：</h3>
<?php $form = ActiveForm::begin();?>
    <?= $form->field($model, 'name')->label('书名：')?>
    <?= $form->field($model, 'author')->label('作者：')?>
    <div class="form-group">
        <?= Html::submitButton('Submit',['class'=>'btn btn-primary'])?>
    </div>
<?php ActiveForm::end(); ?>
<div><?php echo Html::a('点击',['index'])?>返回</div>