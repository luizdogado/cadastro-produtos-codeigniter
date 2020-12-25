<?php if (! defined('BASEPATH')) exit ('No direct scrip access allowed');

class Utils extends CI_Controller
{
    public function migrate()
    {
        $this->load->library("migration");
        if ($this->migration->current()){
            echo "migrado";
        } else {
            show_error($this->migration->error_string());
        }

    }
}