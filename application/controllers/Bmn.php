<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bmn extends CI_Controller {

    public function pemusnahan()
    {
        $data['pemusnahan'] = $this->BmnModel->getPemusnahan();
        if ($this->session->level == 'admin2') {
            $this->load->view('user/satuankerja/verifikasiPemusnahan', $data);
        } else {
            $this->load->view('user/satuankerja/pemusnahan', $data);
        }
    }
}
