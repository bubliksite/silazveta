<?php wp_footer(); ?>

<footer class="bg-dark-gray py-4">
    <div class="container">
        <div class="d-flex justify-content-between">
            <p class="text-white mb-0 pb-0">© Сила цвета</p>
            <a href="mailto: Info@silazveta.ru" class="text-yellow text-decoration-none mb-0 pb-0">Info@silazveta.ru</a>
        </div>
    </div>
</footer>

<div class="modal fade" id="callBackModal" tabindex="-1" role="dialog" aria-labelledby="callBackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title w-100 text-center" id="callBackModalLabel">Перезвоните мне!</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; top: 1.3rem; right: 1.3rem">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon-close-modal.svg" alt="">
                </button>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode('[caldera_form id="CF5ed395f1d2030"]'); ?>
            </div>
            <div class="modal-footer">
                <p class="text-center" style="font-size: 12px">
                    * Поля, обозначенные звездочкой обязательны для заполнения. Отправьте нам телефон или e-mail, и мы свяжемся с вами в течение часа
                </p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="askPriceModal" tabindex="-1" role="dialog" aria-labelledby="askPriceLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header pb-0">
                <h3 class="modal-title w-100 text-center" id="callBackModalLabel">Узнать точную стоимость</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; top: 1.3rem; right: 1.3rem">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon-close-modal.svg" alt="">
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center">
                    Предварительная стоимость окраски вашей кухни составила <span class="font-weight-bold">13 000 ₽</span>. Чтобы связаться с нами и узнать точную стоимость, заполните форму:
                </p>
                <?php echo do_shortcode('[caldera_form id="CF5ed395f1d2030"]'); ?>
            </div>
            <div class="modal-footer">
                <p class="text-center" style="font-size: 12px">
                    * Поля, обозначенные звездочкой обязательны для заполнения. Отправьте нам телефон или e-mail, и мы свяжемся с вами в течение часа
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items: 1,
            navText: ['<img src="<?php echo get_template_directory_uri(); ?>/images/icon-arrow-prev.svg">','<img src="<?php echo get_template_directory_uri(); ?>/images/icon-arrow-next.svg">'],
            loop: true,
            dots: true,
            responsive: {
                0 : {
                    nav: false
                },
                640 : {
                    nav: true
                }
            }
        });
    });
</script>

<script>
    let sumFacades = 0
    let tempSumFacades = 0

    function summerizeFacades() {
        $('.count').each(function (index, input) {
            sumFacades = +$(input).val()
            return sumFacades
        })
    }

    function montazhDemontazh() {
        $('.demontazhFasadov').find('span').text(300*sumFacades)
        $('.montazhFasadov').find('span').text(300*sumFacades)
    }

    $('document').ready(function() {
        summerizeFacades()
    })

    //Обнуляем итератор строк фасадов
    $('#removeFacades').click(function(){
        facadeIterator = 1;
    })

    var facadeIterator = 2
    $('#addFacade').click(function() {

        //Изменяем стоимость доп. работ при добавлении строки с фасадами
        sumFacades++
        montazhDemontazh()


        //Добавляем строчку с фасадом
        $('#allFacades').append(
            '<div class="row" id="facade-' + facadeIterator + '">\n' +
            '<div class="col-12 justify-content-between d-flex d-sm-flex d-md-none d-lg-none py-2 align-items-center">\n' +
            '                            <h3 class="text-blue font-weight-bold">Фасад ' + facadeIterator + '</h3>\n' +
            '                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-delete-solid.svg" style="width: 25px; height: 25px;" class="removeFacade' + facadeIterator + '">\n' +
            '                        </div>' +
            '                        <div class="col-md-6 col-12">\n' +
            '                            <div class="row">\n' +
            '                                <div class="form-group col-4">\n' +
            '                                    <label for="width" style="height: 39px; display: flex;align-items: center">Ширина фасада, мм</label>\n' +
            '                                    <input type="number" class="form-control width" id="width">\n' +
            '                                </div>\n' +
            '                                <div class="form-group col-4">\n' +
            '                                    <label for="height" style="height: 39px; display: flex;align-items: center">Высота фасада, мм</label>\n' +
            '                                    <input type="number" class="form-control height" id="height">\n' +
            '                                </div>\n' +
            '                                <div class="form-group col-4">\n' +
            '                                    <label for="glass" style="height: 39px; display: flex;align-items: center">Стекло</label>\n' +
            '                                    <select class="form-control glass" id="glass">\n' +
            '                                        <option value="1">Да</option>\n' +
            '                                        <option value="0">Нет</option>\n' +
            '                                    </select>\n' +
            '                                </div>\n' +
            '                            </div>\n' +
            '                        </div>\n' +
            '                        <div class="col-md-6 col-12">\n' +
            '                            <div class="row">\n' +
            '                                <div class="form-group col-4">\n' +
            '                                    <label for="count" style="height: 39px; display: flex;align-items: center; justify-content: center">\n' +
            '                                        Количество\n' +
            '                                    </label>\n' +
            '                                    <div class="d-flex justify-content-center">\n' +
            '                                        <img role="button" src="<?php echo get_template_directory_uri(); ?>/images/icon-minus.svg" id="minusFacade' + facadeIterator + '">\n' +
            '                                        <input type="text" class="form-control mx-2 text-center count count' + facadeIterator + '" id="count" style="width: 40%" min="1" value="1">\n' +
            '                                        <img role="button" src="<?php echo get_template_directory_uri(); ?>/images/icon-plus.svg" id="plusFacade' + facadeIterator + '">\n' +
            '                                    </div>\n' +
            '                                </div>\n' +
            '                                <div class="form-group col">\n' +
            '                                    <label for="cover">Желаемое <br> покрытие</label>\n' +
            '                                    <select class="form-control pl-2 pr-1 cover" id="cover">\n' +
            '                                        <option value="1">Глянец</option>\n' +
            '                                        <option value="2">Софттач</option>\n' +
            '                                    </select>\n' +
            '                                </div>\n' +
            '                                <div class="form-group col-2">\n' +
            '                                    <label for="paintInside" class="text-center">Красить внутри</label>\n' +
            '                                    <input class="form-check-input position-static paintInside" type="checkbox" id="paintInside">\n' +
            '                                </div>\n' +
            '                                <div class="col-1 col-md-2">\n' +
            '                                    <div class="d-none d-xs-none d-sm-none d-md-block d-lg-block">\n' +
            '                                        <label for="count" style="height: 39px; display: flex;align-items: center"></label>\n' +
            '                                        <div class="d-flex align-items-center justify-content-end mt-3">\n' +
            '                                            <img role="button" src="<?php echo get_template_directory_uri(); ?>/images/icon-delete-solid.svg" alt="" class="removeFacade' + facadeIterator + '">\n' +
            '                                        </div>\n' +
            '                                    </div>\n' +
            '                                </div>\n' +
            '                            </div>\n' +
            '                        </div>\n'
        )
        facadeIterator++

    })
</script>

<!-- Циклы для строк фасадов -->
<?php for ($i = 1; $i < 20; $i++) : ?>
    <script>

        $('body').on('click', '#minusFacade<?php echo $i; ?>', function () {
            sumFacades--
            let thisCount = $('#facade-<?php echo $i; ?>').find('#count').val()
            thisCount--
            $('#facade-<?php echo $i; ?>').find('#count').val(thisCount)
            montazhDemontazh()
        })

        $('body').on('click', '#plusFacade<?php echo $i; ?>', function () {
            sumFacades++
            let thisCount = $('#facade-<?php echo $i; ?>').find('#count').val()
            thisCount++
            $('#facade-<?php echo $i; ?>').find('#count').val(thisCount)
            montazhDemontazh()
        })


        $('body').on('click', '.count<?php echo $i; ?>', function () {
            tempSumFacades = +$('.count<?php echo $i; ?>').val()
        })

        $('body').on('blur', '.count<?php echo $i; ?>', function () {
            let currentVal = +$('.count<?php echo $i; ?>').val()
            console.log (sumFacades = sumFacades + currentVal - tempSumFacades)
            montazhDemontazh()
        })

        $('body').on('click', '.removeFacade<?php echo $i; ?>', function () {
            sumFacades = sumFacades - $('#facade-<?php echo $i; ?>').find('.count').val()
            $('#facade-<?php echo $i; ?>').remove()
            montazhDemontazh()
            facadeIterator--
        })
    </script>
<?php endfor ?>
<script>

    $('body').on("click", '#demontazhFasadov', function () {
        let current = +$('#additionalSum').find('span').text()
        let addAdditional = +$('label.demontazhFasadov').find('span').first().text()
        if ($('#demontazhFasadov').prop("checked")) {
            $('#additionalSum').find('span').text(current + addAdditional)
        } else {
            $('#additionalSum').find('span').text(current - addAdditional)
        }

    })

    $('body').on("click", '#montazhFasadov', function () {
        let current = +$('#additionalSum').find('span').text()
        let addAdditional = +$('label.montazhFasadov').find('span').first().text()
        if ($('#montazhFasadov').prop("checked")) {
            $('#additionalSum').find('span').text(current + addAdditional)
        } else {
            $('#additionalSum').find('span').text(current - addAdditional)
        }
    })

    $('body').on("click", '#dostavkaNaProizvodstvo', function () {
        let current = +$('#additionalSum').find('span').text()
        let addAdditional = +$('label.dostavkaNaProizvodstvo').find('span').first().text()
        if ($('#dostavkaNaProizvodstvo').prop("checked")) {
            $('#additionalSum').find('span').text(current + addAdditional)
        } else {
            $('#additionalSum').find('span').text(current - addAdditional)
        }
    })

    $('body').on("click", '#dostavkaSProizvodstva', function () {
        let current = +$('#additionalSum').find('span').text()
        let addAdditional = +$('label.dostavkaSProizvodstva').find('span').first().text()
        if ($('#dostavkaSProizvodstva').prop("checked")) {
            $('#additionalSum').find('span').text(current + addAdditional)
        } else {
            $('#additionalSum').find('span').text(current - addAdditional)
        }
    })

    //Удаляем все фасады
    $('#removeFacades').click(function(){
        $('[id^="facade"]:not(:first)').remove()
        $('#width').val('')
        $('#height').val('')
        $('#count').val('')
        $('#paintInside').prop('checked', false)
        montazhDemontazh()
        sumFacades = 1
    })
</script>


</body>
</html>