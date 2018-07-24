<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Rent extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('application');
        $this->load->library('Template');
        $this->load->library('Assets');
        $this->lang->load('application');
        $this->load->library('events');
        Assets::css("http://bonfire.com/themes/default/css/estilos.css");
        $this->load->library('installer_lib');
        if (! $this->installer_lib->is_installed()) {
            $ci =& get_instance();
            $ci->hooks->enabled = false;
            redirect('install');
        }

        $this->requested_page = isset($_SESSION['requested_page']) ? $_SESSION['requested_page'] : null;
    }
    public function index()
    {
        Template::render();
    }

}