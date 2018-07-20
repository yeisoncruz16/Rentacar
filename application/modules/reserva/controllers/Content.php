<?php

class Content extends Admin_Controller
{
    public function __construct()
    {
        $this->load->model('reserva_model');
        parent::__construct();
        Template::set('toolbar_title', 'Reservas');
    }

    public function index()
    {
        $reservas= $this->reserva_model->where('deleted', 0)->find_all();
        Template::set('reservas', $reservas);
        Template::render();
    }
}