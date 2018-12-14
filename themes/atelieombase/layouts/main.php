<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <?=
        $this->registerMetaTag([
            'name' => 'description',
            'content' => 'Хутряне ателье у м. Дніпро. Пошив шуб, манто, дублянок',
        ]);
        $this->registerMetaTag([
            'name' => 'keywords',
            'content' => 'Пошив у Дніпрі, хутряне ательє, пошив плаття, пошив костюмів',
        ]);
        $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => '/favicon.png']);
        ?>

        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110155731-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-110155731-1');
        </script>        
    </head>
    <body class="atelieom" itemscope itemtype = 'http://schema.org/LocalBusiness'>
            <?php $this->beginBody() ?>

        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => Html::img($this->theme->baseUrl . '/images/logo.png', ['itemprop'=>'image', 'alt' => Yii::$app->name, 'class' => 'pull-left']) . Yii::$app->name,
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top ',
                    
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                
                'items' => [
                            ['label' => 'Головна', 
                                'url' => ['/site/index'],
                                'visible' => $this->context->route != 'site/index'
                            
                            ],
                            
                    ['label' => 'Про нас', 'url' => ['about'],  'active' => $this->context->route == 'site/about'],
                    ['label' => 'Контакти', 'url' => ['contact'], 'active' => $this->context->route == 'site/contact'],
                    [
                        'label' => Html::img($this->theme->baseUrl . '/images/socials/Facebook32.png', ['alt' => 'Ательє Ольги Малахової у Фейсбуці', 'class' => 'pull-left']),
                        'url' => 'https://www.facebook.com/%D0%90%D1%82%D0%B5%D0%BB%D1%8C%D1%94-%D0%9E%D0%BB%D1%8C%D0%B3%D0%B8-%D0%9C%D0%B0%D0%BB%D0%B0%D1%85%D0%BE%D0%B2%D0%BE%D0%B9-125118444207332/',
                        'linkOptions' => ['target' => '_blank']
                    ],
                    [
                        'label' => Html::img($this->theme->baseUrl . '/images/socials/Google+32.png', ['alt' => 'Ательє Ольги Малахової у Фейсбуці', 'class' => 'pull-left']),
                        'url' => 'https://plus.google.com/b/100379982894156347690/',
                        'linkOptions' => ['target' => '_blank']
                    ],
                    [
                        'label' => Html::img($this->theme->baseUrl . '/images/socials/Instagram32.png', ['alt' => 'Ательє Ольги Малахової у Фейсбуці', 'class' => 'pull-left']),
                        'url' => 'https://www.instagram.com/malakhova6923/',
                        'linkOptions' => ['target' => '_blank']
                    ],
                    [
                        'label' => Html::img($this->theme->baseUrl . '/images/socials/Linkedin32.png', ['alt' => 'Ательє Ольги Малахової у Фейсбуці', 'class' => 'pull-left']),
                        'url' => 'https://www.linkedin.com/in/atelier-olga-malakhova/',
                        'linkOptions' => ['target' => '_blank']
                    ],
                    [
                        'label' => Html::img($this->theme->baseUrl . '/images/socials/Twitter32.png', ['alt' => 'Ательє Ольги Малахової у Фейсбуці', 'class' => 'pull-left']),
                        'url' => 'https://twitter.com/atelieolgi',
                        'linkOptions' => ['target' => '_blank']
                    ],
                    
                //          ['label' => 'About', 'url' => ['/site/about']],
//            ['label' => 'Contact', 'url' => ['/site/contact']],
                //        Yii::$app->user->isGuest ? (
                //             ['label' => 'Login', 'url' => ['/site/login']]
                //         ) : (
                //             '<li>'
                //             . Html::beginForm(['/site/logout'], 'post')
                //             . Html::submitButton(
                //                 'Logout (' . Yii::$app->user->identity->username . ')',
                //                 ['class' => 'btn btn-link logout']
                //             )
                //             . Html::endForm()
                //             . '</li>'
                //         )
                ],
                 'encodeLabels' => false,
            ]);
            NavBar::end();
            ?>

            <div class="container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
<?= Alert::widget() ?>
<?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; Ательє Ольги Малахової <?= date('Y') ?></p>
<?php
echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                
                'items' => [                           
                            
                    ['label' => 'Про нас', 'url' => ['about'],  'active' => $this->context->route == 'site/about'],
                    ['label' => 'Контакти', 'url' => ['contact'], 'active' => $this->context->route == 'site/contact'],
                    [
                        'label' => Html::img($this->theme->baseUrl . '/images/socials/Facebook32.png', ['alt' => 'Ательє Ольги Малахової у Фейсбуці', 'class' => 'pull-left']),
                        'url' => 'https://www.facebook.com/%D0%90%D1%82%D0%B5%D0%BB%D1%8C%D1%94-%D0%9E%D0%BB%D1%8C%D0%B3%D0%B8-%D0%9C%D0%B0%D0%BB%D0%B0%D1%85%D0%BE%D0%B2%D0%BE%D0%B9-125118444207332/',
                        'linkOptions' => ['target' => '_blank']
                    ],
                    [
                        'label' => Html::img($this->theme->baseUrl . '/images/socials/Google+32.png', ['alt' => 'Ательє Ольги Малахової у Фейсбуці', 'class' => 'pull-left']),
                        'url' => 'https://plus.google.com/b/100379982894156347690/',
                        'linkOptions' => ['target' => '_blank']
                    ],
                    [
                        'label' => Html::img($this->theme->baseUrl . '/images/socials/Instagram32.png', ['alt' => 'Ательє Ольги Малахової у Фейсбуці', 'class' => 'pull-left']),
                        'url' => 'https://www.instagram.com/malakhova6923/',
                        'linkOptions' => ['target' => '_blank']
                    ],
                    [
                        'label' => Html::img($this->theme->baseUrl . '/images/socials/Linkedin32.png', ['alt' => 'Ательє Ольги Малахової у Фейсбуці', 'class' => 'pull-left']),
                        'url' => 'https://www.linkedin.com/in/atelier-olga-malakhova/',
                        'linkOptions' => ['target' => '_blank']
                    ],
                    [
                        'label' => Html::img($this->theme->baseUrl . '/images/socials/Twitter32.png', ['alt' => 'Ательє Ольги Малахової у Фейсбуці', 'class' => 'pull-left']),
                        'url' => 'https://twitter.com/atelieolgi',
                        'linkOptions' => ['target' => '_blank']
                    ],
                  
                  ],
                 'encodeLabels' => false,
            ]); ?>
            </div>
        </footer>

<?php $this->endBody() ?>
        <p id="back-top"><a href="#top"><span></span></a></p>

    </body>
</html>
<?php $this->endPage() ?>
