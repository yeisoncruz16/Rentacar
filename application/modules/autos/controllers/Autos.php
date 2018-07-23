<?php

class Autos extends Front_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('autos_model');
        Assets::css("http://bonfire.com/themes/default/css/estilosVehiculos.css");
    }

    public function index()
    {
        $this->load->helper('typography');
        $autos = $this->autos_model->order_by('created_on', 'asc')
            ->limit(5)
            ->find_all();

        Template::set('autos', $autos);
        Template::render();
    }

}