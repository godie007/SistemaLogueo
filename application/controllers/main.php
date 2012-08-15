<?php

class Main extends CI_Controller {

    public function index() {
        $data['main_content'] = 'panelPrincipal';
        $data['title'] = 'Godie007';
        $data['usuario'] = 'Godie007';
        $this->load->view('includes/template', $data);
       
    }

    public function registrar() {
        $data = $this->input->post();
        $this->load->model('usuario_model');
        $this->usuario_model->registrarUsuario($data['nombre'], $data['correo'], $data['passworda']);
    }

    // Función login. Verifica el usuario/contraseña
  function login()
  {
    // si se ha enviado el formulario
    if ($this->input->post('usuario')){
      // recogemos las variables 'usuario' y 'contrasena'
      $usuario = $this->input->post('usuario');
      $contrasena = sha1($this->input->post('contrasena'));
      // cargamos el modelo para verificar el usuario/contraseña
      $this->load->model('autenticacion_Model');
      // si el usuario y contraseña son correctos
      if ($this->Admin_Model->verificaUsuario($usuario, $contrasena)){
        // creamos un array con las variables de sesión 'usuario_id' y 'login_ok'
        $datasession = array(
          'usuario_id'  => '$usuario',
          'login_ok' => TRUE
        );
        // creamos la sesión con dichas variables
        $this->session->set_userdata($datasession);
        // y redirigimos al controlador principal
        redirect('entrar', 'refresh');
      } else {
        // si el usuario y contraseña son incorrectos
        $this->session->set_flashdata('error', 'El usuario o contraseña son incorrectos.');
      }
    } else {
      // cargamos el formulario de login
      $this->load->view('http://localhost/index.php?/main');
    }
  }

  // Función logout. Elimina las variables de sesión y redirige al controlador principal
  function logout()
  {
//    // creamos un array con las variables de sesión en blanco
//    $datasession = array('usuario_id' => '', 'logged_in' => '');
//    // y eliminamos la sesión
//    $this->session->unset_userdata($datasession);
//    // redirigimos al controlador principal
//    redirect('http://localhost/index.php?/main', 'refresh');
       $this->load->view('SignOut');
  }

}