<?php 

class Rol
{

	// ***** 1ra parte modelo de negocio *****//


	// Atributos: Encapsulamiento ( - private, # protected )
	private $rolCode;
	private $rolName;

	// Constructor/Constructores
	public function __construct(){}

	// Metodos set() y get()
	# $rolCode: set()
	public function setRolCode($rolCode)
	{
		$this -> rolCode = $rolCode;
	}

	# $rolCode: get()
	public function getRolCode()
	{
		return $this -> rolCode;
	}

	// ***** 2da parte. Persistencia BD ( CRUD ) ***** //

	# Registrar
	# Consultar 
	# Obtener Por ID
	# Actualizar
	# Eliminar

}

 ?>