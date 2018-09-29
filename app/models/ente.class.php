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
		
		public function setDocIdentidad($value){
<<<<<<< HEAD
			if($this->validateDui($value)){
=======
			if($this->validateDUI($value)){
>>>>>>> 018536ef98dfce9ba0be143781eb43ab80fa8477
				$this->docidentidad = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getDocIdentidad(){
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
						if($this->validateTelefono($value)){
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
		$page = (isset($_GET['page'])) ? $_GET['page'] : 1;

        $limite = 5;
 
        $limite_inicio = ($page - 1)* $limite;
		$sql = "SELECT IdEnte, Nombres, Apellidos, Correo, DocIdentidad, genero.NombreGenero, tipoente.TipoEnte , Telefono FROM entes INNER JOIN genero ON genero.IdGenero=entes.IdGenero INNER JOIN tipoente ON tipoente.IdTipo=entes.IdTipo  ORDER BY Nombres LIMIT $limite_inicio , $limite";
		$params = array(null);
		return Database::getRows($sql, $params);
	}

	public function countEnte()
    {
        $sql = "SELECT COUNT(*) AS Numero FROM entes";
        $params = array(null);
        return database::getRow($sql, $params);
    }

	public function getGenero(){
		$sql = "SELECT * FROM genero";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getTipo(){
		$sql = "SELECT * FROM tipoente";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
    //Buscar categoria con parametros
    public function searchEnte($value){
		$sql = "SELECT IdEnte, Nombres, Apellidos, Correo, DocIdentidad, g.NombreGenero, t.TipoEnte , Telefono FROM entes e, genero g, tipoente t WHERE e.IdGenero=g.IdGenero and e.IdTipo=t.IdTipo and (Nombres LIKE ? OR DocIdentidad LIKE ?) ORDER BY Nombres";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
    }
    //Insertar categoria
    public function createEnte(){
		$sql = "INSERT INTO entes(Nombres, Apellidos, Correo, DocIdentidad, IdGenero, IdTipo, Telefono) VALUES(?, ?, ?, ?, ?, ?, ?)";
		$params = array($this->nombre, $this->apellido, $this->correo, $this->docidentidad, $this->idgenero, $this->idtipo, $this->telefono);
		return Database::executeRow($sql, $params);
		LastCliente();
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
	public function LastCliente(){
		$sql = "SELECT idEnte FROM entes WHERE DocIdentidad = ?";
		$params = array($this->docidentidad);
		$ente = Database::getRow($sql, $params);
		if($ente){
			$this->id = $ente['idEnte'];
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