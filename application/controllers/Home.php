<?php
class Home extends CI_Controller
{
    public function index()
    {
        $this->load->model('product');
		$data['query']=$this->product->get_product();
        $this->load->view('admin/dashboard', $data);
    }
}
?>
