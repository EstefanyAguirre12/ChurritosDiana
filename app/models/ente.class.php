<?php
class Ente extends Validator{
    private $id = null;
    private $nombre = null;
    private $apellido = null;
    private $correo = null;
    private $docidentidad = null;
    private $idgenero = null;
    private $idtipo = null;
    private $telefono = null;
    
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

    public function setCorreo($value){
		if($this->validateEmail($value)){
			$this->correo = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCorreo(){
		return $this->correo;
		}
		
		public function setDocidentidad($value){
			if($this->validateNumeric($value,10)){
				$this->docidentidad = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getDocIndentidad(){
			return $this->docidentidad;
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
                
                public function setIdtipo($value){
                    if($this->validateId($value)){
                        $this->idtipo = $value;
                        return true;
                    }else{
                        return false;
                    }
                }
                public function getIdtipo(){
                    return $this->idtipo;
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
		public function getEnte(){
			$sql = "SELECT IdEnte, Nombres, Apellidos, Correo, DocIdentidad, IdGenero, IdTipo, Telefono FROM entes ORDER BY Nombres";
			$params = array(null);
			return Database::getRows($sql, $params);
			}
	
    //Buscar categoria con parametros
    public function searchEnte($value){
		$sql = "SELECT * FROM entes WHERE Nombres LIKE ? OR DocIdentidad LIKE ? ORDER BY Nombres";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
    }
    //Insertar categoria
    public function createEnte(){
		$sql = "INSERT INTO entes(IdEnte, Nombres, Apellidos, , Correo, DocIdentidad, IdGenero, IdTipo, Telefono) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
		$params = array($this->id, $this->nombre, $this->apellido, $this->correo, $this->docidentidad, $this->idgenero, $this->idtipo, $this->telefono);
		return Database::executeRow($sql, $params);
    }
    //Leer categoria
    public function readEnte(){
		$sql = "SELECT Nombres, Apellidos, Correo, DocIdentidad, IdGenero, IdTipo, Telefono FROM entes WHERE IdEnte = ?";
		$params = array($this->id);
		$ente = Database::getRow($sql, $params);
		if($ente){
			$this->nombre = $ente['Nombres'];
            $this->apellido = $ente['Apellidos'];
						$this->correo = $ente['Correo'];
						$this->docidentidad = $ente['DocIdentidad'];
                        $this->idgenero = $ente['IdGenero'];
                        $this->idtipo = $ente['IdTipo'];
                        $this->telefono = $ente['Telefono'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar categoria
    public function updateEnte(){
		$sql = "UPDATE entes SET Nombres = ?, Apellidos = ?, Correo = ?, DocIdentidad = ?, IdGenero = ?, IdTipo = ?, Telefono = ? WHERE IdEnte = ?";
		$params = array($this->nombre, $this->apellido, $this->correo, $this->docidentidad, $this->idgenero, $this->idtipo, $this->telefono, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar categoria
	public function deleteEnte(){
		$sql = "DELETE FROM entes WHERE IdEnte = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>