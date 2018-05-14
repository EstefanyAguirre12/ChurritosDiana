<?php
class tipomesa extends Validator{
    private $id = null;
    private $nombre = null;
    
    //Métodos para sobrecarga de propiedades
    public function setId($value){
        if($this->validateId($value)){
            $this->id = $roducto
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
    public function getTipomesa(){
		$sql = "SELECT IdTipoMesa, TipoMesa FROM tipomesa ORDER BY TipoMesa";
		$params = array(null);
		return Database::getRows($sql, $params);
		}
		public function searchTipomesa($value){
			$sql = "SELECT * FROM tipomesa WHERE TipoMesa LIKE ?  ORDER BY TipoMesa";
			$params = array("%$value%");
			return Database::getRows($sql, $params);
		}
    //Insertar Ocasion
    public function createTipomesa(){
		$sql = "INSERT INTO tipomesa(TipoMesa) VALUES(?)";
		$params = array($this->nombre);
		return Database::executeRow($sql, $params);
    }
    //Leer Ocasion
    public function readTipomesa(){
		$sql = "SELECT TipoMesa FROM tipomesa WHERE IdTipoMesa = ?";
		$params = array($this->id);
		$tipomesa = Database::getRow($sql, $params);
		if($tipomesa){
			$this->nombre = $tipomesa['TipoMesa'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar Ocasion
    public function updateTipomesa(){
		$sql = "UPDATE tipomesa SET TipoMesa = ? WHERE IdTipoMesa = ?";
		$params = array($this->nombre, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar Ocasion
	public function deleteTipomesa(){
		$sql = "DELETE FROM tipomesa WHERE IdTipoMesa = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>