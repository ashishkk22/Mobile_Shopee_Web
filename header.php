<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shopee</title>
    <!-- bootstrap cdn -->
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
          integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
          integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&family=Raleway&family=Rubik&display=swap");

        /*              Sass Template           */
        /*  global classes  */
        button,
        button:focus {
            outline: none !important;
            box-shadow: none !important;
        }

        /* typography classes */
        .font-baloo {
            font-family: "Baloo Thambi 2", cursive;
        }

        .font-rale {
            font-family: "Raleway", cursive;
        }

        .font-rubik {
            font-family: "Rubik", cursive;
        }

        .font-size-12 {
            font-size: 12px;
        }

        .font-size-14 {
            font-size: 14px;
        }

        .font-size-16 {
            font-size: 16px;
        }

        .font-size-20 {
            font-size: 20px;
        }

        /* Color Template  */
        .color-primary {
            color: #212121;
        }

        .color-primary-bg {
            background: #212121;
        }

        .color-second {
            color: #212121;
        }

        .color-second-bg {
            background: #212121;
        }

        .color-yellow {
            color: #FFD289;
        }

        .color-yellow-bg {
            background: #FFD289;
        }

        /*  top sale template   */
        #top-sale .owl-carousel .item .product a {
            overflow: hidden;
        }

        #top-sale .owl-carousel .item .product img {
            transition: transform 0.5s ease;
        }

        #top-sale .owl-carousel .item .product img:hover {
            transform: scale(1.1);
        }

        #top-sale .owl-carousel .owl-nav button {
            position: absolute;
            top: 30%;
            outline: none;
        }

        #top-sale .owl-carousel .owl-nav button.owl-prev {
            left: 0;
        }

        #top-sale .owl-carousel .owl-nav button.owl-prev span,
        #top-sale .owl-carousel .owl-nav button.owl-next span {
            font-size: 35px;
            color: #003859;
            padding: 0 1rem;
        }

        #top-sale .owl-carousel .owl-nav button.owl-prev span {
            margin-left: -4rem;
        }

        #top-sale .owl-carousel .owl-nav button.owl-next {
            right: 0;
        }

        #top-sale .owl-carousel .owl-nav button.owl-next span {
            margin-right: -4rem;
        }

        /*   Special Price Section Template */
        #special-price .grid .grid-item {
            margin-right: 1.2rem;
            margin-top: 1rem;
        }

        .img-fluid {
            width: 120px;
            height: 250px;
        }

        .i11 {
            width: 120px;
            height: 250px;
        }

        /*# sourceMappingURL=style.css.map */
    </style>
    <?php
    //require functions
    require ('functions.php')

    ?>
</head>

<body>
<!-- start header -->
<header id="header">
<!--    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">-->
<!--        <p class="font-rale font-size-12 text-black-50 m-0"></p>-->
<!--        <div class="font-rale font-size-14">-->
<!--            <a href="#" class="px-3 border-right border-left text-dark">Login</a>-->
<!--            <a href="#" class="px-3 border-right text-dark">Wishlist (0)</a>-->
<!--        </div>-->
<!--    </div>-->
    <!-- primary navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <a class="navbar-brand font-rubik" href="index.php">Mobile Shopee</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                    <a class="nav-link" href="#">On Sale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Category <i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Coming Soon</a>
                </li>
            </ul>
            <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="color-primary-bg py-2 rounded-pill">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                </a>
            </form>
        </div>
    </nav>
    <!-- primary navigation -->
</header>
<!-- start header -->
<!-- start main site -->
<main id="main-site">