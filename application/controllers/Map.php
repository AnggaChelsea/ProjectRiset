<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Map extends CI_Controller
{

    public function __construct()
    {
        $this->load->library('form_validation');
		$this->load->library('session');

		$this->load->helper('date');
		$this->load->model('m_riset', '', TRUE);
    }

    public function router() {
        $data = array(
            'title' => 'map router',
            'email' => $this->email,
            'peta' => $this->m_riset->get_datapeta('datapeta')
        );
        $this->load->view('templates/head', $data);
        $this->load->view('templates/navpeta', $data);
        $this->load->view('peta/petarouting', $data);
    }
}
