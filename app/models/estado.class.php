<?php
class Estado extends Validator{
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
    public function getEstado(){
		$sql = "SELECT IdEstado, Estado FROM estado ORDER BY Estado";
		$params = array(null);
		return Database::getRows($sql, $params);
		}
		public function searchEstado($value){
			$sql = "SELECT * FROM estado WHERE Estado LIKE ?  ORDER BY Estado";
			$params = array("%$value%");
			return Database::getRows($sql, $params);
		}
    //Insertar Ocasion
    public function createEstado(){
		$sql = "INSERT INTO estado(Estado) VALUES(?)";
		$params = array($this->nombre);
		return Database::executeRow($sql, $params);
    }
    //Leer Ocasion
    public function readEstado(){
		$sql = "SELECT Estado FROM estado WHERE IdEstado = ?";
		$params = array($this->id);
		$estado = Database::getRow($sql, $params);
		if($estado){
			$this->nombre = $estado['Estado'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar Ocasion
    public function updateEstado(){
		$sql = "UPDATE estado SET Estado = ? WHERE IdEstado = ?";
		$params = array($this->nombre, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar Ocasion
	public function deleteEstado(){
		$sql = "DELETE FROM estado WHERE IdEstado = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>