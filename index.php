<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Đề 4</title>
    <link
      rel="stylesheet"
      href="FontAwesome/css/all.min.css"
    />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="assets/css/module.min.css" />

    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick-1.8.1/slick/slick.min.js"></script>
  </head>
  <body>

    <?php
      include "./header.html";
      include "./categoryproduct.html";
      include "./products.html";
      include "./clientsay.html";
      include "./brands.html";
      include "./footer.html";
      include "./credit.html";
    ?>

    <script type="text/javascript">
      $(document).ready(function(){
        $('.gallery').slick({
          dots: true,
          infinite: true,
          speed: 500,
          fade: true,
          cssEase: 'linear',
          autoplay: true,
          autoplaySpeed: 5000,
        });
      });
      
      $(document).ready(function(){
        $('.product-mobile').slick({
          slidesToShow: 2,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
        });
      });

      $(document).ready(function(){
        $('.multiple-items').slick({
          dots: true,
          arrows: false,
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 5000,
        });
      });

    </script>
  </body>
</html>
