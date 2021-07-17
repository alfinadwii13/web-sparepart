<?php
class Product_model extends CI_Model {
        public function get_product()
        {
                $query = $this->db->get('db_sparepart');
                return $query->result_array();
        }

}
?>