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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<!-- <script>
$(document).ready(function() {
    var userId = <?php echo json_encode($user_id); ?>;

    // Load cart items on page load
    if (userId) {
        loadCartItems(userId);
    }

    // Fetch cart items from the server and update the UI
    function loadCartItems(userId) {
        var url = '<?php echo base_url('auth/get_cart_items'); ?>';

        $.ajax({
            url: url,
            type: 'GET',
            data: {
                user_id: userId
            },
            success: function(response) {
                try {
                    var data = JSON.parse(response);
                    updateMiniCart(data);
                    updateShoppingCart(data);
                } catch (e) {
                    console.error('Error parsing JSON response:', e);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error fetching cart items:', status, error);
            }
        });
    }

    // Update mini cart UI
    function updateMiniCart(items) {
        var miniCartHtml = '';
        var miniCartTotalQty = 0;
        var miniCartSubtotal = 0;

        items.forEach(function(item) {
            var itemTotal = (item.quantity * item.price).toFixed(2);
            miniCartHtml += `
                <li>
                    <div class="minicart-item" data-id="${item.product_id}" data-price="${item.price}">
                        <div class="thumb">
                            <a href=""><img src="${item.product_image}" alt="${item.product_name}" width="90" height="90"></a>
                        </div>
                        <div class="left-info">
                            <div class="product-title"><a href="" class="product-name">${item.product_name}</a></div>
                            <div class="price">
                                <ins><span class="price-amount">#${parseFloat(item.price).toFixed(2)}</span></ins>
                                <del><span class="price-amount">#${parseFloat(item.original_price).toFixed(2)}</span></del>
                            </div>
                            <div class="qty">
                                <label for="cart[${item.product_id}][qty]">Qty:</label>
                                <input type="number" class="input-qty" name="cart[${item.product_id}][qty]" id="cart[${item.product_id}][qty]" value="${item.quantity}" min="1" max="10" data-product-id="${item.product_id}">
                            </div>
                        </div>
                        <div class="action">
                            <a href="#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a href="#" class="remove-cart-item" data-product-id="${item.product_id}" data-price="${item.price}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </li>
            `;
            miniCartTotalQty += item.quantity;
            miniCartSubtotal += parseFloat(itemTotal);
        });

        $('.products').html(miniCartHtml);
        $('#minicart-qty').text(miniCartTotalQty);
        $('#minicart-subtotal').text('#' + miniCartSubtotal.toFixed(2));

        attachQuantityChangeHandler(); // Re-attach the quantity change handler
    }

    // Update shopping cart UI
    function updateShoppingCart(items) {
        var shoppingCartHtml = '';
        var shoppingCartTotal = 0;

        items.forEach(function(item) {
            var itemTotal = (item.quantity * item.price).toFixed(2);
            shoppingCartHtml += `
                <tr class="cart-item" data-id="${item.product_id}" data-user-id="${userId}" data-price="${item.price}">
                    <td class="product">
                        <div class="product-thumb">
                            <a href=""><img src="${item.product_image}" alt="${item.product_name}" width="90" height="90"></a>
                        </div>
                        <h4 class="product-title"><a href="">${item.product_name}</a></h4>
                    </td>
                    <td class="price">
                        <span>#${parseFloat(item.price).toFixed(2)}</span>
                    </td>
                    <td class="quantity">
                        <input type="number" value="${item.quantity}" min="1" max="10" class="input-qty" data-product-id="${item.product_id}">
                    </td>
                    <td class="total">
                        <span>#${itemTotal}</span>
                    </td>
                    <td class="remove">
                        <a href="#" class="remove-cart-item" data-product-id="${item.product_id}" data-price="${item.price}"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            `;
            shoppingCartTotal += parseFloat(itemTotal);
        });

        $('#shoppingcart-items').html(shoppingCartHtml);
        $('#shoppingcart-total').text('#' + shoppingCartTotal.toFixed(2));

        attachQuantityChangeHandler(); // Re-attach the quantity change handler
    }

    // Add item to cart
    $('.add-to-cart-btn').on('click', function(event) {
        event.preventDefault();

        var productId = $(this).data('id');
        var productName = $(this).data('name');
        var productPrice = parseFloat($(this).data('price'));
        var productImage = $(this).data('image');
        var quantity = 1;
        var totalAmount = productPrice * quantity;

        addToCart(userId, productId, productName, productPrice, productImage, quantity, totalAmount);
    });

    function addToCart(userId, productId, productName, productPrice, productImage, quantity, totalAmount) {
        var url = '<?php echo base_url('auth/save_carts'); ?>';

        $.ajax({
            url: url,
            type: 'POST',
            data: {
                user_id: userId,
                product_id: productId,
                quantity: quantity,
                price: productPrice.toFixed(2),
                total_amount: totalAmount.toFixed(2),
                product_name: productName,
                product_image: productImage
            },
            success: function(response) {
                try {
                    var data = JSON.parse(response);
                    if (data.status === 'success') {
                        loadCartItems(userId); // Reload cart items
                    } else {
                        console.error('Server error:', data.message);
                    }
                } catch (e) {
                    console.error('Error parsing JSON response:', e);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error adding to cart:', status, error);
            }
        });
    }

    // Function to attach quantity change handler to input fields
    function attachQuantityChangeHandler() {
        $('.input-qty').off('change').on('change', function() {
            var newQuantity = parseInt($(this).val(), 10);
            var oldQuantity = parseInt($(this).data('old-qty'), 10) || 1;
            console.log('Old Quantity:', oldQuantity);
            console.log('New Quantity:', newQuantity);
            if (isNaN(newQuantity) || newQuantity <= 0) {
                newQuantity = oldQuantity;
                $(this).val(newQuantity);
            }

            if (newQuantity !== oldQuantity) {
                var productId = $(this).data('product-id');
                var price = parseFloat($(this).closest('.minicart-item, .cart-item').data('price'));
                var totalAmount = (newQuantity * price).toFixed(2);

                $('.minicart-item[data-id="' + productId + '"], .cart-item[data-id="' + productId + '"]').each(function() {
                    $(this).find('.price ins span, .total span').text('#' + totalAmount);
                    $(this).find('.input-qty').val(newQuantity);
                });

                saveCartToDatabase(userId, productId, newQuantity, price, totalAmount);
                $(this).data('old-qty', newQuantity);
            }
        });
    }





    function saveCartToDatabase(userId, productId, quantity, price, totalAmount) {
        var url = '<?php echo base_url('auth/save_carts'); ?>';

        $.ajax({
            url: url,
            type: 'POST',
            data: {
                user_id: userId,
                product_id: productId,
                quantity: quantity,
                price: parseFloat(price).toFixed(2),
                total_amount: parseFloat(totalAmount).toFixed(2)
            },
            success: function(response) {
                try {
                    var data = JSON.parse(response);
                    if (data.status === 'success') {
                        loadCartItems(userId); // Reload cart items
                    } else {
                        console.error('Server error:', data.message);
                    }
                } catch (e) {
                    console.error('Error parsing JSON response:', e);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error saving cart changes:', status, error);
            }
        });
    }

    // Remove cart item
    $(document).on('click', '.remove-cart-item', function(event) {
        event.preventDefault();

        var productId = $(this).data('product-id');
        var price = $(this).data('price');

        if (confirm('Are you sure you want to remove this item from your cart?')) {
            removeCartItem(productId, userId, price);
        }
    });

    function removeCartItem(productId, userId, price) {
        var url = '<?php echo base_url('auth/remove_cart_item'); ?>';

        $.ajax({
            url: url,
            type: 'POST',
            data: {
                product_id: productId,
                user_id: userId,
                price: parseFloat(price).toFixed(2)
            },
            success: function(response) {
                try {
                    var data = JSON.parse(response);
                    if (data.status === 'success') {
                        // Remove the item from both mini cart and shopping cart
                        $('.cart-item[data-id="' + productId + '"]').remove();
                        $('.minicart-item[data-id="' + productId + '"]').remove();
                        
                        // Update totals in mini cart and shopping cart
                        updateMiniCartTotal();
                        updateShoppingCartTotal();
                    } else {
                        console.error('Server error:', data.message);
                    }
                } catch (e) {
                    console.error('Error parsing JSON response:', e);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error removing cart item:', status, error);
            }
        }).always(function() {
            loadCartItems(userId); // Reload cart items after the item is removed
        });
    }

    // Update mini cart total
    function updateMiniCartTotal() {
        var subtotal = 0;
        $('.minicart-item').each(function() {
            var price = parseFloat($(this).find('.price ins span').text().replace('#', ''));
            var qty = parseInt($(this).find('.input-qty').val(), 10);
            subtotal += price * qty;
        });
        $('#minicart-subtotal').text('#' + subtotal.toFixed(2));
    }

    // Update shopping cart total
    function updateShoppingCartTotal() {
        var subtotal = 0;
        $('.cart-item').each(function() {
            var price = parseFloat($(this).find('.total span').text().replace('#', ''));
            subtotal += price;
        });
        $('#shoppingcart-total').text('#' + subtotal.toFixed(2));
    }
});
</script> -->

<!-- <script>
    $(document).ready(function() {
    var userId = <?php echo json_encode($user_id); ?>;

    // Load cart items on page load
    if (userId) {
        loadCartItems(userId);
    }

    // Fetch cart items from the server and update the UI
    function loadCartItems(userId) {
        var url = '<?php echo base_url('auth/get_cart_items'); ?>';

        $.ajax({
            url: url,
            type: 'GET',
            data: {
                user_id: userId
            },
            success: function(response) {
                try {
                    var data = JSON.parse(response);
                    updateMiniCart(data);
                    updateShoppingCart(data);
                } catch (e) {
                    console.error('Error parsing JSON response:', e);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error fetching cart items:', status, error);
            }
        });
    }

    // Update mini cart UI
    function updateMiniCart(items) {
        var miniCartHtml = '';
        var miniCartTotalQty = 0;
        var miniCartSubtotal = 0;

        items.forEach(function(item) {
            var itemTotal = (item.quantity * item.price).toFixed(2);
            miniCartHtml += `
                <li>
                    <div class="minicart-item" data-id="${item.product_id}" data-price="${item.price}">
                        <div class="thumb">
                            <a href=""><img src="${item.product_image}" alt="${item.product_name}" width="90" height="90"></a>
                        </div>
                        <div class="left-info">
                            <div class="product-title"><a href="" class="product-name">${item.product_name}</a></div>
                            <div class="price">
                                <ins><span class="price-amount">#${parseFloat(item.price).toFixed(2)}</span></ins>
                                <del><span class="price-amount">#${parseFloat(item.original_price).toFixed(2)}</span></del>
                            </div>
                            <div class="qty">
                                <label for="cart[${item.product_id}][qty]">Qty:</label>
                                <input type="number" class="input-qty" name="cart[${item.product_id}][qty]" id="cart[${item.product_id}][qty]" value="${item.quantity}" min="1" max="10" data-product-id="${item.product_id}">
                            </div>
                        </div>
                        <div class="action">
                            <a href="#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a href="#" class="remove-cart-item" data-product-id="${item.product_id}" data-price="${item.price}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </li>
            `;
            miniCartTotalQty += item.quantity;
            miniCartSubtotal += parseFloat(itemTotal);
        });

        $('.products').html(miniCartHtml);
        $('#minicart-qty').text(miniCartTotalQty);
        $('#minicart-subtotal').text('#' + miniCartSubtotal.toFixed(2));

        attachQuantityChangeHandler(); // Re-attach the quantity change handler
    }

    // Update shopping cart UI
    function updateShoppingCart(items) {
        var shoppingCartHtml = '';
        var shoppingCartTotal = 0;

        items.forEach(function(item) {
            var itemTotal = (item.quantity * item.price).toFixed(2);
            shoppingCartHtml += `
                <tr class="cart-item" data-id="${item.product_id}" data-user-id="${userId}" data-price="${item.price}">
                    <td class="product">
                        <div class="product-thumb">
                            <a href=""><img src="${item.product_image}" alt="${item.product_name}" width="90" height="90"></a>
                        </div>
                        <h4 class="product-title"><a href="">${item.product_name}</a></h4>
                    </td>
                    <td class="price">
                        <span>#${parseFloat(item.price).toFixed(2)}</span>
                    </td>
                    <td class="quantity">
                        <input type="number" value="${item.quantity}" min="1" max="10" class="input-qty" data-product-id="${item.product_id}">
                    </td>
                    <td class="total">
                        <span>#${itemTotal}</span>
                    </td>
                    <td class="remove">
                        <a href="#" class="remove-cart-item" data-product-id="${item.product_id}" data-price="${item.price}"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            `;
            shoppingCartTotal += parseFloat(itemTotal);
        });

        $('#shoppingcart-items').html(shoppingCartHtml);
        $('#shoppingcart-total').text('#' + shoppingCartTotal.toFixed(2));

        attachQuantityChangeHandler(); // Re-attach the quantity change handler
    }

    // Add item to cart
    $('.add-to-cart-btn').on('click', function(event) {
        event.preventDefault();

        var productId = $(this).data('id');
        var productName = $(this).data('name');
        var productPrice = parseFloat($(this).data('price'));
        var productImage = $(this).data('image');
        var quantity = 1;
        var totalAmount = productPrice * quantity;

        addToCart(userId, productId, productName, productPrice, productImage, quantity, totalAmount);
    });

    function addToCart(userId, productId, productName, productPrice, productImage, quantity, totalAmount) {
        var url = '<?php echo base_url('auth/save_carts'); ?>';

        $.ajax({
            url: url,
            type: 'POST',
            data: {
                user_id: userId,
                product_id: productId,
                quantity: quantity,
                price: productPrice.toFixed(2),
                total_amount: totalAmount.toFixed(2),
                product_name: productName,
                product_image: productImage
            },
            success: function(response) {
                try {
                    var data = JSON.parse(response);
                    if (data.status === 'success') {
                        loadCartItems(userId); // Reload cart items
                    } else {
                        console.error('Server error:', data.message);
                    }
                } catch (e) {
                    console.error('Error parsing JSON response:', e);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error adding to cart:', status, error);
            }
        });
    }

    // Function to attach quantity change handler to input fields
    function attachQuantityChangeHandler() {
        $('.input-qty').off('change').on('change', function() {
            var newQuantity = parseInt($(this).val(), 10);
            var productId = $(this).data('product-id');
            var price = parseFloat($(this).closest('.minicart-item, .cart-item').data('price'));
            var totalAmount = (newQuantity * price).toFixed(2);
           // console.log('Old Quantity:', oldQuantity);
            console.log('New Quantity:', newQuantity);
            if (!isNaN(newQuantity) && newQuantity > 0) {
                updateQuantity(userId, productId, newQuantity, price, totalAmount);
            } else {
                $(this).val(1);
            }
        });
    }

    // Update quantity in mini cart, shopping cart, and database
    function updateQuantity(userId, productId, newQuantity, price, totalAmount) {
        $('.minicart-item[data-id="' + productId + '"], .cart-item[data-id="' + productId + '"]').each(function() {
            $(this).find('.price ins span, .total span').text('#' + totalAmount);
            $(this).find('.input-qty').val(newQuantity);
        });

        saveCartToDatabase(userId, productId, newQuantity, price, totalAmount);
    }

    function saveCartToDatabase(userId, productId, quantity, price, totalAmount) {
        var url = '<?php echo base_url('auth/save_carts'); ?>';

        $.ajax({
            url: url,
            type: 'POST',
            data: {
                user_id: userId,
                product_id: productId,
                quantity: quantity,
                price: parseFloat(price).toFixed(2),
                total_amount: parseFloat(totalAmount).toFixed(2)
            },
            success: function(response) {
                try {
                    var data = JSON.parse(response);
                    if (data.status === 'success') {
                        loadCartItems(userId); // Reload cart items
                    } else {
                        console.error('Server error:', data.message);
                    }
                } catch (e) {
                    console.error('Error parsing JSON response:', e);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error saving cart changes:', status, error);
            }
        });
    }

    // Remove cart item
    $(document).on('click', '.remove-cart-item', function(event) {
        event.preventDefault();

        var productId = $(this).data('product-id');
        var price = $(this).data('price');

        if (confirm('Are you sure you want to remove this item from your cart?')) {
            removeCartItem(productId, userId, price);
        }
    });

    function removeCartItem(productId, userId, price) {
        var url = '<?php echo base_url('auth/remove_cart_item'); ?>';

        $.ajax({
            url: url,
            type: 'POST',
            data: {
                product_id: productId,
                user_id: userId
            },
            success: function(response) {
                try {
                    var data = JSON.parse(response);
                    if (data.status === 'success') {
                        loadCartItems(userId); // Reload cart items
                    } else {
                        console.error('Server error:', data.message);
                    }
                } catch (e) {
                    console.error('Error parsing JSON response:', e);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error removing cart item:', status, error);
            }
        });
    }
});

</script> -->

<script>
$(document).ready(function() {
    var userId = <?php echo json_encode($user_id); ?>;

    // Load cart items on page load
    if (userId) {
        loadCartItems(userId);
    }

    // Fetch cart items from the server and update the UI
    function loadCartItems(userId) {
        var url = '<?php echo base_url('auth/get_cart_items'); ?>';

        $.ajax({
            url: url,
            type: 'GET',
            data: {
                user_id: userId
            },
            success: function(response) {
                try {
                    var data = JSON.parse(response);
                    updateMiniCart(data);
                    updateShoppingCart(data);
                } catch (e) {
                    console.error('Error parsing JSON response:', e);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error fetching cart items:', status, error);
            }
        });
    }

    // Update mini cart UI
    function updateMiniCart(items) {
        var miniCartHtml = '';
        var miniCartTotalQty = 0;
        var miniCartSubtotal = 0;

        items.forEach(function(item) {
            var itemTotal = (item.quantity * item.price).toFixed(2);
            miniCartHtml += `
                <li>
                    <div class="minicart-item" data-id="${item.product_id}" data-price="${item.price}">
                        <div class="thumb">
                            <a href=""><img src="${item.product_image}" alt="${item.product_name}" width="90" height="90"></a>
                        </div>
                        <div class="left-info">
                            <div class="product-title"><a href="" class="product-name">${item.product_name}</a></div>
                            <div class="price">
                                <ins><span class="price-amount">#${parseFloat(item.price).toFixed(2)}</span></ins>
                                <del><span class="price-amount">#${parseFloat(item.original_price).toFixed(2)}</span></del>
                            </div>
                            <div class="qty">
                                <label for="cart[${item.product_id}][qty]">Qty:</label>
                                <input type="number" class="input-qty" name="cart[${item.product_id}][qty]" id="cart[${item.product_id}][qty]" value="${item.quantity}" min="1" max="10" data-product-id="${item.product_id}">
                            </div>
                        </div>
                        <div class="action">
                            <a href="#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a href="#" class="remove-cart-item" data-product-id="${item.product_id}" data-price="${item.price}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </li>
            `;
            miniCartTotalQty += item.quantity;
            miniCartSubtotal += parseFloat(itemTotal);
        });

        $('.products').html(miniCartHtml);
        $('#minicart-quantity').text(miniCartTotalQty.length - 1);
        $('#minicart-total').text('#' + miniCartSubtotal.toFixed(2));

        attachQuantityChangeHandler(); // Re-attach the quantity change handler
    }

    // Update shopping cart UI
    function updateShoppingCart(items) {
        var shoppingCartHtml = '';
        var shoppingCartTotal = 0;

        items.forEach(function(item) {
            var itemTotal = (item.quantity * item.price).toFixed(2);
            shoppingCartHtml += `
                <tr class="cart-item" data-id="${item.product_id}" data-user-id="${userId}" data-price="${item.price}">
                    <td class="product">
                        <div class="product-thumb">
                            <a href=""><img src="${item.product_image}" alt="${item.product_name}" width="90" height="90"></a>
                        </div>
                       
                    </td>
                      <td class="product">
                        <h4 class="product-title"><a href="">${item.product_name}</a></h4>
                    </td>
                    <td class="price">
                        <span>#${parseFloat(item.price).toFixed(2)}</span>
                    </td>
                    <td class="quantity">
                        <input type="number" value="${item.quantity}" min="1" max="10" class="input-qty" data-product-id="${item.product_id}">
                    </td>
                    <td class="total">
                        <span>#${itemTotal}</span>
                    </td>
                    <td class="remove">
                        <a href="#" class="remove-cart-item" data-product-id="${item.product_id}" data-price="${item.price}"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            `;
            shoppingCartTotal += parseFloat(itemTotal);
        });

        $('#shoppingcart-items').html(shoppingCartHtml);
        $('#shoppingcart-total').text('#' + shoppingCartTotal.toFixed(2));

        attachQuantityChangeHandler(); // Re-attach the quantity change handler
    }

    // Add item to cart
    $('.add-to-cart-btn').on('click', function(event) {
        event.preventDefault();

        var productId = $(this).data('id');
        var productName = $(this).data('name');
        var productPrice = parseFloat($(this).data('price'));
        var productImage = $(this).data('image');
        var quantity = 1;
        var totalAmount = productPrice * quantity;

        addToCart(userId, productId, productName, productPrice, productImage, quantity, totalAmount);
    });

    function addToCart(userId, productId, productName, productPrice, productImage, quantity, totalAmount) {
        var url = '<?php echo base_url('auth/save_carts'); ?>';

        $.ajax({
            url: url,
            type: 'POST',
            data: {
                user_id: userId,
                product_id: productId,
                quantity: quantity,
                price: productPrice.toFixed(2),
                total_amount: totalAmount.toFixed(2),
                product_name: productName,
                product_image: productImage
            },
            success: function(response) {
                try {
                    var data = JSON.parse(response);
                    if (data.status === 'success') {
                        loadCartItems(userId); // Reload cart items
                    } else {
                        console.error('Server error:', data.message);
                    }
                } catch (e) {
                    console.error('Error parsing JSON response:', e);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error adding to cart:', status, error);
            }
        });
    }

    // Function to attach quantity change handler to input fields
    function attachQuantityChangeHandler() {
        $('.input-qty').off('change').on('change', function() {
            var newQuantity = parseInt($(this).val(), 10);
            var oldQuantity = parseInt($(this).data('old-qty'), 10) || 1;
            if (isNaN(newQuantity) || newQuantity <= 0) {
                newQuantity = oldQuantity;
                $(this).val(newQuantity);
            }

            if (newQuantity !== oldQuantity) {
                var productId = $(this).data('product-id');
                var price = parseFloat($(this).closest('.minicart-item, .cart-item').data('price'));
                var totalAmount = (newQuantity * price).toFixed(2);

                $('.minicart-item[data-id="' + productId + '"], .cart-item[data-id="' + productId + '"]').each(function() {
                    $(this).find('.price ins span, .total span').text('#' + totalAmount);
                    $(this).find('.input-qty').val(newQuantity);
                });

                saveCartToDatabase(userId, productId, newQuantity, price, totalAmount);
                $(this).data('old-qty', newQuantity);
            }
        });
    }

    function saveCartToDatabase(userId, productId, quantity, price, totalAmount) {
        var url = '<?php echo base_url('auth/save_carts'); ?>';

        $.ajax({
            url: url,
            type: 'POST',
            data: {
                user_id: userId,
                product_id: productId,
                quantity: quantity,
                price: parseFloat(price).toFixed(2),
                total_amount: parseFloat(totalAmount).toFixed(2)
            },
            success: function(response) {
                try {
                    var data = JSON.parse(response);
                    if (data.status === 'success') {
                        loadCartItems(userId); // Reload cart items
                    } else {
                        console.error('Server error:', data.message);
                    }
                } catch (e) {
                    console.error('Error parsing JSON response:', e);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error saving cart changes:', status, error);
            }
        });
    }

    // Remove cart item
    $(document).on('click', '.remove-cart-item', function(event) {
        event.preventDefault();

        var productId = $(this).data('product-id');
        var price = $(this).data('price');

        if (confirm('Are you sure you want to remove this item from your cart?')) {
            removeCartItem(productId, userId, price);
        }
    });

    function removeCartItem(productId, userId, price) {
        var url = '<?php echo base_url('auth/remove_cart_item'); ?>';

        $.ajax({
            url: url,
            type: 'POST',
            data: {
                user_id: userId,
                product_id: productId,
                price: price
            },
            success: function(response) {
                try {
                    var data = JSON.parse(response);
                    if (data.status === 'success') {
                        loadCartItems(userId); // Reload cart items
                    } else {
                        console.error('Server error:', data.message);
                    }
                } catch (e) {
                    console.error('Error parsing JSON response:', e);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error removing cart item:', status, error);
            }
        });
    }
});
</script>






























