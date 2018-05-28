<?php
class Usuario extends Validator {
    private $id = null;
    private $nombre = null;
    private $idempleado = null;
    private $clave = null;
    
    //Métodos para sobrecarga de propiedades
    public function setId($value){
        if($this->validateId($value)){
            $this->id = $value;
            return true;  
        }
        else{
            return false;
        }
    }
    public function getId(){
			return $this->id;
    }
    
    public function setNombre($value){
			if($this->validateAlphanumeric($value, 1, 50)){
				$this->nombre = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getNombre(){
			return $this->nombre;
		}
    
    public function setIdempleado($value){
		if($this->validateId($value)){
			$this->idempleado = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIdempleado(){
		return $this->idempleado;
    }

    public function setClave($value){
		if($this->validatePassword($value)){
			$this->clave = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getClave(){
		return $this->clave;
    }
    
    //Metodos CRUD para cotegoria
    // Verificar contraseña
    public function checkClaveUsuario()
    {
        $sql = "SELECT ClaveUsuario FROM usuarios WHERE IdUsuario = ?";
        $params = array($this->id);
        $data = Database::getRow($sql, $params);
        if(password_verify($this->clave, $data['ClaveUsuario']))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    //Verificar usuarios
    public function checkUsuario()
    {
        $sql = "SELECT IdUsuario FROM usuarios WHERE NombreUsuario = ? ";
        $params = array($this->nombre);
        $data = Database::getRow($sql, $params);
        if($data)
        {
            $this->id = $data['IdUsuario'];
            return true;
        }
        else
        {
            return false;
        }
    }
	//Obtener categoria
	public function getUsuario(){
		$sql = "SELECT  IdUsuario,NombreUsuario,IdEmpleado,ClaveUsuario FROM usuarios ORDER BY IdUsuario";
		$params = array(null);
		return Database::getRows($sql, $params);
        }
        public function getEmpleado(){
            $sql = "SELECT  * FROM empleados";
            $params = array(null);
            return Database::getRows($sql, $params);
            }
	
    //Buscar categoria con parametros
    public function searchUsuario($value){
		$sql = "SELECT * FROM usuarios WHERE NombreUsuario LIKE ? OR IdEmpleado LIKE ? ORDER BY NombreUsuario";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
    }
    //Insertar categoria
    public function createUsuario(){
		$sql = "INSERT INTO usuarios(IdUsuario, NombreUsuario, IdEmpleado, ClaveUsuario) VALUES(?, ?, ?, ?)";
		$params = array($this->id, $this->nombre, $this->idempleado, $this->clave);
		return Database::executeRow($sql, $params);
    }
    //Leer categoria
    public function readUsuario(){
		$sql = "SELECT NombreUsuario, IdEmpleado, ClaveUsuario FROM usuarios WHERE IdUsuario = ?";
		$params = array($this->id);
		$usuario = Database::getRow($sql, $params);
		if($usuario){
			$this->nombre = $usuario['NombreUsuario'];
            $this->idempleado = $usuario['IdEmpleado'];
            $this->clave = $usuario['ClaveUsuario'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar categoria
    public function updateUsuario(){
		$sql = "UPDATE usuarios SET NombreUsuario = ?, IdEmpleado = ?, ClaveUsuario = ? WHERE IdUsuario = ?";
		$params = array($this->nombre, $this->idempleado, $this->clave, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar categoria
	public function deleteUsuario(){
		$sql = "DELETE FROM usuarios WHERE IdUsuario = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>