<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

	public function add_item() {
		  $this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation
					->set_rules('title', 'Title', 'required|min_length[3]|max_length[30]')
					->set_rules('description', 'Description', 'required|min_length[3]|max_length[30]')
					->set_rules('price', 'Price', 'required|numeric|max_length[0]');
                if ($this->form_validation->run())
                {
                     
                }

			$this->load->view('add_item');
	}
	        public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success', $data);
                }
        }
}
