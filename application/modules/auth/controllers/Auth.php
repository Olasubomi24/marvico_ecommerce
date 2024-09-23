<?php
class Auth extends MX_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->module('template');
        $this->load->module('utility');
        $this->load->library('session');
    }

    // Method to check or generate user_id   success_page
    public  function checkUserSession() {
        // Check if user_id is already in session
        if (!$this->session->userdata('user_id')) {
            // Generate a new user_id
            $new_user_id = uniqid('user_', true);
            // Save user_id to session
            $this->session->set_userdata('user_id', $new_user_id);
        }
        return $this->session->userdata('user_id');
    }
    public function success_page() {
        $user_id = $this->checkUserSession();
        $encoded_aa = $this->input->get('aa');
        $result = json_decode(urldecode($encoded_aa), true);  // Decode and parse the JSON data
    
        $view_data = array(
            'title' => 'Dashboard',
            'content_view' => 'auth/success_page',
            'result' => $result,
            'user_id' => $user_id, // Pass the user ID to the view
        );
    
        // Load the general template and pass in the data
        $this->template->general_template_for_admin($view_data);
    }
    

    public function index() {
        // Ensure user_id is available in session
        $user_id = $this->checkUserSession();
    
        // Fetch product descriptions
        $results = $this->utility->product_des();
    
        // Initialize an empty array to hold products related to each product description
        $product_results = array();
    
        // Loop through each product description to fetch corresponding products
        if (is_array($results['result']) || is_object($results['result'])) {
            foreach ($results['result'] as $description) {
                // Fetch products by product_description_id
                $products = $this->utility->products($description['product_description_id']);
                // Add the products to the product_results array
                $product_results[$description['product_description_id']] = $products['result'];
            }
        }
    
        // Prepare data array to pass to the view
        $data = array(
            'title' => 'Home',
            'content_view' => 'auth/home',
            'network_result' => $results['result'], // List of product descriptions
            'product_result' => $product_results, // Products grouped by product_description_id
            'user_id' => $user_id // Include user_id in data to use in view
        );
    
        // Load the view with the data
        $this->template->general_template($data);
    }
    public function shopping_cart() {
          // Ensure user_id is available in session
          $user_id = $this->checkUserSession();
        // Fetch product descriptions
        $results = $this->utility->product_des();
    
        // Initialize an empty array to hold products related to each product description
        $product_results = array();
    
        // Loop through each product description to fetch corresponding products
        if (is_array($results['result']) || is_object($results['result'])) {
            foreach ($results['result'] as $description) {
                // Fetch products by product_description_id
                $products = $this->utility->products($description['product_description_id']);
                // Add the products to the product_results array
                $product_results[$description['product_description_id']] = $products['result'];
            }
        }
    
        // Prepare data array to pass to the view
        $data = array(
            'title' => 'Shopping Cart',
            'content_view' => 'auth/shopping_cart',
            'network_result' => $results['result'], // List of product descriptions
            'product_result' => $product_results, // Products grouped by product_description_id
            'user_id' => $user_id // Include user_id in data to use in view
        );
    
        // Load the view with the data
        $this->template->general_template($data);
    }
    public function checkout() {
        // Ensure user_id is available in session
        $user_id = $this->checkUserSession();
    
        // Fetch product descriptions
        $results = $this->utility->checkout_products($user_id);
        $product_results = $results['result'];
        $total_items = count($product_results);
        $subtotal = array_sum(array_column($product_results, 'total_amount'));
    
        // Define shipping and tax (these values could be dynamic based on your logic)
        $shipping = 250.00; // Example value
        $tax = 0.00; // Example value
    
        // Calculate the total amount
        $total = $subtotal + $shipping + $tax;
    
        // Prepare data array to pass to the view
        $data = array(
            'title' => 'Shopping Cart',
            'content_view' => 'auth/checkout',
            'product_results' => $product_results,
            'user_id' => $user_id,
            'total_items' => $total_items,
            'subtotal' => $subtotal,
            'shipping' => $shipping,
            'tax' => $tax,
            'total' => $total
        );
    
        // Load the view with the data
        $this->template->general_template($data);
    }
    
    // public function save_carts() {
    //     $userId = $this->input->post('user_id');
    //     $productId = $this->input->post('product_id');
    //     $productName = $this->input->post('product_name');
    //     $price = $this->input->post('price');
    //     $quantity = $this->input->post('quantity');
    //     $totalAmount = $this->input->post('total_amount');
    //     $productImage = $this->input->post('product_image');
    
    //     // Check if the product is already in the cart
    //     $existingCartItem = $this->utility->getCartItem($userId, $productId, $price);
        
    //     if ($existingCartItem) {
    //         // Product exists, update quantity and total_amount
    //         $newQuantity = $existingCartItem->quantity + $quantity;
    //         $newTotalAmount = $newQuantity * $price;
    //         $this->utility->updateCartItem($userId, $productId,$price, $newQuantity, $newTotalAmount);
    //     } else {
    //         // Product does not exist, add new item
    //         $this->utility->addCartItem($userId, $productId, $quantity, $price, $totalAmount, $productName, $productImage);
    //     }
    
    //     echo json_encode(['status' => 'success']);
    // }

    public function save_carts() {
        $userId = $this->input->post('user_id');
        $productId = $this->input->post('product_id');
        $productName = $this->input->post('product_name');
        $price = $this->input->post('price');
        $quantity = $this->input->post('quantity');
        $totalAmount = $this->input->post('total_amount');
        $productImage = $this->input->post('product_image');
    
        // Check if the product is already in the cart
        $existingCartItem = $this->utility->getCartItem($userId, $productId, $price);
        
        if ($existingCartItem) {
            // Product exists, update quantity and total_amount with the new quantity
            $newTotalAmount = $quantity * $price;
            $this->utility->updateCartItem($userId, $productId, $price, $quantity, $newTotalAmount);
        } else {
            // Product does not exist, add new item
            $this->utility->addCartItem($userId, $productId, $quantity, $price, $totalAmount, $productName, $productImage);
        }
    
        echo json_encode(['status' => 'success']);
    }
    
    
    
    // public function update_cart_item() {
    //     $user_id = $this->input->post('user_id');
    //     $product_id = $this->input->post('product_id');
    //     $quantity = $this->input->post('quantity');
    
    //     // Get the current cart item
    //     $cartItem = $this->utility->getCartItem($user_id, $product_id);
    
    //     if ($cartItem) {
    //         $new_total_amount = $quantity * $cartItem['price'];
    
    //         // Update the cart item with new quantity and total amount
    //         $this->utility->updateCartItem($user_id, $product_id, $quantity, $cartItem['price'], $new_total_amount);
    
    //         // Send success response
    //         echo json_encode(['status' => 'success']);
    //     } else {
    //         // Send error response if the item was not found
    //         echo json_encode(['status' => 'error', 'message' => 'Cart item not found']);
    //     }
    // }
    public function update_cart_item() {
        $user_id = $this->input->post('user_id');
        $product_id = $this->input->post('product_id');
        $quantity = $this->input->post('quantity');
        $price = $this->input->post('price');
        $total_amount = $this->input->post('total_amount');
    
        // Update the cart item in the database
        $result = $this->utility->updateCartItems($user_id, $product_id,$price, $quantity, $total_amount);
    
        if ($result) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to update cart item.']);
        }
    }

    public function update_cart_items() {
        $user_id = $this->input->post('user_id');
        $product_id = $this->input->post('product_id');
        $quantity = $this->input->post('quantity');
        $price = $this->input->post('price');
        $total_amount = $this->input->post('total_amount');
    
        // Update query
        $this->db->where('user_id', $user_id);
        $this->db->where('product_id', $product_id);
        $this->db->update('cart', [
            'quantity' => $quantity,
            'price' => $price,
            'total_amount' => $total_amount,
        ]);
    
        if ($this->db->affected_rows() > 0) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to update cart item']);
        }
    }
    
    
    
    public function remove_cart_item()
    {
        $product_id = $this->input->post('product_id');
        $user_id = $this->input->post('user_id');
        $price = $this->input->post('price');
    
        $result = $this->utility->remove_cart_item($product_id, $user_id, $price);
    
        if ($result) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to remove cart item']);
        }
    }
    
    
    public function get_cart_items() {
        $user_id = $this->input->get('user_id');
    
        // Get all cart items for the user
        $cartItems = $this->utility->getCartItems($user_id);

        $cartItem = $this->utility->txn_items($user_id);
    
        // Send cart items as JSON response
        echo json_encode($cartItems);
    }

    public function get_cart_item() {
        $user_id = $this->input->get('user_id');
    
        // Get all cart items for the user
        $cartItem = $this->utility->txn_items($user_id);
    
        // Send cart items as JSON response
        echo json_encode($cartItem);
    }
    

    // public function process_payment() {
    //     // Collect form data
    //     $user_id = $this->input->post('user_id');
    //     $register_name = $this->input->post('register_name');
    //     $phone_number = $this->input->post('phone_number');
    //     $email = $this->input->post('email');
    //     $product_items = $this->input->post('product_items');  // Expecting JSON string
    //     $subtotal = $this->input->post('subtotal');
    //     $shipping = $this->input->post('shipping');
    //     $tax = $this->input->post('tax');
    //     $total_amount = $this->input->post('total_amount');
    
    //     // Validate and process the payment
    //     if ($user_id && $total_amount) {
    //         // Save transaction using utility model
    //         $transaction = $this->utility->save_transaction(
    //             $user_id, $register_name, $phone_number, $email, 
    //             $product_items, $subtotal, $shipping, $tax, $total_amount
    //         );
    //         log_message('debug', 'Payment data: ' . print_r($transaction, true));
    
    //         // If transaction saved successfully
    //         if ($transaction) {
    //             $transaction_json = urlencode(json_encode($transaction));
    //             $redirect_url = base_url('auth/success_page') . '?aa=' . $transaction_json;
            
    //             log_message('debug', 'Redirect URL: ' . $redirect_url);
                
    //             redirect($redirect_url);
    //             exit;  // Ensure no further processing occurs
    //         } else {
    //             log_message('error', 'Transaction failed to save for user_id: ' . $user_id);
    //             redirect(base_url('auth/checkout'));
    //             exit;
    //         }
             
    //     } else {
    //         // Redirect to checkout if user_id or total_amount are missing
    //         $redirect_url = base_url('auth/checkout');
    //         redirect($redirect_url);
    //     }
    // }
    public function process_payment() {
        // Collect form data
        $user_id = $this->input->post('user_id');
        $register_name = $this->input->post('register_name');
        $phone_number = $this->input->post('phone_number');
        $email = $this->input->post('email');
        $product_items = $this->input->post('product_items');  // Expecting JSON string
        $subtotal = $this->input->post('subtotal');
        $shipping = $this->input->post('shipping');
        $tax = $this->input->post('tax');
        $total_amount = $this->input->post('total_amount');
    
        // Validate and process the payment
        if ($user_id && $total_amount) {
            // Save transaction using utility model
            $transaction = $this->utility->save_transaction(
                $user_id, $register_name, $phone_number, $email, 
                $product_items, $subtotal, $shipping, $tax, $total_amount
            );
            log_message('debug', 'Payment data: ' . print_r($transaction, true));
    
            // If transaction saved successfully
            if ($transaction) {
                $transaction_json = urlencode(json_encode($transaction));
                $redirect_url = base_url('auth/success_page') . '?aa=' . $transaction_json;
    
                log_message('debug', 'Redirect URL: ' . $redirect_url);
    
                // Return success response
                echo json_encode(['success' => true, 'redirect_url' => $redirect_url]);
                return;
            } else {
                log_message('error', 'Transaction failed to save for user_id: ' . $user_id);
                echo json_encode(['success' => false, 'message' => 'Transaction failed.']);
                return;
            }
        } else {
            // Return error response if user_id or total_amount are missing
            echo json_encode(['success' => false, 'message' => 'Invalid data provided.']);
            return;
        }
    }
    
    
    

    
    
    
    
    

}
?>