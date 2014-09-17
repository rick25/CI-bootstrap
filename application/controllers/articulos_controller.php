<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articulos_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->database();
		$this->load->model('Articulos_model','Articulos');
	}

	
	/**
     *  MUESTRA TODOS LOS ARTICULOS
     */
	public function index()
	{
		$data['articulos'] = $this->Articulos->GetAll();
		$this->load->view('include/header');
		$this->load->view('articulos/index', $data );
	    $this->load->view('include/footer');
	}

	/**
     *  MUESTRA UN REGISTRO
     */
	public function show( $id )
	{
		$datos['articulo'] = $this->Articulos->GetArticulo( $id );

		$this->load->view('include/header');
		$this->load->view('articulos/show',$datos);
		$this->load->view('include/footer');
	}

	/**
     * CREA UN ARTICULO
     */
	public function create( $id = FALSE )
	{
		switch ( $_SERVER ['REQUEST_METHOD'] ) {
			case 'GET':
				$data = array(
					'action' => 'create'
				);
				$this->load->view('include/header');
				$this->load->view('articulos/_formulario',$data);
				$this->load->view('include/footer');
				break;
			
			case 'POST':
				$datos['titulo']    = $this->input->post('titulo');
				$datos['contenido'] = $this->input->post('contenido');
				if ( $this->Articulos->Crear( $datos ) ){
					//$this->index();
					redirect('articulos_controller/index');
				}
				break;
		}
	}

	/**
     *  EDITA UN REGISTRO
     */
	public function edit( $id = FALSE )
	{
		switch ( $_SERVER ['REQUEST_METHOD'] ) {
			case 'GET':
				$data = array(
					'datos_articulo' => $this->Articulos->GetArticulo( $id ), 
					'action'         => 'edit',
					'id_registro'    => $id
				);
				$this->load->view('include/header');
				$this->load->view('articulos/_formulario',$data);
				$this->load->view('include/footer');
				break;
			
			case 'POST':
				$datos_articulo['titulo']    = $this->input->post('titulo');
				$datos_articulo['contenido'] = $this->input->post('contenido');

				$this->Articulos->update( $id, $datos_articulo );

				redirect('articulos_controller/index');

				break;
		}
	}
	
	/**
     *  ELIMINA UN REGISTRO
     */
	public function delete( $id = FALSE )
	{

	}
}

/* End of file articulos_controller.php */
/* Location: ./application/controllers/articulos_controller.php */