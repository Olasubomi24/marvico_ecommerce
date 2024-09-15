<?php
class Auth extends MX_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->module('template');
        $this->load->module('utility');
        $this->load->library('session');
    }

    // Method to check or generate user_id   success_page
    private function checkUserSession() {
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
        $encoded_aa = $this->input->get('aa');
        $result = json_decode(urldecode($encoded_aa), true);  // Decode and parse the JSON data
       // $result = json_decode($results, true); // For JSON strings
    //print_r($result); die;
      //  $tmc_recent_donation_API = $this->utility->get_tmc_donation();
    
        $view_data = array(
            'title' => 'Dashboard',
            'content_view' => 'auth/success_page',
            'result' => $result,
           // 'tmc_recent_donation' => $tmc_recent_donation_API['result'],
        );
    
        // Load the general template and pass in the data
        $this->template->general_template($view_data);
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
        $shipping = 20.00; // Example value
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
    
            // If transaction saved successfully
            if ($transaction) {
                // Encode transaction as JSON and URL-encode it
                $transaction_json = urlencode(json_encode($transaction));
    
                // Construct redirect URL with encoded transaction data
                $redirect_url = base_url('auth/success_page') . '?aa=' . $transaction_json;
    
                // Respond with success and redirect URL
                echo json_encode(array('success' => true, 'redirect_url' => $redirect_url));
            } else {
                // Respond with failure message
                echo json_encode(array('success' => false, 'message' => 'Transaction failed. Please try again.'));
            }
        } else {
            echo json_encode(array('success' => false, 'message' => 'Invalid payment data.'));
        }
    }
    
    
    
    
    

}
?>