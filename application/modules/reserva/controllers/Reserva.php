<?php

class Reserva extends Front_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('reserva_model');
    }

    public function index()
    {
        $reservas= $this->reserva_model->where('deleted', 0)->find_all();
        Template::set('autos', $reservas);
        Template::render();
    }
}