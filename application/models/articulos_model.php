<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articulos_model extends CI_Model {
	public function __construct()
    {
 
        parent::__construct();
 
    }
    //OBTIENE TODOS LOS REGISTROS
	public function GetAll()
	{
		$query = $this->db->get('articulos');
		return  $query->result_array();
	}
	//INSERTA UN REGISTRO EN LA BD
	public function Crear( $data )
	{
		if ( $this->db->insert( 'articulos', $data ) ) {
			return $this->db->insert_id();
		}
	}
	//OBTIENE DATOS DE UN ARTICULO
	public function GetArticulo($id)
	{
		$this->db->where( 'id', $id );
		return $this->db->get('articulos')->result_array();
	}
	//ACTUALIZA UN ARTICULO
	public function update( $id, $data )
	{
		$this->db->where( 'id', $id );
		$this->db->update( 'articulos', $data );
	}
}

/* End of file articulos_model.php */
/* Location: ./application/models/articulos_model.php */