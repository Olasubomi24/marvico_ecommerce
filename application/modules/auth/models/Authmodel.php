<?php 
class Authmodel extends CI_Model {
    public function __construct() {
        parent::__construct();
        // Load the database if not already loaded
        $this->load->database();
        // Ensure session library is loaded
        $this->load->library('session');
    }

    // Method to get mini cart data
    public function getMiniCartData() {
        // Get the cart data from the session
        $cart = $this->session->userdata('cart');
        
        // If the cart is empty, return an empty array
        if (empty($cart)) {
            return array();
        }

        // Process cart data and prepare it for mini cart display
        $miniCartData = array();
        foreach ($cart as $item) {
            $miniCartData[] = array(
                'product_id' => isset($item['id']) ? $item['id'] : null,
                'product_name' => isset($item['name']) ? $item['name'] : 'Unknown Product',
                'product_price' => isset($item['price']) ? $item['price'] : 0,
                'quantity' => isset($item['quantity']) ? $item['quantity'] : 0,
                'total_price' => (isset($item['price']) ? $item['price'] : 0) * (isset($item['quantity']) ? $item['quantity'] : 0)
            );
        }

        return $miniCartData;
    }

    // Method to get full cart data
    public function getFullCartData() {
        // Implement this method similarly to getMiniCartData, but include more details if needed
        $cart = $this->session->userdata('cart');
        
        // If the cart is empty, return an empty array
        if (empty($cart)) {
            return array();
        }

        // Process cart data and prepare it for full cart display
        $fullCartData = array();
        foreach ($cart as $item) {
            $fullCartData[] = array(
                'product_id' => isset($item['id']) ? $item['id'] : null,
                'product_name' => isset($item['name']) ? $item['name'] : 'Unknown Product',
                'product_price' => isset($item['price']) ? $item['price'] : 0,
                'quantity' => isset($item['quantity']) ? $item['quantity'] : 0,
                'total_price' => (isset($item['price']) ? $item['price'] : 0) * (isset($item['quantity']) ? $item['quantity'] : 0)
            );
        }

        return $fullCartData;
    }

    public function add_item($data) {
        return $this->db->insert('cart_items', $data);
    }

    public function get_items($user_id) {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('cart_items');
        return $query->result_array();
    }

    public function update_item($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('cart_items', $data);
    }

    public function delete_item($id) {
        $this->db->where('id', $id);
        return $this->db->delete('cart_items');
    }

    public function clear_cart($user_id) {
        $this->db->where('user_id', $user_id);
        return $this->db->delete('cart_items');
    }
}
?>
