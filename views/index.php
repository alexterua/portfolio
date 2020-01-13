<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Alexter">


    <title>Alexter - Разработка сайтов</title>

    <!-- CSS -->
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="/assets/css/simple-line-icons.css" rel="stylesheet" media="screen">
    <link href="/assets/css/animate.css" rel="stylesheet">

    <!-- Custom styles CSS -->
    <link href="/assets/css/style.css" rel="stylesheet" media="screen">

    <script src="/assets/js/modernizr.custom.js"></script>

</head>
<body>

<!-- Preloader -->

<div id="preloader">
    <div id="status"></div>
</div>

<!-- Home start -->

<section id="home" class="pfblock-image screen-height">
    <div class="home-overlay"></div>
    <div class="intro">
        <div class="start">Здравствуйте, меня зовут Александр</div>
        <h1>Я PHP-программист</h1>
        <div class="start">Создание современного и адаптивного веб-приложения</div>
    </div>

    <a href="#services">
        <div class="scroll-down">
            <span>
                <i class="fa fa-angle-down fa-2x"></i>
            </span>
        </div>
    </a>

</section>

<!-- Home end -->

<!-- Navigation start -->

<header class="header">

    <nav class="navbar navbar-custom" role="navigation">

        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
                    <span class="sr-only">Переключить навигацию</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Alexter</a>
            </div>

            <div class="collapse navbar-collapse" id="custom-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <?php foreach ($menu as $nav): ?>
                        <li><a href="<?= $nav->link; ?>"><?= $nav->title; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div><!-- .container -->

    </nav>

</header>

<!-- Navigation end -->

<!-- Services start -->

<section id="services" class="pfblock pfblock-gray">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-sm-offset-3">

                <div class="pfblock-header wow fadeInUp">
                    <h2 class="pfblock-title"><?= $blocks[0]->title; ?></h2>
                    <div class="pfblock-line"></div>
                    <div class="pfblock-subtitle">
                        <?= $blocks[0]->content; ?>
                    </div>
                </div>

            </div>

        </div>

        <div class="row">

            <?php foreach ($services as $service): ?>
            <div class="col-sm-3">

                <div class="iconbox wow slideInLeft">
                    <div class="iconbox-icon">
                        <span class="<?= $service->icon; ?>"></span>
                    </div>
                    <div class="iconbox-text">
                        <h3 class="iconbox-title"><?= $service->title; ?></h3>
                        <div class="iconbox-desc">
                            <?= $service->description; ?>
                        </div>
                    </div>
                </div>

            </div>
            <?php endforeach; ?>

        </div><!-- .row -->
    </div><!-- .container -->
</section>

<!-- Services end -->

<!-- Portfolio start -->

<section id="portfolio" class="pfblock">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-sm-offset-3">

                <div class="pfblock-header wow fadeInUp">
                    <h2 class="pfblock-title"><?= $blocks[1]->title; ?></h2>
                    <div class="pfblock-line"></div>
                    <div class="pfblock-subtitle">
                        <?= $blocks[1]->content; ?>
                    </div>
                </div>

            </div>

        </div><!-- .row -->


        <div class="row">

            <?php foreach ($works as $work): ?>
            <div class="col-xs-12 col-sm-4 col-md-4">

                <div class="grid wow zoomIn">
                    <figure class="effect-bubba">
                        <img src="/assets/images/<?= $work->image; ?>" alt="img01"/>
                        <figcaption>
                            <h2><span><?= $work->title; ?></span></h2>
                            <p><?= $work->description; ?></p>
                        </figcaption>
                    </figure>
                </div>

            </div>
            <?php endforeach; ?>

        </div>


    </div><!-- .contaier -->

</section>

<!-- Portfolio end -->

<!-- Skills start -->

<section class="pfblock pfblock-gray" id="skills">

    <div class="container">

        <div class="row skills">

            <div class="row">

                <div class="col-sm-6 col-sm-offset-3">

                    <div class="pfblock-header wow fadeInUp">
                        <h2 class="pfblock-title"><?= $blocks[2]->title; ?></h2>
                        <div class="pfblock-line"></div>
                        <div class="pfblock-subtitle">
                            <?= $blocks[2]->content; ?>
                        </div>
                    </div>

                </div>

            </div><!-- .row -->

            <?php foreach ($skills as $skill): ?>
            <div class="col-sm-6 col-md-3 text-center">
						<span data-percent="80" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent"><?= $skill->percent; ?></span>
                        </span>
                <h3 class="text-center"><?= $skill->name; ?></h3>
            </div>
            <?php endforeach; ?>

        </div><!--End row -->

    </div>

</section>

<!-- Skills end -->

<!-- CallToAction start -->

<section class="calltoaction">
    <div class="container">

        <div class="row">

            <div class="col-md-12 col-lg-12">
                <h2 class="wow slideInRight" data-wow-delay=".1s"><?= $blocks[3]->title; ?></h2>
                <div class="calltoaction-decription wow slideInRight" data-wow-delay=".2s">
                    <?= $blocks[3]->content; ?>
                </div>
            </div>

            <div class="col-md-12 col-lg-12 calltoaction-btn wow slideInRight" data-wow-delay=".3s">
                <a href="#contact" class="btn btn-lg">Найми меня</a>
            </div>

        </div><!-- .row -->
    </div><!-- .container -->
</section>

<!-- CallToAction end -->

<!-- Testimonials start -->

<section id="testimonials" class="pfblock pfblock-gray">

    <div class="container">

        <div class="row">

            <div class="col-sm-6 col-sm-offset-3">

                <div class="pfblock-header wow fadeInUp">
                    <h2 class="pfblock-title"><?= $blocks[4]->title; ?></h2>
                    <div class="pfblock-line"></div>
                    <div class="pfblock-subtitle">
                        <?= $blocks[4]->content; ?>
                    </div>
                </div>

            </div>

        </div><!-- .row -->

        <div class="row">

            <div id="cbp-qtrotator" class="cbp-qtrotator">
                <?php foreach ($reviews as $review): ?>
                <div class="cbp-qtcontent">
                    <img src="/assets/images/<?= $review->avatar; ?>" alt="<?= $review->author; ?>" />
                    <blockquote>
                        <p><?= $review->text; ?></p>
                        <footer><?= $review->author; ?></footer>
                    </blockquote>
                </div>
                <?php endforeach; ?>

            </div>

        </div><!-- .row -->


    </div><!-- .row -->
</section>

<!-- Testimonial end -->


<!-- Contact start -->

<section id="contact" class="pfblock">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-sm-offset-3">

                <div class="pfblock-header">
                    <h2 class="pfblock-title"><?= $blocks[5]->title; ?></h2>
                    <div class="pfblock-line"></div>
                    <div class="pfblock-subtitle">
                        <?= $blocks[5]->content; ?>
                    </div>
                </div>

            </div>

        </div><!-- .row -->

        <div class="row">

            <div class="col-sm-6 col-sm-offset-3">

                <form id="contact-form" role="form">
                    <div class="ajax-hidden">
                        <div class="form-group wow fadeInUp">
                            <label class="sr-only" for="c_name">Имя</label>
                            <input type="text" id="c_name" class="form-control" name="c_name" placeholder="Имя">
                        </div>

                        <div class="form-group wow fadeInUp" data-wow-delay=".1s">
                            <label class="sr-only" for="c_email">Email</label>
                            <input type="email" id="c_email" class="form-control" name="c_email" placeholder="E-mail">
                        </div>

                        <div class="form-group wow fadeInUp" data-wow-delay=".2s">
                            <textarea class="form-control" id="c_message" name="c_message" rows="7" placeholder="Сообщение"></textarea>
                        </div>

                        <button type="submit" class="btn btn-lg btn-block wow fadeInUp" data-wow-delay=".3s">Отправить сообщение</button>
                    </div>
                    <div class="ajax-response"></div>
                </form>

            </div>

        </div><!-- .row -->
    </div><!-- .container -->
</section>

<!-- Contact end -->

<!-- Footer start -->

<footer id="footer">
    <div class="container">
        <div class="row">

            <div class="col-sm-12">

                <ul class="social-links">
                    <?php foreach ($socials as $social): ?>
                        <li><a href="<?= $social->link; ?>#" class="wow fadeInUp"><i class="<?= $social->icon; ?>"></i></a></li>
                    <?php endforeach; ?>
                </ul>

                <p class="heart">
                    Сделано с <span class="fa fa-heart fa-2x animated pulse"></span>
                </p>
                <p class="copyright">
                    © 2019 Alexter | Все права защищены</a>
                </p>

            </div>

        </div><!-- .row -->
    </div><!-- .container -->
</footer>

<!-- Footer end -->

<!-- Scroll to top -->

<div class="scroll-up">
    <a href="#home"><i class="fa fa-angle-up"></i></a>
</div>

<!-- Scroll to top end-->

<!-- Javascript files -->

<script src="/assets/js/jquery-1.11.1.min.js"></script>
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/js/jquery.parallax-1.1.3.js"></script>
<script src="/assets/js/imagesloaded.pkgd.js"></script>
<script src="/assets/js/jquery.sticky.js"></script>
<script src="/assets/js/smoothscroll.js"></script>
<script src="/assets/js/wow.min.js"></script>
<script src="/assets/js/jquery.easypiechart.js"></script>
<script src="/assets/js/waypoints.min.js"></script>
<script src="/assets/js/jquery.cbpQTRotator.js"></script>
<script src="/assets/js/custom.js"></script>

</body>
</html>