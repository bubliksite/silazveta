<?php wp_footer(); ?>

<footer class="bg-dark-gray py-4">
    <div class="container">
        <div class="d-flex justify-content-between">
            <p class="text-white mb-0 pb-0">© Сила цвета</p>
            <a href="mailto: Info@silazveta.ru" class="text-yellow text-decoration-none mb-0 pb-0">Info@silazveta.ru</a>
        </div>
    </div>
</footer>

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

</body>
</html>