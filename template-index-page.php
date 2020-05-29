<?php

/*
Template name: Главная страница
Template Post Type: page
*/

?>

<?php get_header(); ?>

<section id="main">
    <div>
        <div class="d-flex">
            <div class="col-6 p-0" style="height: 50vh; max-height: 630px; background-image: url('<?php echo get_template_directory_uri(); ?>/images/bg-main-left.png');background-repeat: no-repeat;background-size: cover;background-position: center center;">
            </div>
            <div class="col-6 p-0" style="height: 50vh; max-height: 630px; background-image: url('<?php echo get_template_directory_uri(); ?>/images/bg-main-right.png');background-repeat: no-repeat;background-size: cover;background-position: center center;">
            </div>
        </div>
        <div class="position-absolute w-100" style="bottom: 0">
            <div class="d-flex justify-content-center">
                <div class="caption py-3 px-4">
                    <h1 class="text-white text-center font-weight-bold">Красим кухни</h1>
                    <p class="lead text-white text-center">
                        Стильная кухня от 20 тыс. рублей
                    </p>
                    <div class="text-center my-3">
                        <a href="#calculator"
                           class="btn btn-blue text-uppercase text-center mt-3 font-weight-bold py-3 px-4"
                           style="font-size: 10px">
                            Рассчитать стоимость
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="description" class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pt-5">
                <h3 class="pb-3">
                    Ваша кухня устарела и&nbsp;потерлась, а&nbsp;менять ее&nbsp;— дорого?
                </h3>
                <hr style="border-color: #FFB800">
                <h3 class="pt-3">
                    <span class="text-blue">Реновация фасадов</span> — новый тренд в&nbsp;дизайне интерьеров!
                </h3>
            </div>
            <div class="col-md-6 pt-5">
                <div>
                    <p class="pb-3">
                        В Европе набирает популярность реновация кухонь: люди поняли, что достаточно перекрасить фасады
                        и поменять фурнитуру, чтобы старый гарнитур идеально вписался в новый интерьер.
                    </p>
                    <p class="pt-3">
                        Многие делают это ради экономии, но есть и те, кто просто стремится сократить ненужное
                        потребление. Действительно, зачем покупать новое, если можно еще долго и с удовольствием
                        пользоваться тем, что уже есть?
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="carousel" class="bg-gray pt-4 pb-3">
    <div class="container">
        <div class="row pb-4">
            <div class="col-6 text-center">
                До окраски
            </div>
            <div class="col-6 text-center">
                После окраски
            </div>
        </div>
        <?php $sliders = CFS()->get('sliders'); ?>
        <div class="owl-carousel">
            <?php foreach ($sliders as $slide) : ?>
            <div class="row m-0">
                <div class="col-6 p-0" style="height: 70vh; max-height: 400px; background-image: url('<?php echo $slide['slideBefore'] ?>');background-repeat: no-repeat;background-size: cover;background-position: center center;">
                </div>
                <div class="col-6 p-0" style="height: 70vh; max-height: 400px; background-image: url('<?php echo $slide['slideAfter'] ?>');background-repeat: no-repeat;background-size: cover;background-position: center center;">
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section id="dark-gray" class="bg-dark-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-1 col-sm-12 order-2 px-sm-0" >
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-door.png"
                     alt=""
                     class="w-100 h-100"
                     style="object-fit: cover">
            </div>
            <div class="col-md-6 order-md-2 col-sm-12 order-1 pt-5 pb-3">
                <div class="pl-3">
                    <h3 class="text-white">
                        Главное в&nbsp;реновации кухни — качественная окраска фасадов
                    </h3>
                    <p class="text-white pt-4">
                        Основная сложность реновации — профессионально нанести лакокрасочное покрытие и&nbsp;добиться
                        его&nbsp; стойкости. В&nbsp;домашних условиях это&nbsp;сделать очень сложно. Часто фасады
                        покрыты пленкой или&nbsp;другой капризной поверхностью и&nbsp;после высыхания идут пузырями
                        или&nbsp;облезают.
                    </p>
                    <p class="text-white">
                        Многие современные фасады покрыты ПВХ-пленкой, на&nbsp;которой не&nbsp;держится практически
                        никакая краска. Даже профессиональные мастерские перед окраской вынуждены эту&nbsp;пленку
                        удалять, что&nbsp;существенно удорожает стоимость работ
                    </p>
                    <p class="lead pt-3 text-yellow">
                        Лучше всего красить фасады на&nbsp;специально оборудованном для&nbsp;этого производстве.
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="pt-5">
    <div class="container">
        <h1><span class="text-yellow">Красим</span> капризные поверхности уже&nbsp;7&nbsp;лет!</h1>
        <p class="py-5 px-0 col-md-9 col-12">
            Сила Цвета — новое подразделение компании <a href="//krasimokna.ru">КрасимОкна</a>. Мы покрасили более 5000
            погонных метров пластика, ламинированного ДСП и&nbsp;других сложных для&nbsp;окраски поверхностей. Нам&nbsp;
            доверяют (НАЗВАНИЯ КЛИЕНТОВ)
        </p>
        <div class="row">
            <div class="col-md-5 d-flex align-items-center mb-5">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-circle-done.svg" class="mr-3">
                <p class="lead mb-0" style="line-height: 24px;">
                    Более 1000 цветов<br>по RAL-каталогу
                </p>
            </div>
            <div class="col-md-7 d-flex align-items-center mb-5">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-circle-done.svg" class="mr-3">
                <p class="lead mb-0" style="line-height: 24px;">
                    Мощная промышленная<br>сушка
                </p>
            </div>
            <div class="col-md-5 d-flex align-items-center mb-5">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-circle-done.svg" class="mr-3">
                <p class="lead mb-0" style="line-height: 24px;">
                    Экологически безопасные<br>водные краски
                </p>
            </div>
            <div class="col-md-7 d-flex align-items-center mb-5">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-circle-done.svg" class="mr-3">
                <p class="lead mb-0" style="line-height: 24px;">
                    Красим фасады без снятия ПВХ-пленки.<br>По нашим данным, единственные в городе
                </p>
            </div>
        </div>
    </div>
</section>
<section id="calculator" class="bg-gray py-5">
    <div class="container">
        <h2>Сколько стоит покрасить мою кухню?</h2>
        <div class="row pt-2">
            <div class="col-lg-9 row">
                <div class="col-4 col-md-2">
                    <div class="form-group">
                        <label for="width">Ширина фасада, мм</label>
                        <input type="number" class="form-control" id="width">
                    </div>
                </div>
                <div class="col-4 col-md-2">
                    <div class="form-group">
                        <label for="height">Высота фасада, мм</label>
                        <input type="number" class="form-control" id="height">
                    </div>
                </div>
                <div class="col-4 col-md-2">
                    <div class="form-group">
                        <label for="glass" style="min-height: 39px;">Стекло</label>
                        <select id="glass" class="form-control">
                            <option value="1">Да</option>
                            <option value="0">Нет</option>
                        </select>
                    </div>
                </div>
                <div class="col-4 col-md-2">
                    <div class="form-group">
                        <label for="glass" style="min-height: 39px;">Количество</label>
                        <div class="d-flex">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-minus.svg" alt="">
                            <input type="text" class="form-control mx-2 px-2" id="height" style="width: 40%;">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-plus.svg" alt="">
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">

            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <h2>Цена устраивает, что дальше?</h2>
        <div class="row pt-3">
            <div class="col-12 col-md-6 col-lg-3 d-flex align-items-start">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-circle-1.svg" alt="1">
                <p class="mx-2 pt-2">Снимаете фасады или вызываете нашего специалиста, который сделает это за вас</p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 d-flex align-items-start">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-circle-2.svg" alt="2">
                <p class="mx-2 pt-2">Откручиваете фурнитуру или поручаете это сделать нам</p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 d-flex align-items-start">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-circle-3.svg" alt="3">
                <p class="mx-2 pt-2">Упаковываете и привозите к нам на производство или заказываете нашу доставку</p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 d-flex align-items-start">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-circle-4.svg" alt="4">
                <p class="mx-2 pt-2">Забираете свежие и яркие фасады, сами или с нашей помощью вешаете их обратно. Новая кухня готова!</p>
            </div>
        </div>
    </div>
</section>
<section class="bg-gray pt-5 text-center">
    <h2>Остались вопросы?</h2>
    <p class="m-0">Можете позвонить нам по телефону</p>
    <a href="tel: +7 (812) 309 38 92" class="text-decoration-none"><h2 class="text-blue font-weight-bold py-1 m-0">+7 (812) 309 38 92</h2></a>
    <p class="m-0">или закажите обратный звонок</p>
    <a href="" class="btn btn-yellow mt-3 mb-4 px-5 py-3 text-uppercase font-weight-bold" style="font-size: 10px;">Позвоните мне</a>
</section>

<?php get_footer(); ?>
