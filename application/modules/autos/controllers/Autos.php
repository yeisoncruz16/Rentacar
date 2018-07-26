<?php

class Autos extends Front_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('autos_model');
        Assets::css("http://bonfire.com/themes/default/css/estilosVehiculos.css");
        $this->load->library('users/auth');

    }

    public function index()
    {
        $this->load->helper('typography');
        $autos = $this->autos_model->order_by('created_on', 'asc')
            ->limit(5)
            ->find_all();
        $login = $this->auth->is_logged_in();
        Template::set('login', $login);
        Template::set('autos', $autos);
        Template::render();


    }

}