<body class="biolife-body">


    <!-- HEADER -->


    <!-- Page Contain -->
    <div class="page-contain">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <!--Block 01: Main slide-->
            <div class="main-slide block-slider">
                <ul class="biolife-carousel nav-none-on-mobile"
                    data-slick='{"arrows": true, "dots": false, "slidesMargin": 0, "slidesToShow": 1, "infinite": true, "speed": 800}'>
                    <li>
                        <div class="slide-contain slider-opt03__layout01">
                            <div class="media">
                                <div class="child-elememt">
                                    <a href="" class="link-to">
                                        <img src="<?php echo base_url('assets/images/home-03/slide-01-child-01.png'); ?>" width="604" height="580"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="text-content">
                                <i class="first-line">Pomegranate</i>
                                <h3 class="second-line">Our products are 100% Organic</h3>
                                <p class="third-line">Most products are from University of Agriculture Abeokuta Farm</p>
                                <p class="buttons">
                                    <a href="" class="btn btn-bold">Shop now</a>
                                    <a href="" class="btn btn-thin">View lookbook</a>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slide-contain slider-opt03__layout01">
                            <div class="media">
                                <div class="child-elememt"><a href="" class="link-to"><img
                                            src="<?php echo base_url('assets/images/home-03/slide-01-child-01.png'); ?>" width="604" height="580"
                                            alt=""></a></div>
                            </div>
                            <div class="text-content">
                                <i class="first-line">Pomegranate</i>
                                <h3 class="second-line">Our products are 100% Organic</h3>
                                <p class="third-line">Most products are coming from Nourished farm
                                </p>
                                <p class="buttons">
                                    <a href="" class="btn btn-bold">Shop now</a>
                                    <a href="" class="btn btn-thin">View lookbook</a>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!--Block 03: Product Tab-->
            <div class="product-tab z-index-20 sm-margin-top-193px xs-margin-top-30px">
                <div class="container">
                    <div class="biolife-title-box">
                        <span class="subtitle">All the best items for You</span>
                        <h3 class="main-title">Related Products</h3>
                    </div>
                    <div class="biolife-tab biolife-tab-contain sm-margin-top-34px">
                        <div class="tab-head tab-head__icon-top-layout icon-top-layout">
                            <ul class="tabs md-margin-bottom-35-im xs-margin-bottom-40-im">
                                <?php if (isset($network_result) && (is_array($network_result) || is_object($network_result))): ?>
                                <?php $i = 0; ?>
                                <?php foreach ($network_result as $data): ?>
                                <li class="tab-element <?php echo $i == 0 ? 'active' : ''; ?>">
                                    <a href="#tab_<?php echo htmlspecialchars($data['product_description_id']); ?>"
                                        class="tab-link">
                                        <span class="biolife-icon icon-lemon"></span>
                                        <?php echo htmlspecialchars($data['product_description_name']); ?>
                                    </a>
                                </li>
                                <?php $i++; ?>
                                <?php endforeach; ?>
                                <?php else: ?>
                                <div class="col-sm-12 col-md-12 col-lg-12 color-green mb-4 text-center text-14">
                                    <br>No product list
                                </div>
                                <?php endif; ?>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <?php if (isset($network_result) && (is_array($network_result) || is_object($network_result))): ?>
                            <?php $i = 0; ?>
                            <?php foreach ($network_result as $data): ?>
                            <?php $products = isset($product_result[$data['product_description_id']]) ? $product_result[$data['product_description_id']] : array(); ?>
                            <div id="tab_<?php echo htmlspecialchars($data['product_description_id']); ?>"
                                class="tab-contain <?php echo $i == 0 ? 'active' : ''; ?>">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain"
                                    data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, 
                                                 "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},
                                                               {"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":25 }},
                                                               {"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>
                                    <?php if (isset($products) && (is_array($products) || is_object($products))): ?>
                                    <?php foreach ($products as $product): ?>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="" class="link-to-product">
                                                    <img src="http://sand.cvgcoops.com.ng/assets/img/product/<?php echo htmlspecialchars($product['product_image']); ?>"
                                                        alt="<?php echo htmlspecialchars($product['product_name']); ?>"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href=""><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b
                                                    class="categories"><?php echo htmlspecialchars($product['package_name']); ?> (<?php echo htmlspecialchars($product['measurement']); ?>)</b>
                                                <h4 class="product-title"><a href=""
                                                        class="pr-name"><?php echo htmlspecialchars($product['product_name']); ?></a>
                                                </h4>
                                                <div class="price">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol"># </span><?php echo htmlspecialchars($product['price']); ?></span></ins>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="" class="btn add-to-cart-btn"
                                                            data-id="<?php echo htmlspecialchars($product['product_id']); ?>"
                                                            data-name="<?php echo htmlspecialchars($product['product_name']); ?>"
                                                            data-price="<?php echo htmlspecialchars($product['price']); ?>">
                                                            <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Add
                                                            to Cart</a>
                                                        <a href="" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <?php $i++; ?>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    </div>



    </div>

    </div>





    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>

</body>