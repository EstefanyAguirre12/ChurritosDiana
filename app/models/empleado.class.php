<?php
class Empleado extends Validator{
    private $id = null;
    private $nombre = null;
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
    
    public function setApellido($value){
		if($this->validateAlphaNumeric($value)){
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
		if($this->validateAlphanumeric($value)){
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
			if($this->validateNumeric($value,10)){
				$this->dui = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getDui(){
			return $this->dui;
			}

			public function setFoto($value){
				if($this->validateAlphanumeric($value, 1, 900)){
					$this->foto = $value;
					return true;
				}else{
					return false;
				}
			}
			public function getFoto(){
				return $this->foto;
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
                        if($this->validateNumeric($value,10)){
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
			$sql = "SELECT IdEmpleado, NombreEmpleado, ApellidosEmpleado, Direccion, DUIEmpleado, FotoEmpleado, IdCargo, IdGenero, Telefono FROM empleados ORDER BY NombreEmpleado";
			$params = array(null);
			return Database::getRows($sql, $params);
			}
	
    //Buscar categoria con parametros
    public function searchEmpleado($value){
		$sql = "SELECT * FROM empleados WHERE NombreEmpleado LIKE ? OR DUIEmpleado LIKE ? ORDER BY NombreEmpleado";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
    }
    //Insertar categoria
    public function createEmpleado(){
		$sql = "INSERT INTO empleados(IdEmpleado, NombreEmpleado, ApellidosEmpleado, Direccion, DUIEmpleado, FotoEmpleado, IdCargo, IdGenero, Telefono) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$params = array($this->id, $this->nombre, $this->apellido, $this->direccion, $this->dui, $this->foto, $this->idcargo, $this->idgenero $this->telefono);
		return Database::executeRow($sql, $params);
    }
    //Leer categoria
    public function readEmpleado(){
		$sql = "SELECT NombreEmpleado, ApellidosEmpleado, Direccion, DUIEmpleado, FotoEmpleado, IdCargo, IdGenero, Telefono FROM entes WHERE IdEmpleado = ?";
		$params = array($this->id);
		$empleado = Database::getRow($sql, $params);
		if($empleado){
			$this->nombre = $empleado['NombreEmpleado'];
            $this->apellido = $empleado['ApellidosEmpleado'];
						$this->direccion = $empleado['Direccion'];
						$this->dui = $empleado['DUIEmpleado'];
                        $this->foto = $empleado['FotoEmpleado'];
                        $this->idcargo = $empleado['IdCargo'];
                        $this->idgenero = $empleado['IdGenero'];
                        $this->telefono = $empleado['Telefono'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar categoria
    public function updateEmpleado(){
		$sql = "UPDATE empleados SET NombreEmpleado = ?, ApellidosEmpleado = ?, Direccion = ?, DUIEmpleado = ?, FotoEmpleado = ?, IdCargo = ?, IdGenero = ?, Telefono = ? WHERE IdEmpleado = ?";
		$params = array($this->nombre, $this->apellido, $this->direccion, $this->dui, $this->foto, $this->idcargo, $this->idgenero, $this->telefono, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar categoria
	public function deleteEmpleado(){
		$sql = "DELETE FROM empleados WHERE IdEmpleado = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>