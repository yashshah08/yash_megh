<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Filter Nets and Mesh</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&family=Poppins:wght@200&family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    <div class="banner">
        <h1>Filter Nets & Mesh</h1>
        <p>Home >> Products-Diamond >> Filter Nets & Mesh</p>
    </div>

    <div class="container">
        <div class="quote">
            <div class="quote1">
                <p>“An array of filter nets & mesh for numerous filter applications”</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="products_content">
            <div class="products_text">
                <ul>
                    <li>‘Isopac” filtration nets and meshes are used in a wide range of filter applications either as spacer nets or simply for media support, pleat support or protection in air and liquid filtration.</li>
                    <li>The Nets & Meshes are produced from special blends of materials and hence they are chemically insert, non-corrosive and are also made from food grade material.</li>
                    <li>Our filtration nets & meshes are not only manufactured in wide range of diameters, apertures, thickness, width and colours but also can be customised as per your application.</li>
                    <li>Our filtration nets & meshes can be used for industries serving Water Purification, Food Processing, Medical Filtration, Hydraulic Filtration and Turbine Filters.</li>
                </ul>

            </div>
            <div class="products_img">
                <img src="./images/Filter-Nets-content.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="slider-frame ">
            <div class="bannerSlider" >
                <div>
                    <img src="./images/slider_filter_1.png" alt="">
                </div>
                <div>
                    <img src="./images/slider_filter_2.png" alt="">
                </div>
                <div>
                    <img src="./images/slider_filter_3.jpg" alt="">
                </div>
                <div>
                    <img src="./images/slider_filter_4.jpg" alt="">
                </div>
                <div>
                    <img src="./images/slider_filter_5.jpg" alt="">
                </div>
                <div>
                    <img src="./images/slider_filter_6.jpg" alt="">
                </div>
                <div>
                    <img src="./images/slider_filter_7.jpg" alt="">
                </div>
                <div>
                    <img src="./images/slider_filter_8.jpg" alt="">
                </div>
                <div>
                    <img src="./images/slider_filter_9.png" alt="">
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