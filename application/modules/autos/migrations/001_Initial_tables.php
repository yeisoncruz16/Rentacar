<?php

class Migration_Initial_tables extends Migration
{

    public function up()
    {
        $this->load->dbforge();

        $this->dbforge->add_field('autos_id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY');
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
    }

    public function down()
    {
        $this->load->dbforge();

        $this->dbforge->drop_table('autos');
    }

}