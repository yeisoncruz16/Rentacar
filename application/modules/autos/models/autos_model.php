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
            'label' => 'Placa',
            'rules' => 'trim|strip_tags'
        ),
        array(
            'field' => 'nombre',
            'label' => 'Nombre',
            'rules' => 'trim|strip_tags'
        ),
        array(
            'field' => 'modelo',
            'label' => 'Modelo',
            'rules' => 'trim|strip_tags'
        ),
        array(
            'field' => 'color',
            'label' => 'Color',
            'rules' => 'trim|strip_tags'
        ),
        array(
            'field' => 'estado',
            'label' => 'Estado',
            'rules' => 'trim|strip_tags'
        ),

        array(
            'field' => 'capacidad',
            'label' => 'Capacidad',
            'rules' => 'trim|strip_tags'
        ),
        array(
            'field' => 'disponibilidad',
            'label' => 'Disponibilidad',
            'rules' => 'trim|strip_tags'
        ),
        array(
            'field' => 'imagen',
            'label' => 'Imagen',
            'rules' => 'trim|strip_tags'
        )
    );

}