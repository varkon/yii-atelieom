<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Про нас';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="col-lg-12" >
            <div class="col-lg-2"> <?= Html::img($this->theme->baseUrl . '/images/olia.jpg', $options = ['class' => 'pull-left img-rounded',  'width'=>150, 'alt'=>'Пошив мужской, женской и детской одежды в Днепре']) ?></div>
            <div class="col-lg-10" >
                <p>Мене звуть Ольга Малахова. Майже 20 років тому я отримала освіту технолога швейного виробництва, 
                    але завжди мріяла не про виробництво, а про індівідуальний пошив одежі - для дітей та дорослих.
                    Саме тому у 2007 році я створила власне ательє й таким чином ми разом з моїм невеликим коллективом працюємо вже більше як 10 років.</p>
                    <p>За цей час багато чого змінилося - ми співпрацюємо з дізайнерами, розробляємо свої власні моделі, співпрацюємо з різними 
                    сценичними колективами як в Україні, так й закордоном. Ми шиємо одяг як для дорослих, так й для дітей,
                    а також намагаємося втілити у життя найвибагливіші побажання нашіх клієнтів.</p>
                    <p>Робота ательє - це завжди робота індівідуальна, творча. Завдяки моєму професіному досвіду, 
                    а також завдяки велечезному досвіду людей, які працюють зі мною, нам вдається виконувати свою роботу якісно та ефективно.
                    Тому наші клієнти можуть бути впевниними - ви отримаєте професійний та індівідуальний підхід до кожного вашого замовлення,
                    якщо потрібно - ми допоможемо вам вибрати тканину, яка підкреслить вашу індівідуальність, допоможемо відпрацювати модель та багато чого іншого, що входить у понняття індівідуальний пошив.</p>
                   
                </p>
           
                <p>То ж ми чекаємо вас, друзі, у якості нашіх клієнтів, та сподіваємося що ви отримаєте справжне задоволення від гарного, пошитого виключно для вас одягу.</p>
                <p>Щиро з повагою</p>
                <h4>Ольга Малахова</h4>
                <p>Якщо ви маєте побажання, пропозиції та зауваження - ви можете висловити їх, користуючись формою у розділі Контакти</p>
                
            </div>
        </div>
    <?php
    $user = 'malakhova6923';
$url = "https://www.instagram.com/$user/";
$ch = curl_init($url); 
print_r($url);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
$json = curl_exec($ch); 
curl_close($ch);


$result =  json_decode($json, true);

print_r($json);
if (count($result['items'])) {
    foreach ($result['items'] as $_item) {
        echo '<img src="' . $_item['images']['thumbnail']['url'] . '">';
    }
}
    ?>
        
</div>
