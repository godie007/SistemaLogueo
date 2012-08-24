<?php

class Main extends CI_Controller {

      public function registrar() {
        $data = $this->input->post();
        $this->load->model('usuario_model');
        $this->usuario_model->registrarUsuario($data['nombre'], $data['correo'], $data['passworda']);
        redirect('login');
    }
    public function ingresar() {
        $data = $this->input->post();
        $this->load->model('usuario_model');
        $this->operar_model->ingresarDato($data['nombre'], $data['correo'], $data['passworda']);
        redirect('home');
    }
}