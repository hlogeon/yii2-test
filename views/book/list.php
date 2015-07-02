<?php
/* @var $this yii\web\View */
$this->title = 'Books';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <?php foreach($books as $book): ?>
            <div class="col-lg-4">
                <h2><?= $book->name ?></h2>
                <p><?= $book->author->firstname . ' ' . $book->author->lastname ?></p>
                <p><a class="btn btn-default" href="<?= \yii\helpers\Url::to(['book/read', 'id' => $book->id]) ?>">Читать</a></p>
            </div>
            <?php endforeach ?>
        </div>

    </div>
</div>
