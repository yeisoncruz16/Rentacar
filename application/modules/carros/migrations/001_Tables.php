<?php

class Migration_Tables extends Migration
{

    public function up()
    {
        $this->load->dbforge();

        /*$this->dbforge->add_field('autos_id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY');
        $this->dbforge->add_field('placa VARCHAR(255) NOT NULL');
        $this->dbforge->add_field('nombre VARCHAR(255) NOT NULL');
        $this->dbforge->add_field('modelo VARCHAR(255) NOT NULL');
        $this->dbforge->add_field('color VARCHAR(255) NOT NULL');
        $this->dbforge->add_field('estado VARCHAR(255) NOT NULL');
        $this->dbforge->add_field('capacidad INT(10) NOT NULL');
        $this->dbforge->add_field('disponibilidad VARCHAR(255) NOT NULL');
        $this->dbforge->add_field('imagen VARCHAR(255) NOT NULL');
        $this->dbforge->add_field('created_on DATETIME NOT NULL');
        $this->dbforge->add_field('modified_on DATETIME NULL');
        $this->dbforge->add_field('deleted TINYINT(1) NOT NULL DEFAULT 0');
        $this->dbforge->add_key('autos_id', TRUE);

        $this->dbforge->create_table('autos');
        //////////////////////////////////////////////////////////////////////////



        $this->dbforge->add_field('usuarios_id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY');
        $this->dbforge->add_field('nombre VARCHAR(20) NOT NULL');
        $this->dbforge->add_field('apellidos VARCHAR(20) NOT NULL');
        $this->dbforge->add_field('email VARCHAR(20) NOT NULL');
        $this->dbforge->add_field('password VARCHAR(20) NOT NULL');
        $this->dbforge->add_field('numeroDocumento INT(10) NOT NULL');
        $this->dbforge->add_field('created_on DATETIME NOT NULL');
        $this->dbforge->add_field('modified_on DATETIME NULL');
        $this->dbforge->add_field('deleted TINYINT(1) NOT NULL DEFAULT 0');
        $this->dbforge->add_key('usuarios_id', TRUE);

        $this->dbforge->create_table('usuarios');*/
        //////////////////////////////////////////////////////////////////////////


        $this->dbforge->add_field('reserva_id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY');
        $this->dbforge->add_field('ciudadAlquiler VARCHAR(20) NOT NULL');
        $this->dbforge->add_field('fechaAlquiler DATE NOT NULL');
        $this->dbforge->add_field('horaAlquiler TIME NOT NULL');
        $this->dbforge->add_field('ciudadDevolucion VARCHAR(20) NOT NULL');
        $this->dbforge->add_field('fechaDevolucion INT(10) NOT NULL');
        $this->dbforge->add_field('horaDevolucion VARCHAR(20) NOT NULL');
        $this->dbforge->add_field('observaciones TEXT NULL');
        $this->dbforge->add_field('created_on DATETIME NOT NULL');
        $this->dbforge->add_field('modified_on DATETIME NULL');
        $this->dbforge->add_field('deleted TINYINT(1) NOT NULL DEFAULT 0');
        $this->dbforge->add_key('reserva_id', TRUE);

        $this->dbforge->create_table('reserva');

    }


    public function down()
    {
        $this->load->dbforge();

        $this->dbforge->drop_table('reserva');

    }

}