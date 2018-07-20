<?php

class Migration_Initial_Tables extends Migration
{
    public function up()
    {
        $this->load->dbforge();

        $this->dbforge->add_field('reservas_id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY');
        $this->dbforge->add_field('ciudad_reserva VARCHAR(255) NOT NULL');
        $this->dbforge->add_field('fecha_reserva DATE NOT NULL');
        $this->dbforge->add_field('hora_reserva TIME NOT NULL');
        $this->dbforge->add_field('ciudad_devolucion TIME NOT NULL');
        $this->dbforge->add_field('fecha_devolucion DATE NOT NULL');
        $this->dbforge->add_field('hora_devolucion TIME NOT NULL');
        $this->dbforge->add_field('observaciones TEXT NULL');
        $this->dbforge->add_field('created_on DATETIME NOT NULL');
        $this->dbforge->add_field('modified_on DATETIME NULL');
        $this->dbforge->add_field('deleted TINYINT(1) NOT NULL DEFAULT 0');
        $this->dbforge->add_key('reservas_id', TRUE);

        $this->dbforge->create_table('reservas');

        // Create the Permissions
        $this->load->model('permission_model');
        $this->permission_model->insert(array(
            'name'          => 'Bonfire.Reserva.View',
            'description'   => 'To view the blog menu.',
            'status'        => 'active'
        ));

        // Assign them to the admin role
        $this->load->model('role_permission_model');
        $this->role_permission_model->assign_to_role('Administrator', 'Bonfire.Reserva.View');
    }

    public function down()
    {
        $this->load->dbforge();

        $this->dbforge->drop_table('reservas');
    }
}