<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        Вибачте, сталася помилка сервера. Ми будемо намагатися виправити її якнайскоріше. 
    </p>
    <p>
        Дякуємо за увагу, ви можете перейти на головну сторінку та спробувати знову.
    </p>

</div>
