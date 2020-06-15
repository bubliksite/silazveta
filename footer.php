<?php wp_footer(); ?>

<footer class="bg-dark-gray py-4 px-3">
    <div class="container">
        <div class="d-flex justify-content-between">
            <p class="text-white mb-0 pb-0">© Сила цвета</p>
            <a href="mailto: Info@krasimokna.ru" class="text-yellow text-decoration-none mb-0 pb-0">Info@krasimokna.ru</a>
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
                    Предварительная стоимость окраски вашей кухни составила <span id="prePrice" class="font-weight-bold">0</span><b>₽</b>. Чтобы связаться с нами и узнать точную стоимость, заполните форму:
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

    }

    function montazhDemontazhMob() {

    }

    function sumOfAdditionalServices() {
        let current = 0
        let addAdditionalDFS = +$('label.demontazhFasadov').find('span').text()
        let addAdditionalMFS = +$('label.montazhFasadov').find('span').text()
        let addAdditionalDNPS = +$('label.dostavkaNaProizvodstvo').find('span').text()
        let addAdditionalDSPS = +$('label.dostavkaSProizvodstva').find('span').text()
        if ($('#demontazhFasadov').prop("checked")) {
            current = current + addAdditionalDFS
        }
        if ($('#montazhFasadov').prop("checked")) {
            current = current + addAdditionalMFS
        }
        if ($('#dostavkaSProizvodstva').prop("checked")) {
            current = current + addAdditionalDSPS
        }
        if ($('#dostavkaNaProizvodstvo').prop("checked")) {
            current = current + addAdditionalDNPS
        }
        $('#additionalSum').find('span').text(current)
        addAdditionalDFS = 0
        addAdditionalDNPS = 0
        addAdditionalDSPS = 0
        addAdditionalMFS = 0
    }

    function sumOfAdditionalServicesMob() {
        let current = 0
        let addAdditionalDFSM = +$('label.demontazhFasadovMob').find('span').text()
        let addAdditionalMFSM = +$('label.montazhFasadovMob').find('span').text()
        let addAdditionalDNPSM = +$('label.dostavkaNaProizvodstvoMob').find('span').text()
        let addAdditionalDSPSM = +$('label.dostavkaSProizvodstvaMob').find('span').text()
        if ($('#demontazhFasadovMob').prop("checked")) {
            current = current + addAdditionalDFSM
        }
        if ($('#montazhFasadovMob').prop("checked")) {
            current = current + addAdditionalMFSM
        }
        if ($('#dostavkaSProizvodstvaMob').prop("checked")) {
            current = current + addAdditionalDSPSM
        }
        if ($('#dostavkaNaProizvodstvoMob').prop("checked")) {
            current = current + addAdditionalDNPSM
        }
        $('#additionalSumMob').find('span').text(current)
        addAdditionalDFSM = 0
        addAdditionalDNPSM = 0
        addAdditionalDSPSM = 0
        addAdditionalMFSM = 0
    }

    function totalPrice() {
        let sum = 0
        let i = 1
        $('[id^="facade"]').each(function () {
            currentSum = +$('#total' + i).val()
            sum = sum + currentSum
            if (isNaN(sum)) { sum = 0}
            i++
        })
        let preTotalPrice = sum
        let additionalServices = +$('#additionalSum').find('span').text()
        let additionalServicesMob = +$('#additionalSumMob').find('span').text()
        let endTotalPrice = preTotalPrice + additionalServices + additionalServicesMob
        endTotalPrice = Math.round(endTotalPrice)
        endTotalPrice = endTotalPrice.toLocaleString()
        $('#totalPrice').find('span').text(endTotalPrice)
        $('#prePrice').text(endTotalPrice)
    }

    $('document').ready(function() {
        summerizeFacades()
        sumOfAdditionalServices()
        sumOfAdditionalServicesMob()
    })

    //Обнуляем итератор строк фасадов
    $('#removeFacades').click(function(){
        facadeIterator = 2
    })

    //Нажатие "добавить фасад"
    var facadeIterator = 2
    $('#addFacade').click(function() {

        //Изменяем стоимость доп. работ при добавлении строки с фасадами
        sumFacades++
        montazhDemontazh()
        sumOfAdditionalServices()
        montazhDemontazhMob()
        sumOfAdditionalServicesMob()

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
            '                                    <label class="d-block d-xs-block d-sm-block d-md-none d-lg-none" for="width' + facadeIterator + '" style="height: 39px; display: flex;align-items: center">Ширина фасада, мм</label>\n' +
            '                                    <input type="number" class="form-control width width' + facadeIterator + '" id="width' + facadeIterator + '">\n' +
            '                                </div>\n' +
            '                                <div class="form-group col-4">\n' +
            '                                    <label class="d-block d-xs-block d-sm-block d-md-none d-lg-none" for="height' + facadeIterator + '" style="height: 39px; display: flex;align-items: center">Высота фасада, мм</label>\n' +
            '                                    <input type="number" class="form-control height height' + facadeIterator + '" id="height' + facadeIterator + '">\n' +
            '                                </div>\n' +
            '                                <div class="form-group col-4">\n' +
            '                                    <label class="d-block d-xs-block d-sm-block d-md-none d-lg-none" for="glass' + facadeIterator + '" style="height: 39px; display: flex;align-items: center">Стекло</label>\n' +
            '                                    <select class="form-control glass glass' + facadeIterator + '" id="glass' + facadeIterator + '">\n' +
            '                                        <option value="1">Нет</option>\n' +
            '                                        <option value="1.3">Да</option>\n' +
            '                                    </select>\n' +
            '                                </div>\n' +
            '                            </div>\n' +
            '                        </div>\n' +
            '                        <div class="col-md-6 col-12">\n' +
            '                            <div class="row">\n' +
            '                                <div class="form-group col-4">\n' +
            '                                    <label class="d-block d-xs-block d-sm-block d-md-none d-lg-none" for="count" style="height: 39px; display: flex;align-items: center; justify-content: center">\n' +
            '                                        Количество\n' +
            '                                    </label>\n' +
            '                                    <div class="d-flex justify-content-center">\n' +
            '                                        <img role="button" src="<?php echo get_template_directory_uri(); ?>/images/icon-minus.svg" id="minusFacade' + facadeIterator + '">\n' +
            '                                        <input type="text" class="form-control mx-2 text-center count count' + facadeIterator + '" id="count' + facadeIterator + '" style="width: 40%" min="1" value="1">\n' +
            '                                        <img role="button" src="<?php echo get_template_directory_uri(); ?>/images/icon-plus.svg" id="plusFacade' + facadeIterator + '">\n' +
            '                                    </div>\n' +
            '                                </div>\n' +
            '                                <div class="form-group col">\n' +
            '                                    <label class="d-block d-xs-block d-sm-block d-md-none d-lg-none" for="cover' + facadeIterator + '">Желаемое <br> покрытие</label>\n' +
            '                                    <select class="form-control pl-2 pr-1 cover cover' + facadeIterator + '" id="cover' + facadeIterator + '">\n' +
            '                                        <option value="1.7">Глянец</option>\n' +
            '                                        <option value="1">Матовое</option>\n' +
            '                                        <option value="1.5">Софттач</option>\n' +
            '                                    </select>\n' +
            '                                </div>\n' +
            '                                <div class="form-group col-2">\n' +
            '                                    <label class="d-block d-xs-block d-sm-block d-md-none d-lg-none" for="paintInside' + facadeIterator + '" class="text-center">Красить внутри</label>\n' +
            '                                    <input class="form-check-input position-static paintInside paintInside' + facadeIterator + '" type="checkbox" id="paintInside' + facadeIterator + '">\n' +
            '                                </div>\n' +
            '                                <div class="col-1 col-md-2">\n' +
            '                                    <div class="d-none d-xs-none d-sm-none d-md-block d-lg-block">\n' +
            '                                        <label class="d-block d-xs-block d-sm-block d-md-none d-lg-none" for="count" style="height: 39px; display: flex;align-items: center"></label>\n' +
            '                                        <div class="d-flex align-items-center justify-content-end mt-2">\n' +
            '                                            <img role="button" src="<?php echo get_template_directory_uri(); ?>/images/icon-delete-solid.svg" alt="" class="removeFacade' + facadeIterator + '">\n' +
            '                                        </div>\n' +
            '                                       <input type="text" class="d-none total total' + facadeIterator + '" id="total' + facadeIterator + '" value="0">' +
            '                                    </div>\n' +
            '                                </div>\n' +
            '                            </div>\n' +
            '                        </div>\n'
        )
        facadeIterator++
        totalPrice()

    })
</script>

<script>
    function currentSumOfRow(i) {
        let currentWidth = +$('#width'+ i).val()/1000
        let currentHeight = +$('#height'+ i).val()/1000
        let currentGlass = +$('#glass'+ i).val()
        let currentCount = +$('#count'+ i).val()
        let currentCover = +$('#cover'+ i).val()
        let paintInside
        if ($('#paintInside'+ i).prop('checked')) { paintInside = 1.7 } else { paintInside = 1 }
        let rowSum = currentWidth * currentHeight * currentGlass * currentCount * currentCover * paintInside * 2000
        $('#total'+ i).val(rowSum)
        totalPrice()
    }
</script>

<!-- Циклы для строк фасадов -->
<?php for ($i = 1; $i < 20; $i++) : ?>
    <script>

        $('body').on('keyup', '#width<?php echo $i; ?>', function () {
            currentSumOfRow(<?php echo $i; ?>)
        })

        $('body').on('keyup', '#height<?php echo $i; ?>', function () {
            currentSumOfRow(<?php echo $i; ?>)
        })

        $('body').on('change', '#glass<?php echo $i; ?>', function () {
            currentSumOfRow(<?php echo $i; ?>)
        })

        $('body').on('change', '#count<?php echo $i; ?>', function () {
            currentSumOfRow(<?php echo $i; ?>)
        })

        $('body').on('change', '#cover<?php echo $i; ?>', function () {
            currentSumOfRow(<?php echo $i; ?>)
        })

        $('body').on('change', '#paintInside<?php echo $i; ?>', function () {
            currentSumOfRow(<?php echo $i; ?>)
        })

        $('body').on('click', '#minusFacade<?php echo $i; ?>', function () {
            if ($('#facade-<?php echo $i; ?>').find('#count<?php echo $i; ?>').val() == 0) {

            } else {
                sumFacades--
                let thisCount = $('#facade-<?php echo $i; ?>').find('#count<?php echo $i; ?>').val()
                thisCount--
                $('#facade-<?php echo $i; ?>').find('#count<?php echo $i; ?>').val(thisCount)
                montazhDemontazh()
                sumOfAdditionalServices()
                montazhDemontazhMob()
                sumOfAdditionalServicesMob()
                currentSumOfRow(<?php echo $i; ?>)
                totalPrice()
            }
        })

        $('body').on('click', '#plusFacade<?php echo $i; ?>', function () {
            sumFacades++
            let thisCount = $('#facade-<?php echo $i; ?>').find('#count<?php echo $i; ?>').val()
            thisCount++
            $('#facade-<?php echo $i; ?>').find('#count<?php echo $i; ?>').val(thisCount)
            montazhDemontazh()
            sumOfAdditionalServices()
            montazhDemontazhMob()
            sumOfAdditionalServicesMob()
            currentSumOfRow(<?php echo $i; ?>)
            totalPrice()
        })

        $('body').on('keydown', '.count<?php echo $i; ?>', function () {
            tempSumFacades = +$('.count<?php echo $i; ?>').val()
        })

        $('body').on('keyup', '.count<?php echo $i; ?>', function () {
            if ($('.count<?php echo $i; ?>').val() < 0) {
                $('.count<?php echo $i; ?>').val(0)
            }
            let currentVal = +$('.count<?php echo $i; ?>').val()
            sumFacades = sumFacades + currentVal - tempSumFacades
            montazhDemontazh()
            sumOfAdditionalServices()
            montazhDemontazhMob()
            sumOfAdditionalServicesMob()
            currentSumOfRow(<?php echo $i; ?>)
            totalPrice()
        })

        $('body').on('blur', '.count<?php echo $i; ?>', function(){
            if ($('.count<?php echo $i; ?>').val() === '') {
                $('.count<?php echo $i; ?>').val(0)
                sumFacades = sumFacades
            }
            montazhDemontazh()
            sumOfAdditionalServices()
            montazhDemontazhMob()
            sumOfAdditionalServicesMob()
            totalPrice()
        })

        $('body').on('click', '.removeFacade<?php echo $i; ?>', function () {
            sumFacades = sumFacades - $('#facade-<?php echo $i; ?>').find('.count').val()
            $('#facade-<?php echo $i; ?>').remove()
            montazhDemontazh()
            sumOfAdditionalServices()
            montazhDemontazhMob()
            sumOfAdditionalServicesMob()
            totalPrice()
            facadeIterator--
        })
        $('body').on('change', '.total<?php echo $i; ?>', function() {
            totalPrice()
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
        totalPrice()

    })

    $('body').on("click", '#montazhFasadov', function () {
        let current = +$('#additionalSum').find('span').text()
        let addAdditional = +$('label.montazhFasadov').find('span').first().text()
        if ($('#montazhFasadov').prop("checked")) {
            $('#additionalSum').find('span').text(current + addAdditional)
        } else {
            $('#additionalSum').find('span').text(current - addAdditional)
        }
        totalPrice()
    })

    $('body').on("click", '#dostavkaNaProizvodstvo', function () {
        let current = +$('#additionalSum').find('span').text()
        let addAdditional = +$('label.dostavkaNaProizvodstvo').find('span').first().text()
        if ($('#dostavkaNaProizvodstvo').prop("checked")) {
            $('#additionalSum').find('span').text(current + addAdditional)
        } else {
            $('#additionalSum').find('span').text(current - addAdditional)
        }
        totalPrice()
    })

    $('body').on("click", '#dostavkaSProizvodstva', function () {
        let current = +$('#additionalSum').find('span').text()
        let addAdditional = +$('label.dostavkaSProizvodstva').find('span').first().text()
        if ($('#dostavkaSProizvodstva').prop("checked")) {
            $('#additionalSum').find('span').text(current + addAdditional)
        } else {
            $('#additionalSum').find('span').text(current - addAdditional)
        }
        totalPrice()
    })




    $('body').on("click", '#demontazhFasadovMob', function () {
        let current = +$('#additionalSumMob').find('span').text()
        let addAdditional = +$('label.demontazhFasadovMob').find('span').first().text()
        if ($('#demontazhFasadovMob').prop("checked")) {
            $('#additionalSumMob').find('span').text(current + addAdditional)
        } else {
            $('#additionalSumMob').find('span').text(current - addAdditional)
        }
        totalPrice()

    })

    $('body').on("click", '#montazhFasadovMob', function () {
        let current = +$('#additionalSumMob').find('span').text()
        let addAdditional = +$('label.montazhFasadovMob').find('span').first().text()
        if ($('#montazhFasadovMob').prop("checked")) {
            $('#additionalSumMob').find('span').text(current + addAdditional)
        } else {
            $('#additionalSumMob').find('span').text(current - addAdditional)
        }
        totalPrice()
    })

    $('body').on("click", '#dostavkaNaProizvodstvoMob', function () {
        let current = +$('#additionalSumMob').find('span').text()
        let addAdditional = +$('label.dostavkaNaProizvodstvoMob').find('span').first().text()
        if ($('#dostavkaNaProizvodstvoMob').prop("checked")) {
            $('#additionalSumMob').find('span').text(current + addAdditional)
        } else {
            $('#additionalSumMob').find('span').text(current - addAdditional)
        }
        totalPrice()
    })

    $('body').on("click", '#dostavkaSProizvodstvaMob', function () {
        let current = +$('#additionalSumMob').find('span').text()
        let addAdditional = +$('label.dostavkaSProizvodstvaMob').find('span').first().text()
        if ($('#dostavkaSProizvodstvaMob').prop("checked")) {
            $('#additionalSumMob').find('span').text(current + addAdditional)
        } else {
            $('#additionalSumMob').find('span').text(current - addAdditional)
        }
        totalPrice()
    })

    //Удаляем все фасады
    $('#removeFacades').click(function(){
        $('[id^="facade"]:not(:first)').remove()
        $('#width').val('')
        $('#height').val('')
        $('#count').val(1)
        $('#paintInside').prop('checked', false)
        $('#demontazhFasadov').prop('checked', false)
        $('#montazhFasadov').prop('checked', false)
        $('#dostavkaNaProizvodstvo').prop('checked', false)
        $('#dostavkaSProizvodstva').prop('checked', false)
        $('#demontazhFasadovMob').prop('checked', false)
        $('#montazhFasadovMob').prop('checked', false)
        $('#dostavkaNaProizvodstvoMob').prop('checked', false)
        $('#dostavkaSProizvodstvaMob').prop('checked', false)
        $('.total').val(0)
        sumFacades = 1
        montazhDemontazh()
        sumOfAdditionalServices()
        montazhDemontazhMob()
        sumOfAdditionalServicesMob()
        totalPrice()
    })
</script>

<script>
    $('#sendPrice').click(function () {
        var sendFacade = []
        var sendAdditional = []
        var l = 1
        var paint
        $('[id^="facade"]').each(function () {
            if ($('#paintInside' + l).prop("checked")) {paint = "Да"} else {paint = "Нет"}
            sendFacade.push('Фасад ' + l + ' \nШирина: ' + $('#width' + l).val() + 'мм, Высота: ' + $('#height' + l).val() +
                'мм, Стекло: ' + $('#glass' + l + ' option:selected').text() + ', Количество: ' + $('#count' + l).val() +
                ', Покрытие: ' + $('#cover' + l + ' option:selected').text() + ', Покраска внутри: ' + paint)
        l++
        })
        if ($('#demontazhFasadov').prop("checked") || $('#demontazhFasadovMob').prop("checked")) {sendAdditional.push('Демонтаж фасадов, арматуры')}
        if ($('#montazhFasadov').prop("checked") || $('#montazhFasadovMob').prop("checked")) {sendAdditional.push('Монтаж фасадов, арматуры')}
        if ($('#dostavkaNaProizvodstvo').prop("checked") || $('#dostavkaNaProizvodstvoMob').prop("checked")) {sendAdditional.push('Доставка на производство')}
        if ($('#dostavkaSProizvodstva').prop("checked") || $('#dostavkaSProizvodstvaMob').prop("checked")) {sendAdditional.push('Доставка c производства')}

        $('#fld_7775433_2').val(sendFacade.join('\n') + '\nДополнительно: \n' + sendAdditional.join(', '))
    })
</script>

</body>
</html>