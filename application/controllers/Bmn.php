<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bmn extends CI_Controller {

    public function pemusnahan()
    {
        $data['pemusnahan'] = $this->BmnModel->getPemusnahan();
        $this->load->view('user/satuankerja/pemusnahan', $data);
    }
}
