<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biolife - Organic Food</title>
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/favicon.png'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nice-select.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/slick.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main-color.css'); ?>">


</head>
<header id="header" class="header-area style-01 layout-03">
    <div class="header-top bg-main hidden-xs">
        <div class="container">
            <div class="top-bar left">
                <ul class="horizontal-menu">
                    <li><a href=""><i class="fa fa-envelope" aria-hidden="true"></i>enquires@nourishedfoods.com</a>
                    </li>
                    <li><a href="">Shipping for all Order </a></li>
                </ul>
            </div>
            <div class="top-bar right">
                <ul class="social-list">
                    <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                </ul>

            </div>
        </div>
    </div>
    <div class="header-middle biolife-sticky-object ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2 col-md-6 col-xs-6">
                    <a href="<?php echo base_url('auth/index'); ?>" class="biolife-logo"><img src="<?php echo base_url('assets/images/PREFERRED.png'); ?>"
                            alt="biolife logo" width="135" height="34"></a>
                </div>
                <div class="col-lg-6 col-md-7 hidden-sm hidden-xs">
                    <div class="primary-menu">
                        <ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu"
                            data-menuname="main menu">
                            <li class="menu-item"><a href="<?php echo base_url('auth/index'); ?>">Home</a></li>
                            <li class="menu-item ">
                                <a href="<?php echo base_url('auth/shopping_cart'); ?>" class="menu-name" data-title="Shop">Shop</a>

                            </li>
                            <li class="menu-item ">
                                <a href="<?php echo base_url('auth/index'); ?>" class="menu-name" data-title="Products">Products</a>
                            </li>

                            <li class="menu-item"><a href="">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-md-6 col-xs-6">
                    <div class="biolife-cart-info">
                        <div class="mobile-search">
                            <a href="javascript:void(0)" class="open-searchbox"><i
                                    class="biolife-icon icon-search"></i></a>
                            <div class="mobile-search-content">
                                <form action="#" class="form-search" name="mobile-seacrh" method="get">
                                    <a href="" class="btn-close"><span class="biolife-icon icon-close-menu"></span></a>
                                    <input type="text" name="s" class="input-text" value=""
                                        placeholder="Search here...">

                                    <button type="submit" class="btn-submit">go</button>
                                </form>
                            </div>
                        </div>
                        <div class="wishlist-block hidden-sm hidden-xs">
                            <a href="" class="link-to">
                                <span class="icon-qty-combine">
                                    <i class="icon-heart-bold biolife-icon"></i>
                                    <span class="qty">4</span>
                                </span>
                            </a>
                        </div>
                        <!-- Mini Cart -->
                        <div class="minicart-block">
                            <div class="minicart-contain">
                                <a href="javascript:void(0)" class="link-to">
                                    <span class="icon-qty-combine">
                                        <i class="icon-cart-mini biolife-icon"></i>
                                        <!-- <span class="qty" id="minicart-qty">0</span> -->
                                        <span class="qty" id="minicart-quantity">0</span>
                                    </span>
                                    <span class="title">My Cart -</span>
                                    <span  class="sub-total" id="minicart-total">#0.00</span>
                                    <!-- <span class="sub-total" id="minicart-subtotal">#0.00</span> -->
                                </a>
                                <div class="cart-content">
                                    <div class="cart-inner">
                                        <ul class="products" id="minicart-products">
                                            <!-- Dynamic minicart items will be injected here -->
                                        </ul>
                                        <p class="btn-control">
                                            <!-- Corrected 'View Cart' link -->
                                            <a href="<?php echo base_url('auth/shopping_cart'); ?>"
                                                class="btn checkout">View Cart</a>
                                            <a href="<?php echo base_url('auth/checkout'); ?>"
                                                class="btn checkout">Checkout</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="mobile-menu-toggle">
                            <a class="btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom hidden-sm hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="vertical-menu vertical-category-block">


                    </div>
                </div>
                <div class="col-lg-9 col-md-8 padding-top-2px">
                    <div class="header-search-bar layout-01">
                        <form action="#" class="form-search" name="desktop-seacrh" method="get">
                            <input type="text" name="s" class="input-text" value="" placeholder="Search here...">
                            <button type="submit" class="btn-submit"><i class="biolife-icon icon-search"></i></button>
                        </form>
                    </div>
                    <div class="live-info">
                        <p class="telephone"><i class="fa fa-phone" aria-hidden="true"></i><b
                                class="phone-number">08099440151 , 08094546178
                            </b></p>
                        <p class="working-time">Mon-Fri: 8:30am-7:30pm; Sat-Sun: 9:30am-4:30pm</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>





























