<?php
class Sparepart_controller extends CI_Controller
{
    public function index()
    {
		//$this->load->model('Sparepart_model');
		//$data['query']=$this->Product_model->get_product();
        $this->load->view('admin/sparepart');
    }
}
?>
