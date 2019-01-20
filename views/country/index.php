<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h2>列表：</h2>
<div>
    <a href="/index.php?r=country/add">增加</a>
</div>
<ul>
<?php foreach($posts as $item): ?>
    <li>
        <?= Html::encode("ID：{$item['id']}，      书名：{$item['book_name']}，     作者： ({$item['author']})") ?>
        操作：
        <?php echo Html::a('查看',['select','id'=>$item['id']])?>
        <?php echo Html::a('修改',['edit','id'=>$item['id']])?>
        <?php echo Html::a('删除',['delete','id'=>$item['id']])?>
    </li>
<?php endforeach; ?>
</ul>