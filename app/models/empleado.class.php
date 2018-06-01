<?php
class Empleado extends Validator{
    private $id = null;
	private $nombre = null;
	private $usuario = null;
    private $apellido = null;
    private $direccion = null;
    private $dui = null;
    private $foto = null;
    private $idcargo = null;
    private $telefono = null;
    private $idgenero = null;
    
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
			if($this->validateAlphanumeric($value, 1, 200)){
				$this->nombre = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setUsuario($value){
			if($this->validateAlphanumeric($value, 1, 200)){
				$this->usuario = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getUsuario(){
			return $this->usuario;
		}
    
    public function setApellido($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->apellido = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getApellido(){
		return $this->apellido;
    }

    public function setDireccion($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->direccion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getDireccion(){
		return $this->direccion;
		}
		
		public function setDui($value){
			if($this->validateInt($value)){
				$this->dui = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getDui(){
			return $this->dui;
			}

		public function setImagen($file){
			if($this->validateImage($file, $this->foto, "../../../web/img/users/", 500, 500)){
				$this->foto = $this->getImageName();
				return true;
			}else{
				return false;
			}
		}
		public function getImagen(){
			return $this->foto;
		}
		public function unsetImagen(){
			if(unlink("../../web/img/users/".$this->foto)){
				$this->foto = null;
				return true;
			}else{
				return false;
			}			
		}
                public function setIdcargo($value){
                    if($this->validateId($value)){
                        $this->idcargo = $value;
                        return true;
                    }else{
                        return false;
                    }
                }
                public function getIdCargo(){
                    return $this->idcargo;
                    }

                    public function setIdgenero($value){
                        if($this->validateId($value)){
                            $this->idgenero = $value;
                            return true;
                        }else{
                            return false;
                        }
                    }
                    public function getIdgenero(){
                        return $this->idgenero;
                        }

                    public function setTelefono($value){
						if($this->validateInt($value)){
                            $this->telefono = $value;
                            return true;
                        }else{
                            return false;
                        }
                    }
                    public function getTelefono(){
                        return $this->telefono;
                        }
    
    //Metodos CRUD para cotegoria
		//Obtener categoria
	public function getEmpleado(){
		$sql = "SELECT IdEmpleado, NombreEmpleado, ApellidosEmpleado, DireccionEmpleado, DUIEmpleado, FotoEmpleado, g.NombreGenero, c.NombreCargo, e.TelefonoEmpleado FROM empleados e, cargos c, genero g WHERE c.IdCargo=e.IdCargo and g.IdGenero=e.IdGenero ORDER BY NombreEmpleado";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getGenero(){
		$sql = "SELECT * FROM genero";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getCargo(){
		$sql = "SELECT * FROM cargos";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
    //Buscar categoria con parametros
    public function searchEmpleado($value){
		$sql = "SELECT IdEmpleado, NombreEmpleado, ApellidosEmpleado, DireccionEmpleado, DUIEmpleado, FotoEmpleado, g.NombreGenero, c.NombreCargo, e.TelefonoEmpleado FROM empleados e, cargos c, genero g WHERE c.IdCargo=e.IdCargo and g.IdGenero=e.IdGenero and (NombreEmpleado LIKE ? OR DUIEmpleado LIKE ?) ORDER BY NombreEmpleado";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
    }
    //Insertar categoria
    public function createEmpleado(){
		$sql = "INSERT INTO empleados(IdEmpleado, NombreEmpleado, ApellidosEmpleado, DireccionEmpleado, DUIEmpleado, FotoEmpleado, IdCargo, IdGenero, TelefonoEmpleado) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$params = array($this->id, $this->nombre, $this->apellido, $this->direccion, $this->dui, $this->foto, $this->idcargo, $this->idgenero, $this->telefono);
		return Database::executeRow($sql, $params);
    }
    //Leer categoria
    public function readEmpleado(){
		$sql = "SELECT NombreEmpleado, ApellidosEmpleado, DireccionEmpleado, DUIEmpleado, FotoEmpleado, IdCargo, IdGenero FROM empleados WHERE IdEmpleado = ?";
		$params = array($this->id);
		$empleado = Database::getRow($sql, $params);
		if($empleado){
			$this->nombre = $empleado['NombreEmpleado'];
            $this->apellido = $empleado['ApellidosEmpleado'];
			$this->direccion = $empleado['DireccionEmpleado'];
			$this->dui = $empleado['DUIEmpleado'];
			$this->foto = $empleado['FotoEmpleado'];
			$this->idcargo = $empleado['IdCargo'];
			$this->idgenero = $empleado['IdGenero'];
			$this->telefono = $empleado['TelefonoEmpleado'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar categoria
    public function updateEmpleado(){
		$sql = "UPDATE empleados SET NombreEmpleado = ?, ApellidosEmpleado = ?, DireccionEmpleado = ?, DUIEmpleado = ?, FotoEmpleado = ?, IdCargo = ?, IdGenero = ?, TelefonoEmpleado = ? WHERE IdEmpleado = ?";
		$params = array($this->nombre, $this->apellido, $this->direccion, $this->dui, $this->foto, $this->idcargo, $this->idgenero, $this->telefono, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar categoria
	public function deleteEmpleado(){
		$sql = "DELETE FROM empleados WHERE IdEmpleado = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}

	//CUENTA
    public function readCuenta(){
		$sql = " SELECT u.NombreUsuario, NombreEmpleado, ApellidosEmpleado, DireccionEmpleado, DUIEmpleado, FotoEmpleado, IdGenero, TelefonoEmpleado FROM empleados e, usuarios u WHERE e.IdEmpleado = u.IdEmpleado and u.IdUsuario=?";
		$params = array($this->id);
		$empleado = Database::getRow($sql, $params);
		if($empleado){
			$this->nombre = $empleado['NombreEmpleado'];
            $this->apellido = $empleado['ApellidosEmpleado'];
			$this->direccion = $empleado['DireccionEmpleado'];
			$this->dui = $empleado['DUIEmpleado'];
			$this->foto = $empleado['FotoEmpleado'];
			$this->usuario = $empleado['NombreUsuario'];
			$this->idgenero = $empleado['IdGenero'];
			$this->telefono = $empleado['TelefonoEmpleado'];
			return true;
		}else{
			return null;
		}
	}
	public function updateCuenta(){
		$sql = "UPDATE empleados, usuarios SET NombreUsuario=?, NombreEmpleado = ?, ApellidosEmpleado = ?, DireccionEmpleado = ?, DUIEmpleado = ?, FotoEmpleado = ?, IdCargo = ?, IdGenero = ?, TelefonoEmpleado = ? WHERE IdEmpleado = ?";
		$params = array($this->nombre,$this->nombre, $this->apellido, $this->direccion, $this->dui, $this->foto, $this->idcargo, $this->idgenero, $this->telefono, $this->id);
		return Database::executeRow($sql, $params);
    }
}
?>
