<?php

class Content extends Admin_Controller
{

    public function __construct()
    {
        $this->load->model('reservas_model');
        parent::__construct();
        Template::set('toolbar_title', 'Reservas');
        $this->load->library('table');
    }

    public function index()
    {
        $query = $this->db->query('SELECT reservas_id AS Id, ciudad_reserva AS CiudadReserva, fecha_reserva AS Fecha, hora_reserva AS Hora, ciudad_devolucion AS CiudadDevolucion, fecha_devolucion AS FechaD, hora_devolucion AS HoraD FROM bf_reservas');

        $table = $this->table->generate($query);
        Template::set('reservas_tabla', $table);
        Template::render();
    }
    public function create()
    {

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
                redirect(SITE_AREA .'/content/reservas');
            }

        }
        Template::set_view('content/reservas_form');
        Template::render();
    }



}