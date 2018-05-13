<?php
class Tiposilla extends Validator{
    private $id = null;
    private $nombre = null;
    
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
    
    //Metodos CRUD
    //Obtener Ocasion
    public function getTiposilla(){
		$sql = "SELECT IdTipoSilla, TipoSilla FROM tiposilla ORDER BY TipoSilla";
		$params = array(null);
		return Database::getRows($sql, $params);
		}
		public function searchTiposilla($value){
			$sql = "SELECT * FROM tiposilla WHERE TipoSilla LIKE ?  ORDER BY TipoSilla";
			$params = array("%$value%");
			return Database::getRows($sql, $params);
		}
    //Insertar Ocasion
    public function createTiposilla(){
		$sql = "INSERT INTO tiposilla(TipoSilla) VALUES(?)";
		$params = array($this->nombre);
		return Database::executeRow($sql, $params);
    }
    //Leer Ocasion
    public function readTiposilla(){
		$sql = "SELECT TipoSilla FROM tiposilla WHERE IdTipoSilla = ?";
		$params = array($this->id);
		$tiposilla = Database::getRow($sql, $params);
		if($tiposilla){
			$this->nombre = $tiposilla['TipoSilla'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar Ocasion
    public function updateTipoSilla(){
		$sql = "UPDATE tiposilla SET TipoSilla = ? WHERE IdTipoSilla = ?";
		$params = array($this->nombre, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar Ocasion
	public function deleteTiposilla(){
		$sql = "DELETE FROM tiposilla WHERE IdTipoSilla = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>