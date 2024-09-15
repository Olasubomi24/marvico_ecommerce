<body class="biolife-body">

    <!-- Preloader -->
    <div id="biof-loading">
        <div class="biof-loading-center">
            <div class="biof-loading-center-absolute">
                <div class="dot dot-one"></div>
                <div class="dot dot-two"></div>
                <div class="dot dot-three"></div>
            </div>
        </div>
    </div>


    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">Organic Fruits</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="<?php echo base_url('auth/index'); ?>" class="permal-link">Home</a></li>
                <li class="nav-item"><a href="<?php echo base_url('auth/shopping_cart'); ?>"
                        class="permal-link">Shoppingcart</a></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain checkout">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="container sm-margin-top-37px">
                <div class="row">

                    <!--checkout progress box-->
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                        <div class="checkout-progress-wrap">
                            <ul class="steps">
                                <li class="step 1st">
                                    <div class="checkout-act active">
                                        <h3 class="title-box"><span class="number">1</span>Customer</h3>
                                        <!-- <div class="box-content">
                                            <p class="txt-desc">Checking out as a <a class="pmlink" href="">Guest?</a> You’ll be able to save your details to create an account with us later.</p>
                                            <div class="login-on-checkout">
                                                <form action="#" name="frm-login" method="post">
                                                    <p class="form-row">
                                                        <label for="input_email">Email Address</label>
                                                        <input type="email" name="email" id="input_email" value="" placeholder="Your email">
                                                        <button type="submit" name="btn-sbmt" class="btn">Continue As Guest</button>
                                                    </p>
                                                    <p class="form-row">
                                                        <input type="checkbox" name="subcribe" id="input_subcribe" >
                                                        <label for="input_subcribe">Subscribe to our newsletter</label>
                                                    </p>
                                                    <p class="msg">Already have an account? <a href="" class="link-forward">Sign in now</a></p>
                                                </form>
                                            </div>
                                        </div> -->
                                    </div>
                                </li>
                                <li class="step 2nd">
                                    <div class="checkout-act">
                                        <h3 class="title-box"><span class="number">2</span>Shipping</h3>
                                    </div>
                                </li>
                                <li class="step 3rd">
                                    <div class="checkout-act">
                                        <h3 class="title-box"><span class="number">3</span>Billing</h3>
                                    </div>
                                </li>
                                <li class="step 4th">
                                    <div class="checkout-act">
                                        <h3 class="title-box"><span class="number">4</span>Payment</h3>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#paymentModal">Proceed to Payment</button>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!--Order Summary-->
                    <div
                        class="col-lg-5 col-md-5 col-sm-6 col-xs-12 sm-padding-top-48px sm-margin-bottom-0 xs-margin-bottom-15px">
                        <div class="order-summary sm-margin-bottom-80px">
                            <div class="title-block">
                                <h3 class="title">Order Summary</h3>
                                <a href="<?php echo base_url('auth/shopping_cart'); ?>" class="link-forward">Edit cart</a>
                            </div>
                            <div class="cart-list-box short-type">
                                <span class="number"><?php echo $total_items; ?> items</span>
                                <?php if (isset($product_results) && (is_array($product_results) || is_object($product_results))): ?>
                                <ul class="cart-list">
                                    <?php foreach ($product_results as $product): ?>
                                    <li class="cart-elem">
                                        <div class="cart-item">
                                            <div class="product-thumb">
                                                <a class="prd-thumb" href="">
                                                    <figure><img
                                                            src="<?php echo base_url('assets/images/shippingcart/') . $product['product_image']; ?>"
                                                            width="113" height="113" alt="shop-cart"></figure>
                                                </a>
                                            </div>
                                            <div class="info">
                                                <span class="txt-quantity"><?php echo $product['quantity']; ?>X</span>
                                                <a href="" class="pr-name"><?php echo $product['product_name']; ?></a>
                                            </div>
                                            <div class="price price-contain">
                                                <ins><span class="price-amount"><span
                                                            class="currencySymbol"># </span><?php echo $product['price']; ?></span></ins>
                                                <!-- Assuming a discount logic exists, otherwise remove the del tag -->
                                                <del><span class="price-amount"><span
                                                            class="currencySymbol"># </span><?php echo $product['price'] + 10; ?></span></del>
                                            </div>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>
                                <ul class="subtotal">
                                    <li>
                                        <div class="subtotal-line">
                                            <b class="stt-name">Subtotal</b>
                                            <span class="stt-price"># <?php echo $subtotal; ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="subtotal-line">
                                            <b class="stt-name">Shipping</b>
                                            <span class="stt-price"># <?php echo $shipping; ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="subtotal-line">
                                            <b class="stt-name">Tax</b>
                                            <span class="stt-price"># <?php echo $tax; ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="subtotal-line">
                                            <a href="" class="link-forward">Promo/Gift Certificate</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="subtotal-line">
                                            <b class="stt-name">Total:</b>
                                            <span class="stt-price"># <?php echo $total; ?></span>
                                        </div>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#paymentModal">Proceed to Payment</button>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<!-- Payment Modal -->
<div id="paymentModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentModalLabel">Make Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="paymentForm">
                <div class="modal-body">
                    <!-- Form fields -->
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="register_name">Name</label>
                        <input type="text" class="form-control" id="register_name" name="register_name" required>
                    </div>

                    <!-- Hidden Fields -->
                    <input type="hidden" id="user_id" name="user_id" value="<?php echo $user_id; ?>">
                    <input type="hidden" id="product_items" name="product_items" value='<?php echo htmlentities(json_encode($product_results)); ?>'>
                    <input type="hidden" id="subtotal" name="subtotal" value="<?php echo $subtotal; ?>">
                    <input type="hidden" id="shipping" name="shipping" value="<?php echo $shipping; ?>">
                    <input type="hidden" id="tax" name="tax" value="<?php echo $tax; ?>">
                    <input type="hidden" id="total_amount" name="total_amount" value="<?php echo $total; ?>">

                    <!-- Order Summary -->
                    <div class="summary">
                        <p><strong>User ID:</strong> <?php echo $user_id; ?></p>
                        <p><strong>Subtotal:</strong> #<?php echo $subtotal; ?></p>
                        <p><strong>Shipping:</strong> #<?php echo $shipping; ?></p>
                        <p><strong>Tax:</strong> #<?php echo $tax; ?></p>
                        <p><strong>Total Amount:</strong> #<?php echo $total; ?></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Proceed to Payment</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- AJAX Payment Processing -->
<script>
$('#paymentForm').on('submit', function(event) {
    event.preventDefault();

    $.ajax({
        url: '<?php echo base_url('auth/process_payment'); ?>',
        type: 'POST',
        data: $(this).serialize(),
        success: function(response) {
            var result = JSON.parse(response);
            if (result.success) {
                window.location.href = result.redirect_url;
            } else {
                alert(result.message);
            }
        },
        error: function(xhr, status, error) {
            console.error('Payment process error:', error);
        }
    });
});
</script>

    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>


</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <script>
    let productItems = JSON.stringify([
    {
        "user_id": "user_66e3d7e79dc011.44653918",
        "product_name": "Marvico Curry Powder",
        "product_image": null,
        "quantity": "1",
        "price": "460.00",
        "total_amount": "460.00"
    },
    {
        "user_id": "user_66e3d7e79dc011.44653918",
        "product_name": "Marvico Curry Powder",
        "product_image": null,
        "quantity": "1",
        "price": "1470.00",
        "total_amount": "1470.00"
    }
    // Add more product items as needed
]);

document.querySelector('input[name="product_items"]').value = productItems;

</script> -->

<!-- <script>$.ajax({
    url: '<?php echo base_url('auth/process_payment'); ?>',
    type: 'POST',
    data: {
        // Send your form data here
        user_id: $('#user_id').val(),
        register_name: $('#register_name').val(),
        phone_number: $('#phone_number').val(),
        email: $('#email').val(),
        product_items: $('#product_items').val(),
        subtotal: $('#subtotal').val(),
        shipping: $('#shipping').val(),
        tax: $('#tax').val(),
        total_amount: $('#total_amount').val()
    },
    success: function(response) {
        // Parse the response from the server
        var result = JSON.parse(response);
        
        // Check if the transaction was successful
        if (result.success) {
            // Redirect to the provided URL
            window.location.href = result.redirect_url;
        } else {
            alert(result.message);  // Show an error message if the transaction failed
        }
    },
    error: function(xhr, status, error) {
        // Handle any errors that occurred during the AJAX request
        console.error('Payment process error:', error);
    }
});

</script> -->