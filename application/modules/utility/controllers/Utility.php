<?php
class Utility extends MX_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function call_api($method, $url, $data = false) {
        $header = array("Content-Type:application/x-www-form-urlencoded", "x-api-key:" . X_API_KEY);
        $curl = curl_init();
        switch ($method) {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, true);
                if ($data) {
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                }
                break;
            case "Q_POST":
                curl_setopt($curl, CURLOPT_POST, true);
                if ($data) {
                    $data = http_build_query($data);
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                }
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_PUT, 1);
                break;
            default:
                if ($data) {
                    $url = $url . "/$data";
                }
        }

        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            $response = "cURL Error #:" . $err;
        } else {
            $response = $result;
        }

        return $response;
    }

    public function product_des() {
        $sql = "SELECT product_description_id, product_description_name FROM product_description";
        $result = $this->db->query($sql)->result_array();
        return array('status_code' => '0', 'message' => 'Successful', 'result' => $result);
    }

    public function product() {
        $sql = "SELECT Product_id, Product_name FROM products";
        $result = $this->db->query($sql)->result_array();
        return array('status_code' => '0', 'message' => 'Successful', 'result' => $result);
    }
    public function packages() {
        $sql = "SELECT package_id, package_name FROM packages";
        $result = $this->db->query($sql)->result_array();
        return array('status_code' => '0', 'message' => 'Successful', 'result' => $result);
    }

    public function products($product_id) {
        $sql = "SELECT p.product_id, product_name, c.package_id, c.package_name, measurement, price, a.product_image 
                FROM measurement_and_price AS a
                INNER JOIN products AS p ON a.product_id = p.product_id 
                INNER JOIN packages AS c ON a.package_id = c.package_id 
                WHERE product_description_id = ?";
        $result = $this->db->query($sql, array($product_id))->result_array();
        return array('status_code' => '0', 'message' => 'Successful', 'result' => $result);
    }

    public function txn_items($user_id) {
        $sql = "SELECT COUNT(quantity)txn_qty, FORMAT(SUM(total_amount),2)txn_amt FROM cart WHERE user_id = ?";
        $result = $this->db->query($sql, array($user_id))->result_array();
        return array('status_code' => '0', 'message' => 'Successful', 'result' => $result);
    }

    public function checkout_products($user_id) {
        $sql = "SELECT user_id, product_name, product_image, quantity, price, total_amount 
                FROM cart WHERE user_id = ? and status ='1'";
        $result = $this->db->query($sql, array($user_id))->result_array();
        return array('status_code' => '0', 'message' => 'Successful', 'result' => $result);
    }
    
    public function addCartItem($userId, $productId, $quantity, $price, $totalAmount, $productName, $productImage) {
        $data = [
            'user_id' => $userId,
            'product_id' => $productId,
            'quantity' => $quantity,
            'price' => $price,
            'total_amount' => $totalAmount,
            'product_name' => $productName,
            'product_image' => $productImage,
            'status' => '1'
        ];
        $this->db->insert('cart', $data);
    }
    



    public function getCartItem($userId, $productId, $price) {
        $this->db->where('user_id', $userId);
        $this->db->where('product_id', $productId);
        $this->db->where('price', $price); 
        $this->db->where('status', '1');// Add price to the condition
        $query = $this->db->get('cart');
        return $query->row();
    }
    
    
    public function getCartItems($user_id) {
        $this->db->select('user_id, product_id, quantity, price, total_amount, product_name, product_image');
        $this->db->from('cart');
        $this->db->where('user_id', $user_id);
        $this->db->where('status', '1');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    
    public function insertCartItem($user_id, $product_id, $quantity, $price, $total_amount, $product_name, $product_image) {
        $data = [
            'user_id' => $user_id,
            'product_id' => $product_id,
            'quantity' => $quantity,
            'price' => $price,
            'total_amount' => $total_amount,
            'product_name' => $product_name,
            'product_image' => $product_image
        ];
    
        $this->db->insert('cart', $data);
    }
    
    public function updateCartItem($userId, $productId,$price, $quantity, $totalAmount) {
        $this->db->set('quantity', $quantity);
        $this->db->set('total_amount', $totalAmount);
        $this->db->where('user_id', $userId);
        $this->db->where('product_id', $productId);
        $this->db->where('price', $price);
        $this->db->update('cart');
    }
    public function updateCartItems($user_id, $product_id,$price, $quantity, $total_amount) {
        $data = [
            'quantity' => $quantity,
            'total_amount' => $total_amount
        ];
    
        $this->db->where('user_id', $user_id);
        $this->db->where('product_id', $product_id);
        $this->db->where('price', $price);
        return $this->db->update('cart', $data);
    }
    
    
    
    public function remove_cart_item($product_id, $user_id, $price)
    {
        $this->db->where('product_id', $product_id);
        $this->db->where('user_id', $user_id);
        $this->db->where('price', $price);
        return $this->db->delete('cart');
    }
    

    public function generate_account_no($register_name, $phonenumber, $customer_id) {
        // Set the API URL and headers
        $url = 'https://zippyworld.net/zippy_event_third_party/v1/api/create_account';
        $header = [
            'x-api-key: 6128892',
            'Content-Type: application/json'
        ];
        
        // Prepare the data for the POST request
        $data = [
            'customerName' => $register_name,
            'phoneNumber' => $phonenumber,
            'mainPhoneNumber' => $customer_id
        ];
        
        $data_json = json_encode($data); // Convert $data array to JSON
    
        // cURL initialization
        $curl = curl_init();
    
        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $data_json,
            CURLOPT_HTTPHEADER => $header
        ]);
    
        // Execute the request
        $response = curl_exec($curl);
        
        // Check for errors
        if (curl_errno($curl)) {
            $error_msg = curl_error($curl);
            curl_close($curl);
            return [
                'status_code' => '1',
                'message' => 'cURL Error #: ' . $error_msg
            ];
        }
    
        curl_close($curl);
    
        // Decode the response
        $response_array = json_decode($response, true);
    
        // Check the response status code and extract account number
        if (isset($response_array['status_code']) && $response_array['status_code'] == '200') {
            if (isset($response_array['data']['accountNumber'])) {
                return [
                    'status_code' => '0',
                    'account_number' => $response_array['data']['accountNumber'] // Return the account number
                ];
            } else {
                return [
                    'status_code' => '1',
                    'message' => 'Account number is not available in response data'
                ];
            }
        } else {
            return [
                'status_code' => '1',
                'message' => 'Account number cannot be generated: ' . $response_array['message']
            ];
        }
    }
    
    // public function save_transaction(
    //     $user_id, $register_name, $phone_number, $email, 
    //     $product_items, $subtotal, $shipping, $tax, $total_amount
    // ) {
    //     // Generate a random number and modify the phone number
    //     $random_number = rand(100, 999); // Generate random number
    //     $phonenumber = ltrim($phone_number, '0'); // Remove leading zero from phone number
    //     $phonenumbers = $random_number . $phonenumber;
    
    //     // Generate account number based on customer details
    //     $customer_id = "01000000168";  // Can be dynamic if needed
    //     $getCampaignDetail = $this->generate_account_no($register_name, $phonenumbers, $customer_id);
    //     //$getCampaignDetails = $getCampaignDetail['account_number'];
    //     $getCampaignDetails =  '8976543045';
    //     $query1 = "INSERT into marvico_food_txn (user_id, register_name, phone_number, email, product_items, subtotal, shipping, tax, total_amount, account_no)
    //                     VALUES('$user_id', '$register_name','$phone_number', '$email', '$product_items', '$subtotal', '$shipping', '$tax', '$total_amount', '$getCampaignDetails')";
    //      $query = "SELECT * FROM marvico_food_txn";
 
       
    //     // Insert the transaction data into the database
    //     $this->db->query($query1);
    
    //     // Return the inserted transaction ID
    //     return   $this->db->query($query);
    // }

    public function save_transaction(
        $user_id, $register_name, $phone_number, $email, 
        $product_items, $subtotal, $shipping, $tax, $total_amount
    ) {
        // Generate a random number and modify the phone number
        $random_number = rand(100, 999);  // Generate random number
        $phonenumber = ltrim($phone_number, '0');  // Remove leading zero from phone number
        $phonenumbers = $random_number . $phonenumber;
    
        // Generate account number based on customer details
        // $getCampaignDetails = '8976543045';
              $customer_id = "01000000168";
              $getCampaignDetail = $this->generate_account_no($register_name, $phonenumbers, $customer_id);
              $getCampaignDetails = $getCampaignDetail['account_number'];
    
        // Insert transaction into database
        $query1 = "INSERT INTO marvico_food_txn 
            (user_id, register_name, phonenumber, email, product_items, subtotal, shipping, tax, total_amount, account_no)
            VALUES ('$user_id', '$register_name', '$phone_number', '$email', '$product_items', '$subtotal', '$shipping', '$tax', '$total_amount', '$getCampaignDetails')";
    
        $this->db->query($query1);
        $update_cart_query = "UPDATE cart SET status = 4 WHERE user_id = ?";
        if (!$this->db->query($update_cart_query, array($user_id))) {
            // Log an error message if the update fails
            log_message('error', 'Cart status update failed for user_id: ' . $user_id);
        }
        // Fetch the inserted transaction for verification or return
        $query = "SELECT user_id, register_name, phonenumber, email,subtotal, shipping, tax, total_amount, account_no FROM marvico_food_txn ORDER BY id DESC LIMIT 1";  // Fetch the latest transaction
        return $this->db->query($query)->row();
    }
    


    
    
    
    

    

    
}
?>
