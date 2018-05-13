<?php
class Sillas extends Validator{
    private $id = null;
    private $nombre = null;
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
        
        public function setCantidad($value){
			if($this->validateNumeric($value, 1, 50)){
				$this->cantidad = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getCantidad(){
			return $this->cantidad;
		}
    
    //Metodos CRUD
    //Obtener Ocasion
    public function getSillas(){
		$sql = "SELECT IdTipoSilla, Silla FROM sillas ORDER BY Silla";
		$params = array(null);
		return Database::getRows($sql, $params);
		}
		public function searchSillas($value){
			$sql = "SELECT * FROM sillas WHERE Silla LIKE ?  ORDER BY Silla";
			$params = array("%$value%");
			return Database::getRows($sql, $params);
		}
    //Insertar Ocasion
    public function createSillas(){
		$sql = "INSERT INTO sillas(Silla) VALUES(?)";
		$params = array($this->nombre);
		return Database::executeRow($sql, $params);
    }
    //Leer Ocasion
    public function readSillas(){
		$sql = "SELECT Silla FROM sillas WHERE IdTipoSilla = ?";
		$params = array($this->id);
		$sillas = Database::getRow($sql, $params);
		if($sillas){
			$this->nombre = $sillas['Silla'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar Ocasion
    public function updateSillas(){
		$sql = "UPDATE sillas SET Silla = ? WHERE IdTipoSilla = ?";
		$params = array($this->nombre, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar Ocasion
	public function deleteSillas(){
		$sql = "DELETE FROM sillas WHERE IdTipoSilla = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>