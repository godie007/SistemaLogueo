<?php

class Usuario_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function registrarUsuario($resultado) {
        $data = array(
            'resultado' => $resultado,
        );
        $this->db->insert('users', $data);
    }
//    function ValidarUsuario($username,$password){            //    Consulta Mysql para buscar en la tabla Usuario aquellos usuarios que coincidan con el mail y password ingresados en pantalla de login
//        $query = $this->db->where('Usuario',$username);    //    La consulta se efectúa mediante Active Record. Una manera alternativa, y en lenguaje más sencillo, de generar las consultas Sql.
//        $query = $this->db->where('Password',$password);
//        $query = $this->db->get('Usuarios');
//        return $query->row();     //    Devolvemos al controlador la fila que coincide con la búsqueda. (FALSE en caso que no existir coincidencias)
//    }

}

