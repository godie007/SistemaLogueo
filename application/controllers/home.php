<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); 


class Home extends CI_Controller {

  private $data = array();

  function __construct()
  {
    parent::__construct();
    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $this->data['username'] = $session_data['username'];     
      
    }
    else
    {      
      redirect('login', 'refresh');
    }
  }

  function index()
  {
      $this->load->view('home_view', $this->data);
  }
  
  function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('home', 'refresh');
  }


}

