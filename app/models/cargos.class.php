<?php
class Cargos extends Validator{
    private $id = null;
    private $nombre = null;
    private $descripcion = null;
    
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
        
        public function setDescripcion($value){
			if($this->validateAlphanumeric($value, 1, 200)){
				$this->descripcion = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
    
    //Metodos CRUD
    //Obtener Ocasion
    public function getCargo(){
		$sql = "SELECT IdCargo, NombreCargo, Descripcion FROM cargos ORDER BY IdCargo";
		$params = array(null);
		return Database::getRows($sql, $params);
		}
		public function searchCargo($value){
			$sql = "SELECT * FROM cargos WHERE NombreCargo LIKE ?  ORDER BY IdCargo";
			$params = array("%$value%");
			return Database::getRows($sql, $params);
		}
    //Insertar Ocasion
    public function createCargo(){
		$sql = "INSERT INTO cargos(NombreCargo, Descripcion) VALUES(?, ?)";
		$params = array($this->nombre, $this->descripcion);
		return Database::executeRow($sql, $params);
    }
    //Leer Ocasion
    public function readCargo(){
		$sql = "SELECT NombreCargo, Descripcion FROM cargos WHERE IdCargo = ?";
		$params = array($this->id);
		$krgo = Database::getRow($sql, $params);
		if($krgo){
			$this->nombre = $krgo['NombreCargo'];
			$this->descripcion = $krgo['Descripcion'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar Ocasion
    public function updateCargo(){
		$sql = "UPDATE cargos SET NombreCargo = ?, Descripcion = ? WHERE IdCargo = ?";
		$params = array($this->nombre, $this->descripcion, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar Ocasion
	public function deleteCargo(){
		$sql = "DELETE FROM cargos WHERE IdCargo = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>