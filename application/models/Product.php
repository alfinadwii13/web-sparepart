<?php
class Product_model extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function get_product()
        {
                $query = $this->db->get('db_sparepart');
                return $query->result();
        }

}
?>