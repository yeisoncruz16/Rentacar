<?php

class Autos_model extends MY_Model
{
    protected $table_name   = 'autos';
    protected $key          = 'autos_id';
    protected $set_created  = true;
    protected $set_modified = true;
    protected $soft_deletes = true;
    protected $date_format  = 'datetime';

    protected $validation_rules = array(
        array(
            'field' => 'placa',
            'label' => 'placa',
            'rules' => 'trim|strip_tags'
        ),
        array(
            'field' => 'nombre',
            'label' => 'nombre',
            'rules' => 'trim|strip_tags'
        ),
        array(
            'field' => 'modelo',
            'label' => 'Modelo',
            'rules' => 'trim|strip_tags'
        ),
        array(
            'field' => 'color',
            'label' => 'color',
            'rules' => 'trim|strip_tags'
        ),
        array(
            'field' => 'estado',
            'label' => 'estado',
            'rules' => 'trim|strip_tags'
        ),

        array(
            'field' => 'capacidad',
            'label' => 'capacidad',
            'rules' => 'trim|strip_tags'
        ),
        array(
            'field' => 'disponibilidad',
            'label' => 'disponibilidad',
            'rules' => 'trim|strip_tags'
        ),
        array(
            'field' => 'imagen',
            'label' => 'imagen',
            'rules' => 'trim|strip_tags'
        )
    );

}