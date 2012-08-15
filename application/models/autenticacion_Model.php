<?php

class Autenticacion_Model extends Model {

  function Autenticacion_Model()
  {
    parent::Model();
    
  }

  function verificaUsuario($usuario, $contrasena){
    // creamos la select
    // SELECT `usuario`, `contrasena`
    // WHERE `usuario` = $usuario AND
    // `contrasena` = $contrasena
    // FROM `ci_usuarios`
    // LIMIT 1
    $this->db->select('id, username');
    $this->db->where('username', $usuario);
    $this->db->where('password', $contrasena);
    $this->db->limit(1);
    $query = $this->db->get('users');
    // si el resultado de la query es positivo
    if ($query->num_rows() > 0){
      // devolvemos TRUE
      return TRUE;
    // si el resultado de la query no es positivo
    } else {
      // devolvemos FALSE
      return FALSE;
    }
  }

}