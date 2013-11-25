<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chart extends MX_Controller 
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function index() {
        
        $chartId    =   "1";
        $chartId    =   $this->input->get('chartId');
        
        $this->db->where('chartId', 2);
        $this->db->where('bar <', 1);
        $data = $this->db->get('chartData')->result();
        
        //var_dump($data);
        $veri['data']   =   $data;
        $this->load->view('header', $veri);
        $this->load->view('chart/index');
        $this->load->view('footer');
    }
}

?>