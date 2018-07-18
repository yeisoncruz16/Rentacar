<?php

class Migration_Roles extends Migration
{
    public function up()
    {
        $this->load->model('permission_model');
        $this->permission_model->insert(array(
            'name'          => 'Bonfire.Autos.View',
            'description'   => 'To view the blog menu.',
            'status'        => 'active'
        ));

        // Assign them to the admin role
        $this->load->model('role_permission_model');
        $this->role_permission_model->assign_to_role('Administrator', 'Bonfire.Autos.View');
    }

    public function down()
    {
        // TODO: Implement down() method.
    }

}