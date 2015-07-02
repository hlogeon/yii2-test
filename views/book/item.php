<?php
/* @var $this yii\web\View */
$this->title = $book->name;
?>
<div class="site-index">
    <div class="body-content">
        <h1><?= $book->name ?></h1>
        <?= \yii\helpers\Html::img($book->preview) ?>
        <p><span class="author">Автор: </span><?= ucfirst($book->author->firstname) .' ' . ucfirst($book->author->lastname) ?></p>
        <a class="btn btn-info" href="<?= \yii\helpers\Url::to(['book/update', 'id' => $book->id]) ?>">Редактировать</a>
    </div>
</div>
