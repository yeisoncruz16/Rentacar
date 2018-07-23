<?php

class Reservas extends Front_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('reservas_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        Assets::css("http://bonfire.com/themes/default/css/estilosRegistro.css");

    }

    public function index()
    {
        $this->load->helper('typography');
        $reservas = $this->reservas_model->find_all();
        Template::set('reservas', $reservas);
        Template::render();


        if($this->input->post('submit'))
        {
            $data = array (
                'ciudad_reserva' => $this->input->post('ciudad_reserva'),
                'fecha_reserva'  => $this->input->post('fecha_reserva'),
                'hora_reserva'  => $this->input->post('hora_reserva'),
                'ciudad_devolucion' => $this->input->post('ciudad_devolucion'),
                'fecha_devolucion'  => $this->input->post('fecha_devolucion'),
                'hora_devolucion'  => $this->input->post('hora_devolucion'),
                'observaciones' => $this->input->post('observaciones'),
            );

            if($this->reservas_model->insert($data))
            {
                Template::set_message('You post was successfully saved.', 'success');
            }

        }
    }

}