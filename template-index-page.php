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
        <div class="row pl-3">
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
<section class="pt-5 px-3">
    <div class="container">
        <h1><span class="text-yellow">Красим</span> капризные поверхности уже&nbsp;7&nbsp;лет!</h1>
        <p class="py-5 px-0 col-md-9 col-12">
            Сила Цвета — новое подразделение компании <a href="//krasimokna.ru">КрасимОкна</a>. Мы покрасили более 100&nbsp;000
            погонных метров пластика, ламинированного ДСП и&nbsp;других сложных для&nbsp;окраски поверхностей. Нам&nbsp;
            доверяют РОСБАНК, Макдональдс и Бургер Кинг.
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
<section id="calculator" class="bg-gray py-5 px-3">
    <div class="container">
        <h2>Сколько стоит покрасить мою кухню?</h2>

        <div class="row pt-2">
            <div class="col-lg-9">
                <div id="allFacades">
                    <div class="row" id="facade-1">
                        <div class="col-12 justify-content-between d-flex d-sm-flex d-md-none d-lg-none py-2 align-items-center">
                            <h3 class="text-blue font-weight-bold">Фасад 1</h3>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-delete-solid.svg" style="width: 25px; height: 25px;" class="removeFacade1">
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="row">
                                <div class="form-group col-4">
                                    <label for="width1" style="height: 39px; display: flex;align-items: center">Ширина фасада, мм</label>
                                    <input type="number" class="form-control width width1" id="width1">
                                </div>
                                <div class="form-group col-4">
                                    <label for="height1" style="height: 39px; display: flex;align-items: center">Высота фасада, мм</label>
                                    <input type="number" class="form-control height height1" id="height1">
                                </div>
                                <div class="form-group col-4">
                                    <label for="glass1" style="height: 39px; display: flex;align-items: center">Стекло</label>
                                    <select class="form-control glass glass1" id="glass1">
                                        <option value="1">Нет</option>
                                        <option value="1.3">Да</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="row">
                                <div class="form-group col-4">
                                    <label for="count" style="height: 39px; display: flex;align-items: center; justify-content: center">
                                        Количество
                                    </label>
                                    <div class="d-flex justify-content-center">
                                        <img role="button" src="<?php echo get_template_directory_uri(); ?>/images/icon-minus.svg" id="minusFacade1">
                                        <input type="text" class="form-control mx-2 text-center count count1" id="count1" style="width: 40%" min="1" value="1" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                        <img role="button" src="<?php echo get_template_directory_uri(); ?>/images/icon-plus.svg" id="plusFacade1">
                                    </div>

                                </div>
                                <div class="form-group col">
                                    <label for="cover1">Желаемое <br> покрытие</label>
                                    <select class="form-control pl-2 pr-1 cover cover1" id="cover1">
                                        <option value="1">Матовое</option>
                                        <option value="1.7">Глянец</option>
                                        <option value="1.5">Софттач</option>
                                    </select>
                                </div>
                                <div class="form-group col-2">
                                    <label for="paintInside1" class="text-center">Красить внутри</label>
                                    <input class="form-check-input position-static paintInside1 paintInside" type="checkbox" id="paintInside1">
                                </div>
                                <div class="col-1 col-md-2">
                                    <div class="d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                        <label for="count" style="height: 39px; display: flex;align-items: center"></label>
                                        <div class="d-flex align-items-center justify-content-end mt-3">
                                            <img role="button" src="<?php echo get_template_directory_uri(); ?>/images/icon-delete-solid.svg" class="removeFacade1">
                                        </div>
                                    </div>
                                </div>
                                <input type="text" class="d-none total total1" id="total1" value="0">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-3" id="pasteAfter">
                    <a id="addFacade" role="button" class="btn btn-dark-blue text-white font-weight-bold text-uppercase py-2 px-3" style="font-size: 10px;">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-plus-text.svg" alt="" class="pr-2">
                        Добавить фасад
                    </a>
                    <a role="button" id="removeFacades">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-delete-text.svg" alt="">
                        <span class="text-uppercase font-weight-bold" style="color: #AE2C10; font-size: 10px; text-decoration: underline;">Удалить всё</span>
                    </a>
                </div>
                <!-- Дублирующийся блок доп. услуг (для мобилки)-->
                <div class="col-lg-3 d-block d-xs-block d-sm-block d-md-none d-lg-none pt-4">
                    <div class="card p-3">
                        <h6 class="font-weight-bold" id="additionalSumMob">Дополнительные услуги (+&nbsp;<span>0</span> ₽)</h6>
                        <a class="text-uppercase" data-toggle="collapse" href="#additionalServices" role="button" aria-expanded="false" aria-controls="additionalServices" style="font-size: .8rem">
                            <u class="text-blue font-weight-bold">Развернуть</u>
                        </a>
                        <div class="collapse" id="additionalServices">
                            <div class="form-group d-flex align-items-center mb-1">
                                <input class="form-check-input position-static ml-0 additionalServicesCheckbox" type="checkbox" id="demontazhFasadovMob">
                                <label for="demontazhFasadovMob" class="mt-1 ml-2 demontazhFasadovMob" style="font-size: 11px;">Демонтаж фасадов и фурнитуры (+<span>300</span>₽)</label>
                            </div>
                            <div class="form-group d-flex align-items-center mb-1">
                                <input class="form-check-input position-static ml-0 additionalServicesCheckbox" type="checkbox" id="montazhFasadovMob">
                                <label for="montazhFasadovMob" class="mt-1 ml-2 montazhFasadovMob" style="font-size: 11px;">Монтаж фасадов и фурнитуры (+<span>300</span>₽)</label>
                            </div>
                            <div class="form-group d-flex align-items-center mb-1">
                                <input class="form-check-input position-static ml-0 additionalServicesCheckbox" type="checkbox" id="dostavkaNaProizvodstvoMob">
                                <label for="dostavkaNaProizvodstvoMob" class="mt-1 ml-2 dostavkaNaProizvodstvoMob" style="font-size: 11px;">Доставка на производство (+<span>1500</span>₽)</label>
                            </div>
                            <div class="form-group d-flex align-items-center mb-1">
                                <input class="form-check-input position-static ml-0 additionalServicesCheckbox" type="checkbox" id="dostavkaSProizvodstvaMob">
                                <label for="dostavkaSProizvodstvaMob" class="mt-1 ml-2 dostavkaSProizvodstvaMob" style="font-size: 11px;">Доставка с производства (+<span>1500</span>₽)</label>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="mt-5 mb-3">
                <div class="row order-2" id="sumCalculator">
                    <div class="col-md-7">
                        <h1 class="font-weight-bold" id="totalPrice"><span>0</span> ₽</h1>
                        <p>Это ориентировочная цена. Для того, чтобы получить точный расчёт, свяжитесь с нами</p>
                    </div>
                    <div class="col-md-5 text-right">
                        <a id="sendPrice" href="" class="btn btn-yellow py-3 px-4 text-uppercase font-weight-bold" style="font-size: 10px;" data-toggle="modal" data-target="#askPriceModal">Уточнить цену</a>
                    </div>
                </div>

            </div>
            <!-- Дублирующийся блок доп. услуг (для десткопа) -->
            <div class="col-lg-3 order-1 d-none d-xs-none d-sm-none d-md-block d-lg-block" id="additionalServices">
                <div class="card p-3">
                    <h6 class="font-weight-bold" id="additionalSum">Дополнительные услуги (+&nbsp;<span>0</span> ₽)</h6>
                    <div class="form-group d-flex align-items-center mb-1">
                        <input class="form-check-input position-static ml-0 additionalServicesCheckbox" type="checkbox" id="demontazhFasadov">
                        <label for="demontazhFasadov" class="mt-1 ml-2 demontazhFasadov" style="font-size: 11px;">Демонтаж фасадов и фурнитуры (+<span>300</span>₽)</label>
                    </div>
                    <div class="form-group d-flex align-items-center mb-1">
                        <input class="form-check-input position-static ml-0 additionalServicesCheckbox" type="checkbox" id="montazhFasadov">
                        <label for="montazhFasadov" class="mt-1 ml-2 montazhFasadov" style="font-size: 11px;">Монтаж фасадов и фурнитуры (+<span>300</span>₽)</label>
                    </div>
                    <div class="form-group d-flex align-items-center mb-1">
                        <input class="form-check-input position-static ml-0 additionalServicesCheckbox" type="checkbox" id="dostavkaNaProizvodstvo">
                        <label for="dostavkaNaProizvodstvo" class="mt-1 ml-2 dostavkaNaProizvodstvo" style="font-size: 11px;">Доставка на производство (+<span>1500</span>₽)</label>
                    </div>
                    <div class="form-group d-flex align-items-center mb-1">
                        <input class="form-check-input position-static ml-0 additionalServicesCheckbox" type="checkbox" id="dostavkaSProizvodstva">
                        <label for="dostavkaSProizvodstva" class="mt-1 ml-2 dostavkaSProizvodstva" style="font-size: 11px;">Доставка с производства (+<span>1500</span>₽)</label>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="py-5 px-3">
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
    <a href="" class="btn btn-yellow mt-3 mb-4 px-5 py-3 text-uppercase font-weight-bold" style="font-size: 10px;" data-toggle="modal" data-target="#callBackModal">Позвоните мне</a>
</section>

<?php get_footer(); ?>
