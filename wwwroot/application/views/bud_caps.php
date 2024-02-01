

    <div class="container">
        <div class="quote">
            <div class="quote1">
                <p>“Locking the freshness in for a longer time”</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="products_content">
            <div class="products_text">
                <ul>
                    <li>Best for Rose buds & Gerberas.</li>
                    <li> Made from specialized polymers to create a larger, healthier bud.</li>
                    <li>Don’t leave marks on the buds.</li>
                    <li>Available in various colours.</li>
                    <li>Offers extra protection during shipping and handling.</li>
                    <li>Though Isopac budcaps are compact, they definitely help to keep the flowers fresh for a longer duration of time.</li>
                    <li>Our bud packaging nets are widely used in floriculture industry right from budding stage till the flower is ready to dispatch.</li>
                </ul>

            </div>
            <div class="products_img">
                <img src="<? echo site_url('assets/images/bud_cap_content.jpg');?>" alt="">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="slider-frame ">
        
            <div class="bannerSlider" style="display:none" >
                <div>
                    <img src="<? echo site_url('assets/images/bud_cap_slider_1.jpg');?>" alt="">
                </div>
                <div>
                    <img src="<? echo site_url('assets/images/bud_cap_slider_2.jpg');?>" alt="">
                </div>
                <div>
                    <img src="<? echo site_url('assets/images/bud_cap_slider_3.jpg');?>" alt="">
                </div>
                <div>
                    <img src="<? echo site_url('assets/images/bud_cap_slider_4.jpg');?>" alt="">
                </div>
                <div>
                    <img src="<? echo site_url('assets/images/bud_cap_slider_5.jpg');?>" alt="">
                </div>
                <div>
                    <img src="<? echo site_url('assets/images/bud_cap_slider_6.jpg');?>" alt="">
                </div>
            </div>   
        </div>

    </div>




    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.4.1/jquery-migrate.min.js" integrity="sha512-KgffulL3mxrOsDicgQWA11O6q6oKeWcV00VxgfJw4TcM8XRQT8Df9EsrYxDf7tpVpfl3qcYD96BpyPvA4d1FDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function(){
            $('.bannerSlider').slick({
            lazyLoad: 'ondemand',
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay:true,
            autoplaySpeed: 1000,
            draggable: true,
            arrows: true ,
            dots: true,
            responsive: [{breakpoint: 768,settings: {slidesToShow: 2,centerMode: false}},
                         {breakpoint: 575,settings: {slidesToShow: 1,centerMode: false}}]
});
    });
    </script>
    
</body>
</html>
