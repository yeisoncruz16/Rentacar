<?php

 class Content extends Admin_Controller
 {

     public function __construct()
     {
         $this->load->model('autos_model');
         parent::__construct();
         Template::set('toolbar_title', 'aa');
         Template::set_block('sub_nav', 'content/sub_nav');
     }

     public function index()
    {
        $autos= $this->autos_model->where('deleted', 0)->find_all();
        Template::render();
        Template::set('autos', $autos);
    }
     public function create()
     {

         if($this->input->post('submit'))
         {
             $var = $this->input->post('imagen');
             $var['name'];
             $data = array (
                 'placa' => $this->input->post('placa'),
                 'nombre'  => $this->input->post('nombre'),
                 'modelo'  => $this->input->post('modelo'),
                 'color' => $this->input->post('clr'),
                 'estado'  => $this->input->post('estado'),
                 'capacidad'  => $this->input->post('capacidad'),
                 'disponibilidad' => $this->input->post('disponibilidad'),
                 'imagen'  =>$var['name']
             );

             if($this->autos_model->insert($data))
             {
                 Template::set_message('You post was successfully saved.', 'success');
                 redirect(SITE_AREA .'/content/autos');
             }

         }
         $this->cargar_archivo();
         Template::set('toolbar_title', 'bb');
         Template::set_view('content/autos_form');
         Template::render();
     }

     public function cargar_archivo()
     {
         function cargar_archivo() {

             $mi_imagen = 'imagen';
             $config['upload_path'] = "uploads/";
             $config['file_name'] = "imagen";
             $config['allowed_types'] = "gif|jpg|jpeg|png";
             $config['max_size'] = "50000";
             $config['max_width'] = "2000";
             $config['max_height'] = "2000";

             $this->load->library('upload', $config);

             if (!$this->upload->do_upload($mi_imagen)) {
                 //*** ocurrio un error
                 $data['uploadError'] = $this->upload->display_errors();
                 echo $this->upload->display_errors();
                 return;
             }

             $data['uploadSuccess'] = $this->upload->data();
         }
     }

     private function foto_redimencionar ($ruta, $nombre, $dir) {
         $config['image_library'] = 'gd2';
         $config['source_image'] = $ruta;
         $config['new_image'] = $dir . '/' . $nombre;
         $config['maintain_ratio'] = TRUE;
         $config['height'] = 300;

         $this->load->library('image_lib', $config);

         if (!$this->image_lib->resize()) {
             echo $this->image_lib->display_errors();
         }
     }

     public function edit_post($id=null)
     {
         if ($this->input->post('submit'))
         {
             $var = $this->input->post('imagen');
             $var['name'];
             $data = array (
                 'placa' => $this->input->post('placa'),
                 'nombre'  => $this->input->post('nombre'),
                 'modelo'  => $this->input->post('modelo'),
                 'color' => $this->input->post('clr'),
                 'estado'  => $this->input->post('estado'),
                 'capacidad'  => $this->input->post('capacidad'),
                 'disponibilidad' => $this->input->post('disponibilidad'),
                 'imagen'  =>$var['name']
             );

             if ($this->autos_model->update($id, $data))
             {
                 Template::set_message('You post was successfully saved.', 'success');
                 redirect(SITE_AREA .'/content/autos_form');
             }
         }

         Template::set('post', $this->post_model->find($id));

         Template::set('toolbar_title', 'Edit Post');
         Template::set_view('content/autos_form');
         Template::render();
     }

 }