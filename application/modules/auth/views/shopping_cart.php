<body class="biolife-body">


    <!-- Main content -->
    <div id="main-content" class="main-content">
        <div class="container">
            <!--Top banner-->
            <div class="top-banner background-top-banner-for-shopping min-height-346px">
                <h3 class="title">Save $50!*</h3>
                <p class="subtitle">Save $50 when you open an account online & spen $50 on your first online
                    purchase to day</p>
                <ul class="list">
                    <li>
                        <div class="price-less">
                            <span class="desc">Purchase amount</span>
                            <span class="cost">$0.00</span>
                        </div>
                    </li>
                    <li>
                        <div class="price-less">
                            <span class="desc">Credit on billing statement</span>
                            <span class="cost">$0.00</span>
                        </div>
                    </li>
                    <li>
                        <div class="price-less sum">
                            <span class="desc">Cost affter statemen credit</span>
                            <span class="cost">$0.00</span>
                        </div>
                    </li>
                </ul>
                <p class="btns">
                    <a href="" class="btn">Open Account</a>
                    <a href="" class="btn">Learn more</a>
                </p>
            </div>
            <!--Cart Table-->
            <!-- Shopping Cart -->
            <div class="shopping-cart-container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <h3 class="box-title">Your cart items</h3>
                        <form class="shopping-cart-form" action="#" method="post">
                            <table class="shop_table cart-form">
                                <thead>
                                    <tr>
                                        <th>Product Image</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>delete</th>
                                    </tr>
                                </thead>
                                <tbody id="shoppingcart-items">
                                    <!-- Dynamic cart items will be injected here -->
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>




            <!--Related Product-->
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
                                                    class="categories"><?php echo htmlspecialchars($product['package_name']); ?>(<?php echo htmlspecialchars($product['measurement']); ?>)</b>
                                                <h4 class="product-title"><a href=""
                                                        class="pr-name"><?php echo htmlspecialchars($product['product_name']); ?></a>
                                                </h4>
                                                <div class="price">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">#</span><?php echo htmlspecialchars($product['price']); ?></span></ins>
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
                                                            <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                                            Add to Cart</a>
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

    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>


</body>


