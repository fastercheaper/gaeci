<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ignite extends CI_Controller {

	public function index()
	{
        $this->load->model('Ignite_model', 'ignite');
        $this->ignite->insert_entry();
        $this->ignite->get_all();        
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */