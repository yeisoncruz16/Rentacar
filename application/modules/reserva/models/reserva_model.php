<?php

class Reserva_model extends MY_Model
{
    protected $table_name   = 'autos';
    protected $key          = 'autos_id';
    protected $set_created  = true;
    protected $set_modified = true;
    protected $soft_deletes = true;
    protected $date_format  = 'datetime';

    protected $validation_rules = array(
        array(
            'field' => 'ciudad_reserva',
            'label' => 'ciudad_reserva',
            'rules' => 'trim|strip_tags'
        ),
        array(
            'field' => 'fecha_reserva',
            'label' => 'fecha_reserva',
            'rules' => 'trim|strip_tags'
        ),
        array(
            'field' => 'hora_reserva',
            'label' => 'hora_reserva',
            'rules' => 'trim|strip_tags'
        ),
        array(
            'field' => 'ciudad_devolucion',
            'label' => 'ciudad_devolucion',
            'rules' => 'trim|strip_tags'
        ),
        array(
            'field' => 'fecha_devolucion',
            'label' => 'fecha_devolucion',
            'rules' => 'trim|strip_tags'
        ),

        array(
            'field' => 'hora_devolucion',
            'label' => 'hora_devolucion',
            'rules' => 'trim|strip_tags'
        ),
        array(
            'field' => 'observaciones',
            'label' => 'observaciones',
            'rules' => 'trim|strip_tags'
        )
    );
}