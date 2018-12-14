<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Ательє Ольги Малахової';
?>
<div class="site-index">

    <div class="jumbotron">

        <h1 itemprop='name'>Ательє Ольги Малахової</h1>

        <p class="lead">Ательє одягу для дорослих та дітей у м. Дніпрі</p>
        <p><a class="btn btn-lg btn-success" href="tel:+380-67-563-9211" ><span id="primary_cta_1" class="hide">Зателефонувати</span>Наш телефон: 067 563 9211</a></p>
    </div>
</div>
<div class="body-content">
    <div class="row">
        <div class="col-lg-12">
            <h2>Галерея нашіх робіт</h2>

            <div  class='c-carousel'>
                <div class="c-carousel__arrow c-carousel__arrow--left"></div>
                <div class="c-carousel__arrow c-carousel__arrow--right"></div>
                <ul id='main-gallery' class="c-carousel__slides">
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/1.jpg', $options = ['id' => '1m', 'onclick' => 'openModal();currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/2.jpg', $options = ['id' => '2m', 'onclick' => 'openModal();currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/3.jpg', $options = ['id' => '3m', 'onclick' => 'openModal();currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/4.jpg', $options = ['id' => '4m', 'onclick' => 'openModal();currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/5.jpg', $options = ['id' => '5m', 'onclick' => 'openModal();currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/6.jpg', $options = ['id' => '6m', 'onclick' => 'openModal();currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/7.jpg', $options = ['id' => '7m', 'onclick' => 'openModal();currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/8.jpg', $options = ['id' => '8m', 'onclick' => 'openModal();currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/9.jpg', $options = ['id' => '9m', 'onclick' => 'openModal();currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/10.jpg', $options = ['id' => '10m', 'onclick' => 'openModal();currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/11.jpg', $options = ['id' => '11m', 'onclick' => 'openModal();currentSlide(11)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/12.jpg', $options = ['id' => '12m', 'onclick' => 'openModal();currentSlide(12)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/13.jpg', $options = ['id' => '13m', 'onclick' => 'openModal();currentSlide(13)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/14.jpg', $options = ['id' => '14m', 'onclick' => 'openModal();currentSlide(14)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/15.jpg', $options = ['id' => '15m', 'onclick' => 'openModal();currentSlide(15)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/16.jpg', $options = ['id' => '16m', 'onclick' => 'openModal();currentSlide(16)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/17.jpg', $options = ['id' => '17m', 'onclick' => 'openModal();currentSlide(17)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/18.jpg', $options = ['id' => '18m', 'onclick' => 'openModal();currentSlide(18)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/19.jpg', $options = ['id' => '19m', 'onclick' => 'openModal();currentSlide(19)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/20.jpg', $options = ['id' => '20m', 'onclick' => 'openModal();currentSlide(20)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/21.jpg', $options = ['id' => '21m', 'onclick' => 'openModal();currentSlide(21)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/22.jpg', $options = ['id' => '22m', 'onclick' => 'openModal();currentSlide(22)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/23.jpg', $options = ['id' => '23m', 'onclick' => 'openModal();currentSlide(23)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/24.jpg', $options = ['id' => '24m', 'onclick' => 'openModal();currentSlide(24)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/25.jpg', $options = ['id' => '25m', 'onclick' => 'openModal();currentSlide(25)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/26.jpg', $options = ['id' => '26m', 'onclick' => 'openModal();currentSlide(26)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/27.jpg', $options = ['id' => '27m', 'onclick' => 'openModal();currentSlide(27)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/28.jpg', $options = ['id' => '28m', 'onclick' => 'openModal();currentSlide(28)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/29.jpg', $options = ['id' => '29m', 'onclick' => 'openModal();currentSlide(29)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/30.jpg', $options = ['id' => '30m', 'onclick' => 'openModal();currentSlide(30)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/31.jpg', $options = ['id' => '31m', 'onclick' => 'openModal();currentSlide(31)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/32.jpg', $options = ['id' => '32m', 'onclick' => 'openModal();currentSlide(32)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/33.jpg', $options = ['id' => '33m', 'onclick' => 'openModal();currentSlide(33)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/34.jpg', $options = ['id' => '34m', 'onclick' => 'openModal();currentSlide(34)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/35.jpg', $options = ['id' => '35m', 'onclick' => 'openModal();currentSlide(35)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/36.jpg', $options = ['id' => '36m', 'onclick' => 'openModal();currentSlide(36)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/37.jpg', $options = ['id' => '37m', 'onclick' => 'openModal();currentSlide(37)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/38.jpg', $options = ['id' => '38m', 'onclick' => 'openModal();currentSlide(38)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/39.jpg', $options = ['id' => '39m', 'onclick' => 'openModal();currentSlide(39)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/40.jpg', $options = ['id' => '40m', 'onclick' => 'openModal();currentSlide(40)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/41.jpg', $options = ['id' => '41m', 'onclick' => 'openModal();currentSlide(41)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/42.jpg', $options = ['id' => '42m', 'onclick' => 'openModal();currentSlide(42)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/43.jpg', $options = ['id' => '43m', 'onclick' => 'openModal();currentSlide(43)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                    <li><?= Html::img($this->theme->baseUrl . '/images/clothes/44.jpg', $options = ['id' => '44m', 'onclick' => 'openModal();currentSlide(44)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></li>
                </ul>  
            </div>
            <hr>
        </div>

        <div class="col-lg-12" itemscope itemtype="http://schema.org/Offer">
            <h2 itemprop="name">Хутряне ательє</h2>

            <div class="col-lg-2"> <?= Html::img($this->theme->baseUrl . '/images/fear.jpg', $options = ['class' => 'pull-left img-rounded']) ?></div>
            <div class="col-lg-10" >
                <p>Що може бути краще, ніж одяг з хутра? Стильний та теплий, він зігріває нас, але в той же час дозволяє виглядати красиво та стильно. 
                    Шуби, дублянки, манто та жилетки з натурального або штучного хутра дозволять вам відчувати себе комфортно за будь якої погоди,
                    але при цьому хутро ніколи не виходить з моди. Для того, щоб зменшити вбивства тварин можна використовувати штучне хутро,
                    яке зараз за якістю не поступається природним аналогам. Як хутряне ательє, ми працюємо досить довго та маємо величезний досвід у цій галузі.
                    Ми виготовляємо шуби, дублянки, манто та інше на замовлення, допомагаємо вибрати хутро під конкретну модель та порекомендуємо зручний та модний фасон.
                    Також ремонтуємо, перешиваємо або підганяємо по фігурі хутряні вироби. Ми співпрацюємо з різними постачальниками хутра, то ж ви можете завжди вибрати найбільш оптимальне для вас за ціною та якістю.
                </p>
                <p> Є правда одне виключення - ми не шиємо, не ремонтуємо, не підганяємо шапки. Ніякі. Навіть з хутра. Так - це також хутряні вироби, але ми з цим не працюємо. 
                </p>
                <p><a class="btn btn-default" href="http://www.atelie-one.org.ua/rabotyi-atele/">Наш старий сайт &raquo; </a></p>
            </div>
        </div>
        <hr>
        <div class="col-lg-12" itemscope itemtype="http://schema.org/Offer">
            <h2 itemprop="name">Пошив одягу для дорослих та дітей</h2>

            <div class="col-lg-10">
                <p>Ми працюємо як для дороcлих так й для дітей. У нас ви можете замовити верхній одяг - костюми, сукні - весільні, коктельні та повсякденні, спортивні костюми, пальта, куртки та інші речі для свого гаредеробу.
                    До речі зверніть увагу, що ми одні з небагатьох ательє в місті Дніпрі, хто взагалі шиє чоловічі костюми або піджаки та брюки окремо.
                    У нас ви можете замовити любий сподобавшийся фасон та модель. Якщо потрібно ми надамо рекомендації що до тканини та фурнітури,
                    щоб вибрана вами модель виглядала саме так, як ви того очікуєте.
                    Ми витратим на вас стільки часу, скільки це потрібно, саме той результат який би ви хотіли.
                </p>
                <p>
                    Також зверніть увагу - пошив в ательє відрізняється від покупки одягу на базарі та в магазині.
                    Вам потрібно буде запланувати час на примірки - зазвичай ми шьємо речі з одної примірки, але бувають випадки коли потрібно зробити їх декілька.
                    Зате й результат який ви отримаєте вас задовільнить.
                </p>
                <p>
                    Якщо ви купили костюм або сукню у магазині або в бутіку й вам здається що вона погано на вас сидить - це не проблема. 
                    Ми допоможемо вам підігнати одяг по фігурі й ви будете гарно виглядати. 
                </p>

                <p><a class="btn btn-default" href="https://www.facebook.com/Ательє-Ольги-Малаховой-125118444207332">Наша сторінка в фейсбук &raquo;</a></p>
            </div>
            <div class="col-lg-2"> <?= Html::img($this->theme->baseUrl . '/images/sportsuit.jpg', $options = ['class' => 'pull-right img-rounded']) ?></div>
        </div>
        <hr>
        <div class="col-lg-12" itemscope itemtype="http://schema.org/Offer">
            <h2 itemprop="name">Танцювальні та сценічні костюми</h2>
            <div class="col-lg-2"> <?= Html::img($this->theme->baseUrl . '/images/dance.jpg', $options = ['class' => 'pull-left img-rounded']) ?></div>
            <div class="col-lg-10">  <p> Костюми та сцена  - це речи які не можуть бути одне без одного. 
                    Це відноситься як до аматорів та професіоналів спортивного танця, так й до сценічних та циркових колективів - завжди тут велечезну роль грає окрім виконавця його костюм.
                </p>
                <p>
                    Ми довго та плідно співпрацюємо з сценічними та цирковими колективами як в Україні так й закордоном а також з окремими виконавцями. 
                    Можливо ми не такі гарні, як костюмери великів театрів - але ми працюємо з труппами які включають в себе фокусників, танцюристів, акробатів та інших,
                    тож досвід нашого ательє досить великий. Маємо досвід виготовлення трансформацій.
                </p>
                <p>
                    Приймаємо участь у Прозоро, працюємо з бюджетними організаціями</p>

                <p><a class="btn btn-default" href="http://www.atelie-one.org.ua/rabotyi-atele/kontsertnyie-i-tantsevalnyie-kostyumyi/">Сценічні костюми &raquo;</a></p>
            </div> </div>

    </div>

    <div class="jumbotron">
        <p><a class="btn btn-lg btn-danger" href="tel:+380-67-563-9211"><span id="primary_cta_2" class="hide">Зателефонувати</span>Зверніть будь ласка увагу!</a></p>
        <p >Якщо ви не встигаєте до закриття ательє - ми все розуміємо. 
            Будь ласка, зателефонуйте нам, й ми дочекаємося вас. Дякуємо!</p>
    </div>

    <div class="container">
        <div class="map">
            <div id="map-container" class="map-container">
                <a id="map-container-link" href="https://www.google.com/maps/place/%D0%90%D1%82%D0%B5%D0%BB%D1%8C%D0%B5+%D0%9E%D0%BB%D1%8C%D0%B3%D0%B8+%D0%9C%D0%B0%D0%BB%D0%B0%D1%85%D0%BE%D0%B2%D0%BE%D0%B9+%28%D0%A7%D0%9F+%D0%9C%D0%B0%D0%BB%D0%B0%D1%85%D0%BE%D0%B2%D0%B0%29/data=!3m1!4b1!4m2!3m1!1s0x40dbe2f7816f4a8d:0xfe94b7c84a58e225" target="_blank" data-tracking-element-type=7>
                    <img src="https://maps.googleapis.com/maps/api/staticmap?scale=1&amp;size=520x410&amp;style=feature:poi.business|visibility:off&amp;style=feature:water|visibility:simplified&amp;style=feature:road|element:labels.icon|visiblity:off&amp;style=feature:road.highway|element:labels|saturation:-90|lightness:25&amp;format=jpg&amp;language=uk&amp;region=UA&amp;markers=color:0x60a5a5|48.465458,35.049688&amp;zoom=16&amp;client=google-presto&amp;signature=dS9PlCrzej6AqHpDNw1s7Gn86ZA" alt="Карта з місцеположенням ательє." width="520" height="410"/>
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

    <p><a class="btn btn-lg btn-default" href="http://atelie-one.org.ua">Наш старий сайт &raquo;</a></p>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/1.jpg', $options = ['id' => '1', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/2.jpg', $options = ['id' => '2', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/3.jpg', $options = ['id' => '3', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/4.jpg', $options = ['id' => '4', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/5.jpg', $options = ['id' => '5', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/6.jpg', $options = ['id' => '6', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/7.jpg', $options = ['id' => '7', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/8.jpg', $options = ['id' => '8', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/9.jpg', $options = ['id' => '9', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/10.jpg', $options = ['id' => '10', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/11.jpg', $options = ['id' => '11', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/12.jpg', $options = ['id' => '12', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/13.jpg', $options = ['id' => '13', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/14.jpg', $options = ['id' => '14', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/15.jpg', $options = ['id' => '15', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/16.jpg', $options = ['id' => '16', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/17.jpg', $options = ['id' => '17', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/18.jpg', $options = ['id' => '18', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/19.jpg', $options = ['id' => '19', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/20.jpg', $options = ['id' => '20', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/21.jpg', $options = ['id' => '21', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/22.jpg', $options = ['id' => '22', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/23.jpg', $options = ['id' => '23', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/24.jpg', $options = ['id' => '24', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/25.jpg', $options = ['id' => '25', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/26.jpg', $options = ['id' => '26', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/27.jpg', $options = ['id' => '27', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/28.jpg', $options = ['id' => '28', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/29.jpg', $options = ['id' => '29', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/30.jpg', $options = ['id' => '30', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/31.jpg', $options = ['id' => '31', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/32.jpg', $options = ['id' => '32', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/33.jpg', $options = ['id' => '33', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/34.jpg', $options = ['id' => '34', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/35.jpg', $options = ['id' => '35', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/36.jpg', $options = ['id' => '36', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/37.jpg', $options = ['id' => '37', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/38.jpg', $options = ['id' => '38', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/39.jpg', $options = ['id' => '39', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/40.jpg', $options = ['id' => '40', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/41.jpg', $options = ['id' => '41', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/42.jpg', $options = ['id' => '42', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/43.jpg', $options = ['id' => '43', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <div class='modalSlides'><?= Html::img($this->theme->baseUrl . '/images/clothes/44.jpg', $options = ['id' => '44', 'onclick' => 'currentSlide(this.id)', 'alt' => 'Пошив та ремонт одягу, пошив та ремонт шуб та дублянок']) ?></div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
</div>

