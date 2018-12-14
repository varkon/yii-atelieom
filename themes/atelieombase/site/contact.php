<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакти';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Дякуємо за ваше звернення. Ми відповімо вам якнайшвидше.
        </div>

       

    <?php else: ?>

        <p>
            Якщо ви маєте запитання до нас, заповніть будь ласка форму нижче.
            Що б прискорити комунікацію залиште будь ласка номер телефону на який можна вам зателефонувати та вкажіть у повідомленні бажаний час дзвінка.
            Дякуємо!
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                   <?= $form->field($model, 'phone')->textInput()->hint('наприклад +380671111111')?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    <?php endif; ?>
        
    <div class="container">
        <div class="map">
            <div id="map-container" class="map-container">
                <a id="map-container-link" href="https://www.google.com/maps/place/%D0%90%D1%82%D0%B5%D0%BB%D1%8C%D0%B5+%D0%9E%D0%BB%D1%8C%D0%B3%D0%B8+%D0%9C%D0%B0%D0%BB%D0%B0%D1%85%D0%BE%D0%B2%D0%BE%D0%B9+%28%D0%A7%D0%9F+%D0%9C%D0%B0%D0%BB%D0%B0%D1%85%D0%BE%D0%B2%D0%B0%29/data=!3m1!4b1!4m2!3m1!1s0x40dbe2f7816f4a8d:0xfe94b7c84a58e225" target="_blank" data-tracking-element-type=7>
                    <img src="https://maps.googleapis.com/maps/api/staticmap?scale=1&amp;size=520x410&amp;style=feature:poi.business|visibility:off&amp;style=feature:water|visibility:simplified&amp;style=feature:road|element:labels.icon|visiblity:off&amp;style=feature:road.highway|element:labels|saturation:-90|lightness:25&amp;format=jpg&amp;language=uk&amp;region=UA&amp;markers=color:0x60a5a5|48.465458,35.049688&amp;zoom=16&amp;client=google-presto&amp;signature=dS9PlCrzej6AqHpDNw1s7Gn86ZA" 
                         alt="Ателье в Днепре. Пошив мужской, женской и детской одежды." width="520" height="410"/>
                </a>
            </div>
            <dl class="map-info">
                <dt class="map-info__title">Адреса</dt>
                <dd class="map-info__item">
                    <address class="map-info__address-item " itemprop="address">
                        <div class="addressLine">вул. Харківська, 11</div>
                        <div class="addressLine">Дніпро</div>
                        <div class="addressLine">Dnipropetrovsk oblast</div>
                        <div class="addressLine">Україна</div>
                        <div class="addressLine">49000</div>
                    </address>
                    <a class="map-info__link site-cta-link" href="https://www.google.com/maps/dir//%D0%90%D1%82%D0%B5%D0%BB%D1%8C%D0%B5+%D0%9E%D0%BB%D1%8C%D0%B3%D0%B8+%D0%9C%D0%B0%D0%BB%D0%B0%D1%85%D0%BE%D0%B2%D0%BE%D0%B9+%28%D0%A7%D0%9F+%D0%9C%D0%B0%D0%BB%D0%B0%D1%85%D0%BE%D0%B2%D0%B0%29/data=!4m8!4m7!1m0!1m5!1m1!1s0x40dbe2f7816f4a8d:0xfe94b7c84a58e225!2m2!1d35.049687999999996!2d48.465458" target="_blank" data-tracking-element-type=6>Прокласти маршрут</a>
                </dd>
                <dt class="map-info__title">Контакт</dt><dd class="map-info__item">
                    <ul class="map-info__contact-list">
                        <li class="map-info__contact-item" itemprop="telephone"><a class="site-cta-link" href="tel:+380-67-563-9211" dir="ltr" data-tracking-element-type=3 itemprop="telephone">067 563 9211</a></li>
                    </ul>
                    <!-- /map-info__contact-list --></dd><!-- /map-info__item --></dl>
            <dl class="map-info map-info-hours" id="hours">
                <dt class="map-info__title" itemprop="openingHoursSpecification" itemscope itemtype="http://schema.org/OpeningHoursSpecification" >Графік роботи</dt>
                <dd class="map-info__item">
                    <dl class="map-info__hours"><dt class="map-info__hours-head">пн</dt><dd class="map-info__hours-value"><span class="map-info__hours-unit">10:00–18:00</span></dd>
                        <dt class="map-info__hours-head">вт</dt><dd class="map-info__hours-value"><span class="map-info__hours-unit">10:00–18:00</span></dd>
                        <dt class="map-info__hours-head">ср</dt><dd class="map-info__hours-value"><span class="map-info__hours-unit">10:00–18:00</span></dd>
                        <dt class="map-info__hours-head">чт</dt><dd class="map-info__hours-value"><span class="map-info__hours-unit">10:00–18:00</span></dd>
                        <dt class="map-info__hours-head">пт</dt><dd class="map-info__hours-value"><span class="map-info__hours-unit">10:00–18:00</span></dd>
                        <dt class="map-info__hours-head">сб</dt><dd class="map-info__hours-value"><span class="map-info__hours-unit">Зачинено</span></dd>
                        <dt class="map-info__hours-head">нд</dt><dd class="map-info__hours-value"><span class="map-info__hours-unit">Зачинено</span>
                        </dd>
                    </dl>
                </dd>
            </dl>

        </div>
        <p itemprop="priceRange" class="hide">$$$</p>
    </div> <!--  // Map Container-->

   
</div>
