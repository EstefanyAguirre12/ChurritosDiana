<?php
class Inmueble extends Validator{
    private $id = null;
    private $nombre = null;
    private $idmaterial = null;
    private $idestado = null;
    private $idcategoria = null;
    private $color = null;
    private $cantidad = null;
    
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
    
    public function setIdmaterial($value){
		if($this->validateId($value)){
			$this->idmaterial = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIdmaterial(){
		return $this->idmaterial;
    }

    public function setIdestado($value){
		if($this->validateId($value)){
			$this->idestado = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIdestado(){
		return $this->idestado;
		}
		
		public function setIdcategoria($value){
			if($this->validateId($value)){
				$this->idcategoria = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getIdcategoria(){
			return $this->idcategoria;
			}

			public function setColor($value){
				if($this->validateAlphanumeric($value, 1, 200)){
					$this->color = $value;
					return true;
				}else{
					return false;
				}
			}
			public function getColor(){
				return $this->color;
                }
                
                public function setCantidad($value){
                    if($this->validateAlphanumeric($value, 1, 200)){
                        $this->cantidad = $value;
                        return true;
                    }else{
                        return false;
                    }
                }
                public function getCantidad(){
                    return $this->cantidad;
                    }
    
    //Metodos CRUD para cotegoria
		//Obtener categoria
		public function getInmuebles(){
			$sql = "SELECT IdInmueble, NombreInmueble, IdEstado, IdMaterial, IdCategoria, Color, Cantidad FROM inmuebles ORDER BY IdInmueble";
			$params = array(null);
			return Database::getRows($sql, $params);
			}
	
    //Buscar categoria con parametros
    public function searchInmueble($value){
		$sql = "SELECT * FROM inmuebles WHERE NombreInmueble LIKE ? OR IdEstado LIKE ? ORDER BY NombreInmueble";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
    }
    //Insertar categoria
    public function createInmueble(){
		$sql = "INSERT INTO inmueble(IdInmueble, NombreInmueble, IdEstado, IdMaterial, IdCategoria, Color, Cantidad) VALUES(?, ?, ?, ?, ?, ?, ?)";
		$params = array($this->id, $this->nombre, $this->idestado, $this->idmaterial, $this->idcategoria, $this->color, $this->cantidad);
		return Database::executeRow($sql, $params);
    }
    //Leer categoria
    public function readInmueble(){
		$sql = "SELECT NombreInmueble, IdEstado, IdMaterial, IdCategoria, Color, Cantidad FROM inmuebles WHERE IdInmueble = ?";
		$params = array($this->id);
		$inmueble = Database::getRow($sql, $params);
		if($inmueble){
			$this->nombre = $inmueble['NombreInmueble'];
            $this->idestado = $inmueble['IdEstado'];
						$this->idmaterial = $inmueble['IdMaterial'];
						$this->idcategoria = $inmueble['IdCategoria'];
                        $this->color = $inmueble['Color'];
                        $this->color = $inmueble['Cantidad'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar categoria
    public function updateSala(){
		$sql = "UPDATE inmuebles SET NombreInmueble = ?, IdEstado = ?, IdMaterial = ?, IdCategoria = ?, Color = ?, Cantidad = ? WHERE IdInmueble = ?";
		$params = array($this->nombre, $this->idestado, $this->idmaterial, $this->idcategoria, $this->color, $this->cantidad, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar categoria
	public function deleteInmueble(){
		$sql = "DELETE FROM inmuebles WHERE IdInmueble = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>